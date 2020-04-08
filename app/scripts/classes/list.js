export class List {
    constructor() {
        this.toggles = document.querySelectorAll('.js-list-toggle');
        this.menu = document.querySelector('.js-list');
        this.bindToggles();
    }

    bindToggles() {
        [].forEach.call(this.toggles, (el) => {
            this.bindToggle(el);
        });
    }

    bindToggle(el) {
        el.addEventListener('click', this.toggleList);
    }

    toggleList = () => {
        if(this.menu.classList.contains('is-open')) {
            this.menu.classList.remove('is-open');
        } else {
            this.menu.classList.add('is-open');
        }
    }
}
