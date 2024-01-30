<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@include('layouts.head')

<body class="font-sans antialiased">
    @include('layouts.navigation')

    <div class="container-fluid bg-all">
        <div class="title-all">
            <img src="{{URL::asset('../resources/images/letra 1.png')}}" alt="">
        </div>
        <div class="container pad1 contenpre">
            <div class="contpre">
                <div class="img-bg" style="background-image: url(../resources/images/base.png);background-position:center;">
                    <div style="background-image: url(../resources/images/parlante.png);background-position:top center;background-size:75%;background-repeat:no-repeat">
                        <img src="{{URL::asset('../resources/images/bg1.png')}}" alt="">
                    </div>
                    <div class="entregado">
                        <p>ENTREGADO</p>
                    </div>
                </div>

                <div class="title-prem-1">
                    <p>Parlante</p>
                </div>
                <div class="title-prem-2" style="display:none">
                    <p>0 UNIDADES</p>
                </div>
            </div>
            <div class="contpre">
                <div class="img-bg" style="background-image: url(../resources/images/base.png);background-position:center;">
                    <div style="background-image: url(../resources/images/audifonos.png);background-position:top center;background-size:75%;background-repeat:no-repeat">
                        <img src="{{URL::asset('../resources/images/bg1.png')}}" alt="">
                    </div>
                </div>

                <div class="title-prem-1">
                    <p>Audifonos</p>
                </div>
                <div class="title-prem-2">
                    <p>7 UNIDADES</p>
                </div>
            </div>
            <div class="contpre">
                <div class="img-bg" style="background-image: url(../resources/images/base.png);background-position:center;">
                    <div style="background-image: url(../resources/images/powerbank.png);background-position:top center;background-size:75%;background-repeat:no-repeat">
                        <img src="{{URL::asset('../resources/images/bg1.png')}}" alt="">
                    </div>
                </div>

                <div class="title-prem-1">
                    <p>power bank</p>
                </div>
                <div class="title-prem-2">
                    <p>2 UNIDADES</p>
                </div>
            </div>
            <div class="contpre">
                <div class="img-bg" style="background-image: url(../resources/images/base.png);background-position:center;">
                    <div style="background-image: url(../resources/images/celular.png);background-position:top center;background-size:75%;background-repeat:no-repeat">
                        <img src="{{URL::asset('../resources/images/bg1.png')}}" alt="">
                    </div>
                </div>

                <div class="title-prem-1">
                    <p>Galaxy s23</p>
                </div>
                <div class="title-prem-2">
                    <p>1 UNIDADES</p>
                </div>
            </div>

        </div>
    </div>
</body>