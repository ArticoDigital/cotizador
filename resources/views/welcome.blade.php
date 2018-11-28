@extends('layouts.layout')
@section('content')
<section class="banner">
	<div class="container row justify-between align-center ">
		<!--<img src="{{asset('/images/bgBanner.jpg')}}">-->
		<div class="col-l-8 m-t-32 txtWelcome">
			<h2>!BIENVENIDOS!</h2>
			<p>
				Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas eget sapien dignissim, dapibus velit malesuada, efficitur lectus. In porttitor, lacus mattis porta eleifend, dui felis varius enim, ornare rutrum tortor mi quis mauris. Integer maximus sagittis mattis. Etiam aliquet ex mauris, sit amet gravida dolor feugiat vel.
			</p>
		</div>	
	</div>	
</section>


<div class="container">
	<div class="row justify-between">
		<div class="col-6 m-t-60 solutions">
			<h3>
				Brindamos soluciones alimenticias
			</h3>
			<p>Los mejores refrigerios de la ciudad de Bogotá, queremos ser parte de su red de proveedores de alimentos, para todos los eventos y refrigerios de capacitación que desarrolle su organización</p>

			<img src="{{asset('/images/juice.jpg')}}" alt="" class="juice">
		</div>
		<div class="col-10 p-40 rowForm">
			<h2>COTIZACIÓN RÁPIDA</h2>	
			<p class="m-t-20">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis dignissim, massa sed efficitur mattis, leo orci luctus diam, sed auctor </p>
			<a href="" class="row align-center justify-around botones-home is-full-width m-t-20">
				<div class="col-16 col-m-4 col-l-4 iconService">
					<img src="{{asset('/images/iconHome01.png')}}" alt="">
				</div>
				<div class="col-16 col-m-10 col-l-10">
					<h3>Snack Clásico</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis dignissim, massa sed efficitur mattis, leo orci luctus diam, sed auctor </p>
				</div>
			</a>
			<a href="" class="row align-center justify-around botones-home is-full-width m-t-20">
				<div class="col-16 col-m-4 col-l-4 iconService">
					<img src="{{asset('/images/iconHome01.png')}}" alt="">
				</div>
				<div class="col-16 col-m-10 col-l-10">
					<h3>Snack Ejecutivo</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis dignissim, massa sed efficitur mattis, leo orci luctus diam, sed auctor </p>
				</div>
			</a>
			<a href="" class="row align-center justify-around botones-home is-full-width m-t-20">
				<div class="col-16 col-m-4 col-l-4 iconService">
					<img src="{{asset('/images/iconHome01.png')}}" alt="">
				</div>
				<div class="col-16 col-m-10 col-l-10">
					<h3>Snack Premium</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis dignissim, massa sed efficitur mattis, leo orci luctus diam, sed auctor </p>
				</div>
			</a>
			<!-- Init Row Form Snack Classsic --> 
			<section class="formOne m-t-32">
				<h2>Arma tu snack</h2>
				<p class="m-t-20">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis dignissim, massa sed efficitur mattis, leo orci luctus diam, sed auctor.</p>
				<form action="" id="formSnackClassic">
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
		            <!-- Segunda Pantalla -->
		            <div class="row justify-evenly item m-t-20">
						<div class="col-16 col-m-6 col-l-6 is-text-center">
							<p>Valor Estimado</p>
							<input type="text" disabled="" name="" value="" id="priceDisabled">
						</div>
		            </div>
		            <div class="row justify-evenly resumen m-t-20">
		            	<div class="col-l-16 is-text-center is-text-uppercase">
							<h3>Resumen del pedido</h3>		            		
		            	</div>
						<div class="col-16 col-m-14 col-l-14">
							<ul id="order" class="is-list-less">
								<li><span>Entrada:</span></li>
								<li><span>Bebidas:</span></li>
								<li><span>Adiciones:</span></li>
								<li><span>Mesero:</span></li>
								<li><span>Transporte:</span></li>
							</ul>
						</div>
		            </div>
		            <!-- Segunda Pantalla -->	
		        </form>
			</section>	
			<!-- End Row Form Snack Classsic --> 		
		</div>		 
	</div>	
	
</div>

@endsection