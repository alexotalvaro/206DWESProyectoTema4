<!DOCTYPE html>

<html>


    <head>
        <title>EJERCICIOS TEMA 4</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Tipografía -->
        <link href="https://fonts.googleapis.com/css2?family=Chela+One&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Indie+Flower&family=Lobster&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Architects+Daughter&display=swap" rel="stylesheet">




        <style>

            body {
                background-image: url("doc/fondo.jpg");
                background-size: 100%;
                height: 100%;


            }
            main{
                margin-bottom: 15px;
            }

            h1 {

                text-align: center;
                text-decoration: underline;
                color: black;
                font-family: 'Indie Flower', cursive;

            }

            table {
                border-collapse: collapse;
                border: none;
                font-family: 'Architects Daughter', cursive;

            }

            tr td{

                padding-left: 15px;
            }


            td {
                border: 1px solid black;
            }

            footer {
                background-color: grey;
                position: relative;
                width: 100%;
                height: 5vh;
                font-size: 1em;
                font-family: 'Chela One', cursive;
                text-align: center;
                padding-top: 20px;
                padding-bottom: 30px;
               
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
            td img {
                width: 22px;

            }




        </style>

    </head>

    <body>
        <main>
            <h1> TEMA 4: TÉCNICAS DE ACCESO A DATOS EN PHP</h1>

            <table>
                <th> SCRIPTS SQL DESARROLLO</th>
                <tr>
                    <td>CREAR BBDD</td>
                    <td><a href="../206DWESProyectoTema4/codigoPHP/crearBD.php"><img src="doc/php.png"></a></td>
                    <td><a href="codigoPHP/creacionED.php"><img src="doc/play.png"></a></td>
                </tr>
                <tr>
                    <td>BORRAR BBDD</td>
                    <td><a href="../206DWESProyectoTema4/codigoPHP/borrarBD.php"><img src="doc/php.png"></a></td>
                    <td><a href="codigoPHP/borradoED.php"><img src="doc/play.png"></a></td>
                </tr>
                <tr>
                    <td>INSERTAR DATOS EN BBDD</td>
                    <td><a href="../206DWESProyectoTema4/codigoPHP/insertarBD.php"><img src="doc/php.png"></a></td>
                    <td><a href="codigoPHP/insercionED.php"><img src="doc/play.png"></a></td>
                </tr>

            </table>
            <br>
            <table>
                <th> SCRIPTS SQL EXPLOTACION</th>
                <tr>
                    <td>CREAR BBDD</td>
                    <td><a href="../206DWESProyectoTema4/codigoPHP/crearBD1-1.php"><img src="doc/php.png"></a></td>
                    <td><a href="codigoPHP/creacionEX.php"><img src="doc/play.png"></a></td>
                </tr>
                <tr>
                    <td>BORRAR BBDD</td>
                    <td><a href="../206DWESProyectoTema4/codigoPHP/borrarBD1-1.php"><img src="doc/php.png"></a></td>
                    <td><a href="codigoPHP/borradoEX.php"><img src="doc/play.png"></a></td>
                </tr>
                <tr>
                    <td>INSERTAR DATOS EN BBDD</td>
                    <td><a href="../206DWESProyectoTema4/codigoPHP/insertarBD1-1.php"><img src="doc/php.png"></a></td>
                    <td><a href="codigoPHP/insercionEX.php"><img src="doc/play.png"></a></td>
                </tr>
            </table>
            <br>
            <table>
                <th>CONEXIONES:</th>

                <tr>
                    <td>DESARROLLO</td>
                    <td><a href="../206DWESProyectoTema4/mostrarcodigo/mostrarConexionED.php"><img src="doc/php.png"></a></td>
                </tr>
                <tr>
                    <td>EXPLOTACIÓN</td>
                    <td><a href="../206DWESProyectoTema4/mostrarcodigo/mostrarConexionEX.php"><img src="doc/php.png"></a></td>
                </tr>
                <tr>
                    <td>CASA</td>
                    <td><a href="../206DWESProyectoTema4/mostrarcodigo/mostrarConexionCA.php"><img src="doc/php.png"></a></td>
                </tr>

            </table>
            <br>
            <table>
                <th> LIBRERÍA DE VALIDACIÓN </th>
                <tr>
                    <td>LIBRERIA DE VALIDACIÓN</td>
                    <td><a href="../206DWESProyectoTema5/codigoPHP/mostrarLibreria.php"><img src="doc/php.png"></a></td>
                </tr>

            </table>
            <table>
                <!-- AQUI VAN LAS COLUMNAS -->
                <tr>
                    <th>ENUNCIADO</th>
                    <th>PLAY PDO</th>
                    <th>CÓDIGO PDO</th>

                </tr>

                <!-- AQUÍ EL EJERCICIO 1 -->
                <tr>
                    <td>01. (ProyectoTema4) Conexión a la base de datos con la cuenta usuario y tratamiento de errores.</td>
                    <td><a href="codigoPHP/ejercicio01pdo.php"><img src="doc/play.png"></a></td>
                    <td><a href="mostrarcodigo/muestraejercicio01pdo.php"><img src="doc/php.png"></a></td>

                </tr>
                <!-- AQUÍ EL EJERCICIO 2 -->
                <tr>
                    <td>02. Mostrar el contenido de la tabla Departamento y el número de registros.</td>
                    <td><a href="codigoPHP/ejercicio02pdo.php"><img src="doc/play.png"></a></td>
                    <td><a href="mostrarcodigo/muestraejercicio02pdo.php"><img src="doc/php.png"></a></td>


                </tr>

                <!-- AQUÍ EL EJERCICIO 3 -->
                <tr>
                    <td>03. Formulario para añadir un departamento a la tabla Departamento con validación de entrada y control de errores.</td>
                    <td><a href="codigoPHP/ejercicio03pdo.php"><img src="doc/play.png"></a></td>
                    <td><a href="mostrarcodigo/muestraejercicio03pdo.php"><img src="doc/php.png"></a></td>


                </tr>
                <!--AQUÍ EL EJERCICIO 4--> 
                <tr>
                    <td>04. Formulario de búsqueda de departamentos por descripción (por una parte del campoDescDepartamento, si el usuario no pone nada deben aparecer todos los departamentos).</td>
                    <td><a href="codigoPHP/ejercicio04pdo.php"><img src="doc/play.png"></a></td>
                    <td><a href="mostrarcodigo/muestraejercicio04pdo.php"><img src="doc/php.png"></a></td>




                </tr>
                <!--            AQUÍ EL EJERCICIO 5 -->
                <tr>
                    <td>5. Pagina web que añade tres registros a nuestra tabla Departamento utilizando tres instrucciones insert y una transacción, de tal forma que se añadan los tres registros o no se añada ninguno..</td>
                    <td><a href="codigoPHP/ejercicio05pdo.php"><img src="doc/play.png"></a></td>
                    <td><a href="mostrarcodigo/muestraejercicio05pdo.php"><img src="doc/php.png"></a></td>


                </tr>
                <!--            AQUÍ EL EJERCICIO 6 -->
                <tr>
                    <td>6. Pagina web que cargue registros en la tabla Departamento desde un array departamentosnuevos utilizando una consulta preparada</td>
                    <td><a href="codigoPHP/ejercicio06pdo.php"><img src="doc/play.png"></a></td>
                    <td><a href="mostrarcodigo/muestraejercicio06pdo.php"><img src="doc/php.png"></a></td>

                </tr>
            </table>
        </main>
        <footer>
            <a href="/../index.php" style="text-decoration:none">
                <img src="../doc/home.png" alt="inicio" onmouseover="this.width = 50;this.height = 50;"
                     onmouseout="this.width = 39;this.height = 39;" width="39" title="inicio" />
            </a>
            <a href="/doc/CV.pdf" target="_blank" style="text-decoration: none">
                <img src="/doc/cv-logo.png" alt="curriculum" onmouseover="this.width = 50;" onmouseout="this.width = 39;"
                     width="39" title="curriculum vitae" class="icono_cv" />
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