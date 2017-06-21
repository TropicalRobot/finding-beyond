/*
 * Theme JS entry point.
 */



// Load the Bootstrap Javascript

require('tether');

var $ = require('jquery')
    , Masonry = require('masonry-layout')
    , setupGallery= require('./setup/photo-gallery')
    , setupAnalytics = require('./setup/google-analytics')
    , setupNavigation = require('./setup/navigation');

var masonryGrid = '.masonry-grid'
    , $masonryGrid = $(masonryGrid);

if ($masonryGrid.length) {
    var msnry = new Masonry( masonryGrid, {
        itemSelector: '.grid-item'
    });
    $masonryGrid.css('opacity', 1)
}

setupGallery();
setupNavigation();
setupAnalytics('UA-84388780-1');

