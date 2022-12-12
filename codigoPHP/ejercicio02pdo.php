<!DOCTYPE html>

<html>


    <head>
        <title>EJERCICIO 02 PDO</title>
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
        <a href="../indexProyectoTema4.php"><img src="../doc/atras.png" onmouseover="this.width = 50;" onmouseout="this.width = 39;"width="39" title="linkedin" class=".icono_cv" /></a>
        <ins> <h1>Ejercicio 2 : Mostrar el contenido de la tabla Departamento y el número de registros.</h1></ins>










        <?php
        require_once '../config/confDBPDO.php';
        /*
         * @author: ALEJANDRO OTÁLVARO MARULANDA
         * @since: 09 11 2022
         */


        try {
            $myDB = new PDO(DSN, USUARIO, CONTRA); //CONEXION A LA BDD CON SUS ATRIBUTOS (DSN, NOMBRE DE USUARIO, CONTRASEÑA)
            echo " <h3> Se ha establecido la conexión con estos parametros: <br> <strong>DSN" . DSN . ", Usuario: " . USUARIO. ", Contraseña:" . CONTRA. "</h3></strong><br>";
            echo '<br>';

            $consulta = $myDB->query("SELECT * FROM Departamento");
            $consulta->execute();
            //$resultado = $consulta->fetchAll();

            printf("<h4>Número de registros: %s</h4><br>", $consulta->rowCount());
            $registroObjeto = $consulta->fetch(PDO::FETCH_OBJ);

            echo "<table><thead><tr><th>CodDepartamento</th><th>DescDepartamento</th><th>FechaAlta</th><th>FechaBaja</th><th>VolumenNegocio</th></tr></thead><tbody>";

            while ($registroObjeto != null) {
                echo '<tr>';
                foreach ($registroObjeto as $datos => $valor) {
                    echo "<td>$valor</td>";
                }
                echo '</tr>';
                $registroObjeto = $consulta->fetch(PDO::FETCH_OBJ);
            }
            echo "</tbody></table>";
        } catch (PDOException $exception) {
            echo'<h1> ERRORES DE CONEXION: </h1> <br>';
            echo 'Error: ' . $exception->getMessage();
        }

        unset($myDB);
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
