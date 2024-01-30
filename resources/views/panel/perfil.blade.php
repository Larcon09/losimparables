<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@include('layouts.head')

<body class="font-sans antialiased">
    @include('layouts.navigation')

    <div class="container-fluid bg-all">

        <div class="container">

            <div class="cont-user">
                <div class="row">
                    <div class="col-md-4 ">
                        <div class="user mt-3">
                            <div class="btnavatar" onclick="abrir()">
                                <span class="icon-mode-edit" alt="Editar"></span>
                            </div>
                            <div class="user-body">
                                <div class="user-flex flex-column align-items-center text-center">

                                    <img src="../resources/images/avatar/avt15.png" alt="Admin" class="rounded-circle" width="150">
                                    <div class="mt-3">
                                        <h4>Imparable ORO</h4>
                                        <p class="text-secondary mb-1">


                                            17 ACTIVACIONES

                                        </p>


                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="user mt-3">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item user-flex justify-content-between align-items-center flex-wrap">
                                    <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-globe mr-2 icon-inline">
                                            <circle cx="12" cy="12" r="10"></circle>
                                            <line x1="2" y1="12" x2="22" y2="12"></line>
                                            <path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z">

                                            </path>
                                        </svg> Premios</h6>

                                </li>

                                <li class="list-premios">

                                    <span class="text-prem">power bank</span>
                                    <span class="text-prem">24-01-11</span>
                                </li>
                                <li class="list-premios">

                                    <span class="text-prem">power bank</span>
                                    <span class="text-prem">24-01-12</span>
                                </li>

                                <li class="list-group-item user-flex justify-content-between align-items-center flex-wrap">
                                    <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-github mr-2 icon-inline">
                                            <path d="M9 19c-5 1.5-5-2.5-7-3m14 6v-3.87a3.37 3.37 0 0 0-.94-2.61c3.14-.35 6.44-1.54 6.44-7A5.44 5.44 0 0 0 20 4.77 5.07 5.07 0 0 0 19.91 1S18.73.65 16 2.48a13.38 13.38 0 0 0-7 0C6.27.65 5.09 1 5.09 1A5.07 5.07 0 0 0 5 4.77a5.44 5.44 0 0 0-1.5 3.78c0 5.42 3.3 6.61 6.44 7A3.37 3.37 0 0 0 9 18.13V22">

                                            </path>
                                        </svg>Reconocimientos </h6>
                                    <span class="text-secondary">ORO Dicimebre 20</span>
                                </li>

                            </ul>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="user  mt-3">
                            <div class="user-body">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Email</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        luis.laraconeo09@gmail.com </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Cédula</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        1047371134
                                    </div>
                                </div>
                                <hr>
                                <div class="cont-form row">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">CAV</h6>
                                    </div>
                                    <div class="col-sm-6 text-secondary">
                                        <h6 class="mb-0">
                                            Cartagena - Tienda Mall plaza
                                        </h6>

                                    </div>
                                    <div class="col-sm-3">
                                        <div class="btn-cot" id="cambiarcav" onclick="cambiar()">Editar CAV</div>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Direccion</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        Bogota DC
                                    </div>
                                </div>
                                <hr>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6 ">
                                <div class="user mt-3 h-100">
                                    <div class="user-body">
                                        <h6 class="user-flex align-items-center "><i class="material-icons mr-2">Primer Semestre</i></h6>
                                        <small>Enero 12%</small>
                                        <div class="progress " style="height: 15px">
                                            <div class="progress-bar bg-danger" role="progressbar" style="width: 12%" aria-valuenow="12" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <small>Febrero 0%</small>
                                        <div class="progress " style="height: 15px">
                                            <div class="progress-bar bg-danger" role="progressbar" style="width: 0%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <small>Marzo 0%</small>
                                        <div class="progress " style="height: 15px">
                                            <div class="progress-bar bg-danger" role="progressbar" style="width: 0%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <small>Abril 0%</small>
                                        <div class="progress " style="height: 15px">
                                            <div class="progress-bar bg-danger" role="progressbar" style="width: 0%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <small>Mayo 0%</small>
                                        <div class="progress " style="height: 15px">
                                            <div class="progress-bar bg-danger" role="progressbar" style="width: 0%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <small>Junio 0%</small>
                                        <div class="progress " style="height: 15px">
                                            <div class="progress-bar bg-danger" role="progressbar" style="width: 0%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 ">
                                <div class="user mt-3 h-100">
                                    <div class="user-body">
                                        <h6 class="user-flex align-items-center "><i class="material-icons mr-2">Segundo Semestre</i></h6>
                                        <small>Julio 0%</small>
                                        <div class="progress " style="height: 15px">
                                            <div class="progress-bar bg-danger" role="progressbar" style="width: 0%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <small>Agosto 0%</small>
                                        <div class="progress " style="height: 15px">
                                            <div class="progress-bar bg-danger" role="progressbar" style="width: 0%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <small>Septiembre 0%</small>
                                        <div class="progress " style="height: 15px">
                                            <div class="progress-bar bg-danger" role="progressbar" style="width: 0%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <small>Octubre 0%</small>
                                        <div class="progress " style="height: 15px">
                                            <div class="progress-bar bg-danger" role="progressbar" style="width: 0%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <small>Noviembre 0%</small>
                                        <div class="progress " style="height: 15px">
                                            <div class="progress-bar bg-danger" role="progressbar" style="width: 0%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <small>Diciembre 0%</small>
                                        <div class="progress " style="height: 15px">
                                            <div class="progress-bar bg-danger" role="progressbar" style="width: 0%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>



                    </div>
                </div>

            </div>
            <!--<div class="avatars pad2" id="avatars">
                <div class="btneditar" onclick="cerrar1()">
                    <span class="icon-close" alt="Editar"></span>
                </div>
                <div class="avatarimg cont-img img_avatar1" id="img_avatar1">
                    <input type="hidden" value="imagenes/user/avatar/avt1.png" id="avatar1">
                    <div class="img-bg" style="background-image: url(imagenes/user/avatar/avt1.png);background-position:center;">
                        <img src="assets/images/bg_300.png" alt="">
                    </div>
                </div>
                <div class="avatarimg cont-img img_avatar2" id="img_avatar2">
                    <input type="hidden" value="imagenes/user/avatar/avt2.png" id="avatar2">
                    <div class="img-bg" style="background-image: url(imagenes/user/avatar/avt2.png);background-position:center;">
                        <img src="assets/images/bg_300.png" alt="">
                    </div>
                </div>
                <div class="avatarimg cont-img img_avatar3" id="img_avatar3">
                    <input type="hidden" value="imagenes/user/avatar/avt3.png" id="avatar3">
                    <div class="img-bg" style="background-image: url(imagenes/user/avatar/avt3.png);background-position:center;">
                        <img src="assets/images/bg_300.png" alt="">
                    </div>
                </div>
                <div class="avatarimg cont-img img_avatar4" id="img_avatar4">
                    <input type="hidden" value="imagenes/user/avatar/avt4.png" id="avatar4">
                    <div class="img-bg" style="background-image: url(imagenes/user/avatar/avt4.png);background-position:center;">
                        <img src="assets/images/bg_300.png" alt="">
                    </div>
                </div>
                <div class="avatarimg cont-img img_avatar5" id="img_avatar5">
                    <input type="hidden" value="imagenes/user/avatar/avt5.png" id="avatar5">
                    <div class="img-bg" style="background-image: url(imagenes/user/avatar/avt5.png);background-position:center;">
                        <img src="assets/images/bg_300.png" alt="">
                    </div>
                </div>
                <div class="avatarimg cont-img img_avatar6" id="img_avatar6">
                    <input type="hidden" value="imagenes/user/avatar/avt6.png" id="avatar6">
                    <div class="img-bg" style="background-image: url(imagenes/user/avatar/avt6.png);background-position:center;">
                        <img src="assets/images/bg_300.png" alt="">
                    </div>
                </div>
                <div class="avatarimg cont-img img_avatar7" id="img_avatar7">
                    <input type="hidden" value="imagenes/user/avatar/avt7.png" id="avatar7">
                    <div class="img-bg" style="background-image: url(imagenes/user/avatar/avt7.png);background-position:center;">
                        <img src="assets/images/bg_300.png" alt="">
                    </div>
                </div>
                <div class="avatarimg cont-img img_avatar8" id="img_avatar8">
                    <input type="hidden" value="imagenes/user/avatar/avt8.png" id="avatar8">
                    <div class="img-bg" style="background-image: url(imagenes/user/avatar/avt8.png);background-position:center;">
                        <img src="assets/images/bg_300.png" alt="">
                    </div>
                </div>
                <div class="avatarimg cont-img img_avatar9" id="img_avatar9">
                    <input type="hidden" value="imagenes/user/avatar/avt9.png" id="avatar9">
                    <div class="img-bg" style="background-image: url(imagenes/user/avatar/avt9.png);background-position:center;">
                        <img src="assets/images/bg_300.png" alt="">
                    </div>
                </div>
                <div class="avatarimg cont-img img_avatar10" id="img_avatar10">
                    <input type="hidden" value="imagenes/user/avatar/avt10.png" id="avatar10">
                    <div class="img-bg" style="background-image: url(imagenes/user/avatar/avt10.png);background-position:center;">
                        <img src="assets/images/bg_300.png" alt="">
                    </div>
                </div>
                <div class="avatarimg cont-img img_avatar11" id="img_avatar11">
                    <input type="hidden" value="imagenes/user/avatar/avt11.png" id="avatar11">
                    <div class="img-bg" style="background-image: url(imagenes/user/avatar/avt11.png);background-position:center;">
                        <img src="assets/images/bg_300.png" alt="">
                    </div>
                </div>
                <div class="avatarimg cont-img img_avatar12" id="img_avatar12">
                    <input type="hidden" value="imagenes/user/avatar/avt12.png" id="avatar12">
                    <div class="img-bg" style="background-image: url(imagenes/user/avatar/avt12.png);background-position:center;">
                        <img src="assets/images/bg_300.png" alt="">
                    </div>
                </div>
                <div class="avatarimg cont-img img_avatar13" id="img_avatar13">
                    <input type="hidden" value="imagenes/user/avatar/avt13.png" id="avatar13">
                    <div class="img-bg" style="background-image: url(imagenes/user/avatar/avt13.png);background-position:center;">
                        <img src="assets/images/bg_300.png" alt="">
                    </div>
                </div>
                <div class="avatarimg cont-img img_avatar14" id="img_avatar14">
                    <input type="hidden" value="imagenes/user/avatar/avt14.png" id="avatar14">
                    <div class="img-bg" style="background-image: url(imagenes/user/avatar/avt14.png);background-position:center;">
                        <img src="assets/images/bg_300.png" alt="">
                    </div>
                </div>
                <div class="avatarimg cont-img img_avatar15" style="background: #a31e14;" id="img_avatar15">
                    <input type="hidden" value="imagenes/user/avatar/avt15.png" id="avatar15">
                    <div class="img-bg" style="background-image: url(imagenes/user/avatar/avt15.png);background-position:center;">
                        <img src="assets/images/bg_300.png" alt="">
                    </div>
                </div>
                <div class="avatarimg cont-img img_avatar16" id="img_avatar16">
                    <input type="hidden" value="imagenes/user/avatar/avt16.png" id="avatar16">
                    <div class="img-bg" style="background-image: url(imagenes/user/avatar/avt16.png);background-position:center;">
                        <img src="assets/images/bg_300.png" alt="">
                    </div>
                </div>
                <div class="avatarimg cont-img img_avatar17" id="img_avatar17">
                    <input type="hidden" value="imagenes/user/avatar/avt17.png" id="avatar17">
                    <div class="img-bg" style="background-image: url(imagenes/user/avatar/avt17.png);background-position:center;">
                        <img src="assets/images/bg_300.png" alt="">
                    </div>
                </div>
                <div class="avatarimg cont-img img_avatar18" id="img_avatar18">
                    <input type="hidden" value="imagenes/user/avatar/avt18.png" id="avatar18">
                    <div class="img-bg" style="background-image: url(imagenes/user/avatar/avt18.png);background-position:center;">
                        <img src="assets/images/bg_300.png" alt="">
                    </div>
                </div>
                <form action="cambiar_avatar.php" method="POST">
                    <div class="cont-btn">
                        <input type="hidden" name="id" value="1047371134
">
                        <input type="hidden" name="avatar" value="" id="cargar_avatar">
                        <input type="submit" value="Cambiar Avatar" style="margin: 4px;" class="btn-cot">
                    </div>
                </form>
                <script>
                    //let btnavatar = document.getElementById("btnavatar");


                    function abrir() {
                        let avatars = document.getElementById("avatars");
                        avatars.style.display = "flex";
                    }

                    function cerrar1() {
                        let avatars = document.getElementById("avatars");
                        avatars.style.display = "none";
                    }
                </script>
                <script>
                    for (let i = 1; i < 19; i++) {
                        document.getElementById("img_avatar" + i).addEventListener("click", myFunction);


                        function myFunction() {


                            document.getElementById("img_avatar" + i).style.backgroundColor = "#D52B1E"

                            avatar = document.getElementById("avatar" + i).value
                            document.getElementById("cargar_avatar").value = avatar;
                            console.log(i);

                            for (var a = 1; a < 19; a++) {

                                if (a == i) {

                                } else
                                    document.getElementById("img_avatar" + a).style.backgroundColor = "transparent"
                            }

                        }

                    }
                </script>
            </div>
            <div class="update" id="update">
                <form action="profile_update.php" method="POST">
                    <div class="cont_update pad2">
                        <div class="btnavatar" onclick="cerrar()">
                            <span class="icon-close" alt="Editar"></span>
                        </div>

                        <div class="cont-form pad1">
                            <select id="primerSelect" class="form-control" name="ciudad" onchange="cargarSegundoSelect()">
                                <option value="">Selecciona...</option>
                                Warning: Undefined variable $selected in C:\xampp\htdocs\base\panel\prof.php on line 104
                                <option value="2">Acacias</option>
                                Warning: Undefined variable $selected in C:\xampp\htdocs\base\panel\prof.php on line 104
                                <option value="3">Aguachica</option>
                                Warning: Undefined variable $selected in C:\xampp\htdocs\base\panel\prof.php on line 104
                                <option value="4">Apartado</option>
                                Warning: Undefined variable $selected in C:\xampp\htdocs\base\panel\prof.php on line 104
                                <option value="5">Armenia</option>
                                Warning: Undefined variable $selected in C:\xampp\htdocs\base\panel\prof.php on line 104
                                <option value="6">Barrancabermeja</option>
                                Warning: Undefined variable $selected in C:\xampp\htdocs\base\panel\prof.php on line 104
                                <option value="7">Barranquilla</option>
                                Warning: Undefined variable $selected in C:\xampp\htdocs\base\panel\prof.php on line 104
                                <option value="8">Bello</option>
                                Warning: Undefined variable $selected in C:\xampp\htdocs\base\panel\prof.php on line 104
                                <option value="9">Bogota D.C.</option>
                                Warning: Undefined variable $selected in C:\xampp\htdocs\base\panel\prof.php on line 104
                                <option value="10">Bucaramanga</option>
                                Warning: Undefined variable $selected in C:\xampp\htdocs\base\panel\prof.php on line 104
                                <option value="11">Buenaventura</option>
                                Warning: Undefined variable $selected in C:\xampp\htdocs\base\panel\prof.php on line 104
                                <option value="12">Cali</option>
                                Warning: Undefined variable $selected in C:\xampp\htdocs\base\panel\prof.php on line 104
                                <option value="13">Cartagena</option>
                                Warning: Undefined variable $selected in C:\xampp\htdocs\base\panel\prof.php on line 104
                                <option value="14">Cartago</option>
                                Warning: Undefined variable $selected in C:\xampp\htdocs\base\panel\prof.php on line 104
                                <option value="15">Caucasia</option>
                                Warning: Undefined variable $selected in C:\xampp\htdocs\base\panel\prof.php on line 104
                                <option value="16">Chia</option>
                                Warning: Undefined variable $selected in C:\xampp\htdocs\base\panel\prof.php on line 104
                                <option value="17">Cucuta</option>
                                Warning: Undefined variable $selected in C:\xampp\htdocs\base\panel\prof.php on line 104
                                <option value="18">Duitama</option>
                                Warning: Undefined variable $selected in C:\xampp\htdocs\base\panel\prof.php on line 104
                                <option value="19">Envigado</option>
                                Warning: Undefined variable $selected in C:\xampp\htdocs\base\panel\prof.php on line 104
                                <option value="20">Florencia</option>
                                Warning: Undefined variable $selected in C:\xampp\htdocs\base\panel\prof.php on line 104
                                <option value="21">Floridablanca</option>
                                Warning: Undefined variable $selected in C:\xampp\htdocs\base\panel\prof.php on line 104
                                <option value="22">Fusagasuga</option>
                                Warning: Undefined variable $selected in C:\xampp\htdocs\base\panel\prof.php on line 104
                                <option value="23">Girardot</option>
                                Warning: Undefined variable $selected in C:\xampp\htdocs\base\panel\prof.php on line 104
                                <option value="24">Ibague</option>
                                Warning: Undefined variable $selected in C:\xampp\htdocs\base\panel\prof.php on line 104
                                <option value="25">Ipiales</option>
                                Warning: Undefined variable $selected in C:\xampp\htdocs\base\panel\prof.php on line 104
                                <option value="26">Itagui</option>
                                Warning: Undefined variable $selected in C:\xampp\htdocs\base\panel\prof.php on line 104
                                <option value="27">La Dorada</option>
                                Warning: Undefined variable $selected in C:\xampp\htdocs\base\panel\prof.php on line 104
                                <option value="28">Manizales</option>
                                Warning: Undefined variable $selected in C:\xampp\htdocs\base\panel\prof.php on line 104
                                <option value="29">Medell?n
                                </option>
                                Warning: Undefined variable $selected in C:\xampp\htdocs\base\panel\prof.php on line 104
                                <option value="30">Monteria</option>
                                Warning: Undefined variable $selected in C:\xampp\htdocs\base\panel\prof.php on line 104
                                <option value="31">Mosquera</option>
                                Warning: Undefined variable $selected in C:\xampp\htdocs\base\panel\prof.php on line 104
                                <option value="32">Neiva</option>
                                Warning: Undefined variable $selected in C:\xampp\htdocs\base\panel\prof.php on line 104
                                <option value="33">Palmira</option>
                                Warning: Undefined variable $selected in C:\xampp\htdocs\base\panel\prof.php on line 104
                                <option value="34">Pasto</option>
                                Warning: Undefined variable $selected in C:\xampp\htdocs\base\panel\prof.php on line 104
                                <option value="35">Pereira</option>
                                Warning: Undefined variable $selected in C:\xampp\htdocs\base\panel\prof.php on line 104
                                <option value="36">Popayan</option>
                                Warning: Undefined variable $selected in C:\xampp\htdocs\base\panel\prof.php on line 104
                                <option value="37">Quibdo
                                </option>
                                Warning: Undefined variable $selected in C:\xampp\htdocs\base\panel\prof.php on line 104
                                <option value="38">Riohacha</option>
                                Warning: Undefined variable $selected in C:\xampp\htdocs\base\panel\prof.php on line 104
                                <option value="39">Rionegro</option>
                                Warning: Undefined variable $selected in C:\xampp\htdocs\base\panel\prof.php on line 104
                                <option value="40">Sabaneta</option>
                                Warning: Undefined variable $selected in C:\xampp\htdocs\base\panel\prof.php on line 104
                                <option value="41">San Andres</option>
                                Warning: Undefined variable $selected in C:\xampp\htdocs\base\panel\prof.php on line 104
                                <option value="42">Santa Marta</option>
                                Warning: Undefined variable $selected in C:\xampp\htdocs\base\panel\prof.php on line 104
                                <option value="43">Sincelejo</option>
                                Warning: Undefined variable $selected in C:\xampp\htdocs\base\panel\prof.php on line 104
                                <option value="44">Soacha</option>
                                Warning: Undefined variable $selected in C:\xampp\htdocs\base\panel\prof.php on line 104
                                <option value="45">Sogamoso</option>
                                Warning: Undefined variable $selected in C:\xampp\htdocs\base\panel\prof.php on line 104
                                <option value="46">Tulua</option>
                                Warning: Undefined variable $selected in C:\xampp\htdocs\base\panel\prof.php on line 104
                                <option value="47">Tumaco</option>
                                Warning: Undefined variable $selected in C:\xampp\htdocs\base\panel\prof.php on line 104
                                <option value="48">Tunja</option>
                                Warning: Undefined variable $selected in C:\xampp\htdocs\base\panel\prof.php on line 104
                                <option value="49">Valledupar</option>
                                Warning: Undefined variable $selected in C:\xampp\htdocs\base\panel\prof.php on line 104
                                <option value="50">Villavicencio</option>
                                Warning: Undefined variable $selected in C:\xampp\htdocs\base\panel\prof.php on line 104
                                <option value="51">Yopal</option>
                                Warning: Undefined variable $selected in C:\xampp\htdocs\base\panel\prof.php on line 104
                                <option value="52">Zipaquira
                                </option>
                            </select>
                        </div>
                        <div class="cont-form pad1">
                            <div id="segundoSelectContainer">
                                <select class="form-control">
                                    <option value="">Selecciona la Ciudad</option>
                                </select>
                            </div>
                        </div>
                        <div class="cont-form pad1">
                            <input type="hidden" name="id" value="18">
                            <input type="submit" value="Cambiar" class="btn-cot">
                        </div>
                    </div>
                </form>
                <script>
                    /*let cambiarcav = document.getElementById("cambiarcav");
            cambiarcav.addEventListener("click", cambiar);*/

                    function cambiar() {

                        let update = document.getElementById("update");
                        update.style.display = "flex";
                    }

                    /*let cerrar = document.getElementById("cerrar");
                    cerrar.addEventListener("click", cerrar);*/

                    function cerrar() {

                        let update = document.getElementById("update");
                        update.style.display = "none";
                    }
                </script>
                -->
            </div>
        </div>



    </div>
</body>