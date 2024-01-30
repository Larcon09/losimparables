<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@include('layouts.head')

<body class="font-sans antialiased">
    @include('layouts.navigation')
    <div class="container-fluid bg-all">
        <div class="title-all">
            <img src="{{URL::asset('../resources/images/ganadores.png')}}" alt="" width="400px">

            <a href="pdf/listado_ganadores.php" target="_blank">
                <div class="boton-claro">
                    <p>Ver todos los Ganadores</p>
                </div>
            </a>
        </div>
        <div class="container pad1">
            <div class="contengan">

                <div class="contgan cont-img">
                    <div class="img-bg" style="background-image: url(../resources/images/avatar/avt15.png);background-position:center;">
                        <img src="../resources/images/bg1.png" alt="">
                    </div>

                    <div class="title-gan-1 pad1">
                        <p>ID 1047371134
                        </p>
                        <p>
                            Cartagena - Tienda Mall plaza </p>
                    </div>
                    <div class="title-gan-2 pad1">
                        <p>PREMIO: <span>power bank</span></p>
                    </div>
                </div>

                <div class="contgan cont-img">
                    <div class="img-bg" style="background-image: url(../resources/images/avatar/avt4.png);background-position:center;">
                        <img src="../resources/images/bg1.png" alt="">
                    </div>

                    <div class="title-gan-1 pad1">
                        <p>ID 32907237</p>
                        <p>
                            Bogota D.C. - Cav Calle 140 </p>
                    </div>
                    <div class="title-gan-2 pad1">
                        <p>PREMIO: <span>power bank</span></p>
                    </div>
                </div>

                <div class="contgan cont-img">
                    <div class="img-bg" style="background-image: url(../resources/images/avatar/avt15.png);background-position:center;">
                        <img src="../resources/images/bg1.png" alt="">
                    </div>

                    <div class="title-gan-1 pad1">
                        <p>ID 1047371134
                        </p>
                        <p>
                            Cartagena - Tienda Mall plaza </p>
                    </div>
                    <div class="title-gan-2 pad1">
                        <p>PREMIO: <span>power bank</span></p>
                    </div>
                </div>

            </div>
            <div class="col-md-1 pad1">

            </div>
        </div>
    </div>

</body>