<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" context="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Formulario de Contacto</h1>
    <form action="" method="POST">
        <label for="correo">Correo:</label><br>
        <input type="email" name="correo"><br>
        <label for="comentario">Comentario:</label><br>
        <textarea name="comentario" id="comentario" cols="30" rows="10">

        </textarea>
        <br>
        <label for="tipo">Tipo:</label><br>
        <select name="tipo" id="">
            <option value="Alumno">Alumno</option>
            <option value="Empleado">Empleado</option>
        </select>
        <input type="submit" name="enviar">
    </form>
</body>
</html>