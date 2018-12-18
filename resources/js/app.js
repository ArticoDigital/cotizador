import axios from 'axios'

document.querySelectorAll('.buttons-home').forEach(function (el) {
  el.addEventListener('click', function () {
    axios.post('/info-products', {
        token: 'Fred',
        lastName: 'Flintstone'
      })
      .then(function (response) {
        console.log(response);
      })
      .catch(function (error) {
        console.log(error);
      });
    console.log(this.dataset.form)
  })
});

