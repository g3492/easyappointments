<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">

    <title>Agendar.com.ar | Instalación</title>

    <link rel="stylesheet" type="text/css" href="<?= asset_url('assets/ext/bootstrap/css/bootstrap.min.css') ?>">
    <link rel="icon" type="image/x-icon" href="<?= asset_url('assets/img/favicon.ico') ?>">
    <link rel="stylesheet" type="text/css" href="<?= asset_url('assets/ext/jquery-ui/jquery-ui.min.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?= asset_url('assets/css/installation.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?= asset_url('assets/css/general.css') ?>">
</head>
<body>
<div id="loading" class="d-none">
    <img src="<?= base_url('assets/img/loading.gif') ?>">
</div>

<header>
    <div class="container">
        <h1 class="page-title">Agendar.com.ar<br>Instalación de su sistema</h1>
    </div>
</header>

<div class="content container">
    <div class="welcome">
        <h3>Bienvenido.</h3>
        <p>
            Esta página lo guiará para configurar la instalación de su sistema. 
            Si lo está haciendo desde un celular, le recomendamos que lo coloque horizontal, 
            para facilitarle el completado de los campos.<br>
            Estos y otros parámetros, los podrá editar luego en la interface de
            administración.
            Para ello deberá ingresar al enlace <strong class="text-primary"><?= site_url('backend') ?></strong>
        </p>
    </div>

    <div class="alert d-none"></div>

    <div class="row">
        <div class="admin-settings col-12 col-sm-5" >
            <h3>Administrador</h3>

            <div class="form-group">
                <label for="first-name" class="control-label">Nombre</label>
                <input type="text" id="first-name" class="form-control"/>
            </div>

            <div class="form-group">
                <label for="last-name" class="control-label">Apellido</label>
                <input type="text" id="last-name" class="form-control"/>
            </div>

            <div class="form-group">
                <label for="email" class="control-label">Email</label>
                <input type="text" id="email" class="form-control"/>
            </div>

            <div class="form-group">
                <label for="phone-number" class="control-label">Teléfono</label>
                <input type="text" id="phone-number" class="form-control"/>
            </div>

            <div class="form-group">
                <label for="username" class="control-label">Usuario</label>
                <input type="text" id="username" class="form-control"/>
            </div>

            <div class="form-group">
                <label for="password" class="control-label">Contraseña</label>
                <input type="password" id="password" class="form-control"/>
            </div>

            <div class="form-group">
                <label for="retype-password" class="control-label">Reingrese contraseña</label>
                <input type="password" id="retype-password" class="form-control"/>
            </div>
        </div>

        <div class="company-settings col-12 col-sm-5">
            <h3>Organización/Negocio</h3>

            <div class="form-group">
                <label for="company-name" class="control-label">Nombre de la organización</label>
                <input type="text" id="company-name" class="form-control"/>
            </div>

            <div class="form-group">
                <label for="company-email" class="control-label">Email de la organización</label>
                <input type="text" id="company-email" class="form-control"/>
            </div>

            <div class="form-group">
                <label for="company-link" class="control-label">Enlace al sitio de la organización</label>
                <input type="text" id="company-link" class="form-control"/>
            </div>
        </div>
    </div>

    <br>

    <p>
    <h3>Licencia</h3>
    Este software está licenciado bajo la licencia GPL-3.0.<br>
    Al utilizar este software de cualquier manera Ud. da su acuerdo a los términos incluídos en el
    siguiente link:
    <a href="https://www.gnu.org/licenses/gpl-3.0.en.html">Licencia GPL-3.0</a>
    </p>

    <br>

    <p>
    <h3>Finalizar</h3>
        Podrá configurar los horarios y otros detalles de sus servicios en la página de administración,
        luego de que se complete la instalación.
        <br>
        Haga click en el botón de más abajo, para finalizar la instalación.
    </p>


    <br>

    <button type="button" id="install" class="btn btn-success btn-large">
        <i class="icon-white icon-ok mr-2"></i>
        Instalar la aplicación
    </button>
</div>

<footer>
    Powered by <a href="https://agendar.com.ar">agendar.com.ar</a>
</footer>

<script>
    var GlobalVariables = {
        csrfToken: <?= json_encode($this->security->get_csrf_hash()) ?>,
        baseUrl: <?= json_encode(config('base_url')) ?>
    };

    var EALang = <?= json_encode($this->lang->language) ?>;
</script>

<script src="<?= asset_url('assets/ext/jquery/jquery.min.js') ?>"></script>
<script src="<?= asset_url('assets/ext/jquery-ui/jquery-ui.min.js') ?>"></script>
<script src="<?= asset_url('assets/ext/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
<script src="<?= asset_url('assets/ext/datejs/date.min.js') ?>"></script>
<script src="<?= asset_url('assets/js/polyfill.js') ?>"></script>
<script src="<?= asset_url('assets/js/general_functions.js') ?>"></script>
<script src="<?= asset_url('assets/js/installation.js') ?>"></script>
</body>
</html>
