/*
 * Theme JS entry point.
 */



// Load the Bootstrap Javascript

require('tether')
// require('bootstrap')

var $ = require('jquery')
    , setupGallery= require('./setup/photo-gallery')

setupGallery()

require('slick-carousel')

$('#slick-hero').slick();

$('.mobile-menu-trigger').click (function(){
  $('body').toggleClass('mobile-menu-active')
})

