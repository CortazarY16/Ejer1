<?php
session_start();
$_SESSION['nombres']=$_POST['txtNombres'];
$_SESSION['dni']=$_POST['txtDNI'];
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title></title>
    <link href="estilo.css" rel="stylesheet">
</head>
<body>
<header>
    <?php include 'encabezado.php'; ?>
    <img src="img1.jpg" width="750" height="220"/>
    <h3 id="centrado">ENCUESTA DE INSEGURIDAD DEL CIUDADANO EN LA CIUDAD DE LIMA</h3>

</header>
<section>
    <form method="POST" action="pregunta1.php">
        <table border="1" width="700" cellspacing="10" cellpadding="0">
            <tr>
                <td>Nombres y apellidos</td>
                <td><input type="text" name="txtNombres" size="50" /></td>
            </tr>
            <tr>
                <td>Numero DNI</td>
                <td><input type="text" name="txtDNI" size="30" maxlength="8" /></td>
            </tr>
            <tr>
                <td>Empezar con la encuesta >>> </td>
                <td><input type="submit" value="Encuesta" /></td>
            </tr>
 
        </tr>      
        </table>

    </form>
</section>
<footer>
    <?php include 'pie.php';?>
    <h4 id="centrado">Todos los derechos reservados manueltorres@2015</h4>
</footer>
</body>
</html>
