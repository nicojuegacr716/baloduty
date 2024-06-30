<?php
// Puedes agregar código PHP aquí si es necesario
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="icon" href="icon/icon.png">
    <title>MN Team</title>
    <style>
        .seccion {
            display: none;
        }
    </style>
    <script>
        function mostrarSeccion(seccionId) {
            // Ocultar todas las secciones
            var secciones = document.querySelectorAll('.seccion');
            secciones.forEach(function(seccion) {
                seccion.style.display = 'none';
            });

            // Mostrar la sección seleccionada
            var seccion = document.getElementById(seccionId);
            if (seccion) {
                seccion.style.display = 'block';
            }

            // Cambiar la parte de la URL después del hash (#)
            window.location.hash = seccionId;
        }

        // Función para mostrar automáticamente la sección correspondiente al cargar la página
        window.onload = function() {
            // Obtener la parte de la URL después del hash (#)
            var hash = window.location.hash.substring(1);
            // Mostrar la sección correspondiente si existe
            if (hash) {
                mostrarSeccion(hash);
            } else {
                mostrarSeccion('inicio'); // Si no hay ninguna sección especificada, mostrar la de inicio por defecto
            }
        };

        function descargarArchivo(filePath) {
            // Crear un enlace para descargar el archivo
            const link = document.createElement('a');
            link.href = filePath;
            link.download = filePath.split('/').pop(); // Usar el nombre del archivo de la ruta

            // Agregar el enlace al cuerpo del documento (necesario en algunos navegadores)
            document.body.appendChild(link);

            // Simular un clic en el enlace
            link.click();

            // Eliminar el enlace del cuerpo del documento
            document.body.removeChild(link);
        }


    </script>
</head>
<body>
    <div class="contenedor"></div>
    <button class="btn6" onclick="mostrarSeccion('inicio')">Inicio</button>
    <button class="btn6" onclick="mostrarSeccion('descargas')">Descargas</button>
    <button class="btn6" onclick="mostrarSeccion('precio')">Precio</button>
    <button class="btn6" onclick="mostrarSeccion('equipo')">Equipo</button>
    <button class="btn6" onclick="mostrarSeccion('bugs')">Actualizaciones y encuentros de bugs</button>
    <button class="btn6" onclick="mostrarSeccion('betas')">Betas y prototipos y alfas</button>

    <!-- Contenido específico de la página -->
    <div id="inicio" class="seccion">
        <p>MN Team</p>
        <hr>
        <p>Proximamente en windows y android</p>
        <hr>
        <p>Fecha de salida: No especificada</p>
    </div>

    <div id="descargas" class="seccion">
        <p>Centro de Descargas</p>
        <hr>
        <button class="btn6" onclick="descargarArchivo('prueba.txt')">Prueba</button>
        <button class="btn6" onclick="descargarArchivo('prueba.txt')">Prueba</button>
    </div>

    <div id="precio" class="seccion">
        <p>los juegos van a hacer gratis pero van a tener microtransacciones (talvez salgan microtransacciones) (Mensaje Del Segundo Dueño)</p>
        <hr>
    </div>

    <div id="equipo" class="seccion">
    <p>MN Team</p>
    <hr>
    <p>Nuestro equipo esta hecho por dos desarrolladores no professionales (nomas tan desarrollando porque quieren tener exito y tienen menos de 11 años)</p>
    <hr>
    <p>El primero que le llamamos El programador que programa todo (ta programando esto) y el segundo que le llamamos finn que va ayudar con todo lo que se trata con el juego y avisar a El programador que algo esta mal. (ya va a detectar 100000000 *9999999999999999999999999 errores en el primer prototipo)</p>
    </div>

    <div id="bugs" class="seccion">
        <p>Bugs reportados: No hay ningun bug ,porque todavia no se ha lanzado</p>
        <hr>
        <p>Updates: No ha salido ninguna update de un juego.</p>
    </div>

    <div id="betas" class="seccion">
        <p>Betas, prototipos y alfas</p>
        <hr>
        <p>No existe ningun prototipo</p>
    </div>
</body>
</html>
<?php
// Puedes agregar más código PHP aquí si es necesario
?>


