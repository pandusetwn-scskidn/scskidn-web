$(document).ready( function(e) {
  $('a[data-toggle="tab"]').on('shown.bs.tab', function (event) {
    // console.log('tab shown...');
  });

  var hash = document.location.hash;
  if (hash) {
    $('.nav-tabs a[href="'+hash+'"]').tab('show');
  }

  var company_philoshopy_tab = $('#company-philosophy-tab');
  var company_profile_tab = $('#company-profile-tab');
  if (company_philoshopy_tab && company_profile_tab) {

    $('a[href="./about-us.php#company-philosophy"]').on('click', function () {
      $('.nav-tabs a[href="#company-philosophy"]').tab('show');
    });

    $('a[href="./about-us.php#company-profile"]').on('click', function () {
      $('.nav-tabs a[href="#company-profile"]').tab('show');
    });
  }

  $("#contact-form").on("submit", function() {
    if (grecaptcha.getResponse() == '') {
      alert("Please verify that you are not a robot");
      return false;
    }

    $("#contactbtn").attr('disabled','disabled');
    $("#contactbtn").button('loading');
    setTimeout(function() {
        $("#contactbtn").button('reset');
    }, 8000);
  });

  $('.surel').on('click', function(){
    var email = $(this).attr("data-surel").replace(/AT/,'@').replace(/DOT/,'.');
    window.open('mailto:'+email);
  });

});
