/*
 * Main Navigation functionality
 */


var $ = require('jquery');

var setup = function (apiKey) {

    $('.primary-nav-toggle').click (function(){
        $('body').toggleClass('mobile-menu-active');
    })

    $('.toggle-cat-menu').click (function(){
        $('body').toggleClass('cat-nav-show');
    })

    $('.primary-nav .menu-item')
        .click(function() {
            $(this).toggleClass('active');
        })
        .hover(function() {
            $('.primary-nav .sub-menu').addClass('animate');
        });
}

module.exports = setup
