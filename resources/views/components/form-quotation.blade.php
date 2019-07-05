<div class="row justify-center item m-t-20">
    <div class="col-16 numberItem is-text-center">
        <p><span>1</span> Elija una entrada</p>
    </div>
    <div id="contentSnack" class="row is-full-width"></div>
</div>
<div class="row justify-center item m-t-20">
    <div class="col-16 numberItem is-text-center">
        <p><span>2</span> Elija una bebida</p>
    </div>
    <div id="contentDrink" class="row is-full-width"></div>
</div>
<!-- 3 -->
<div class="row justify-center item m-t-20">
    <div class="col-16 numberItem is-text-center">
        <p><span>3</span>Adiciones</p>
    </div>
    <div id="contentAddition" class="row is-full-width"></div>

</div>
<!-- 4 -->
<div class="row justify-evenly item m-t-20">
    <div class="col-16 numberItem is-text-center">
        <p><span>4</span>Seleccione un servicio</p>
    </div>
    <div class="col-16 col-m-8 col-l-6 is-text-center">
        <label for="waiter">Mesero</label>
        <select name="waiter" class="services" id="waiter">
            <option value="" data-price="0">Seleccione mesero, si lo necesita</option>
        </select>
    </div>
    <div class="col-16 col-m-8 col-l-6 is-text-center">
        <label for="transport">Transporte</label>
        <select name="transport" id="transport"  class="services">
            <option value="" data-price="0">Seleccione transporte, si lo necesita</option>
        </select>
    </div><!-- 5 -->
    <div class="row justify-center item m-t-20">
        <div class="col-16 numberItem is-text-center">
            <p><span>5</span>Cantidad</p>
            <div class="col-16">
                <div class="col-16 is-text-center">
                    <input type="number" min="1" value="1" name="quantity">
                </div>
            </div>
        </div>

    </div>
</div>
