<!DOCTYPE html>

<html>


    <head>
        <title>EJERCICIO 03 PDO</title>
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
        <a href="../indexProyectoTema4.php"><img src="../doc/atras.png" onmouseover="this.width = 50;" onmouseout="this.width = 39;"width="39" title="linkedin" class=".icono_cv" /></a>
        <ins> <h1>Ejercicio 3 : Formulario para añadir un departamento a la tabla Departamento con validación de entrada y control de errores.</h1></ins>



        <?php
        /*
         * @author: ALEJANDRO OTÁLVARO MARULANDA
         * @since: 11 11 2022
         */
        require_once '../core/221024libreriaValidacionFormularios.php';
        require_once '../config/confDBPDO.php';

        $aErrores = ['eCodDepartamento' => '', 'eDescDepartamento' => '', 'eVolumenNegocio' => '', 'eFechaAlta' => '']; //Aquí se guardan los errores en los campos.
        $aRespuestas = ['rCodDepartamento' => null, 'rDescDepartamento' => null, 'rVolumenNegocio' => null, 'rFechaAlta' => null]; //Aquí se guardan las respuestas de los campos.
        $EntradaValida = true;

        if (isset($_REQUEST['insertar'])) {
            if ($_REQUEST['codigo'] == strtoupper($_REQUEST['codigo'])) {
                $aErrores['eCodDepartamento'] = validacionFormularios::comprobarAlfabetico($_REQUEST['codigo'], 3, 3, 1);
                try {
                    $miDB = new PDO(DSN, USUARIO, CONTRA);
                    $query2 = <<< sql2
                    SELECT * FROM Departamento where codDepartamento='$_REQUEST[codigo];
                    sql2;

                    $consulta = $miDB->query($query2);

                    $rSelect = $consulta->rowCount();
                    $registroObjeto = $consulta->fetch(PDO::FETCH_OBJ);

                    if ($rSelect > 0) {
                        $aErrores['eCodDepartamento'] = "Duplicidad en el codigo";
                    }
                } catch (PDOException $miExcepcionPDO) {
                    echo $miExcepcionPDO->getMessage();
                } finally {
                    unset($miDB);
                }
            } else {
                $aErrores['codigo'] = "El codigo ha de ser en Mayusculas con formato XXX";
            }
            $aErrores['eDescDepartamento'] = validacionFormularios::comprobarAlfabetico($_REQUEST['descripcion'], 300, 1, 1); //Comprobamos que nuestros campos son correctos con alfanumerico.
            $aErrores['eVolumenNegocio'] = validacionFormularios::comprobarFloat($_REQUEST['volumenNegocio'], obligatorio: 1);
            $aErrores['eFechaAlta'] = validacionFormularios::validarFecha($_REQUEST['fechaAlta']);
            // Recorremos el array de errores.
            foreach ($aErrores as $key => $value) {

                if ($value != null) {
                    $_REQUEST[$key] = '';
                    $EntradaValida = false;
                }
            }
        } else {
            $EntradaValida = false;
        }

        if ($EntradaValida) {
            $aRespuestas['rCodDepartamento'] = $_REQUEST['codigo'];
            $aRespuestas['rDescDepartamento'] = $_REQUEST['descripcion'];
            $aRespuestas['rVolumenNegocio'] = $_REQUEST['volumenNegocio'];
            $aRespuestas['rFechaAlta'] = $_REQUEST['fechaAlta'];
            $oFechaAlta = new DateTime($aRespuestas['rFechaAlta'], new DateTimeZone("Europe/Madrid"));
            $time = $oFechaAlta->getTimestamp();
            try {
                $miDB = new PDO(DSN, USUARIO, CONTRA);
                $query1 = <<< sql
             INSERT INTO Departamento(CodDepartamento,DescDepartamento,fechaBaja,volumenNegocio,fechaAlta) VALUES (:codigo,:descripcion,null,:volumenNegocio,FROM_UNIXTIME(:fechaAlta));
            sql;
                $insert = $miDB->prepare($query1);
                $insert->bindParam(":codigo", $aRespuestas['rCodDepartamento']);
                $insert->bindParam(":descripcion", $aRespuestas['rDescDepartamento']);
                $insert->bindParam(":volumenNegocio", $aRespuestas['rVolumenNegocio']);
                $insert->bindParam(":fechaAlta", $time);
                $insert->execute();
                $queryMuestra = <<< sql
                    select * from Departamento;
                    sql;
                echo "Departamento insertado con éxito";
                //Tabla con todos los departamentos
                $resultadoDepartamentos = $miDB->query($queryMuestra);
                print '<table>';
                print '<tr><th>codDepartamento</th><th>descDepartamento</th><th>fechaBaja</th><th>volumenNegocio</th><th>fechaAlta</th></tr>';
                $oDepartamento = $resultadoDepartamentos->fetchObject();
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
        } else {
            ?>
            <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                <label>Codigo del Departamento: 
                    <input type="text" name="codigo" value="<?php echo $_REQUEST['codigo'] ?? ''; ?>" placeholder="SOLO MAYUSCULAS"/>
                </label>
                <?php
                if ($aErrores['eCodDepartamento'] != null) {
                    print '<p style="color: red";>' . $aErrores['eCodDepartamento'] . '</p>';
                } else {
                    
                }
                ?>
                <br>
                <label>Descripcion del departamento:
                    <input type="text" name="descripcion" value="<?php echo $_REQUEST['DescDepartamento'] ?? ''; ?>"/>
                </label>

                <?php
                if ($aErrores['eDescDepartamento'] != null) {

                    print '<p style="color: red";>' . $aErrores['eDescDepartamento'] . '</p>';
                } else {
                    
                }
                ?>
                <br>
                <label>Volumen de Negocio:
                    <input type="text" name="volumenNegocio" value="<?php echo $_REQUEST['volumenNegocio'] ?? ''; ?>" />
                </label>
                <?php
                if ($aErrores['eVolumenNegocio'] != null) {
                    print '<p style="color: red";>' . $aErrores['eVolumenNegocio'] . '</p>';
                } else {
                    
                }
                ?>
                <br>
                <label>Fecha de alta:
                    <input type = "datetime" name = "fechaAlta" value = "<?php echo $_REQUEST['fechaAlta'] ?? ''; ?>" />
                </label>
                <?php
                if ($aErrores['eFechaAlta'] != null) {
                    print '<p style="color: red";>' . $aErrores['eFechaAlta'] . '</p>';
                } else {
                    
                }
                ?>


                <br>
                <input type="submit" name="insertar" value="Insertar Datos" />
            </form>


        <?php } ?>

        <!--        <footer>
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
                </footer>-->

    </body>

</html>
