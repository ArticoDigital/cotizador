<div class="row justify-center item m-t-20">
    <div class="col-16 numberItem is-text-center">
        <p><span>1</span> Elija una entrada</p>
    </div>
    <div class="col-16 col-m-8 col-l-8">
        <p><input id="empanada" name="entry" type="radio">
            <label for="empanada">Empanada Gourmet</label></p>
        <p><input id="candy" name="entry" type="radio">
            <label for="candy">Dulce</label></p>
    </div>
    <div class="col-16 col-m-8 col-l-8">
        <p><input id="hojaldres" name="entry" type="radio">
            <label for="hojaldres">Hojaldres</label></p>
        <p><input id="tradition" name="entry" type="radio">
            <label for="tradition">Tradicion</label></p>
    </div>
</div>
<!-- 2 -->
<div class="row justify-center item m-t-20">
    <div class="col-16 numberItem is-text-center">
        <p><span>2</span> Elija una bebida</p>
    </div>
    <div class="col-16 col-m-8 col-l-8">
        <p><input id="avena" name="drink" type="radio">
            <label for="avena">Avena en Bolsa</label></p>
        <p><input id="juice" name="drink" type="radio">
            <label for="juice">Jugo en Caja</label></p>
        <p><input id="nectar" name="drink" type="radio">
            <label for="nectar">Nectar Bolsa</label></p>
    </div>
    <div class="col-16 col-m-8 col-l-8">
        <p><input id="soda" name="drink" type="radio">
            <label for="soda">Gaseosa Mini</label></p>
        <p><input id="te" name="drink" type="radio">
            <label for="te">Té en Caja</label></p>
        <p><input id="yogurth" name="drink" type="radio">
            <label for="yogurth">Yogurt Vaso (150 gr)</label></p>
    </div>
</div>
<!-- 3 -->
<div class="row justify-center item m-t-20">
    <div class="col-16 numberItem is-text-center">
        <p><span>3</span>Adiciones</p>
    </div>
    <div class="col-16 col-m-8 col-l-8">
        <p><input type="checkbox" id="sinAdicion">
            <label for="sinAdicion">Sin Adición</label></p>
        <p><input type="checkbox" id="juiceNat">
            <label for="juiceNat">Jugo Natural</label></p>
        <p><input type="checkbox" id="fruit">
            <label for="fruit">Fruta Entera</label></p>
        <p><input type="checkbox" id="dessert">
            <label for="dessert">Mini Postre</label></p>
        <p><input type="checkbox" id="package">
            <label for="package">Empaque Especial</label></p>
    </div>
    <div class="col-16 col-m-8 col-l-8">

    </div>
</div>
<!-- 4 -->
<div class="row justify-evenly item m-t-20">
    <div class="col-16 numberItem is-text-center">
        <p><span>4</span>Seleccione un servicio</p>
    </div>
    <div class="col-16 col-m-8 col-l-6 is-text-center">
        <label for="waiter">Mesero</label>
        <select name="waiter" id="waiter">
            <option value="">Refribreak (3 Hr)</option>
            <option value="">Refribreak (6 Hr)</option>
            <option value="">Profesional (4 Hr)</option>
            <option value="">Refribreak (Hora Adicional)</option>
            <option value="">Profesional (Hora Adicional)</option>
        </select>
    </div>
    <div class="col-16 col-m-8 col-l-6 is-text-center">
        <label for="transport">Transporte</label>
        <select name="transport" id="transport">
            <option value="">Moto (Cercano - de 0 a 6 Km)</option>
            <option value="">Moto (Mediano - de 7 a 12 Km)</option>
            <option value="">Moto (Lejano - de 12 Km Dentro de Bogota)</option>
            <option value="">Carro (Cercano - de 0 a 6 Km)</option>
            <option value="">Carro (Mediano - de 7 a 12 Km)</option>
            <option value="">Carro (Lejano - de 12 Km Dentro de Bogota)</option>
        </select>
    </div>
</div>
<div class="row justify-evenly item m-t-20">
    <p>
        <button type="submit" name="buttom">Valor Estimado</button>
    </p>
</div>