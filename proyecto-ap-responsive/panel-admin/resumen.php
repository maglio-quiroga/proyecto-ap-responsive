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
            width: calc(50% - 20px); /* Ajusta según sea necesario, el 20px es para el margen */
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
    
        @media screen and (max-width: 1420px) {
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

        @media screen and (max-width: 1420px) {
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
        @media screen and (max-width: 1420px){
            .cardbox{
                display: flex;
                flex-direction: column;
            }
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
                                <ion-icon name="stats-chart-outline"></ion-icon>
                            </span>
                            <span class="titulo">Resumen</span>
                        </a>
                    </li>
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

            <div style="width: 100%;display: flex;justify-content: center;margin-top: 0;background:var(--blue);color: var(--white);margin-bottom: 15px;">
                <h2>Productos mas Recientes</h2>
            </div>
            
            <div class="cardbox">
                <?php
                    $sql1=$conexion->query("SELECT nombre, precio FROM producto ORDER BY fecha_creacion DESC LIMIT 4");
                    while($datos=$sql1->fetch_object()){
                ?>
                <div class="card">
                    <div>
                        <div class="nombre"><?php echo $datos->nombre ?></div>
                        <div class="precio"><?php echo '$'.$datos->precio ?></div>
                    </div>
                    <div class="iconbox">
                        <ion-icon name="shirt-outline"></ion-icon>
                    </div>
                </div>
                <?php } ?>
            </div>
            <div style="display: flex;justify-content: center;">
                <a href="#" class="btn primary xl">Gestionar</a>
            </div>

            

            <div class="recipiente">
                <div class="item1">
                    <h2>Clientes mas recientes</h2>
                    <table>
                        <thead>
                            <tr>
                                <th>Nombre</th>
                                <th>Email</th>
                                <th>Ingreso</th>
                                <th>Contacto</th>
                                <th>Marca</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $sql2=$conexion->query("SELECT * FROM clientes ORDER BY fecha_ing DESC LIMIT 5");
                                while($datos1=$sql2->fetch_object()){
                            ?>
                            <tr>
                                <td data-label="Nombre"><?php  echo $datos1->nombre  ?></td>
                                <td data-label="Email"><?php  echo $datos1->email  ?></td>
                                <td data-label="Clave"><?php  echo $datos1->fecha_ing  ?></td>
                                <td data-label="Contacto"><?php  echo $datos1->contacto  ?></td>
                                <td data-label="Marca"><?php  echo $datos1->marca_pref ?></td>
                                <td class="separator" colspan="5"></td>
                            </tr>
                            <?php  } ?>          
                        </tbody>
                    </table>
                    <div style="display: flex;justify-content: center;">
                        <a href="#" class="btn primary">Gestionar</a>
                    </div>
                </div>
                
                <div class="item1">
                    <h2>Marcas mas populares</h2>
                    <div style="display: flex;flex-direction: column;margin-top:15px;">
                    <?php 
                        $sql3=$conexion->query("SELECT r.*, COUNT(r.t) AS total_votos FROM ( SELECT marcas.nombre AS t, COUNT(clientes.nombre) AS h FROM marcas JOIN clientes ON marcas.nombre = clientes.marca_pref GROUP BY marcas.nombre ) AS r GROUP BY r.t ORDER BY `total_votos` DESC LIMIT 3");
                        while($votos_marcas=$sql3->fetch_object()){
                    ?>                
                        <div class="alerta"><?php echo $votos_marcas->t.":   ".$votos_marcas->h." votos" ?></div>
                    <?php  
                        }                    
                    ?>
                    </div>
                    <div style="display: flex;justify-content: center;margin-top:35px;">
                        <a href="#" class="btn primary">Gestionar</a>
                    </div>
                </div>
            </div>
            <h2>Mensajes mas Recientes</h2>
            <div style="margin: 15px;">
            <table>
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Email</th>
                        <th>Fecha</th>
                        <th>Mensaje</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $sql4=$conexion->query("SELECT * FROM consultas GROUP BY fecha DESC LIMIT 3");
                        while($registros=$sql4->fetch_object()){
                    ?>
                    <tr>
                        <td data-label="Nombre"><?php echo $registros->nombre ?></td>
                        <td data-label="Email"><?php echo $registros->email ?></td>
                        <td data-label="fecha"><?php echo $registros->fecha ?></td>
                        <td data-label="Contacto"><?php echo $registros->consulta ?></td>
                        <td class="separator" colspan="5"></td>
                    </tr>
                    <?php
                        }
                    ?>
                </tbody>
            </table>
            <div style="display: flex;justify-content: center;">
                <a href="#" class="btn primary">Mas Informacion</a>
            </div>
            </div>
        </div>

    </main>


    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="visual/main.js"></script>
</body>
</html>