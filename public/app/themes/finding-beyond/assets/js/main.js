/*
 * Theme JS entry point.
 */



// Load the Bootstrap Javascript

require('tether')
// require('bootstrap')

var $ = require('jquery')
    , setupGallery= require('./setup/photo-gallery')
    , setupAnalytics = require('./setup/google-analytics');

setupGallery()

require('slick-carousel')

$('#slick-hero').slick();

$('.mobile-menu-trigger').click (function(){
  $('body').toggleClass('mobile-menu-active')
})

$('.primary-nav .menu-item')
    .click(function() {
        $(this).toggleClass('active')
    })
    .hover(function() {
        $('.primary-nav .sub-menu').addClass('animate');
    });

