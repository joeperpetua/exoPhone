$('#tabs li').click(function() {
    var tab = $(this).data('tab');

    $('#tabs li').removeClass('is-active');
    $(this).addClass('is-active');
    
    $('#body div').removeClass('is-active');
    $('div[data-content="' + tab + '"]').addClass('is-active');
  });
