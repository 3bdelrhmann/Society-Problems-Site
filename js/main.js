/*global $*/

$(document).ready(function () {
    'use strict';

    $('select').material_select();

    // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
    $('.modal-trigger').leanModal({
        dismissible: true
    });

    $('.dropdownToggle').click(function () {
        $('.dropdown').slideToggle(300);
    });

    $('.mobile-toggle').click(function () {
        $('.navbar').slideToggle();
        $('.dropdown').slideUp();
    });

    $('.dropdown-content').parent().css('position', 'relative');
    $('.select-dropdown').parent().css('position', 'relative');

    $('.dropdown-button').click(function () {
        $('.dropdown-content[id=' + $(this).attr('data-activates') + ']').css('top', $(this).parent().css('height'));
    });

});