document.addEventListener('DOMContentLoaded', () => {

  // Get all "navbar-burger" elements
  const $navbarBurgers = Array.prototype.slice.call(document.querySelectorAll('.navbar-burger'), 0);

  // Check if there are any navbar burgers
  if ($navbarBurgers.length > 0) {

    // Add a click event on each of them
    $navbarBurgers.forEach( el => {
      el.addEventListener('click', () => {

        // Get the target from the "data-target" attribute
        const target = el.dataset.target;
        const $target = document.getElementById(target);

        // Toggle the "is-active" class on both the "navbar-burger" and the "navbar-menu"
        el.classList.toggle('is-active');
        $target.classList.toggle('is-active');

      });
    });
  }

  $('#scroll').localScroll({
    target:'body',
    duration: 1000,
    lazy: true
 });

 

  
  $(".payment").click(function() {
      $(".modal-payment").toggleClass("is-active");
  });

  $(".payment-bg").click(function() {
    $(".modal-payment").toggleClass("is-active");
  });

  $(".shipping").click(function() {
    $(".modal-shipping").toggleClass("is-active");
  });

  $(".shipping-bg").click(function() {
    $(".modal-shipping").toggleClass("is-active");
  });

  $(".login-btn").click(function() {
    $(".modal-login").toggleClass("is-active");
  });

  $(".login-bg").click(function() {
    $(".modal-login").toggleClass("is-active");
  });


  $(".delete").click(function() {
    $(".modal-delete").toggleClass("is-active");
  });

  $(".delete-bg").click(function() {
    $(".modal-delete").toggleClass("is-active");
  });

  

  $('#tabs li').click(function() {
    var tab = $(this).data('tab');

    $('#tabs li').removeClass('is-active');
    $(this).addClass('is-active');

    $('#body div').removeClass('is-active');
    $('div[data-content="' + tab + '"]').addClass('is-active');
  });

});