@extends('Site.layout')
@section('tittle, Página Serviços')
@section('content')

    <div class="row container">
        <div class="col s12 l6 push-l3 center-align">
            <h1 class="flow-text blue-text">Nossos serviços</h1>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Impedit placeat molestiae, porro eos eaque ab
                perferendis voluptate eligendi obcaecati odit.</p>
        </div>
    </div>

    <p>&nbsp;</p>

    <div class="row container">
        <div class="col s12 l6">

            <div class="row">

                <div class="col s12 l6 center-align grey lighten-4 hoverable">
                    <i class="fa-solid fa-truck-fast blue-text text-lighten-2 medium"></i>
                    <p class="flow-text">Lorem ipsum dolor sit amet.</p>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Et, amet.</p>
                </div>

                <div class="col s12 l6 center-align lighten-4 hoverable">
                    <i class="fa-solid fa-car blue-text text-lighten-2 medium"></i>
                    <p class="flow-text">Lorem ipsum dolor sit amet.</p>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Et, amet.</p>
                </div>

                <div class="col s12 l6 center-align lighten-4 hoverable">
                    <i class="fa-solid fa-lock blue-text text-lighten-2 medium"></i>
                    <p class="flow-text">Lorem ipsum dolor sit amet.</p>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Et, amet.</p>
                </div>

                <div class="col s12 l6 center-align grey lighten-4 hoverable">
                    <i class="fa-solid fa-laptop blue-text text-lighten-2 medium"></i>
                    <p class="flow-text">Lorem ipsum dolor sit amet.</p>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Et, amet.</p>
                </div>
            </div>

        </div>

        <div class="col s12 l6">
            <img src="{{ asset('Images/team.jpg') }}" class="responseive-img">
        </div>
    </div>

    <p>&nbsp;</p>

    <div class="row container">
        <div class="col s12 center-align">
            <h1 class="flow-text blue-text">Planos</h1>
        </div>

        <p>&nbsp;</p>


        <!--CARD-1-->
        <div class="col s12 l4 hoverable">
            <div class="card center-align">
                <div class="card-image">
                    <i class="fa-solid fa-sack-dollar medium grey-text"></i>
                </div>

                <div class="card-content">
                    <span class="card-tittle">Basic R$89,99</span>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo quos eum, iusto qui maxime a alias
                        cumque dolores fugit asperiores?</p>
                </div>
                <div class="card-action">
                    <a href="#!">Saiba mais</a>
                </div>
            </div>
        </div>

        <!--CARD-2-->
        <div class="col s12 l4 hoverable">
            <div class="card center-align">
                <div class="card-image">
                    <i class="fa-solid fa-hand-holding-dollar medium grey-text"></i>
                </div>

                <div class="card-content">
                    <span class="card-tittle">Light R$199,99</span>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo quos eum, iusto qui maxime a alias
                        cumque dolores fugit asperiores?</p>
                </div>
                <div class="card-action">
                    <a href="#!">Saiba mais</a>
                </div>
            </div>
        </div>

        <!--CARD-3-->
        <div class="col s12 l4 hoverable">
            <div class="card center-align">
                <div class="card-image">
                    <i class="fa-brands fa-bitcoin medium green-text text-lighten-2"></i>
                </div>

                <div class="card-content">
                    <span class="card-tittle">Diamante R$299,99</span>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo quos eum, iusto qui maxime a alias
                        cumque dolores fugit asperiores?</p>
                </div>
                <div class="card-action">
                    <a href="#!">Saiba mais</a>
                </div>
            </div>
        </div>
    </div>



@endsection
