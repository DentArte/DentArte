<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galería de Radiografías - Paciente</title>
    <link rel="manifest" href="Extra/manifest.json">
    <link rel="stylesheet" href="CCS/PG.css">
</head>
<body>


    
<!-- Barra de navegación -->
<nav>
        <a href="gallery.php">Regresar</a>
</nav>
<!-- Barra de navegación -->



    <div class="container">

        <?php
        if (isset($_GET['patient'])) {
            $patientName = htmlspecialchars($_GET['patient']);
            $patientFolder = 'uploads/' . $patientName;

            if (is_dir($patientFolder)) {
                echo "<h2>Imágenes de $patientName</h2>";
                echo "<div class='grid-gallery'>";

                // Mostrar imágenes del paciente
                $images = glob("$patientFolder/*.{jpg,jpeg,png,gif}", GLOB_BRACE);
                foreach ($images as $image) {
                    echo "<div class='image-item'>";
                    echo "<img src='$image' alt='$patientName' onclick='openModal(\"$image\")'>";
                    echo "</div>";
                }

                echo "</div>";
            } else {
                echo "<p>No se encontraron imágenes para el paciente.</p>";
            }
        } else {
            echo "<p>No se ha especificado un paciente.</p>";
        }
        ?>

    </div>

    <!-- Modal para ver imagen en pantalla completa -->
    <div id="imageModal" class="modal">
        <span class="close" onclick="closeModal()">&times;</span>
        <img class="modal-content" id="modalImage">
    </div>

    <script src="Extra/app.js"></script>
    <script>
        // Función para abrir el modal en pantalla completa
        function openModal(imageSrc) {
            const modal = document.getElementById("imageModal");
            const modalImage = document.getElementById("modalImage");
            modalImage.src = imageSrc;
            modal.style.display = "block";
        }

        // Función para cerrar el modal
        function closeModal() {
            const modal = document.getElementById("imageModal");
            modal.style.display = "none";
        }
    </script>
</body>
</html>
