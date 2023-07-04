<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <h1>Nuevo Medico</h1>
        <div class="cont-medico">
            <form action="/medico/new" method="post">
                <div class="cont-group">
                <label for="txtNombre">Nombre</label>
                <input type="text" name="txtNombre" id="">
                </div>
                <div class="cont-group">
                <label for="txtDocumento">Documento</label>
                <input type="number" name="txtDocumento" id="">
                </div>
                <div class="cont-group">
                <label for="txtfechaNac">Fecha Nacimiento</label>
                <input type="date" name="txtfechaNac" id="">
                </div>
                <div class="cont-group">
                <label for="txtGenero">Genero</label>
                <input type="text" name="txtGenero" id="">
                </div>
                <div class="cont-group">
                <label for="txtEmail">Email</label>
                <input type="email" name="txtEmail" id="">
                </div>
                <div class="cont-group">
                <label for="txtPerfil">Perfil profesional</label>
                <input type="text" name="txtPerfil" id="">
                </div>
                <div class="cont-group">
                <label for="txtFecha_I">Fecha de ingreso</label>
                <input type="date" name="txtFecha_I" id="">
                </div>
                <div class="cont-group">
                <label for="txtAExp">Años de experiencia</label>
                <input type="number" name="txtAExp" id="">
                </div>
                <div class="cont-group">
                <label for="txtCodUser">Codigo de usuario</label>
                <input type="number" name="txtCodUser" id="">
                </div>
                <div class="cont-group">
                <input type="submit" value="Guardar">
                </div>
            </form>
        </div>
    </div>
</body>
</html>