<?php
session_start();
$_SESSION['Pregunta3'] = $_POST['preg3'];
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
        <form method="POST" action="pregunta4.php">
            <table border="1" width="700" cellspacing="10" cellpadding="0">
                <tr>
                    <th colspan="2">¿Cuál cree usted que deben ser las medidas que las autoridades deben aplicar para combatir estas incidencias?</th>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <input type="radio" name="preg4" value="Mayor números de policías" />Mayor números de policías<br/>
                        <input type="radio" name="preg4" value="Mayor profesionalismo de las autoridades" />Mayor profesionalismo de las autoridades<br/>
                        <input type="radio" name="preg4" value="Aumentar las penas y que sean ejecutadas" />Aumentar las penas y que sean ejecutadas<br/>
                        <input type="radio" name="preg4" value="Nada" />Nada
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <input type="submit" value="< Anterior" onclick="this.form.action='pregunta3.php'" />
                        <input type="submit" value="Siguiente >" onclick="this.form.action='pregunta5.php'" />
                    </td>
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
