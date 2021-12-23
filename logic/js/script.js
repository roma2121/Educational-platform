const search = document.querySelector('.search');
const body = document.querySelector('body');

search.addEventListener('click', function (e) {
    e.stopPropagation();
    this.classList.add('search--active');

});

body.add('click', function () {
    search.classList.remove('search--active');
})