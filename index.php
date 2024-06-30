<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MN Team</title>
    <link rel="stylesheet" href="style.css"> <!-- Referencia al archivo style.css -->

    <!-- JavaScript para manejar la visibilidad de las secciones y descargar archivos -->
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
    <div class="contenedor">
        <!-- Botones de Navegación -->
        <button class="btn6" onclick="mostrarSeccion('inicio')">Inicio</button>
        <button class="btn6" onclick="mostrarSeccion('descargas')">Descargas</button>
        <button class="btn6" onclick="mostrarSeccion('precio')">Precio</button>
        <button class="btn6" onclick="mostrarSeccion('equipo')">Equipo</button>
        <button class="btn6" onclick="mostrarSeccion('bugs')">Actualizaciones y encuentros de bugs</button>
        <button class="btn6" onclick="mostrarSeccion('betas')">Betas y prototipos y alfas</button>
    </div>

    <!-- Contenido específico de la página -->
    <div id="inicio" class="seccion visible">
        <h2>Inicio</h2>
        <p>MN Team</p>
        <hr>
        <p>Próximamente en Windows y Android</p>
        <hr>
        <p>Fecha de salida: No especificada</p>
    </div>

    <div id="descargas" class="seccion">
        <h2>Centro de Descargas</h2>
        <button class="btn6" onclick="descargarArchivo('ruta/al/archivo1.zip')">Descargar Archivo 1</button>
        <button class="btn6" onclick="descargarArchivo('ruta/al/archivo2.zip')">Descargar Archivo 2</button>
    </div>

    <div id="precio" class="seccion">
        <h2>Precio</h2>
        <p>Los juegos van a ser gratis pero podrían tener microtransacciones (tal vez salgan microtransacciones) (Mensaje del segundo dueño)</p>
    </div>

    <div id="equipo" class="seccion">
        <h2>Equipo</h2>
        <p>Nuestro equipo está formado por dos desarrolladores no profesionales que están desarrollando porque quieren tener éxito y tienen menos de 11 años.</p>
        <p>El primero, a quien llamamos "El programador que programa todo", está programando esto. El segundo, a quien llamamos "Finn", va a ayudar con todo lo relacionado con el juego y a avisar al programador si algo está mal (ya va a detectar 100000000 * 9999999999999999999999999 errores en el primer prototipo).</p>
    </div>

    <div id="bugs" class="seccion">
        <h2>Actualizaciones y Encuentros de Bugs</h2>
        <p>Bugs reportados: No hay ningún bug, porque todavía no se ha lanzado.</p>
        <p>Updates: No ha salido ninguna update de un juego.</p>
    </div>

    <div id="betas" class="seccion">
        <h2>Betas, Prototipos y Alfas</h2>
        <p>No existe ningún prototipo.</p>
    </div>
</body>
</html>
