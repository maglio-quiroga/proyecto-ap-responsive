<?php

include 'conexion.php';
if(isset($_POST['act'])){
    $email=$_POST['email'];
    $sql=$conexion->query("SELECT * FROM clientes WHERE email='$email'");
    $datoss=$sql->fetch_object();
    
    $html="
    
    <div class='c-act'>
    
        <h2>Modificación de: $datoss->nombre</h2>
        <form method='post'>
            <input type='text' value='$datoss->nombre' disabled name='nombre'>
            <input type='text' value='$datoss->email' disabled >
            <input type='date' value='$datoss->fecha_ing' disabled name='ing'>
            <input type='text' value='$datoss->contacto' name='contacto'>
            <input type='text' value='$datoss->marca_pref' name='marca'>
            <input type='hidden' name='camb' value='$datoss->email'>
            <button class='btn-act' name='confirmar'>Confirmar</button>
            <button class='btn-del' name='cancelar'>Cancelar</button>
        </form>
    </div>
    
    ";
    if(isset($_POST['cancelar'])){
        $html='';
    } else {
        echo $html;
    }

    
}

?>
