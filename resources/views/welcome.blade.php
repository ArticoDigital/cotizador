@extends('layouts.layout')
@section('content')
    <section class="banner"></section>
    <div class="container relative">
        <div class="row justify-between">
            <div class="col-12 col-m-6 m-t-32 solutions">
                <h3>
                    Brindamos soluciones alimenticias
                </h3>
                <p>Los mejores refrigerios de la ciudad de Bogotá, queremos ser parte de su red de proveedores de
                    alimentos, para todos los eventos y refrigerios de capacitación que desarrolle su organización</p>
                <img src="{{asset('/images/juice.jpg')}}" alt="" class="juice">
            </div>
            <div class="col-16 col-m-10 p-40 rowForm m-b-80">
                <h2>ARMA TU COTIZACIÓN</h2>
                <p class="m-t-20">Elige el snack que más se acomode a tu necesidades </p>
                @include('components.menu')
                <section class="formOne m-t-32 is-hidden ">
                    <h2>Arma tu snack</h2>
                    <p class="m-t-20">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis dignissim, massa sed
                        efficitur mattis, leo orci luctus diam, sed auctor.</p>
                    <form action="" id="formSnackClassic">
                        @csrf
                        @include('components.form-quotation')
                        @include('components.form-data')
                    </form>
                </section>
            </div>
        </div>

    </div>
    <div class="loader is-full-screen row justify-center middle-items">
        <div class="spinner">
            <div class="double-bounce1"></div>
            <div class="double-bounce2"></div>
        </div>
    </div>
@endsection
