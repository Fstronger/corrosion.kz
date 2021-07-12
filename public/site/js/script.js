
$("#toggleMenu").click(function() {
  $("#fixedMenu").toggleClass("header-mobile__menu-active");
  $("#showMenu").toggleClass("header-mobile__menu-active animate__animated animate__fadeIn");
});
$("#showMenu").click(function() {
  $("#fixedMenu").removeClass("header-mobile__menu-active");
  $("#showMenu").removeClass("header-mobile__menu-active");
});


var i=0;
var image = document.getElementById("image");
var imgs = ['/site/img/icons/menu.png','/site/img/icons/close.png'];
function imgsrc() {
    i++;
    i %= imgs.length;
    image.src = imgs[i];
}


$('.banner__slider').slick({
  slidesToShow: 1,
  arrows: true,
  dots: true,
  variableWidth:true,
  prevArrow: `<div class="arrow-ellipse banner__slider-arrow banner__slider-arrow-left"><img src="/site/img/icons/arrow-left.png" alt=""></div>`,
  nextArrow: `<div class="arrow-ellipse banner__slider-arrow banner__slider-arrow-right"><img src="/site/img/icons/arrow-right.png" alt=""></div>`,
});

$('.staff__slider').slick({
  slidesToShow: 2,
  arrows: true,
  dots: true,
  centerMode:true,
  variableWidth:true,
  prevArrow: `<div style="display: none;"></div>`,
  nextArrow: `<div style="display: none;"></div>`,
});

$('.projects__slider').slick({
  slidesToShow: 1,
  arrows: true,
  dots: true,
  centerMode:true,
  variableWidth:true,
  prevArrow: `<div class="arrow-ellipse-2 projects__slider-arrow projects__slider-arrow-left"><img src="/site/img/icons/arrow-left-2.png" alt=""></div>`,
  nextArrow: `<div class="arrow-ellipse-2 projects__slider-arrow projects__slider-arrow-right"><img src="/site/img/icons/arrow-right-2.png" alt=""></div>`,
});


$('.reviews__slider').slick({
  slidesToShow: 1,
  arrows: true,
  dots: true,
  centerMode:true,
  variableWidth:true,
  prevArrow: `<div class="arrow-ellipse-3 reviews__slider-arrow reviews__slider-arrow-left"><img src="/site/img/icons/arrow-3.png" alt=""></div>`,
  nextArrow: `<div class="arrow-ellipse-3 reviews__slider-arrow reviews__slider-arrow-right"><img src="/site/img/icons/arrow-3.png" alt=""></div>`,
});


$("#active-img-1").click(function() {
  $("#active-img-id-1").toggleClass("hide");
});
$("#active-img-2").click(function() {
  $("#active-img-id-2").toggleClass("hide");
});
$("#active-img-3").click(function() {
  $("#active-img-id-3").toggleClass("hide");
});
$("#active-img-4").click(function() {
  $("#active-img-id-4").toggleClass("hide");
});
$("#active-img-5").click(function() {
  $("#active-img-id-5").toggleClass("hide");
});
$("#active-img-6").click(function() {
  $("#active-img-id-6").toggleClass("hide");
});

$("#active-img-id-1").click(function() {
  $("#active-img-id-1").removeClass("hide");
});
$("#active-img-id-2").click(function() {
  $("#active-img-id-2").removeClass("hide");
});
$("#active-img-id-3").click(function() {
  $("#active-img-id-3").removeClass("hide");
});
$("#active-img-id-4").click(function() {
  $("#active-img-id-4").removeClass("hide");
});
$("#active-img-id-5").click(function() {
  $("#active-img-id-5").removeClass("hide");
});
$("#active-img-id-6").click(function() {
  $("#active-img-id-6").removeClass("hide");
});

$("#modal-application").click(function() {
  $("#modal-application-toggle").toggleClass("hide");
});
$("#closs-modal-application").click(function() {
  $("#modal-application-toggle").removeClass("hide");
});

// $("#modal-thanks").click(function() {
//   $("#modal-thanks-toggle").toggleClass("hide");
// });
// $("#closs-modal-thanks").click(function() {
//   $("#modal-application-toggle").removeClass("hide");
//   $("#modal-thanks-toggle").removeClass("hide");
// });


document.addEventListener('DOMContentLoaded', () => {

    const $form = $('#modal-application-toggle');
    const $success = $('#modal-thanks-toggle');

    $form.on('submit', function(e) {
        e.preventDefault();

        const $name = $(this.name);
        const $phone = $(this.phone);
        const $organization = $(this.organization);
        const $submit = $(this).find('.btn[type="submit"]');

        removeFieldError($name);
        removeFieldError($phone);
        removeFieldError($organization);

        // $submit.addClass('is-loading');

        $.ajax({
            url: '/' + window.site.locale + '/feedback',
            type: 'POST',
            async: true,
            dataType: 'json',
            data: {
                _token: $('meta[name="_token"]').attr('content'),
                name: $name.val(),
                email: $email.val(),
                message: $message.val()
            },
            success: function(data) {
                if (data.success) {
                    removeFieldError($name);
                    removeFieldError($email);
                    removeFieldError($message);

                    $form[0].reset();
                    $form.hide().parent().append(`<p>${data.success}</p>`);
                } else {
                    renderFieldError($name);
                    renderFieldError($email);
                    renderFieldError($message);
                }
            },
            error: function(data) {
                if (data.responseJSON.errors.name) {
                    renderFieldError($name, data.responseJSON.errors.name[0]);
                }
                if (data.responseJSON.errors.email) {
                    renderFieldError($email, data.responseJSON.errors.email[0]);
                }
                if (data.responseJSON.errors.message) {
                    renderFieldError($message, data.responseJSON.errors.message[0]);
                }
            },
            complete: function(data) {
                $submit.removeClass('is-loading');
            }
        });

    });

    function renderFieldError($el, error = '') {
        $el.closest('.form-field').addClass('has-error').find('.form-field__error').html(error);
    }

    function removeFieldError($el) {
        $el.closest('.form-field').removeClass('has-error').find('.form-field__error').html('');
    }

});
