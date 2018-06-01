/*
 * Theme JS entry point.
 */



var setupAnalytics = require('./setup/google-analytics');

require('./setup/modals')();
require('./setup/navigation')();
require('./setup/photo-gallery')();

setupAnalytics('UA-84388780-1');

