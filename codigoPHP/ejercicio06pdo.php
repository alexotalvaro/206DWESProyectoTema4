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
         * @since: 30 11 2022
         */
        require_once '../core/221024libreriaValidacionFormularios.php';
        require_once '../config/confDBPDO.php';

        $insertar = 'INSERT INTO Departamento VALUES (? , ? , now(), null, ? )';
        $aDatosInserccion = [
            ['CodDepartamento' => 'APA',
                'DescDepartamento' => 'Davi Aparicio',
                'volumenNegocio' => '1234.1'],
            ['CodDepartamento' => 'NAJ',
                'DescDepartamento' => 'Nerea Alvarez',
                'volumenNegocio' => '9876.3'],
            ['CodDepartamento' => 'JMF',
                'DescDepartamento' => 'Josue Martinez',
                'volumenNegocio' => '10.60']
        ];
        try {
            //datos para la conexión a la bd
            $miDB = new PDO(DSN, USUARIO, CONTRA);

            //beginTransaction() desactiva el autocommit
            $miDB->beginTransaction();

            foreach ($aDatosInserccion as $clave => $valor){
                $CodDepartamento=$valor['CodDepartamento'];
                $DescDepartamento=$valor['DescDepartamento'];
                $volumenNegocio=$valor['volumenNegocio'];
                
                $insertarDepartamento=$miDB->prepare($insertar);
                $insertarDepartamento->execute(array($CodDepartamento,$DescDepartamento,$volumenNegocio));
            }
                $miDB->commit();
            echo 'SE HA REALIZADO LA INSERCCION';
        } catch (Exception $e) {
            $miDB->rollBack();
            echo 'NO SE HA PODIDO REALIZAR LA INSERCCION';
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
