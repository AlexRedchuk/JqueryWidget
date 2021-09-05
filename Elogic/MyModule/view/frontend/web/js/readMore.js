define([
    'jquery',
    'jquery/ui'
], function ($) {
    'use strict';
    function main (config) {
        const expandButton = $('#expand_button');
        const expandText = $('#expand_text');
        expandButton.click(function () {
            expandText.slideToggle("slow");
            expandButton.text(function (i, text) {
                return text === "Read more" ? "Read less" : "Read more";
            })
        });

    }

    return main;

});
