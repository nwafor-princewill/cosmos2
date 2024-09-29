const bar = document.getElementById('bar');
const close = document.getElementById('close');
const nav = document.getElementById('navbar');

if (bar) {
    bar.addEventListener('click', () => {
        nav.classList.add('active');
    })
}

if (close) {
    close.addEventListener('click', () => {
        nav.classList.remove('active');
    })
}

const slides = document.querySelectorAll('.slide');
const btns = document.querySelectorAll('.btn');
let currentSlide = 0;

// Javascript for image slider manual navigation
const manualNav = function(manual){
  slides.forEach((slide) => {
    slide.classList.remove('active');
  });
  btns.forEach((btn) => {
    btn.classList.remove('active');
  });

  slides[manual].classList.add('active');
  btns[manual].classList.add('active');
}

btns.forEach((btn, i) => {
  btn.addEventListener("click", () => {
    manualNav(i);
    currentSlide = i;
  });
});

// Javascript for image slider autoplay navigation
const repeat = function(activeClass){
  let active = document.getElementsByClassName('active');
  let i = 1;

  const repeater = () => {
    setTimeout(function(){
      [...active].forEach((activeSlide) => {
        activeSlide.classList.remove('active');
      });

      slides[i].classList.add('active');
      btns[i].classList.add('active');
      i++;

      if(slides.length == i){
        i = 0;
      }
      if(i >= slides.length){
        return;
      }
      repeater();
    }, 4000);
  }
  repeater();
}
repeat();


document.getElementById('newsletterForm').addEventListener('submit', function(e) {
  e.preventDefault();  // Prevent form submission from reloading the page
  
  var email = this.querySelector('input[name="email"]').value;
  var currentPage = this.querySelector('input[name="current_page"]').value;

  fetch('/cosmos2/consultation_project/includes/newsletter.php', {
      method: 'POST',
      headers: {
          'Content-Type': 'application/x-www-form-urlencoded',
          'X-Requested-With': 'XMLHttpRequest'
      },
      body: 'email=' + encodeURIComponent(email) + '&current_page=' + encodeURIComponent(currentPage)
  })
  .then(response => response.json())
  .then(data => {
      // Remove any existing message first
      let existingMessageBox = document.querySelector('.newsletter-alert');
      if (existingMessageBox) {
          existingMessageBox.remove();
      }

      // Create and display a new message below the form
      const messageBox = document.createElement('div');
      messageBox.className = data.success ? 'newsletter-alert newsletter-success' : 'newsletter-alert newsletter-error';
      messageBox.textContent = data.message;

      // Append the message box after the form
      document.getElementById('newsletterForm').insertAdjacentElement('afterend', messageBox);

      // Reset form on success
      if (data.success) {
          this.reset();
      }
  })
  .catch((error) => {
      console.error('Error:', error);
      alert('An error occurred. Please try again.');  // Fallback only on serious errors
  });
});

