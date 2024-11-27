<?php
$imagenes = [
    'assets/F1.jpg',
    'assets/F2.jpg',
    'assets/F3.jpg',
    'assets/F4.jpg',
    'assets/F5.jpg',
    'assets/F6.jpg',
    'assets/F7.jpg',
    'assets/F8.jpg'
];
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galería de Imágenes</title>

    <style>
        .mi-cuerpo { /* Cambiamos body por .mi-cuerpo */
            display: flex;
            justify-content: center;
            flex-direction: column;
            align-items: center;
            font-family: Arial, sans-serif;
        }
        .galeria {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 10px;
            max-width: 800px;
        }
        .galeria img {
            width: 100%;
            height: auto;
            cursor: pointer;
            transition: transform 0.3s;
        }
        .galeria img:hover {
            transform: scale(1.05);
        }
        .modal {
            display: none;
            position: fixed;
            z-index: 1000;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.8);
            justify-content: center;
            align-items: center;
        }
        .modal img {
            max-width: 90%;
            max-height: 90%;
        }
    </style>
</head>
<body>

<div class="mi-cuerpo"> <!-- Usamos un div con clase .mi-cuerpo -->
    <div class="galeria">
        <?php foreach ($imagenes as $imagen): ?>
            <img src="<?php echo $imagen; ?>" alt="Imagen" onclick="abrirModal(this.src)">
        <?php endforeach; ?>
    </div>

    <div class="modal" id="modal" onclick="cerrarModal()">
        <img id="imagenGrande" src="" alt="Imagen Grande">
    </div>
</div>

<script>
    function abrirModal(src) {
        document.getElementById('imagenGrande').src = src;
        document.getElementById('modal').style.display = 'flex';
    }

    function cerrarModal() {
        document.getElementById('modal').style.display = 'none';
    }
</script>

</body>
</html>
