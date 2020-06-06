<!--
  -   Reveal JS Slide Creator
  -   Copyright (C) 2020  ebalo <webdev.ebalo@gmail.com>
  -
  -   This program is free software: you can redistribute it and/or modify
  -   it under the terms of the GNU General Public License as published by
  -   the Free Software Foundation, either version 3 of the License, or
  -   (at your option) any later version.
  -
  -   This program is distributed in the hope that it will be useful,
  -   but WITHOUT ANY WARRANTY; without even the implied warranty of
  -   MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
  -   GNU General Public License for more details.
  -
  -  You should have received a copy of the GNU General Public License
  -   along with this program.  If not, see <https://www.gnu.org/licenses/>.
  -->

<template>
    <div class="reveal">
        <div class="slides">
            <slot></slot>
        </div>
    </div>
</template>

<script>
    import Reveal from "reveal.js"

    export default {
        name: "SlideShow",
        props: {
            controls: {
                type: Boolean,
                default: true
            },
            controlsTutorial: {
                type: Boolean,
                default: true
            },
            controlsLayout: {
                type: String,
                default: 'bottom-right',
                validate: function(value) {
                    return value.indexOf(['bottom-right', 'edges']) !== -1;
                }
            },
            controlsBackArrows: {
                type: String,
                default: 'faded',
                validate: function(value) {
                    return value.indexOf(['faded', 'hidden', 'visible']) !== -1;
                }
            },

            progress: {
                type: Boolean,
                default: true
            },

            slideNumber: {
                type: [String, Boolean],
                default: false,
                validate: function(value) {
                    return value.indexOf(['h.v', 'h/v', 'c', 'c/t', true, false]) !== -1;
                }
            },
            showSlideNumber: {
                type: String,
                default: 'all',
                validate: function(value) {
                    return value.indexOf(['all', 'print', 'speaker']) !== -1;
                }
            },

            hashOneBasedIndex: {
                type: Boolean,
                default: false
            },
            hash: {
                type: Boolean,
                default: false
            },
            respondToHashChanges: {
                type: Boolean,
                default: true
            },
            history: {
                type: Boolean,
                default: false
            },

            keyboard: {
                type: Boolean,
                default: true
            },
            keyboardCondition: {
                type: String,
                default: null,
                validate: function(value) {
                    return value.indexOf([null, 'focused']) !== -1;
                }
            },

            disableLayout: {
                type: Boolean,
                default: false
            },
            center: {
                type: Boolean,
                default: true
            },
            touch: {
                type: Boolean,
                default: true
            },
            loop: {
                type: Boolean,
                default: false
            },
            rtl: {
                type: Boolean,
                default: false
            },

            navigationMode: {
                type: String,
                default: "default",
                validate: function(value) {
                    return value.indexOf(['default', 'linear', 'grid']) !== -1;
                }
            },
            shuffle: {
                type: Boolean,
                default: false
            },
            fragments: {
                type: Boolean,
                default: true
            },
            fragmentInURL: {
                type: Boolean,
                default: true
            },
            embedded: {
                type: Boolean,
                default: false
            },
            help: {
                type: Boolean,
                default: true
            },
            pause: {
                type: Boolean,
                default: true
            },
            showNotes: {
                type: Boolean,
                default: false
            },

            autoPlayMedia: {
                type: Boolean,
                default: null
            },
            preloadIframes: {
                type: Boolean,
                default: null
            },

            autoAnimate: {
                type: Boolean,
                default: true
            },
            autoAnimateMatcher: {
                default: null
            },
            autoAnimateEasing: {
                type: String,
                default: "ease",
            },
            autoAnimateDuration: {
                type: Number,
                default: 1
            },
            autoAnimateUnmatched: {
                type: Boolean,
                default: true
            },
            autoAnimateStyles: {
                type: Array,
                default: function() {
                    return [
                        'opacity',
                        'color',
                        'background-color',
                        'padding',
                        'font-size',
                        'line-height',
                        'letter-spacing',
                        'border-width',
                        'border-color',
                        'border-radius',
                        'outline',
                        'outline-offset'
                    ];
                }
            },
            autoSlide: {
                type: [Number, Boolean],
                default: 0,
            },
            autoSlideStoppable: {
                type: Boolean,
                default: true
            },
            autoSlideMethod: {
                type: Function,
                default: null
            },

            defaultTiming: {
                type: Number,
                default: null
            },

            mouseWheel: {
                type: Boolean,
                default: false
            },

            previewLinks: {
                type: Boolean,
                default: false
            },
            focusBodyOnPageVisibilityChange: {
                type: Boolean,
                default: true
            },

            transition: {
                type: String,
                default: 'slide',
                validate: function(value) {
                    return value.indexOf(['none', 'fade', 'slide', 'convex', 'concave', 'zoom']) !== -1;
                }
            },
            transitionSpeed: {
                type: String,
                default: 'default',
                validate: function(value) {
                    return value.indexOf(['default', 'fast', 'slow']) !== -1;
                }
            },
            backgroundTransition: {
                type: String,
                default: 'fade',
                validate: function(value) {
                    return value.indexOf(['none', 'fade', 'slide', 'convex', 'concave', 'zoom']) !== -1;
                }
            },

            display: {
                type: String,
                default: 'block'
            },

            hideInactiveCursor: {
                type: Boolean,
                default: true
            },
            hideCursorTime: {
                type: Number,
                default: 5000
            }
        },
        data: function() {
            return {
                slideshow: null
            };
        },
        mounted() {
            this.slideshow = new Reveal({
                // Display presentation control arrows
                controls: this.controls,

                // Help the user learn the controls by providing hints, for example by
                // bouncing the down arrow when they first encounter a vertical slide
                controlsTutorial: this.controlsTutorial,

                // Determines where controls appear, "edges" or "bottom-right"
                controlsLayout: this.controlsLayout,

                // Visibility rule for backwards navigation arrows; "faded", "hidden"
                // or "visible"
                controlsBackArrows: this.controlsBackArrows,

                // Display a presentation progress bar
                progress: this.progress,

                // Display the page number of the current slide
                // - true:    Show slide number
                // - false:   Hide slide number
                //
                // Can optionally be set as a string that specifies the number formatting:
                // - "h.v":   Horizontal . vertical slide number (default)
                // - "h/v":   Horizontal / vertical slide number
                // - "c":   Flattened slide number
                // - "c/t":   Flattened slide number / total slides
                //
                // Alternatively, you can provide a function that returns the slide
                // number for the current slide. The function should take in a slide
                // object and return an array with one string [slideNumber] or
                // three strings [n1,delimiter,n2]. See #formatSlideNumber().
                slideNumber: this.slideNumber,

                // Can be used to limit the contexts in which the slide number appears
                // - "all":      Always show the slide number
                // - "print":    Only when printing to PDF
                // - "speaker":  Only in the speaker view
                showSlideNumber: this.showSlideNumber,

                // Use 1 based indexing for # links to match slide number (default is zero
                // based)
                hashOneBasedIndex: this.hashOneBasedIndex,

                // Add the current slide number to the URL hash so that reloading the
                // page/copying the URL will return you to the same slide
                hash: this.hash,

                // Flags if we should monitor the hash and change slides accordingly
                respondToHashChanges: this.respondToHashChanges,

                // Push each slide change to the browser history.  Implies `hash: true`
                history: this.history,

                // Enable keyboard shortcuts for navigation
                keyboard: this.keyboard,

                // Optional function that blocks keyboard events when retuning false
                //
                // If you set this to 'foucsed', we will only capture keyboard events
                // for embdedded decks when they are in focus
                keyboardCondition: this.keyboardCondition,

                // Disables the default reveal.js slide layout (scaling and centering)
                // so that you can use custom CSS layout
                disableLayout: this.disableLayout,

                // Enable the slide overview mode
                overview: this.overview,

                // Vertical centering of slides
                center: this.center,

                // Enables touch navigation on devices with touch input
                touch: this.touch,

                // Loop the presentation
                loop: this.loop,

                // Change the presentation direction to be RTL
                rtl: this.rtl,

                // Changes the behavior of our navigation directions.
                //
                // "default"
                // Left/right arrow keys step between horizontal slides, up/down
                // arrow keys step between vertical slides. Space key steps through
                // all slides (both horizontal and vertical).
                //
                // "linear"
                // Removes the up/down arrows. Left/right arrows step through all
                // slides (both horizontal and vertical).
                //
                // "grid"
                // When this is enabled, stepping left/right from a vertical stack
                // to an adjacent vertical stack will land you at the same vertical
                // index.
                //
                // Consider a deck with six slides ordered in two vertical stacks:
                // 1.1    2.1
                // 1.2    2.2
                // 1.3    2.3
                //
                // If you're on slide 1.3 and navigate right, you will normally move
                // from 1.3 -> 2.1. If "grid" is used, the same navigation takes you
                // from 1.3 -> 2.3.
                navigationMode: this.navigationMode,

                // Randomizes the order of slides each time the presentation loads
                shuffle: this.shuffle,

                // Turns fragments on and off globally
                fragments: this.fragments,

                // Flags whether to include the current fragment in the URL,
                // so that reloading brings you to the same fragment position
                fragmentInURL: this.fragmentInURL,

                // Flags if the presentation is running in an embedded mode,
                // i.e. contained within a limited portion of the screen
                embedded: this.embedded,

                // Flags if we should show a help overlay when the question-mark
                // key is pressed
                help: this.help,

                // Flags if it should be possible to pause the presentation (blackout)
                pause: this.pause,

                // Flags if speaker notes should be visible to all viewers
                showNotes: this.showNotes,

                // Global override for auto-playing embedded media (video/audio/iframe)
                // - null:   Media will only autoplay if data-autoplay is present
                // - true:   All media will autoplay, regardless of individual setting
                // - false:  No media will autoplay, regardless of individual setting
                autoPlayMedia: this.autoPlayMedia,

                // Global override for preloading lazy-loaded iframes
                // - null:   Iframes with data-src AND data-preload will be loaded when within
                //           the viewDistance, iframes with only data-src will be loaded when visible
                // - true:   All iframes with data-src will be loaded when within the viewDistance
                // - false:  All iframes with data-src will be loaded only when visible
                preloadIframes: this.preloadIframes,

                // Can be used to globally disable auto-animation
                autoAnimate: this.autoAnimate,

                // Optionally provide a custom element matcher that will be
                // used to dictate which elements we can animate between.
                autoAnimateMatcher: this.autoAnimateMatcher,

                // Default settings for our auto-animate transitions, can be
                // overridden per-slide or per-element via data arguments
                autoAnimateEasing: this.autoAnimateEasing,
                autoAnimateDuration: this.autoAnimateDuration,
                autoAnimateUnmatched: this.autoAnimateUnmatched,

                // CSS properties that can be auto-animated. Position & scale
                // is matched separately so there's no need to include styles
                // like top/right/bottom/left, width/height or margin.
                autoAnimateStyles: this.autoAnimateStyles,

                // Controls automatic progression to the next slide
                // - 0:      Auto-sliding only happens if the data-autoslide HTML attribute
                //           is present on the current slide or fragment
                // - 1+:     All slides will progress automatically at the given interval
                // - false:  No auto-sliding, even if data-autoslide is present
                autoSlide: this.autoSlide,

                // Stop auto-sliding after user input
                autoSlideStoppable: this.autoSlideStoppable,

                // Use this method for navigation when auto-sliding (defaults to navigateNext)
                autoSlideMethod: this.autoSlideMethod,

                // Specify the average time in seconds that you think you will spend
                // presenting each slide. This is used to show a pacing timer in the
                // speaker view
                defaultTiming: this.defaultTiming,

                // Enable slide navigation via mouse wheel
                mouseWheel: this.mouseWheel,

                // Opens links in an iframe preview overlay
                // Add `data-preview-link` and `data-preview-link="false"` to customise each link
                // individually
                previewLinks: this.previewLinks,

                // Exposes the reveal.js API through window.postMessage
                postMessage: true,

                // Dispatches all reveal.js events to the parent window through postMessage
                postMessageEvents: false,

                // Focuses body when page changes visibility to ensure keyboard shortcuts work
                focusBodyOnPageVisibilityChange: this.focusBodyOnPageVisibilityChange,

                // Transition style
                transition: this.transition, // none/fade/slide/convex/concave/zoom

                // Transition speed
                transitionSpeed: this.transitionSpeed, // default/fast/slow

                // Transition style for full page slide backgrounds
                backgroundTransition: this.backgroundTransition, // none/fade/slide/convex/concave/zoom

                // The maximum number of pages a single slide can expand onto when printing
                // to PDF, unlimited by default
                pdfMaxPagesPerSlide: Number.POSITIVE_INFINITY,

                // Prints each fragment on a separate slide
                pdfSeparateFragments: true,

                // Offset used to reduce the height of content within exported PDF pages.
                // This exists to account for environment differences based on how you
                // print to PDF. CLI printing options, like phantomjs and wkpdf, can end
                // on precisely the total height of the document whereas in-browser
                // printing has to end one pixel before.
                pdfPageHeightOffset: -1,

                // Number of slides away from the current that are visible
                viewDistance: 3,

                // Number of slides away from the current that are visible on mobile
                // devices. It is advisable to set this to a lower number than
                // viewDistance in order to save resources.
                mobileViewDistance: 2,

                // The display mode that will be used to show slides
                display: this.display,

                // Hide cursor if inactive
                hideInactiveCursor: this.hideInactiveCursor,

                // Time before the cursor is hidden (in ms)
                hideCursorTime: this.hideCursorTime
            });
            this.slideshow.initialize();
        }
    }
</script>
