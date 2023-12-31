<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel administrativo</title>
    <link rel="stylesheet" href="visual/estilos.css">
    <style>
        .recipiente {
            width: 100%;
            display: flex;
            justify-content: space-between;
            margin-top: 30px;
            flex-wrap: wrap;
        }
    
        .item1 {
            width: calc(100% - 20px); /* Ajusta según sea necesario, el 20px es para el margen */
            margin: 10px; /* Ajusta según sea necesario */
            box-sizing: border-box;
        }
    
        h2 {
            width: 100%;
            background: var(--blue);
            color: var(--white);
            margin: 0; /* Elimina el margen predeterminado del h2 */
            padding: 15px; /* Ajusta según sea necesario */
            box-sizing: border-box;
        }
    
        p {
            width: 100%;
            /* Estilos para el párrafo, ajusta según sea necesario */
            background: var(--gray); /* Color diferente para el párrafo */
            color: var(--black); /* Color diferente para el texto del párrafo */
            margin: 10px 0;
            padding: 10px;
            box-sizing: border-box;
        }
    
        @media screen and (max-width: 1300px) {
            .item1 {
                width: 100%;
            }
            .recipiente {
                flex-direction: column;
                align-items: center;
            }
        }
        table {
            margin-top: 30px;
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
            overflow-x: auto;
        }

        th, td {
            padding: 10px;
            border: 1px solid #ddd;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        @media screen and (max-width: 1300px) {
            table, thead, tbody, th, td, tr {
                display: block;
            }

            th {
                position: absolute;
                top: -9999px;
                left: -9999px;
            }

            tr {
                margin-bottom: 15px;
            }

            td {
                border: none;
                border-bottom: 1px solid #ddd;
                position: relative;
                padding-left: 50%;
            }

            td:before {
                position: absolute;
                top: 6px;
                left: 6px;
                width: 45%;
                padding-right: 10px;
                white-space: nowrap;
                content: attr(data-label);
            }
        }
        td.separator {
            border: none;
            border-bottom: 2px solid #5f5f5f;
            height: 1px;
            padding: 0;
        }
        ol{
            margin-bottom: 15px;
        }
        .li1{
        padding: 10px;
        border-bottom: 1px solid #ddd;
        display: flex;
        justify-content: space-between;
        font-size: 2rem;
        color: rgb(109, 109, 109);
        }
        .btn {
        text-decoration:none;
        border: none; 
        color: black; 
        padding: 14px 28px; 
        cursor: pointer; 
        border-radius: 5px; 
        }
        .primary {background-color: white; border: 2px solid #2a2185;} 
        .primary:hover {background: #2a2185; color: white;}
        .xl{width: 90%;display: flex;justify-content: center;margin-top: 10px;}
        .alerta{
            padding: 15px;
            background-color: rgba(83, 48, 211, 0.5);
            color: white;
            margin: 15px;
            border-radius: 5px;
            position: relative;
            border-radius: 20px;
            
        }
        @media screen and (max-width: 1300px){
            .cardbox{
                display: flex;
                flex-direction: column;
            }
        }
        .filtros{
            width: 100%;
            display:flex;
            justify-content: space-around;
        }
        .fi-cliente{
            width: 40%;
            height: 45px;
            margin-top:20px;
            margin-bottom:20px;
            border-radius:15px;
        }
        .l{
            margin-top:30px;
            margin-bottom:20px;
        }
        @media screen and (max-width:1300px){
            .filtros{
                width: 100%;
                display:flex;
                flex-direction:column;
            }
            .fi-cliente{
            width: 96%;
            height: 45px;
            margin-top:20px;
            margin-bottom:20px;
            margin-left:20px;
            margin-right:20px;
            border-radius:15px;
            }
            .l{
            margin-top:20px;
            margin-bottom:20px;
            margin-left:20px;
            margin-right:20px;
            }
        }
        .btn-act  {
            text-decoration:none;
            border: none; 
            color: black; 
            padding: 14px 20px; 
            cursor: pointer; 
            border-radius: 5px; 
        }
        .btn-del  {
            text-decoration:none;
            border: none; 
            color: black; 
            padding: 14px 20px; 
            cursor: pointer; 
            border-radius: 5px; 
        }
        .btn-act:hover{
            text-decoration:none;
            border: none; 
            color: white; 
            padding: 14px 20px; 
            cursor: pointer; 
            border-radius: 5px;
            background-color: rgb(83, 48, 211); 
        }
        .btn-del:hover{
            text-decoration:none;
            border: none; 
            color: white; 
            padding: 14px 20px; 
            cursor: pointer; 
            border-radius: 5px; 
            background-color: rgb(255, 10, 10);
        }
        .c-act {
            margin-top: 20px;
            margin-bottom: 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .c-act h2 {
            text-align: center;
            margin-bottom:15px;
        }

        form {
            display: flex;
            flex-direction: column;
            align-items: center;
            width: 100%;
        }form input{
            width: 70%;
            margin:5px;
            padding: 14px 20px;
            border-radius: 5px;
        }form button{
            width: 70%;
            margin:5px;
        }


    </style>
</head>
<body>
    <nav>
        <div class="container">
            <div class="navegacion">
                <ul>
                    <li>
                        <a href="#">
                            <span class="icon">
                                <ion-icon name="people-outline"></ion-icon>
                            </span>
                            <span class="titulo">Clientes</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span class="icon">
                            <ion-icon name="stats-chart-outline"></ion-icon>
                            </span>
                            <span class="titulo">Resumen</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span class="icon">
                                <ion-icon name="pricetag-outline"></ion-icon>
                            </span>
                            <span class="titulo">Productos</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span class="icon">
                                <ion-icon name="calendar-number-outline"></ion-icon>
                            </span>
                            <span class="titulo">Eventos</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span class="icon">
                                <ion-icon name="storefront-outline"></ion-icon>
                            </span>
                            <span class="titulo">Marcas</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span class="icon">
                                <ion-icon name="mail-outline"></ion-icon>
                            </span>
                            <span class="titulo">Mensajes</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span class="icon">
                                <ion-icon name="exit-outline"></ion-icon>
                            </span>
                            <span class="titulo">Cerrar Sesion</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <main>

        <div class="main">
            <div class="topbar">
                <div class="ocultar">
                    <ion-icon name="menu-outline"></ion-icon>
                </div> 
                <div class="perfil">
                    <ion-icon name="person-outline"></ion-icon>
                    <p>
                        <?php
                            include 'conexion.php';
                            $sql=$conexion->query("SELECT nombre FROM admin");
                            $dato=$sql->fetch_object();
                            echo $dato->nombre;
                        ?>
                    </p>
                </div>
            </div>
            <div class="item1">
                <h2>Buscar un Cliente</h2>
            </div>
            <div class="filtros">
                
                    <label for="name" class="l">Nombre</label>
                    <input type="text" name="name" id="name" class="fi-cliente" onkeyup="filtro()">
                
                    <label for="name" class="l">Email</label>
                    <input type="text" name="email" id="email" class="fi-cliente" onkeyup="filtro()">
                
            </div>
            <div class="item1">
                    
                    <?php include 'update.php' ?>
                    <?php 
                        if (isset($_POST['confirmar'])) {
                            $email = isset($_POST['camb']) ? $_POST['camb'] : '';
                            $contacto = isset($_POST['contacto']) ? $_POST['contacto'] : '';
                            $marca = isset($_POST['marca']) ? $_POST['marca'] : '';
                        
                            if (!empty($email) and !empty($contacto) and !empty($marca)) {
                                // Utilizando parámetros preparados
                                $consulta = $conexion->prepare("UPDATE clientes SET contacto=?, marca_pref=? WHERE email=?");
                                $consulta->bind_param("sss", $contacto, $marca, $email);
                        
                                // Ejecutar la consulta
                                if ($consulta->execute()) {
                                    echo "<div class='alerta'>Usuario actualizado correctamente.</div>";
                                } else {
                                    echo "<div class='alerta'>No se completó la actualización del usuario.</div>";
                                }
                        
                                // Cerrar la consulta
                                $consulta->close();
                            } else {
                                echo "<div class='alerta'>No se pueden dejar campos vacíos.</div>";
                            }
                        }
                    ?>

                    <h2>Listado de Clientes Registrados</h2>
                    
                    <?php include 'delete.php' ?>
                    
                    <table id="t-clientes">
                        <thead>
                            <tr>
                                <th>Nombre</th>
                                <th>Email</th>
                                <th>Ingreso</th>
                                <th>Contacto</th>
                                <th>Marca</th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $sql2=$conexion->query("SELECT * FROM clientes");
                                while($datos1=$sql2->fetch_object()){
                            ?>
                            <tr>
                                <td data-label="Nombre"><?php  echo $datos1->nombre  ?></td>
                                <td data-label="Email"><?php  echo $datos1->email  ?></td>
                                <td data-label="Clave"><?php  echo $datos1->fecha_ing  ?></td>
                                <td data-label="Contacto"><?php  echo $datos1->contacto  ?></td>
                                <td data-label="Marca"><?php  echo $datos1->marca_pref ?></td>
                                <td style="text-align: center; vertical-align: middle;">
                                <form action="" method="post">
                                <input type="hidden" name="email" value="<?php echo $datos1->email ?>">
                                <button class="btn-act" name="act">Modificar</button>
                                </form>
                                </td>
                                <td style="text-align: center; vertical-align: middle;">
                                <form action="" method="post">
                                <input type="hidden" name="email" value="<?php echo $datos1->email ?>">
                                <button class="btn-del" name="del" onclick="return eliminar()">Eliminar</button>
                                </form>
                                </td>
                                <td class="separator" colspan="5"></td>
                            </tr>
                            <?php  } ?>          
                        </tbody>
                    </table>
                </div>
        </div>
    </main>
        
    <script>
        function eliminar(){
            var respuesta=confirm("Estas seguro de eliminar el registro");
            return respuesta
        }
    </script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="visual/main.js"></script>
    <script src="visual/f-clientes.js"></script>
</body>
</html>