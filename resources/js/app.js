import axios from 'axios'

const formData = document.querySelector('.formOne');

document.querySelectorAll('.buttons-home').forEach(function (el) {
    el.addEventListener('click', function () {
        const formName = this.dataset.form;
        axios.post('/info-products', {
            _token: document.querySelector('[name="_token"]'),
            form: formName
        }).then(function (response) {
            formData.classList.remove('is-hidden');
            console.log(response.data);
        })
    })
});

