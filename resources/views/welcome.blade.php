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
		</div>		 
	</div>	
</div>

@endsection