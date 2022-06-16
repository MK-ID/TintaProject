<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="iso-8859-1"/>
<meta http-equiv="Content-Type" content="5;URL=http://www.logistica.mype.com.pe">
<meta http-equiv="Content-Type" content="5;URL=http://www.mype.com.pe">
<title> Portal Mype </title>
<link rel="stylesheet" href="estilo.css">
</head>
<body>
<div id="agrupar">
<header id="cabecera">
<h1> Bienvenidos a Personal</h1>
</header>
 <section id="seccion">
 <article>
        <h1>Escoja una unidad: </h1>
        <form action='index.php' method='post'>
        <select id="escoger" name="unidad">
                <option value="RRHH">RRHH</option>
                <option value="Logistica">Logistica</option>
                <option value="Finanzas">Finanzas</option>
        </select>
        <br>
        <input type="submit" name="enviar" value ="Buscar">
        </form>
        <table border="1">
                <tr>
                        <td>DNI</td>
                        <td>Apellidos</td>
                        <td>Nombre</td>
			<td>Edad</td>
                        <td>Unidad de trabajo</td>
                </tr>
                <?php //php desde aqui
                $servidor = "192.168.1.251";
                $usuario = "cesar";
                $contra = "tinta@1234";
                $basedatos ="proyecto";
                $conectar = $_POST['unidad'];
                $conexion = mysqli_connect($servidor, $usuario, $contra, $basedatos);
                $sentencia = "select * from tPersonas where Unidad='$conectar'";
                $lb=mysqli_query($conexion,$sentencia);
                while($registro = mysqli_fetch_array($lb))
                {
                ?>
                <tr border="1px">
                        <td><?php echo $registro['DNI'];?></td>
                        <td><?php echo $registro['ApPaterno'];?></td>
                        <td><?php echo $registro['Nombre'];?></td>
			<td><?php echo $registro['Edad'];?></td>
                        <td><?php echo $registro['Unidad'];?></td>
                </tr>
                <?php
                }
                ?>
        </table>
 </article>
 <article>
 Prestamos asesoria en:
 <ul>
 <li id="lista">Proyectos de redes de computadores
bajo especificaciones de cableado estructurado</li>
 <li id="lista">Proyectos de telefonia IP</li>
 <li id="lista">Proyectos de redes inalambricas
rurales</li>
 <li id="lista">Proyectos de desarrollo e
implementacion de sistemas de informacion</li>
 <li id="lista">Proyectos de capacitacion en
TIC</li>
 </ul>
 </article>
 <blockquote>Historias de exito</blockquote>
<blockquote>Nos recomiendan</blockquote>
</aside>
 <footer id="pie">
 <small>personal.mype.com.pe - Derechos reservados &copy;
2022</small>
</footer>
</section>
 <aside id="columna">
 <nav id="menu">
         <ul>
                <li><a href="http://www.mype.com.pe">Principal</a></li><Br>
                <li><a href="http://www.logistica.mype.com.pe">Logistica</a></li><Br>
                <li><a href="http://www.personal.mype.com.pe">Personal</a></li><Br>
                 
         </ul>
 </nav>
 </aside>
 </div>
</body>
</html>
