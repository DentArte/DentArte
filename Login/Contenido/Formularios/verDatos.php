<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ver Datos de Pacientes</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
        }
        h2 {
            text-align: center;
            color: #333;
        }
        .form-group {
            display: flex;
            margin-bottom: 15px;
        }
        .form-group label {
            flex: 1;
            margin-right: 20px;
            font-weight: bold;
        }
        .form-group input {
            flex: 2;
            padding: 8px;
            background-color: #f9f9f9;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .form-title {
            text-align: center;
            font-weight: bold;
            margin-bottom: 20px;
            color: #444;
        }
        .back-button {
            text-align: center;
            margin-top: 30px;
        }
        .back-button a {
            text-decoration: none;
            color: white;
            background-color: #007BFF;
            padding: 10px 20px;
            border-radius: 5px;
            font-weight: bold;
        }
        .back-button a:hover {
            background-color: #0056b3;
        }
    </style>
</head>



<body>




<p></p>
<!-- Incluir el menú -->
<?php include './Menu/menu.php'; ?>
<!-- Incluir el menú -->
<p></p>




<!-- Barra de búsqueda -->
 <div class="container">
        <form action="" method="GET">
            <div class="form-group">
                <label for="search">Buscar por nombre:</label>
                <input type="text" name="search" id="search" placeholder="Introduce el nombre del paciente">
                <button type="submit">Buscar</button>
            </div>
        </form>
    </div>
<!-- Barra de búsqueda -->







<?php

// GUARDAR DATOS...
if (file_exists('datos.txt')) {
    // Leer todo el archivo y dividirlo en líneas
    $file = file('datos.txt', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);;
// GUARDAR DATOS...  











    // Asignar nombres a los campos
    $labels = [
        "Nombre", "Edad", "Lugar", "Fecha de Nacimiento", "Ocupación", "Escolaridad", "Estado Civil","Domicilio",
        "Estado", "Municipio", "Telefono", "Medico Familiar", "Fecha De Consulta", "Motivo Consulta", "Peso", 
        "Talla", "Temperatura", "Inflamatorias", "transmision_sexual", "degenerativas", "neoplasicas", "congenitas",
        "grupo_sanguineo", "factor_rh", "cartilla vacunacion", "adicciones", "auxiliares_higiene", "cual",
        "Antibioticos", "Analgesicos", "Anestesicos", "Alimentos", "Especifique", "Hospitalizado",
        "Fecha De Hospitalizacion", "Motivo de Hospitalizacion", "Exostosis", "Endostosis",
        "Dolicocefalico", "Mesocefalico", " Braquicefalico", "transversales", "longitudinales",
        "Concavo", "Convexo", "Recto", "Normal", "Palida", "Cianotica", "Enrojecida", 
        "hipotonicos", "hipertonicos", "espasticos", "cadena_ganglionar", "lateralidad", "apertura", 
        "ruidos", "articulacioness", "chasquidos", "crepitacion", "dificultad_abrir_boca", 
        "dolor_a_la_abertura", "fatiga_muscular", "disminicion_abertura", "desviacion_abertura_cierre", 
        "ganglios", "labio_interno", "frenillos", "istmo_bucofaringe", "salivales", "comisuras", 
        "tercio_medio", "borso", "labio_externo", "carrillos", "paladar_duro", "lengua_bordes", 
        "borde_bermellon", "fondo_saco", "paladar_blando", "lengua_ventral", "piso_boca", "dientes", 
        "mucosa_borde_alveolar", "encia"

        
    ];












    // Obtener el término de búsqueda (si se ha proporcionado)
    $search = isset($_GET['search']) ? trim($_GET['search']) : '';

    // Mostrar los datos de cada paciente
    foreach ($file as $index => $line) {
        $data_array = explode(",", $line); // Convertir cada línea en un array

        // Verificar si el nombre del paciente coincide con el término de búsqueda
        if ($search == '' || stripos($data_array[0], $search) !== false) {
            echo '<div class="container">';
            echo '<div class="form-title">Datos del Paciente ' . ($index + 1) . '</div>';
            echo '<form action="#" method="POST">';

            // Mostrar cada campo con su etiqueta y valor correspondiente
            foreach ($data_array as $key => $value) {
                if (isset($labels[$key])) {  // Asegurarse de que el campo existe en $labels
                    echo '<div class="form-group">';
                    echo '<label>' . $labels[$key] . ':</label>';
                    echo '<input type="text" value="' . htmlspecialchars(trim($value)) . '" readonly>';
                    echo '</div>';
                }
            }

            echo '</form>';
            echo '</div>';  // Cerrar el contenedor de cada paciente
        }
    }

} else {
    echo "No hay datos almacenados.";
}
?>




</body>

<body>
</html>