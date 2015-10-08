<!DOCTYPE html>
<html>
    
    <title>APOYO a las vistimas de minas antipersonas | Regostro</title>
    <meta charset="utf-8"/>
    <link rel="stylesheet" href="styles/style.css" type="text/css"/>
    <link rel="stylesheet" href="styles/prettyphoto.css" type="text/css"/>
    <link rel="stylesheet" href="styles/totop.css" type="text/css"/>


</head>
<body>
<div class="main-container">
    <header>
        <h1><a href="index.html">Apoyo a las victimas</a></h1>

        <p id="tagline"><strong>del conflicto armado</strong></p>
    </header>
</div>
<div class="main-container">
    <div id="sub-headline">
        <div class="tagline_left"><p id="tagline2">Tel: 123 333 4444 | Mail: <a href="mailto:email@website.com">email@website.com</a>
        </p></div>
        <div class="tagline_right">
            <form action="#" method="post">
                <fieldset>
                    <legend>Site Search</legend>
                    <input type="text" value="Search Our Website&hellip;"
                           onfocus="if (this.value == 'Search Our Website&hellip;') {this.value = '';}"
                           onblur="if (this.value == '') {this.value = 'Search Our Website&hellip;';}"/>
                    <input type="submit" name="go" id="go" value="Search"/>
                </fieldset>
            </form>
        </div>
        <br class="clear"/>
    </div>
</div>
<div class="main-container">
    <div id="nav-container">
        <nav>
            <ul class="nav">
                <li class="active"><a href="index.html">Home</a></li>
                <li><a href="typo.html">Protesis</a></li>
                <li><a href="#">Apoyo Medico</a>
                    <ul>
                        <li><a href="#">Armenia</a>
                            <ul>
                                <li><a href="armenia_tebaida_protesis.html">La tebaida</a>
                                </li>
                            </ul>
                        <li><a href="cali.html">Cali</a></li>
                    </ul>
                </li>
                <li><a href="portfolio.html">Apoyo Psicologico</a></li>
                <li><a href="gallery.html">Buscar Empleo</a></li>
                <li class="last"><a href="contact.php">Quienes Somos</a></li>
            </ul>
        </nav>
        <div class="clear"></div>
    </div>
</div>
<br/>
<br/>

</body>
</html>

<?php 
session_start();//crea una sesión para ser usada mediante una petición GET o POST, o pasado por una cookie y la sentencia include_once es la usaremos para incluir el archivo de conexión a la base de datos que creamos anteriormente.
include_once "conexion.php"; ?>

    <form action="" method="post" class="registro"> 
        <div><label>Nombre:</label> 
            <input type="text" name="usuario"></div> 
        <div><label>Email:</label> 
            <input type="text" name="email"></div> 
        <div><label>Ciudad:</label> 
            <input type="text" name="ciudad"></div> 
        <div><label>Departamento:</label> 
            <input type="text" name="departamento"></div> 
        <div><label>Nombre de Usuario:</label> 
            <input type="text" name="NomUsuario"></div> 
        <div><label>Contraseña :</label> 
            <input type="text" name="contraseña"></div> 
        <div><label>Repita Contraseña :</label> 
            <input type="text" name="repContraseña"></div> 
         <h4> Seleccione el tipo de usuario</h4>
      
            <select name="opcion" id="numtexts" onchange="crear(this.value)">
                <option value="0">Seleccionar</option>
                <option value="1">Victima</option>
                <option value="2">Medico</option>
                <option value="3">Grupo de Apoyo</option>
                <option value="4">Tienda de Protesis</option>
                <option value="5">Empleador</option>
            </select>
            
      
            <div id="contenedor"></div>

<input type="submit" name="enviar" value="Registrar"></div> 
</form> 


<?php

            $email=$_POST['email']; 
            $nombre=$_POST['usuario']; 
            $ciudad=$_POST['ciudad']; 
            $departamento=$_POST['departamento']; 
            $nomUsuario=$_POST['NomUsuario']; 
            $contraseña=$_POST['contraseña']; 
            $repContraseña=$_POST['repContraseña']; 

/*Creamos el formulario con el campo de Usuario que se llamara $_POST['usuario'] y 2 campos para la clave y uno mas para confirmar si escribió bien la clave, se llamaran $_POST['password'] y $_POST['repassword'] respectivamente, procedemos a escribir el codigo que procesara y validara lo que el usuario ingrese:*/
if(isset($_POST['enviar']))//para saber si el botón registrar fue presionado. 
{ 
    if($_POST['usuario'] == '' or $_POST['email'] == '' or $_POST['ciudad'] == ''or $_POST['departamento'] == '' or $_POST['NomUsuario'] == '' or $_POST['contraseña'] == '' or $_POST['repContraseña'] == '' ) 
    { 
        echo 'Por favor llene todos los campos.';//Si los campos están vacíos muestra el siguiente mensaje, caso contrario sigue el siguiente codigo.
    } 
    else 
    { 
                $consultaE = "SELECT email FROM usuario WHERE email = '$email' ";
                             
                 $emailconsulta = mysql_query($consultaE); 

                 if(!$emailconsulta)
                 {
                    echo "No se pudo ejecutar la consulta";
                 }

               
                 $fila=mysql_fetch_row($emailconsulta);
                 echo $fila[0];

           if($fila[0]!=$email) 
        { 
           
  
             if($_POST['contraseña'] == $_POST['repContraseña'])
             {
               mysql_query("INSERT into usuario values ('','$nombre','$email','$ciudad','$
                departamento'); "); 

                 echo 'Este usuario se ha registrado exitosamente.'; 

                  if( $_POST['opcion']=="1")
                  {
                         echo "Opcion 1";
                           $consulta = "SELECT idusuario FROM usuario WHERE email = '$email' ";
                     
                             $idconsulta = mysql_query($consulta); 

                             if(!$idconsulta)
                             {
                                echo "No se pudo ejecutar la consulta";
                             }
                             else
                             {
                                 $fila=mysql_fetch_row($idconsulta);
                                  echo $fila[0];

                                 mysql_query( "INSERT INTO uvictima VALUES('', '$contraseña', '$nomUsuario', '$fila[0]', '1') ;");
                             }

             
                  }
                   if( $_POST['opcion']=="2")
                  {
                         echo "Opcion 2";
                           $consulta = "SELECT idusuario FROM usuario WHERE email = '$email' ";
                     
                             $idconsulta = mysql_query($consulta); 

                             if(!$idconsulta)
                             {
                                echo "No se pudo ejecutar la consulta";
                             }
                             else
                             {
                                 $fila=mysql_fetch_row($idconsulta);
                                  echo $fila[0];

                                 mysql_query( "INSERT INTO umedico VALUES('', '$contraseña', '$nomUsuario', '$fila[0]', '2') ;");
                             }

             
                  }
                   if( $_POST['opcion']=="3")
                  {
                         echo "Opcion 3";
                           $consulta = "SELECT idusuario FROM usuario WHERE email = '$email' ";
                     
                             $idconsulta = mysql_query($consulta); 

                             if(!$idconsulta)
                             {
                                echo "No se pudo ejecutar la consulta";
                             }
                             else
                             {
                                 $fila=mysql_fetch_row($idconsulta);
                                  echo $fila[0];

                                 mysql_query( "INSERT INTO ugrupoapoyo VALUES('', '$contraseña', '$nomUsuario', '$fila[0]', '3') ;");
                             }

             
                  }
                    if( $_POST['opcion']=="4")
                  {
                         echo "Opcion 4";
                           $consulta = "SELECT idusuario FROM usuario WHERE email = '$email' ";
                     
                             $idconsulta = mysql_query($consulta); 

                             if(!$idconsulta)
                             {
                                echo "No se pudo ejecutar la consulta";
                             }
                             else
                             {
                                 $fila=mysql_fetch_row($idconsulta);
                                  echo $fila[0];

                                 mysql_query( "INSERT INTO utiendaprotesis VALUES('', '$contraseña', '$nomUsuario', '$fila[0]', '4') ;");
                             }

             
                  }
                       if( $_POST['opcion']=="5")
                  {
                         echo "Opcion 5";
                           $consulta = "SELECT idusuario FROM usuario WHERE email = '$email' ";
                     
                             $idconsulta = mysql_query($consulta); 

                             if(!$idconsulta)
                             {
                                echo "No se pudo ejecutar la consulta";
                             }
                             else
                             {
                                 $fila=mysql_fetch_row($idconsulta);
                                  echo $fila[0];

                                 mysql_query( "INSERT INTO uempleador VALUES('', '$contraseña', '$nomUsuario', '$fila[0]', '5') ;");
                             }

             
                  }



                
                




             }
             else
             {
                echo "Las contraseñas no considen";
             }
         }
        else 
        {  
            
             echo "Ya se encuentra registrado";
        } 
          
                
    } 

}?> 


            
            


            <?php

            if(isset($_POST))
                { 

                    if( $_POST['opcion']=="1"){
                         echo "Opcion 1";
                    }
                   
                }

            ?>

<footer>
    <p class="tagline_left">Copyright &copy; 2011 - All Rights Reserved - <a href="#">Domain Name</a></p>

    <p class="tagline_right">Design by <a href="http://www.priteshgupta.com/" title="Pritesh Gupta" target="_blank">PriteshGupta.com</a>
    </p>
    <br class="clear"/>
</footer>

