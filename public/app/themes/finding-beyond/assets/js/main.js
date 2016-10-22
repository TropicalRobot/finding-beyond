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

// $('#social-bar-toggle').click(function() {
//     $('body').toggleClass('social-bar-open')
//     $('.body-mask').fadeToggle(200)
// })

