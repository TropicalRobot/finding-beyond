/*
 * Initialise Modals
 */


var Modal = require('../components/modal');

module.exports = function () {

    // Initialise all modals by data attribute
    $('[data-toggle="modal"]').each(function() {
        var $trigger = $(this);
        new Modal($trigger.data('target'));
    })
}
