<!DOCTYPE html>

<html>


    <head>
        <title>EJERCICIO 04 PDO</title>
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
        <ins> <h1>Ejercicio 3 : Formulario para añadir un departamento a la tabla Departamento con validación de entrada y control de errores.</h1></ins>



        <?php
        /*
         * @author: ALEJANDRO OTÁLVARO MARULANDA
         * @since: 11 11 2022
         */
        require_once '../core/221024libreriaValidacionFormularios.php';
        require_once '../config/confDBPDO.php';

        $aErrores = ['descripcion' => null]; //Aquí se guardan errores.
        $respuesta = ''; //Aquí se guarda la respuesta.


        if (isset($_REQUEST['buscar'])) {
            $error = $aErrores['eDescDepartamento'] = validacionFormularios::comprobarAlfabetico($_REQUEST['descripcion'], 300, 1, 0); //Comprobamos que nuestros campos son correctos con alfanumerico.

            if ($error != null) {
                $_REQUEST['descripcion'] = '';
            } else {
                $respuesta = $_REQUEST['descripcion'];
            }
        }
        ?>
        <form action="./<?php echo basename($_SERVER['PHP_SELF']); ?>">
            <br>
            <label>Descripcion del departamento:
                <input type = "text" name = "descripcion" value = "<?php echo $_REQUEST['descripcion'] ?? ''; ?>"/>
            </label>

            <?php
            if ($aErrores['descripcion'] != null) {

                print '<p style="color: red";>' . $aErrores['eDescDepartamento'] . '</p>';
            }
            ?>

            <br>
            <input type="submit" name="buscar" value="Buscar" />
        </form>



        <?php
        $aRespuestas['descripcion'] = $_REQUEST['descripcion'];

        try {
            //datos para la conexión a la bd
            $miDB = new PDO(DSN, USUARIO, CONTRA);

            //consulta de buscar
            $resultadoDepartamentos = $miDB->prepare("select * from Departamento where descDepartamento like'%$aRespuestas[descripcion]%';");
            $resultadoDepartamentos->execute();
            $oDepartamento = $resultadoDepartamentos->fetchObject();

            echo 'Resultados: ' . $resultadoDepartamentos->rowCount();
            //Tabla con todos los departamentos
            print '<table>';
            print '<tr><th>codDepartamento</th><th>descDepartamento</th><th>fechaBaja</th><th>volumenNegocio</th><th>fechaAlta</th></tr>';

            while ($oDepartamento != null) {
                print"<tr>";
                echo "<td>$oDepartamento->CodDepartamento</td>";
                echo "<td>$oDepartamento->DescDepartamento</td>";
                echo "<td>$oDepartamento->fechaBaja</td>";
                echo "<td>$oDepartamento->volumenNegocio</td>";
                echo "<td>$oDepartamento->fechaAlta</td>";
                $oDepartamento = $resultadoDepartamentos->fetchObject();
            }
            print '</table>';
        } catch (PDOException $miExcepcionPDO) {
            echo $miExcepcionPDO->getMessage();
        } finally {
            unset($miDB);
        }
        ?>



        <footer>
            <a href="/../index.php" style="text-decoration:none">
                <img src="/doc/home.png" alt="inicio" onmouseover="this.width = 50;this.height = 50;"
                     onmouseout="this.width = 39;this.height = 39;" width="39" title="inicio" />
            </a>


            © Alejandro Otálvaro Marulanda

            <a href="http://www.linkedin.com/in/alejandro-otálvaro-marulanda/" target="_blank"
               style="text-decoration: none">
                <img src="/doc/link2.png" alt="linkedin" onmouseover="this.width = 50;" onmouseout="this.width = 39;"
                     width="39" title="linkedin" class="icono_link" />
            </a>
        </footer>

    </body>

</html>
