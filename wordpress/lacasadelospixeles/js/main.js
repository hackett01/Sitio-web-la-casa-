WebFontConfig = {
  google: { families: [ 'Open+Sans:400,300,700:latin' ] }
};
(function() {
  var wf = document.createElement('script');
  wf.src = ('https:' == document.location.protocol ? 'https' : 'http') +
    '://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js';
  wf.type = 'text/javascript';
  wf.async = 'true';
  var s = document.getElementsByTagName('script')[0];
  s.parentNode.insertBefore(wf, s);
})();
(function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='https://www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-60639905-1','auto');ga('send','pageview');
$(document).ready(function(){
  //Improve SEO & Performance appends
  $('head').append('<link rel="stylesheet" type="text/css" href="//:lacasadelospixeles.com/css/animate.css" media="all">');
  $('head').append('<link rel="stylesheet" type="text/css" href="//:lacasadelospixeles.com/css/normalize.css" media="all">');
  $('#mail-me').append('<a href="mailto:hola@lacasadelospixeles.com;">hola@lacasadelospixeles.com</a>');

  $('#main-screen').cycle({'timeout':0,'fx':'scrollLeft','prev': '#prev', 'next': '#next', });
  if($(document).width()> 768){
      new WOW().init();
  }
  $('.item-match').matchHeight();
  //
  
  $('#recaptchaLabel').click(function(){
    var target = $(this).attr('for');
    $('#recaptcha').attr('checked','checked');
    $('.recaptcha').removeClass('error');
    $('#recaptcha-status').val('true');
  });
  //
  $('nav ul .has-child').hover(function(){
    $(this).find('.sub-menu').addClass('in');
    $(this).find('.sub-menu').removeClass('out');
  },function(){
    var li = $(this);
    li.find('.sub-menu').removeClass('in');
    setTimeout(function(){
      li.find('.sub-menu').addClass('out');
    },400);
  });
  //Set-Background
  $('*[background]').each(function(){
      var img = $(this).attr('background');
      var size = $(this).attr('background-size');
      if(!size){size = 'cover';}
      $(this).css({'background-image':'url('+img+')','background-size':size});
    });
  $('*[data-background]').each(function(){
      var img = $(this).attr('data-background');
      var size = $(this).attr('background-size');
      if(!size){size = 'cover';}
      $(this).css({'background-image':'url('+img+')','background-size':size});
    });
  // -- 
  $('a[href="#"]').click(function(e){
    e.preventDefault();
  });
  $('a.scroll-to').on('click',function (e) {
    e.preventDefault();
    var target = this.hash,
    $target = $(target);
    $('html, body').stop().animate({
      'scrollTop': $target.offset().top
    }, 500, 'swing', function () {
      if($('body').hasClass('ych-menu-in')){
        $('body').removeClass('ych-menu-in');
        $('.ych-menu-content').removeClass('in');
        $('header').removeClass('in');
        $('#offcanvasmenu').removeClass('in');
      }
    });
  });
  // --
  $('*[data-toggle="ych-menu"]').each(function(){
    var ychmenu = $(this).attr('data-target');
    $(ychmenu).addClass('ych-menu');
  });
  $('*[data-toggle="ych-menu"]').click(function(event){
      var ychmenu = $(this).attr('data-target');
    if($('body').hasClass('ych-menu-in')){
      $('body').removeClass('ych-menu-in');
      $('.ych-menu-content').removeClass('in');
      $('header').removeClass('in');
      $(ychmenu).removeClass('in');
    }else{
      $('body').addClass('ych-menu-in');
      $('.ych-menu-content').addClass('in');
      $('header').addClass('in');
      $(ychmenu).addClass('in');
    }
  });

  $('form.on button[type="submit"]').click(function(event){
    event.preventDefault();

    var error = 0;

    $('form.on .form-control').each(function(){
      var id = $(this).attr('id');
      var element = $(this);
      var value = $(this).val();

      if(id == 'correo'){
        if(!isMail(value)){
          $(this).addClass('error');
          error ++;
        }
      }else if(element.hasClass('number')){
        if(!isNumber(value)){
          $(this).addClass('error');
          error ++;
        }
      }else if(!validate(value)){
        $(this).addClass('error');
        error ++;
      }
    });

    if(error > 0){
      if($(!validate('#recaptcha-status'))){
        $('#success-msg div').html('¿Acaso eres un robot?');
        $('#g-recaptcha').addClass('error');
      }else{
        $('#success-msg div').html('Llena correctamente los campos marcados');
      }
      
      $('#success-msg').addClass('error');
      $('#success-msg').addClass('shows');
      return false;
    }
    dataForm = $('form.on').serialize();
    $.ajax( {url:"./send/send.php",data:dataForm} )
      .done(function(response) {

        response = $.parseJSON(response);

        if(response.response =='success'){
          $('.form-control').removeClass('error');
          $('#success-msg').removeClass('error');
          $('#success-msg div').html('¡Tu mensaje ha sido enviado!');
          $('#success-msg').addClass('shows');
          flag = false;
          setTimeout(function(){
            $('#success-msg').removeClass('shows');
          },3000);
          $('form.on .form-control').each(function(){
            $(this).val('');
          });
          grecaptcha.reset();
          $('#recaptcha-status').val('');
          $('#recaptcha').removeAttr('checked');
        }

      })
      .fail(function() {
        $('#success-msg div').html('¡Ups! Esto no deberia pasar. Intentalo una vez más');
        $('#success-msg').addClass('wrong');
        $('#success-msg').addClass('shows');
      });
    });
    });

$('#applyform button[type="submit"]').click(function(event){
    event.preventDefault();

    var error = 0;

    $('#applyform input').each(function(){
      var value = $(this).val();

      if($(this).attr('name') == 'email'){
        if(!isMail(value)){
          $(this).addClass('error');
          error ++;
        }
      }else if(!validate(value)){
        $(this).addClass('error');
        error ++;
      }
    });
    if(error > 0){
      if($(!validate('#recaptcha-status'))){
        $('#success-msg div').html('¿Acaso eres un robot?');
        $('#g-recaptcha').addClass('error');
      }else{
        $('#success-msg div').html('Llena correctamente los campos marcados');
      }
      $('#success-msg').addClass('error');
      $('#success-msg').addClass('shows');
      return false;
    }

     var formData = new FormData();
     formData.append('email', document.getElementsByName('email')[0].value);
     formData.append('vacant',document.getElementsByName('vacant')[0].value);
     formData.append('name', document.getElementsByName('name')[0].value); 
     formData.append('site1',document.getElementsByName('site1')[0].value);
     formData.append('site2', document.getElementsByName('site2')[0].value);
     formData.append('site3', document.getElementsByName('site3')[0].value);
     formData.append('website',document.getElementsByName('website')[0].value);
     formData.append('linkedin', document.getElementsByName('linkedin')[0].value);
     formData.append('behance', document.getElementsByName('behance')[0].value);
     formData.append('others', document.getElementsByName('others')[0].value);
     var file = document.getElementById('upload-cv').files[0];
     formData.append('upload-cv', file);

    $.ajax( {type: 'POST', url:"./sendmail.php",data:formData, contentType: false, processData: false} )
      .done(function(response) {
        response = $.parseJSON(response);
        if(response.response =='success'){ //the mail was send
          $('input').removeClass('error');
          $('#success-msg').removeClass('error');
          $('#success-msg div').html('¡Tu mensaje ha sido enviado!');
          $('#success-msg').addClass('shows');
          flag = false;
          setTimeout(function(){
            $('#success-msg').removeClass('shows');
          },4000);
          $('#applyform input').each(function(){
            $(this).val('');
          });
          $('.upload-value').empty();
          grecaptcha.reset();
          $('#recaptcha-status').val('');
          $('#recaptcha').removeAttr('checked');
        }
        else if(response.response =='wrong format'){ // the Cv was wrong format
          $('#success-msg div').html('Solo se adminten .PDF .DOC o DOCX');
          $('#success-msg').addClass('shows');
          flag = false;
          setTimeout(function(){
            $('#success-msg').removeClass('shows');
          },4000);
          $('.upload-value').empty();
        }
        else if(response.response =='wrong size'){ //The Cv weight > 2MB
          $('#success-msg div').html('El Cv no puede pesar más de 2MB');
          $('#success-msg').addClass('shows');
          flag = false;
          setTimeout(function(){
            $('#success-msg').removeClass('shows');
          },4000);
          $('.upload-value').empty();
        }
        else if(response.response =='problems copying'){ // Cant upload the file to the server
          $('#success-msg div').html('Ocurrió un problema en el servidor. Por favor reinténtalo más tarde');
          $('#success-msg').addClass('shows');
          flag = false;
          setTimeout(function(){
            $('#success-msg').removeClass('shows');
          },4000);
          $('.upload-value').empty();
        }
        else { // Server error
          $('#success-msg div').html('Ocurrió un problema en el servidor');
          $('#success-msg').addClass('shows');
          flag = false;
          setTimeout(function(){
            $('#success-msg').removeClass('shows');
          },4000);
          $('#applyform input').each(function(){
            $(this).val('');
          });
          $('.upload-value').empty();
          grecaptcha.reset();
          $('#recaptcha-status').val('');
          $('#recaptcha').removeAttr('checked');
        }
      })
      .fail(function() {
        $('#success-msg div').html('¡Ups! Esto no deberia pasar. Inténtalo una vez más');
        $('#success-msg').addClass('wrong');
        $('#success-msg').addClass('shows');
      });
     });

function buttonfx(){
      var view = $(window),button  = $('.go-up'),position = 20;
      var bottom = view.scrollTop() + view.height();
      var documentHeight = $(document).height();
      var mid = documentHeight/2;
      if(bottom >= mid){
        button.addClass('visible');
      }else{
        button.removeClass('visible');
      }
    }
    function showButton() {
      buttonfx();
      $(document).on('scroll', function() {
        buttonfx();
      });
    }
    showButton();
$('.go-up').on('click', function(){
    $('html, body').stop().animate({
        scrollTop: 0
    }, 600, 'linear');
    return false;
});

    //rotate expand-collapse icon
$('.read-more-btn').click(function(){
  $(this).children('img').toggleClass('icon-expand');
});
$('#upload-cv').on('change',function(){
  var fileName = $(this).val().replace("C:\\fakepath\\", "");
  $('.upload-value').html(fileName);
});

$('.apply').click(function(){

  $('.apply-form-content').toggleClass('active-form');
   setTimeout(function(){
  $('.apply-form').toggleClass('showed-form');    
  }, 400);
});
$('.close-form').click(function(){
  $('.apply-form').toggleClass('showed-form');
  setTimeout(function(){
  $('.apply-form-content').toggleClass('active-form');    
  }, 400);
});


//validate mail input
function isMail(_email)
{

  var emailReg = /^[a-z][a-z-_0-9\.]+@[a-z-_=>0-9\.]+\.[a-z]{2,3}$/i

  return emailReg.test(_email);
}
function isNumber(_number)
{

  var numReg = /^\s*\d+\s*$/

  return numReg.test(_number);
}
//validate inputs
function validate(_value)
{
  var check = /^([A-Za-z,\.\-\'\sñÑáéíóú0-9]+ ?)*$/
  _size = _value.lenght;
  _empty = '';

  for(i=0;i<_size;i++)
  {
    _empty = _empty + ' ';
  }
  if(_value != _empty)
  {
    return check.test(_value);
  }
  else
  {
   return false;
  }
}

function apply(vac){
  document.getElementById('vacant').value = vac;
}
