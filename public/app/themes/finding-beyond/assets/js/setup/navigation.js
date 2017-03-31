/*
 * Main Navigation functionality
 */


var $ = require('jquery');

var setup = function (apiKey) {

    $('.mobile-menu-trigger').click (function(){
        $('body').toggleClass('mobile-menu-active');
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
