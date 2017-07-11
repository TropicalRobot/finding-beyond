/*
 * Theme JS entry point.
 */



// Load the Bootstrap Javascript

require('tether');

var $ = require('jquery')
    , setupGallery= require('./setup/photo-gallery')
    , setupAnalytics = require('./setup/google-analytics')
    , setupNavigation = require('./setup/navigation');

setupNavigation();
setupGallery();

setupAnalytics('UA-84388780-1');

