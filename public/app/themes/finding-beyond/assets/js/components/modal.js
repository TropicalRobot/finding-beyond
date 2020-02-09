/*
 * Modal
 *
 */

// Constructor
var Modal = function(modalTarget) {

    this.modalTarget = modalTarget;
    this.$modal = $(modalTarget);
    this.animateFadeSpeed = 300;

    this.init();
}

Modal.prototype.openModal = function() {
    this.$modal
        .addClass('show')
        .fadeIn(this.animateFadeSpeed);
    $('body').addClass('modal-open');
}

Modal.prototype.closeModal = function() {
    this.$modal
        .removeClass('show')
        .fadeOut(this.animateFadeSpeed);
    $('body').removeClass('modal-open');
}

// Inititalise component
Modal.prototype.init = function() {

    $('[data-target="' + this.modalTarget + '"]').click(function() {
        this.openModal();
    }.bind(this))

    this.$modal.find('.modal-close').click(function(){
        this.closeModal();
    }.bind(this))

    this.$modal.click(function(e) {
        this.closeModal();
    }.bind(this))

    this.$modal.find('.modal__content').click(function(e){
        e.stopPropagation();
    }.bind(this))
}

// Exports instantiated object
module.exports = Modal
