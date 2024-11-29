<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galería de Radiografías</title>
    <link rel="manifest" href="Extra/manifest.json">
    <link rel="stylesheet" href="CCS/Galeria.css">


</head>
<body>




<!-- Barra de navegación -->
<nav>
        <a href="index.php">Regresar</a>
</nav>
<!-- Barra de navegación -->




    <div class="container">
        <h1>Galería de Radiografías por Paciente</h1>

        <!-- Barra de búsqueda -->
        <input type="text" id="searchBar" placeholder="Buscar paciente por nombre..." onkeyup="filterFolders()">

        <!-- Contenedor de carpetas de pacientes -->
        <div class="folders" id="folders">
            <?php
            $baseDir = 'uploads/';
            $patients = array_filter(glob($baseDir . '*'), 'is_dir');

            foreach ($patients as $patientFolder) {
                $patientName = basename($patientFolder);
                // Hacer que el nombre del paciente sea un enlace a patient_gallery.php
                echo "<div class='folder' data-name='" . strtolower($patientName) . "'>";
                echo "<h2><a href='patient_gallery.php?patient=$patientName'>$patientName</a></h2>";
                echo "</div>";
            }
            ?>
        </div>
    </div>

    <script src="Extra/app.js"></script>
    <script>
        // Función para filtrar carpetas de pacientes
        function filterFolders() {
            const searchValue = document.getElementById("searchBar").value.toLowerCase();
            const folders = document.querySelectorAll(".folder");

            folders.forEach((folder) => {
                const name = folder.getAttribute("data-name");
                if (name.includes(searchValue)) {
                    folder.style.display = "block";
                } else {
                    folder.style.display = "none";
                }
            });
        }
    </script>
</body>
</html>


