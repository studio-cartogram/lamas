import {TweenLite} from 'gsap';
import Barba from 'barba.js';

export class Page {
    constructor() {
        Barba.Pjax.init();
        Barba.Prefetch.init();

        Barba.Pjax.getTransition = () => {
            return this.MovePage;
        };
    }

    removeFade = (_el, _main, done) => {
        let el = _el || document.querySelector('#js-fade');
        let main = _main || document.querySelector('#js-main');

        if(!el) {
            return
        }
        TweenLite.to(el, 0.5, { 
            onComplete: () => {
                TweenLite.to(el, 0.4, { 
                    delay: 1,
                    yPercent: -100,
                    onComplete: () => {
                    }
                });
            }
        });

    }

    MovePage = Barba.BaseTransition.extend({
        start: function() {
            Promise
            .all([this.newContainerLoading, this.scrollTop(), this.fadeOut()])
            .then(this.fadeIn.bind(this));
        },

        scrollTop: function() {
            var deferred = Barba.Utils.deferred();
            var obj = { y: window.pageYOffset };

            TweenLite.to(obj, 0.5, {
                y: 0,
                onUpdate: function() {
                    if (obj.y === 0) {
                        deferred.resolve();
                    }

                    window.scroll(0, obj.y);
                },
                onComplete: function() {
                    deferred.resolve();
                }
            });

            return deferred.promise;
        },

        fadeOut: function() {
            var deferred = Barba.Utils.deferred();
            var obj = this.oldContainer;
            document.body.classList.add('is-loading');

            TweenLite.to(obj, 0.5, {
                opacity: 0,
                onComplete: function() {
                    deferred.resolve();
                }
            });

            return deferred.promise;
        },

        fadeIn: function() {
            TweenLite.set(this.newContainer, {
                opacity: 0,
            });
            TweenLite.to(this.newContainer, 0.5, { 
                opacity: 1,
                onComplete: () => {
                    document.body.classList.remove('is-loading');
                    TweenLite.set(this.newContainer, { clearProps: 'all' });
                    this.done();
                }
            });
        },

    });
}
