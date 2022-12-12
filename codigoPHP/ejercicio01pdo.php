<!DOCTYPE html>

<html>


    <head>
        <title>EJERCICIO 01 PDO</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Tipografía -->
        <link href="https://fonts.googleapis.com/css2?family=Chela+One&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Indie+Flower&family=Lobster&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Architects+Daughter&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300&display=swap" rel="stylesheet">





        <style>

            body{
                background-color: mistyrose;
            }
            h1{

                font-family: 'Quicksand', sans-serif;

            }

            table {

                border-collapse: none;
                border: black solid 0.1em;
                font-family: 'Arial'
            }

            tr td{

                padding-left: 15px;
            }


            td {
                border: 1px solid black;
            }

            footer {
                background-color: grey;
                bottom: 0;
                position: fixed;
                width: 100%;
                font-size: 1em;
                font-family: 'Chela One', cursive;
                text-align: center;
                padding-top: 20px;
                padding-bottom: 30px;
                left: 0px;

            }

            strong {

                font-size: 16pt;
            }

            .icono_cv {
                position: absolute;
                top: 25px;
                left: 100px;
            }

            .icono_link {
                position: absolute;
                top: 25px;
                right: 200px;
            }
        </style>

    </head>
    <body>
        <a href="../indexProyectoTema4.php"><img src="../doc/atras.png" onmouseover="this.width = 50;" onmouseout="this.width = 39;"width="39" title="atras" class=".icono_cv" /></a>
        <ins> <h1>Ejercicio 1: Conexión a la base de datos con la cuenta usuario y tratamiento de errores</h1></ins>

        <?php
        require_once '../config/confDBPDO.php';

        /*
         * @author: ALEJANDRO OTÁLVARO MARULANDA
         * @since: 09 11 2022
         */
//CREACION DE VARIABLES CON LOS DATOS PARA LA CONEXION
//        define("dsn", 'mysql:dbname=DAW206DBDepartamentos;host=192.168.20.19');
//        define("usuario", 'usuarioDAW206DBDepartamentos');
//        define("contra", 'paso');
//        $aAtributos = array();
//        try {
//            $myDB = new PDO(dsn, usuario, contra); //CONEXION A LA BDD CON SUS ATRIBUTOS (DSN, NOMBRE DE USUARIO, CONTRASEÑA)
////Mete en un array los atributos de PDO
//            $aAtributos = ["AUTOCOMMIT", "ERRMODE", "CASE", "CLIENT_VERSION", "CONNECTION_STATUS",
//                "ORACLE_NULLS", "PERSISTENT", "PREFETCH", "SERVER_INFO", "SERVER_VERSION",
//                "TIMEOUT"];
//
//            echo 'Se ha establecido la conexión con estos parametros: <br> <strong>DSN: ' . dsn . ' , Usuario: ' . usuario . 'Contraseña: ' . contra . '</strong><br>';
//            echo '<br>';
//            echo '<table>'; //Inicio de la creación de la tabla.
////Recorremos el array de atributos $aAttributes
//            foreach ($aAtributos as $atributos) {
//
//                echo '<tr>';
//                echo '<td>' . " PDO::ATTR_$atributos" . '</td>';
//                echo '<td>' . $myDB->getAttribute(constant("PDO::ATTR_$atributos")) . '</td>';
//                echo '</tr>';
//            }
//            echo '</table>'; //Cerramos tabla.
//        } catch (PDOException $exception) {
//
//            echo 'Error: ' . $exception->getMessage();
//        }
//
//        echo '<br>';
//        unset($myDB);
//MOSTRAR ATRIBUTOS ESPECIFICADOS SIN FOREACH
//echo 'AUTOCOMMIT: ' . $myDB->getAttribute(PDO::ATTR_AUTOCOMMIT) . '<br>';
//echo 'CASE: ' . $myDB->getAttribute(PDO::ATTR_CASE) . '<br>';
//echo 'CLIENT_VERSION: ' . $myDB->getAttribute(PDO::ATTR_CLIENT_VERSION) . '<br>';
//echo 'CONNECTION STATUS: ' . $myDB->getAttribute(PDO::ATTR_CONNECTION_STATUS) . '<br>';
//echo 'DRIVER_NAME: ' . $myDB->getAttribute(PDO::ATTR_DRIVER_NAME) . '<br>';
//echo 'ERROR_MODE: ' . $myDB->getAttribute(PDO::ATTR_ERRMODE) . '<br>';
//echo 'ORACLE_NULLS: ' . $myDB->getAttribute(PDO::ATTR_ORACLE_NULLS) . '<br>';
////echo 'PERSISTENT: ' . $myDB->getAttribute(PDO::ATTR_PERSISTENT) . '<br>';
////echo 'PREFETCH: ' . $myDB->getAttribute(PDO::ATTR_PREFETCH) . '<br>';
//echo 'SERVER_INFO: ' . $myDB->getAttribute(PDO::ATTR_SERVER_INFO) . '<br>';
//echo 'SERVER_VERSION: ' . $myDB->getAttribute(PDO::ATTR_SERVER_VERSION) . '<br>';
////echo 'TIMEOUT: ' . $myDB->getAttribute(PDO::ATTR_TIMEOUT) . '<br>';
//Datos de prueba para que falle la conexion. Igual que la buena conexion pero con datos erroneos.
//        $dsnMal = 'mysql:dbname=DAWDepartamentos;host=192.168.3.214';
//        $usuarioMal = 'adminsqla';
//        $contraMal = 'pasoa';
//        try {
//            $myDBMal = new PDO($dsnMal, $usuario, $contraMal);
//        } catch (PDOException $exception) {
//            echo'<h1> ERRORES DE CONEXION: </h1> <br>';
//            echo 'Error: ' . $exception->getMessage() . '<br>';
//        }
//
//
//
//
//
      
//        try {
//            $myDBCasa = new PDO($dsnCasa, $usuarioCasa, $contraCasa);
//            echo'<h3> Te has conectado desde tu Casa.</h3>';
//            echo '<br>';
//            echo '<table>'; //Inicio de la creación de la tabla.
////Recorremos el array de atributos $aAttributes
//            foreach ($aAtributos as $atributos) {
//                echo '<tr>';
//                echo '<td>' . " PDO::ATTR_$atributos" . '</td>';
//                echo '<td>' . $myDB->getAttribute(constant("PDO::ATTR_$atributos")) . '</td>';
//                echo '</tr>';
//            }
//            echo '</table>'; //Cerramos tabla.
//        } catch (PDOException $exception) {
//            echo'<h1> ERRORES DE CONEXION: </h1> <br>';
//            echo 'Error: ' . $exception->getMessage() . '<br>';
//        }

//  define("dsn", 'mysql:dbname=DAW206DBDepartamentos;host=192.168.20.19');
//        define("usuario", 'usuarioDAW206DBDepartamentos');
//        define("contra", 'paso');
//        $aAtributos = array();
//        try {
//            $myDB = new PDO(dsn, usuario, contra); //CONEXION A LA BDD CON SUS ATRIBUTOS (DSN, NOMBRE DE USUARIO, CONTRASEÑA)
////Mete en un array los atributos de PDO
//            $aAtributos = ["AUTOCOMMIT", "ERRMODE", "CASE", "CLIENT_VERSION", "CONNECTION_STATUS",
//                "ORACLE_NULLS", "PERSISTENT", "PREFETCH", "SERVER_INFO", "SERVER_VERSION",
//                "TIMEOUT"];
//
//            echo 'Se ha establecido la conexión con estos parametros: <br> <strong>DSN: ' . dsn . ' , Usuario: ' . usuario . 'Contraseña: ' . contra . '</strong><br>';
//            echo '<br>';
//            echo '<table>'; //Inicio de la creación de la tabla.
////Recorremos el array de atributos $aAttributes
//            foreach ($aAtributos as $atributos) {
//
//                echo '<tr>';
//                echo '<td>' . " PDO::ATTR_$atributos" . '</td>';
//                echo '<td>' . $myDB->getAttribute(constant("PDO::ATTR_$atributos")) . '</td>';
//                echo '</tr>';
//            }
//            echo '</table>'; //Cerramos tabla.
//        } catch (PDOException $exception) {
//
//            echo 'Error: ' . $exception->getMessage();
//        }



        $aAtributos = array();
        try {
            $myDB = new PDO(DSN, USUARIO, CONTRA); //CONEXION A LA BDD CON SUS ATRIBUTOS (DSN, NOMBRE DE USUARIO, CONTRASEÑA)
//Mete en un array los atributos de PDO
            $aAtributos = ["AUTOCOMMIT", "ERRMODE", "CASE", "CLIENT_VERSION", "CONNECTION_STATUS",
                "ORACLE_NULLS", "PERSISTENT", "PREFETCH", "SERVER_INFO", "SERVER_VERSION",
                "TIMEOUT"];

            echo 'Se ha establecido la conexión con estos parametros: <br> <strong>DSN: ' . DSN . ' , Usuario: ' . USUARIO . 'Contraseña: ' . CONTRA . '</strong><br>';
            echo '<br>';
            echo '<table>'; //Inicio de la creación de la tabla.
//Recorremos el array de atributos $aAttributes
            foreach ($aAtributos as $atributos) {

                echo '<tr>';
                echo '<td>' . " PDO::ATTR_$atributos" . '</td>';
                echo '<td>' . $myDB->getAttribute(constant("PDO::ATTR_$atributos")) . '</td>';
                echo '</tr>';
            }
            echo '</table>'; //Cerramos tabla.
        } catch (PDOException $exception) {

            echo 'Error: ' . $exception->getMessage();
        }





        ?>

        <footer>
            <a href="/../index.php" style="text-decoration:none">
                <img src="../doc/home.png" alt="inicio" onmouseover="this.width = 50;this.height = 50;"
                     onmouseout="this.width = 39;this.height = 39;" width="39" title="inicio" />
            </a>
            <a href="../doc/CV.pdf" target="_blank" style="text-decoration: none">
                <img src="../doc/cv-logo.png" alt="curriculum" onmouseover="this.width = 50;" onmouseout="this.width = 39;"
                     width="39" title="curriculum vitae" class="icono_cv" />
            </a>

            © Alejandro Otálvaro Marulanda

            <a href="http://www.linkedin.com/in/alejandro-otálvaro-marulanda/" target="_blank"
               style="text-decoration: none">
                <img src="../doc/link2.png" alt="linkedin" onmouseover="this.width = 50;" onmouseout="this.width = 39;"
                     width="39" title="linkedin" class="icono_link" />
            </a>
        </footer>

    </body>

</html>
