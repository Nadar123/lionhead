jQuery(window).on('load',function($){
  initSlider();
  handleContactForm();
});

function initSlider(){
  jQuery('.slick-wrapper-gallery').slick({
    arrows: false,
    slidesToShow: 1,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 4000,
    infinite: true,
    speed: 500,
    fade: true,
    cssEase: 'linear',
    responsive: [
      {
        breakpoint: 768,
        settings: {
          arrows: false,
          centerMode: true,
          centerPadding: '40px',
          slidesToShow: 1
        }
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        }
      }
    ]
  });
}
/*menu*/
jQuery("#toggle").click(function() {
  jQuery(this).toggleClass("on");
  jQuery("#menu").slideToggle();
});

/*contact form*/
function handleFromSubmit( form, data ){
  
  data.append('action','handle_ajax_form');
  data.append('page_id', site_settings.page_id );

  disableForm(true);
  jQuery.ajax({
    url  : site_settings.ajaxurl,
    data : data,
    type : 'POST',
    processData: false,
    contentType: false,
    success : function( response ){
      enableForm();

      cleanFormMessages(form);

      if( response.msg ){
        jQuery.each(response.msg, function(i,msg_item){
          form.find('.msg-area').append('<span>' + msg_item + '</span>');
        });
      }
      if( response.redirect ){
        window.location.assign( response.redirect );
      }
    }
  });
}

function cleanFormMessages(form){
  form.find('.msg-area').html('');
}

function disableForm( loading = false ){
  console.log(loading);
  const $button =  jQuery("form[name='form-submit-lh'] .button");
  console.log($button);
  $button.attr('disabled' ,'disabled');
  if( loading ){
    $button.addClass('is-loading');
  }
}

function enableForm(){
  const $button =  jQuery("form[name='form-submit-lh'] .button");
  $button.removeClass('is-loading');
  $button.removeAttr('disabled');
}

function handleContactForm () {
  jQuery("form[name='form-submit-lh']:not(.form-valid)").validate({
    onkeyup: function(input){
      let enableCount = 0;
      let checkInputs = ['first_name', 'last_name', 'email'];
      jQuery("form[name='form-submit-lh'] input").each(function(){
        const $currentInput = jQuery(this);
        if( checkInputs.includes( $currentInput.attr('name') ) && $currentInput.val().length > 0 ){
          enableCount++;
        }
      });
      if( enableCount == checkInputs.length ){
        enableForm();
      } else{
        disableForm();
      }
    },
    rules: {
      first_name: "required",
      last_name: "required",
      email: {required: true, email: true},
    },
    messages: {
      first_name: "Please enter a first name",
      last_name: "Please enter your last name",
      email: "Please enter a valid email address",
    },

    submitHandler: function(form) {
      let $form = jQuery(form);
      let data = new FormData($form[0]);
      handleFromSubmit($form,data);
    }
  });
};
