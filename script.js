const bar = document.getElementById('bar');
const close = document.getElementById('close');
const nav = document.getElementById('navbar');

if (bar) {
    bar.addEventListener('click', () => {
        nav.classList.add('navbar-active');
    })
}

if (close) {
    close.addEventListener('click', () => {
        nav.classList.remove('navbar-active');
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
const repeat = function() {
  let i = currentSlide;
  const repeater = () => {
    setTimeout(() => {
      slides.forEach((slide) => {
        slide.classList.remove('active');
      });
      btns.forEach((btn) => {
        btn.classList.remove('active');
      });

      slides[i].classList.add('active');
      btns[i].classList.add('active');
      i++;

      if (i >= slides.length) {
        i = 0;
      }

      repeater();
    }, 6000);
  }
  repeater();
}

// Initialize the autoplay slide
repeat();

document.getElementById('newsletterForm').addEventListener('submit', function(e) {
  e.preventDefault();  // Prevent form submission from reloading the page
  
  var email = this.querySelector('input[name="email"]').value;
  var currentPage = this.querySelector('input[name="current_page"]').value;

  fetch('/consultation_project/includes/newsletter.php', {
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

// Get the query parameters from the URL
const params = new URLSearchParams(window.location.search);

// Check if the 'status' parameter is set to 'success'
if (params.get('status') === 'success') {
  const messageDiv = document.getElementById('form-message');
  messageDiv.innerHTML = '<div class="success-message">Thank you, we have received your message! We\'ll be in touch soon to help you with your inquiry.</div>';
  messageDiv.style.color = '#54ba42';  // Optional: Style the message
}