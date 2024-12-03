(() => {
  'use strict';

  document.querySelector('#navbarToggler').addEventListener('click', () => {
    document.querySelector('#navbarMenu').classList.toggle('show')
    document.querySelector('body').classList.toggle('navbar-open')
  })


  
  function checkPageYOffset() {
    var body = document.querySelector('body');

    if (window.pageYOffset > 1) {
      body.classList.add('scrolling-up');
    } else {
        body.classList.remove('scrolling-up');
    }
  }

  checkPageYOffset();

  window.onscroll = function () {
    checkPageYOffset();
  };


  // Enable Tooltips
  var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
  var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
    return new bootstrap.Tooltip(tooltipTriggerEl)
  })

})();