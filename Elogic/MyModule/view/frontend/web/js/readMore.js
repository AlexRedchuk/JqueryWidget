define([
    'jquery',
    'jquery/ui'
], function ($) {
    'use strict';
    function main (config) {
        const expandButton = $('#expand_button');
        const readMoreWrapper = $('#readMore_wrapper');
        const readMoreText = $('#readMore_text');
        function px(number) {
            return number + 'px';
        }

        readMoreWrapper.css({
            width: px(config.width),
            minHeight: px(config.expandHeight)
        })
        readMoreText.css({maxHeight: px(config.expandHeight)});
        function readMore() {
            readMoreText.animate({maxHeight: '999px'}, 400);
            readMoreWrapper.animate({maxHeight: '999px'}, 400);
            // readMoreText.css({maxHeight: 'max-content'})
            // readMoreWrapper.css({maxHeight: 'max-content'})
            expandButton.click(readLess);
            expandButton.text("Read less")
        }

        function readLess() {
            readMoreWrapper.animate({maxHeight: px(config.expandHeight + 40)}, 400);
            readMoreText.animate({maxHeight: px(config.expandHeight)}, 400);
            // readMoreText.css({maxHeight: 'unset'})
            // readMoreText.css({maxHeight: px(config.expandHeight)});
            expandButton.click(readMore);
            expandButton.text("Read more")
        }
        expandButton.click(readMore)
    }

    return main;

});
