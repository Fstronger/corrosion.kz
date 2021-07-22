
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
$("#modal-application-mobile").click(function() {
  $("#modal-application-toggle").toggleClass("hide");
});
$("#closs-modal-application").click(function() {
  $("#modal-application-toggle").removeClass("hide");
});

// $("#modal-thanks").click(function() {
//   $("#modal-thanks-toggle").toggleClass("hide");
// });
$("#closs-modal-thanks").click(function() {
  $("#modal-application-toggle").removeClass("hide");
  $("#modal-thanks-toggle").removeClass("hide");
});


document.addEventListener('DOMContentLoaded', () => {

    var $form = $('#modal-application-toggle .contacts__form');

    $form.on('submit', function(e) {
        e.preventDefault();

        var $name = $('#name');
        var $phone = $('#phone');
        var $organization = $('#organization');
        var $submit = $(this).find('.btn[type="submit"]');

        $submit.attr('disabled', true);

        $.ajax({
            url: '/ru/feedback',
            type: 'POST',
            async: true,
            dataType: 'json',
            data: {
                _token: $('meta[name="_token"]').attr('content'),
                name: $name.val(),
                phone: $phone.val(),
                organization: $organization.val()
            },
            success: function(data) {
                if (data.success) {
                    $form[0].reset();
                    $("#modal-application-toggle").removeClass('hide');
                    $("#modal-thanks-toggle").addClass('hide');
                }

                $('#contacts-error').html('').attr('hidden');
            },
            error: function(data) {
                var errors = '';

                if (data.responseJSON.errors.name) {
                    errors += data.responseJSON.errors.name[0] + '<br>';
                }
                if (data.responseJSON.errors.phone) {
                    errors += data.responseJSON.errors.phone[0] + '<br>';
                }
                if (data.responseJSON.errors.organization) {
                    errors += data.responseJSON.errors.organization[0];
                }

                $('#contacts-error').html(errors).removeAttr('hidden');
            },
            complete: function(data) {
                $submit.removeAttr('disabled');
            }
        });

    });

    var $form_contacts = $('#contacts__block .contacts__form');

    $form_contacts.on('submit', function(e) {
        e.preventDefault();

        var $name = $('#name');
        var $phone = $('#phone');
        var $organization = $('#organization');
        var $submit = $(this).find('.btn[type="submit"]');

        $submit.attr('disabled', true);

        $.ajax({
            url: '/ru/feedback',
            type: 'POST',
            async: true,
            dataType: 'json',
            data: {
                _token: $('meta[name="_token"]').attr('content'),
                name: $name.val(),
                phone: $phone.val(),
                organization: $organization.val()
            },
            success: function(data) {
                if (data.success) {
                    $form[0].reset();
                    $("#modal-application-toggle").removeClass('hide');
                    $("#modal-thanks-toggle").addClass('hide');
                }

                $('#contacts-error').html('').attr('hidden');
            },
            error: function(data) {
                var errors = '';

                if (data.responseJSON.errors.name) {
                    errors += data.responseJSON.errors.name[0] + '<br>';
                }
                if (data.responseJSON.errors.phone) {
                    errors += data.responseJSON.errors.phone[0] + '<br>';
                }
                if (data.responseJSON.errors.organization) {
                    errors += data.responseJSON.errors.organization[0];
                }

                $('#contacts-error').html(errors).removeAttr('hidden');
            },
            complete: function(data) {
                $submit.removeAttr('disabled');
            }
        });

    });
});
