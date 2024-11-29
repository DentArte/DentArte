<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Historia Clinica</title>
    <link rel="manifest" href="manifest.json">
    <link rel="stylesheet" href="style.css">
</head>
<body>


<!-- Incluir el menú -->
<?php include './Menu/menu.php'; ?>
<!-- Incluir el menú -->

<p></p>




<!-- Mensaje Guardado -->
<?php
if (isset($_GET['mensaje'])) {
    echo '<div style="text-align:center; color: white; font-size: 60px; margin-bottom: 60px;">' . htmlspecialchars($_GET['mensaje']) . '</div>';
}
?>
<!-- Mensaje Guardado -->






<div class="container">
    <h1>HISTORIA CLINICA</h1>
    <h2>Ficha de identificación</h2>


    <form action="guardar.php" method="POST">

        <div class="grid">

            <div class="form-group">
                <label for="nombre">Nombre:</label>
                <input type="text" id="nombre" name="nombre" required>
            </div>

            <div class="form-group">
                <label for="edad">Edad:</label>
                <input type="number" id="edad" name="edad" required>
            </div>

        </div>


        <div class="grid">



            <div class="form-group">
                <label for="lugar">Lugar:</label>
                <input type="text" id="lugar" name="lugar" required>
            </div>

            <div class="form-group">
                <label for="fecha_nacimiento">Fecha de Nacimiento:</label>
                <input type="date" id="fecha_nacimiento" name="fecha_nacimiento" required>
            </div>

            


        </div>






        <div class="grid">


            <div class="form-group">
                <label>Ocupación:</label>
                <input type="text" name="ocupacion" required>
            </div>

            <div class="form-group">
                <label>Escolaridad:</label>
                <input type="text" name="escolaridad" required>
            </div>

            <div class="form-group">
                <label>Estado Civil:</label>
                <input type="text" name="estado_civil" required>
            </div>

            <div class="form-group full-width">
                <label>Domicilio (Calle, Col. Numero):</label>
                <input type="text" name="domicilio" required>
            </div>

            <div class="form-group">
                <label>Estado:</label>
                <input type="text" name="estado" required>
            </div>

            <div class="form-group">
                <label>Municipio:</label>
                <input type="text" name="municipio" required>
            </div>

            <div class="form-group">
                <label>Teléfono:</label>
                <input type="tel" name="telefono" required>
            </div>

            <div class="form-group">
                <label>Nombre de Médico Familiar:</label>
                <input type="text" name="medico_familiar" required>
            </div>

            <div class="form-group">
                <label>Fecha de Última Consulta (Odontología):</label>
                <input type="date" name="fecha_consulta" required>
            </div>

            <div class="form-group">
                <label>Motivo de Última Consulta (Odontología):</label>
                <input type="text" name="motivo_consulta" required>
            </div>

            <div class="form-group">
                <label>Peso (kg):</label>
                <input type="number" name="peso" required>
            </div>

            <div class="form-group">
                <label>Talla (cm):</label>
                <input type="number" name="talla" required>
            </div>

            <div class="form-group">
                <label>Temperatura (°C):</label>
                <input type="number" step="0.1" name="temperatura" required>
            </div>

        </div>


        <h2>Antecedentes Patologicos Hereditarios</h2>
        <h3>Antecedentes Personales Patodologicos</h3>

        <div class="grid">

        

        <div class="form-group">
            <label>Enfermedades Inflamatorias e Infecciosas No Transmisibles:</label>
            <input type="text" name="inflamatorias_s_n" required>
        </div>


        <div class="form-group">
                <label>Enfermedades de Trasmisión Sexual:</label>
                <input type="text" name="transmision_sexual" required>
        </div>

        <div class="form-group">
                <label>Enfermedades Degenerativas:</label>
                <input type="text" name="degenerativas" required>
        </div>

        <div class="form-group">
                <label>Enfermedades Neoplásicas:</label>
                <input type="text" name="neoplasicas" required>
        </div>

        <div class="form-group">
                <label>Enfermedades Congénitas:</label>
                <input type="text" name="congenitas" required>
        </div>


        </div>


        <h3>Antecedentes Personales NO Patodologicos</h3>




        <div class="grid">




        <div class="form-group">
                <label>Grupo Sanguíneo:</label>
                <input type="text" name="grupo_sanguineo" required>
        </div>

        <div class="form-group">
                <label>Factor RH:</label>
                <input type="text" name="factor_rh" required>
        </div>

        <div class="form-group">
            <label>¿Cuenta con Cartilla de Vacunación?</label>
            <input type="radio" name="cartilla_vacunacion" value="si" required> Sí
            <input type="radio" name="cartilla_vacunacion" value="no" required> No
        </div>

        <div class="form-group">
            <label>Adicciones (Tabaco, Alcohol):</label>
            <input type="text" name="adicciones">
        </div>


        <div class="form-group">
            <label>¿Utiliza Auxiliares de Higiene Bucal?</label>
            <input type="radio" name="auxiliares_higiene" value="si" required> Sí
            <input type="radio" name="auxiliares_higiene" value="no" required> No
        </div>
        <div class="form-group">
            <div class="form-group">
            <label>¿Cual?:</label>
            <input type="text" name="cual">
            </div>
        </div>
        
        

        </div>




        <h3>Antecedentes Alergicos</h3>





        <div class="grid">





        <div class="form-group">
                <label><input type="checkbox" name="antibioticos"> Antibióticos </label>
                <label><input type="checkbox" name="analgesicos"> Analgésicos </label>
                <label><input type="checkbox" name="anestesicos"> Anestésicos </label>
                <label><input type="checkbox"  name="alimentos"> Alimentos </label>
                <input type="text" name="especifique_medicamentos" placeholder="Especifique" style="width: auto;">
        </div>




        <div class="form-group">
                <label>¿Ha sido hospitalizado?</label>
                <input type="radio" name="hospitalizado" value="si" required> Sí
                <input type="radio" name="hospitalizado" value="no" required> No
        </div>


        <div class="form-group">
                <label>Fecha:</label>
                <input type="date" name="fecha_hospitalizacion">
        </div>


        <div class="form-group">
            <label>Motivo de Hospitalización:</label>
            <input type="text" name="motivo_hospitalizacion">
        </div>





        </div>



        <h2>Padecimientos actual</h2>
        <p></p>
        <h3>Exploración de cabeza y cuello</h3>



        <div class="grid">



        <div class="form-group">
            <label>Cabeza:</label>
            <input type="checkbox" name="exostosis"> Exostosis
            <input type="checkbox" name="endostosis"> Endostosis
        </div>

        <div class="form-group">
            <label>Cráneo:</label>
            <input type="checkbox" name="dolicocefalico"> Dolicocefálico
            <input type="checkbox" name="mesocefalico"> Mesocefálico
            <p></p><input type="checkbox" name="braquicefalico"> Braquicefálico
        </div>

        <div class="form-group">
            <label>Cara Asimetrías:</label>
            <input type="checkbox" name="transversales"> Transversales
            <input type="checkbox" name="longitudinales"> Longitudinales
        </div>

        <div class="form-group">
            <label>Perfil:</label>
            <input type="checkbox" name="concavo"> Cóncavo
            <input type="checkbox" name="convexo"> Convexo
            <input type="checkbox" name="recto"> Recto
        </div>

        <div class="form-group">
            <label>Piel:</label>
            <input type="checkbox" name="normal"> Normal
            <input type="checkbox" name="palida"> Pálida
            <input type="checkbox" name="cianotica"> Cianótica
            <p></p><input type="checkbox" name="enrojecida"> Enrojecida
        </div>





        <div class="form-group">
            <label>Músculos:</label>
            <input type="checkbox" name="hipotonicos"> Hipotónicos
            <input type="checkbox" name="hipertonicos"> Hipertónicos
            <p></p><input type="checkbox" name="espasticos"> Espásticos
        </div>

        <div class="form-group">
            <label>Cuello: Se palpa la cadena ganglionar</label>
            <input type="radio" name="cadena_ganglionar" value="si" required> Sí
            <input type="radio" name="cadena_ganglionar" value="no" required> No
        </div>






        </div>


        <h3>Exploración del aparato estomatognático</h3>






        <div class="grid">




        <div class="form-group">
            <label>Articulaciones Temporomandibular:</label>
            <p></p>
            <input type="checkbox" name="lateralidad"> Lateralidad
            <input type="checkbox" name="apertura"> Apertura
            <input type="checkbox" name="ruidos"> Ruidos
            <p></p>
            <input type="radio" name="articulacioness" value="si" required> Sí
            <input type="radio" name="articulacioness" value="no" required> No
        </div>

        <div class="form-group">
            <label>Chasquidos:</label>
            <input type="radio" name="chasquidos" value="si" required> Sí
            <input type="radio" name="chasquidos" value="no" required> No
        </div>

        <div class="form-group">
            <label>Crepitación:</label>
            <input type="radio" name="crepitacion" value="si" required> Sí
            <input type="radio" name="crepitacion" value="no" required> No
        </div>

        <div class="form-group">
            <label>Dificultad para abrir la boca:</label>
            <input type="radio" name="dificultad_abrir_boca" value="si" required> Sí
            <input type="radio" name="dificultad_abrir_boca" value="no" required> No
        </div>

        <div class="form-group">
            <label>Dolor a la abertura o movimientos de lateralidad:</label>
            <input type="radio" name="dolor_a_la_abertura" value="si" required> Sí
            <input type="radio" name="dolor_a_la_abertura" value="no" required> No
        </div>

        <div class="form-group">
            <label>Fatiga o dolor muscular:</label>
            <input type="radio" name="fatiga_muscular" value="si" required> Sí
            <input type="radio" name="fatiga_muscular" value="no" required> No
        </div>

        <div class="form-group">
            <label>Disminución de la abertura</label>
            <input type="radio" name="disminicion_abertura" value="si" required> Sí
            <input type="radio" name="disminicion_abertura" value="no" required> No
        </div>

        <div class="form-group">
            <label>Desviación a la abertura cierre</label>
            <input type="radio" name="desviacion_abertura_cierre" value="si" required> Sí
            <input type="radio" name="desviacion_abertura_cierre" value="no" required> No
        </div>


        

        </div>


        <h3>Tejidos Blandos</h3>






        <div class="grid">





        <div class="form-group">
            
            <div>
                <input type="checkbox" name="ganglios"> Ganglios
            
                <input type="checkbox" name="labio_interno"> Labio interno
                <p>

                </p>
                <input type="checkbox" name="frenillos"> Frenillos
            
                <input type="checkbox" name="istmo_bucofaringe"> Istmo Bucofaringe

            </div>

        </div>





        <div class="form-group">
            <div>
                <input type="checkbox" name="salivales"> Glándulas Salivales
            
                <input type="checkbox" name="comisuras"> Comisuras
                <p>

                </p>
                <input type="checkbox" name="tercio_medio"> Lengua Tercio Medio
            
                <input type="checkbox" name="borso"> Lengua Borso
                
            </div>

        </div>




        <div class="form-group">

            <div>
                <input type="checkbox" name="labio_externo"> Labio Externo
            
                <input type="checkbox" name="carrillos"> Carrillos
                <p>

                </p>
                <input type="checkbox" name="paladar_duro"> Paladar Duro
            
                <input type="checkbox" name="lengua_bordes"> Lengua Bordes
            </div>


        </div>



        <div class="form-group">

            <div>
                <input type="checkbox" name="borde_bermellon"> Borde Bermellón
            
                <input type="checkbox" name="fondo_saco"> Fondo de Saco
                <p>

                </p>
                <input type="checkbox" name="paladar_blando"> Paladar Blando
            
                <input type="checkbox" name="lengua_ventral"> Lengua Ventral
            </div>



        </div>





        <div class="form-group">

            <div>
                <input type="checkbox" name="piso_boca"> Piso de la boca
            
                <input type="checkbox" name="dientes"> Dientes
                <p>

                </p>
                <input type="checkbox" name="mucosa_borde_alveolar"> Mucosa del Borde Alveolar
                <p>

                </p>
                <input type="checkbox" name="encia"> Encía
            </div>




        </div>















            






    



        <div class="form-group">
            <input type="submit" value="Enviar">
        </div>




        
    </form>
</div>

<script>
    // Mostrar campo de "Cuál" si se selecciona "Sí" en Auxiliares de Higiene Bucal
    const radioInputs = document.querySelectorAll('input[name="auxiliares_higiene"]');
    const auxiliarInput = document.getElementById('auxiliarInput');

    radioInputs.forEach(input => {
        input.addEventListener('change', function() {
            if (this.value === 'si') {
                auxiliarInput.style.display = 'block';
            } else {
                auxiliarInput.style.display = 'none';
                auxiliarInput.value = ''; // Limpia el campo
            }
        });
    });


    // Service worker registration for PWA
    if ('serviceWorker' in navigator) {
        navigator.serviceWorker.register('sw.js')
        .then(() => console.log('Service Worker registered'))
        .catch(err => console.error('Service Worker registration failed: ', err));
    }
    
    
</script>

</body>
</html>
