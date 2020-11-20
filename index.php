<!DOCTYPE html>
<html lang="es">
<head>
    <?php include_once('template/head.php')?>
</head>
<body class="bg-pruple">
    <section class="mx-width mx-auto">
        <div class="w-100 row mx-auto">
            <div class="col-md-7 mt-5 mb-5">
                <img src="./assets/images/logo_converge.svg" alt="logo">
                <h5 class="text-uppercase c-white mt-3 font-weight-bold lh-text-title fs-18">la primera plataforma de publicidad digital que te garantiza un volumen de ventas.</h5>
                <p class="mt-2 c-white col-10 ml-4">
                    Integramos su negocio en un sistema de tecnología en el que solo debe invertir en publicidad digital y <span class="f-900">Converge360</span> medirá su retorno de inversión en ventas cobradas en tiempo real.
                </p>
                <p class="mt-2 c-white col-10 ml-4">
                    <span class="f-900">Converge 360</span> es un sistema de autogestión de inversiones publicitarias que garantiza rentabilidad sobre la inversión.
                </p>
                <hr>
                <p class="mt-2 c-white col-10 ml-4">
                    Nuestra solución automatiza tareas, integra y apoya la gestión de las áreas de marketing, ventas y atención al cliente. Con Converge360, es posible visualizar toda la información de mkt y ventas con las interacciones con sus clientes en un sólo lugar de forma fácil y en informes personalizables.
                </p>
                <div class="text-center mt-4 mb-4">
                    <img src="./assets/images/grafica_converge@2x.png" class="img-fluid" alt="grafica" width="400">
                </div>
                <h5 class="text-uppercase c-white mt-3 font-weight-bold lh-text-title fs-18">Tu vista 360 de tu negocio con Converge360</h5>
                <img src="./assets/images/laptop_mkp@2x.png" class="img-fluid mt-3" alt="laptop">
                <div class="mt-5 mb-5">
                    <span class="fs-18 c-white f-700 mr-2">Partners: </span><img src="./assets/images/logo_arke@2x.png" class="img-fluid" alt="arke" width="100">
                </div>
            </div>
            <div class="col-md-5 mt-5 mb-5">
                <div class="bg-white rounded p-4 mt-2" style="position: sticky; top: 30px; bottom: 20px;">
                    <form>
                        <h6 class="text-uppercase text-center c-gray f-400">Regístrate y <br> solicita nuestro demo</h6>
                        <div class="form-group mt-4">
                            <input type="text" class="form-control form-control-sm validate" id="name" placeholder="Nombre">
                        </div>
                        <div class="form-group mt-4">
                            <input type="text" class="form-control form-control-sm validate" id="apellido" placeholder="Apellido">
                        </div>
                        <div class="form-group mt-4">
                            <input type="text" class="form-control form-control-sm validate" id="cargo" placeholder="Cargo">
                        </div>
                        <div class="form-group mt-4">
                            <input type="mail" class="form-control form-control-sm validate" id="mail" placeholder="Correo electrónico">
                        </div>
                        <div class="form-group mt-4">
                            <input type="text" class="form-control form-control-sm validate" id="phone" placeholder="Teléfono">
                        </div>
                        <div class="form-group mt-4">
                            <input type="text" class="form-control form-control-sm validate" id="empresa" placeholder="Empresa">
                        </div>
                        <div class="form-group mt-4">
                            <select class="form-control form-control-sm" id="industria">
                                <option>Industria</option>
                            </select>
                        </div>
                        <div class="form-group mt-4">
                            <select class="form-control form-control-sm" id="empleados">
                                <option>Empleados</option>
                            </select>
                        </div>
                        <p class="fs-10 f-700 col-11">Al registrarse, confirma que está de acuerdo con que Converge360 trate sus datos personales tal como se describe en la <a href="#" class="c-declaracion">Declaración de privacidad.</a></p>
                        <button id="sendData" type="button" class="btn btn-blue c-white col-12 rounded-0" disabled>Solicitar demostración</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <?php include_once('./template/footer.php') ?>
    <script src="assets/js/function.min.js"></script>
</body>
</html>