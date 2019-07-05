import ajax from 'axios';
import convertSlug from './convertSlug.js';
import numeral from 'numeral';
import quote from './Quote';

const loader = document.querySelector('.loader');


export default class dataForm {

    constructor() {
        const _self = this;
        document.querySelectorAll('.buttons-home').forEach(function (el) {
            el.addEventListener('click', function () {
                const formName = this.dataset.form;
                loader.classList.add('open');
                ajax.post('/info-products', {
                    _token: document.querySelector('[name="_token"]'),
                    formName: formName
                }).then(_self.buildElements.bind(_self))
            })
        });
    }

    buildElements(response) {
        this.data = response.data;
        document.querySelector('.formOne').classList.remove('is-hidden');
        loader.classList.remove('open');
            document.querySelector('#priceDisabled').value = numeral(response.data['Valor'][0]).format('$0,0');

        const price = document.querySelector('#price');
        price.value = numeral(response.data['Valor'][0]).format('$0,0');
        price.dataset.price = response.data['Valor'][0];
        price.dataset.baseprice = response.data['Valor'][0];

        this.createElementsInputs(response.data['Snack'], 'contentSnack', 'snacks');
        this.createElementsInputs(response.data['Bebida'], 'contentDrink', 'drinks');
        this.createElementsInputs(response.data['Adiciones'], 'contentAddition', 'addition', 'checkbox', false);

        this.createElementsSelects(response.data['Mesero'], 'waiter', response.data['Valor Mesero']);
        this.createElementsSelects(response.data['Transporte'], 'transport',  response.data['Valor Transporte']);

        quote();
    }

    createElementsSelects(elements, idSelect, priceValue) {
        const select = document.getElementById(idSelect);

        elements.forEach(function (element, index) {
            let option = document.createElement("option");
            option.text = element;
            option.setAttribute('data-price',priceValue[index]);
            select.add(option);
        });
    }

    createElementsInputs(elements, contentElements, name, typeInput = 'radio', checked = true) {
        const contentEntry = document.getElementById(contentElements);
        const _self = this;
        elements.forEach(function (element, index) {
            let div = document.createElement('div'),
                input = document.createElement('input'),
                content = document.createTextNode(element),
                label = document.createElement('label');

            div.setAttribute('class', 'col-16 col-m-8 col-l-8');
            input.setAttribute('id', convertSlug(element));
            input.setAttribute('name', name);
            input.setAttribute('type', typeInput);

            if (index === 0 && checked)
                input.setAttribute('checked', 'checked');
            if (typeInput === 'checkbox')
                input.setAttribute('data-price', _self.data['Valor Adiciones'][index]);

            label.setAttribute('for', convertSlug(element));

            div.appendChild(input);
            label.appendChild(content);
            div.appendChild(label);
            contentEntry.appendChild(div);
        })

    }

}



