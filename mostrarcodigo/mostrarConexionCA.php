
<!DOCTYPE html>

<html>


    <head>
        <title>CONEXION CASA</title>
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
                position: relative;
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
        <a href="../indexProyectoTema4.php"><img src="../doc/atras.png" onmouseover="this.width = 50;" onmouseout="this.width = 39;"width="39" title="linkedin" class=".icono_cv" /></a><br>
        <?php
        show_source("../config/confCA.php");
        ?>


        <footer>
            <a href="../indexProyectoTema4.php" style="text-decoration:none">
                <img src="../doc/atras.png" alt="inicio" onmouseover="this.width = 50;this.height = 50;"
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
