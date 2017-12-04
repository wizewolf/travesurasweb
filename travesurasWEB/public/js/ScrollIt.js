/*(function(e){"use strict";
    var t="ScrollIt",n="1.0.3";
    var r={upKey:38,downKey:40,easing:"linear",scrollTime:600,activeClass:"active",onPageChange:null,topOffset:0};
    e.scrollIt=function(t){var n=e.extend(r,t),i=0,s=e("[data-scroll-index]:last").attr("data-scroll-index");
    var o=function(t){if(t<0||t>s)return;
        var r=e("[data-scroll-index="+t+"]").offset().top+n.topOffset+1;
        e("html,body").animate({scrollTop:r,easing:n.easing},n.scrollTime)};
    var u=function(t){
        var n=e(t.target).closest("[data-scroll-nav]").attr("data-scroll-nav")||e(t.target).closest("[data-scroll-goto]").attr("data-scroll-goto");
        o(parseInt(n))};
        var a=function(t){var r=t.which;if(e("html,body").is(":animated")&&(r==n.upKey||r==n.downKey)){
            return false
        }
        if(r==n.upKey&&i>0){
            o(parseInt(i)-1);
            return false
        }else if(r==n.downKey&&i<s){o(parseInt(i)+1);
            return false
        }
        return true
    };
    var f=function(t){
        if(n.onPageChange&&t&&i!=t)n.onPageChange(t);
        i=t;e("[data-scroll-nav]").removeClass(n.activeClass);
        e("[data-scroll-nav="+t+"]").addClass(n.activeClass)};
        var l=function(){var t=e(window).scrollTop();
            var r=e("[data-scroll-index]").filter(function(r,i){
                return t>=e(i).offset().top+n.topOffset&&t<e(i).offset().top+n.topOffset+e(i).outerHeight()});
            var i=r.first().attr("data-scroll-index");
            f(i)};
            e(window).on("scroll",l).scroll();
            e(window).on("keydown",a);
            e("body").on("click","[data-scroll-nav], [data-scroll-goto]",function(e){e.preventDefault();
                u(e)}
                )
        }
    })
(jQuery)*/
/**
 * ScrollIt
 * ScrollIt.js(scroll•it•dot•js) makes it easy to make long, vertically scrolling pages.
 *
 * Latest version: https://github.com/cmpolis/scrollIt.js
 *
 * License <https://github.com/cmpolis/scrollIt.js/blob/master/LICENSE.txt>
 */
(function($) {
    'use strict';

    var pluginName = 'ScrollIt',
        pluginVersion = '1.0.3';

    /*
     * OPTIONS
     */
    var defaults = {
        upKey: 38,
        downKey: 40,
        easing: 'linear',
        scrollTime: 600,
        activeClass: 'active',
        onPageChange: null,
        topOffset : 0
    };

    $.scrollIt = function(options) {

        /*
         * DECLARATIONS
         */
        var settings = $.extend(defaults, options),
            active = 0,
            lastIndex = $('[data-scroll-index]:last').attr('data-scroll-index');

        /*
         * METHODS
         */

        /**
         * navigate
         *
         * sets up navigation animation
         */
        var navigate = function(ndx) {
            if(ndx < 0 || ndx > lastIndex) return;

            var targetTop = $('[data-scroll-index=' + ndx + ']').offset().top + settings.topOffset + 1;
            $('html,body').animate({
                scrollTop: targetTop,
                easing: settings.easing
            }, settings.scrollTime);
        };

        /**
         * doScroll
         *
         * runs navigation() when criteria are met
         */
        var doScroll = function (e) {
            var target = $(e.target).closest("[data-scroll-nav]").attr('data-scroll-nav') ||
            $(e.target).closest("[data-scroll-goto]").attr('data-scroll-goto');
            navigate(parseInt(target));
        };

        /**
         * keyNavigation
         *
         * sets up keyboard navigation behavior
         */
        var keyNavigation = function (e) {
            var key = e.which;
            if($('html,body').is(':animated') && (key == settings.upKey || key == settings.downKey)) {
                return false;
            }
            if(key == settings.upKey && active > 0) {
                navigate(parseInt(active) - 1);
                return false;
            } else if(key == settings.downKey && active < lastIndex) {
                navigate(parseInt(active) + 1);
                return false;
            }
            return true;
        };

        /**
         * updateActive
         *
         * sets the currently active item
         */
        var updateActive = function(ndx) {
            if(settings.onPageChange && ndx && (active != ndx)) settings.onPageChange(ndx);

            active = ndx;
            $('[data-scroll-nav]').removeClass(settings.activeClass);
            $('[data-scroll-nav=' + ndx + ']').addClass(settings.activeClass);
        };

        /**
         * watchActive
         *
         * watches currently active item and updates accordingly
         */
        var watchActive = function() {
            var winTop = $(window).scrollTop();

            var visible = $('[data-scroll-index]').filter(function(ndx, div) {
                return winTop >= $(div).offset().top + settings.topOffset &&
                winTop < $(div).offset().top + (settings.topOffset) + $(div).outerHeight()
            });
            var newActive = visible.first().attr('data-scroll-index');
            updateActive(newActive);
        };

        /*
         * runs methods
         */
        $(window).on('scroll',watchActive).scroll();

        $(window).on('keydown', keyNavigation);

        $('body').on('click','[data-scroll-nav], [data-scroll-goto]', function(e){
            e.preventDefault();
            doScroll(e);
        });

    };
}(jQuery));
