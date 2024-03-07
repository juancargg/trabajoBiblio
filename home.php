<?php
//Archivo 2 en orden de creacion

//Creado con bs5-$ para genera una estrucutra basica de pag. web

include "header.php";
?>

<!-- Sistema de capas de Bootstrap -->
<div class="container my-5">
    <div class="row">
        <div class="col text-center">
            <div class="card">
                <div class="card-header display-6">
                    Acciones sobre la Base de Datos
                </div>
                <div class="p-4">
                    <!-- Shortcut: bs5-table-default -->
                    <div class="table-responsive">
                        <table class="table table-primary">
                            <thead>
                                <tr>
                                    <th scope="col">Agregar libro</th>
                                    <th scope="col">Eliminar libro</th>
                                    <th scope="col">Actualizar libro</th>
                                    <th scope="col">Listar libros</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="">
                                    <td scope="row">
                                        <a href="alta.php">
                                            <i class="bi bi-journal-plus px-3" style="font-size: 4rem; color:orange;"></i>
                                        </a>
                                    </td>
                                    <td>
                                        <a href="baja.php">
                                            <i class="bi bi-journal-minus px-3" style="font-size: 4rem; color:orange;"></i>
                                        </a>
                                    </td>
                                    <td>
                                        <a href="actualiza.php">
                                            <i class="bi bi-journal-check px-3" style="font-size: 4rem; color:orange;"></i>
                                        </a>
                                    </td>
                                    <td>
                                        <a href="listado.php">
                                            <i class="bi bi-journals px-3" style="font-size: 4rem; color:orange;"></i>
                                        </a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <a class="btn btn-primary mt-4" style="display: block; margin: 0 auto; width:12%;" href="cerrarSesion.php">Cerrar Sesión</a>
    
</div>


<?php
include "footer.php";
?>