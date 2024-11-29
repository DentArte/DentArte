<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $patientName = $_POST["patient_name"];
    $uploadDir = 'uploads/' . $patientName . '/'; // Carpeta específica para cada paciente

    // Crear la carpeta del paciente si no existe
    if (!is_dir($uploadDir)) {
        mkdir($uploadDir, 0777, true);
    }

    $uploadedFiles = $_FILES["images"];
    $totalFiles = count($uploadedFiles["name"]);
    $uploadSuccess = true;

    for ($i = 0; $i < $totalFiles; $i++) {
        $fileName = basename($uploadedFiles["name"][$i]);
        $targetPath = $uploadDir . uniqid() . "_" . $fileName;

        // Mover archivo a la carpeta del paciente
        if (!move_uploaded_file($uploadedFiles["tmp_name"][$i], $targetPath)) {
            echo "Error al subir el archivo $fileName.";
            $uploadSuccess = false;
            break;
        }
    }

    if ($uploadSuccess) {
        echo "<p>Archivos subidos correctamente.</p>";
        echo '<button onclick="window.location.href=\'index.php\'">Regresar al Inicio</button>';
    }
}
?>

