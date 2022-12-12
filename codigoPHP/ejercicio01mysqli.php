<?php

/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */


$miDB= new mysqli();
try {
    $miDB->connect('192.168.3.214','usuarioDAW206DBDepartamentos','paso', 'DAW206DBDepartamentos');
} catch (Exception $ex) {
    
}


unset($miDB);