@extends('Site.layout')

@section('tittle, Página Contato')

@section('content')

    <div class="row container">
        <div class="col st2">
            <h1 class="flow-text blue-text">Entre em Contato</h1>
        </div>

        <div class="col s12">
            <p>
                Dias de funcionamento<br>
                Seg a Sex - 08:00 ás 22:00
            </p>
            <p>
                Telefone: (67) 4444-1111<br>
            </p>
            <p>
                Endereço: Rua Jarebá, 325 - Chácara Cachoeira Campo Grande - MS, 79040-120
            </p>
        </div>
    </div>

    <div class="row">
        <div class="col s12">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3737.9697872729867!2d-54.58709377380728!3d-20.466434055238857!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9486e8cf34ef8ca7%3A0xf852427d819d913e!2sR.%20Jerib%C3%A1%20-%20Ch%C3%A1cara%20Cachoeira%2C%20Campo%20Grande%20-%20MS%2C%2079040-120!5e0!3m2!1spt-BR!2sbr!4v1701108604279!5m2!1spt-BR!2sbr"
                width="100%" height="600" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>

    <div class="row container">
        <div class="col s12">
            <form action="" method="post">
                @csrf

                <div class="row">
                    <!--CAMPO NOME-->
                    <div class="col s12 m6 input-field">
                        <i class="fa-solid fa-user prefix"></i>
                        <input type="text" name="name" id="name" required>
                        <label for="name">Seu nome</label>
                    </div>

                    <!--CAMPO E-MAIL-->
                    <div class="col s12 m6 input-field">
                        <i class="fa-regular fa-envelope prefix"></i>
                        <input type="text" name="email" id="email" required>
                        <label for="email">Seu nome</label>
                    </div>

                    <!--CAMPO MENSAGEM-->
                    <div class="input-field col s12">
                        <textarea id="textarea1" class="materialize-textarea"></textarea>
                        <label for="textarea1">Textarea</label>
                    </div>

                    <!--BOTÕES-->
                    <div class="col s12 input-field">
                        <button type="submit" class="btn btn-small blue"><i
                                class="fa-regular fa-paper-plane left"></i>Enviar</button>

                        <button type="reset" class="btn btn-small indigo"><i
                                class="fa-solid fa-eraser left"></i>Limpar</button>
                    </div>

                </div>
            </form>
        </div>
    </div>



@endsection
