import numeral from "numeral";

export default function () {

    const drinks = document.querySelectorAll('[name=waiter],[name=transport],[name=addition],.services,[name=quantity]',);

    drinks.forEach(function (el) {
        el.addEventListener('change', function () {
            calculatePrice();
        });
    });

}

function calculatePrice() {
    const priceEl = document.querySelector('#price');

    let price = parseInt(priceEl.dataset.baseprice),
        priceWhitAddition = priceByAddition(price);
    price = priceByQuantity(priceWhitAddition);
    price = priceByServices(price);


    priceEl.value = numeral(price).format('$0,0');
    document.querySelector('#priceDisabled').value = numeral(price).format('$0,0');

    priceEl.dataset.price = price;
}

function priceByServices(price) {
    const services = document.querySelectorAll('.services');

    services.forEach(function (el) {
        price += parseInt(el.options[el.selectedIndex].dataset.price);
    });
    return price;
}

function priceByQuantity(price) {
    const quantity = document.querySelector('[name=quantity]').value;
    return parseInt(quantity) * price;
}

function priceByAddition(price) {

    const addition = document.querySelectorAll('[name=addition]');
    addition.forEach(function (el) {
        if (el.checked) {
            price += parseInt(el.dataset.price);
        }
    });

    return price;
}
