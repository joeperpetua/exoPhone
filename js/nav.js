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
    if (session === 1) {
      console.log('hola');
      window.open("profile.php?user=" + user, "_self");  
    }else{
      $(".modal-login").toggleClass("is-active");
    }
    
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

  
  var tab = 1;

  $('#section a').click(function() {
    var value = $(this).data('btn');
    
      if (value === 'prev' && tab > 1) {
        tab--;
        $('a[data-btn="next"]').removeClass('is-hidden');
        $('input[id="send"]').addClass('is-hidden');
      }
  
      if (value === 'next' && tab < 10) {
        tab++;
        $('a[data-btn="prev"]').removeClass('is-hidden');
        $('input[id="send"]').addClass('is-hidden');
      }

      if(tab === 1){
        $('a[data-btn="prev"]').addClass('is-hidden');
      }

      if(tab === 10){
        $('a[data-btn="next"]').addClass('is-hidden');
        $('input[id="send"]').removeClass('is-hidden');
      }


      $('#body div').removeClass('is-active');
      $('div[data-content="' + tab + '"]').addClass('is-active');

      $('#tabs li').removeClass('is-active');
      $('li[data-tab="' + tab + '"]').addClass('is-active');
      
  });


  $('.search-box input[type="text"]').on("keyup input", function(){
    /* Get input value on change */
    var inputVal = $(this).val();
    var resultDropdown = $(this).siblings(".result");
    if(inputVal.length){
        $.get("php_include/searchbar/backend_search.php", {term: inputVal}).done(function(data){
            // Display the returned data in browser
            resultDropdown.html(data);
        });
    } else{
        resultDropdown.empty();
    }
  });

  // Set search input value on click of result item
  $(document).on("click", ".result p", function(){
      $(this).parents(".search-box").find('input[type="text"]').val($(this).text());
      $(this).parent(".result").empty();
  });
  
    function openProfile() {
      
    }
  

});