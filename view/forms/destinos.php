<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Oasis Tour</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="view/css/style.css"> <!-- Enlace al archivo CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>

<body>
    <?php require_once("./view/layout/header.php");?>

    <br><br>

    <div class="destinos-section">
        <div class="destinos-overlay">
            <h1>Destinos</h1>
            <p>"Comienza tu aventura en las ciudades más emblemáticas de Chiapas y en sus centros ecoturísticos, 
                donde encontrarás todo lo necesario para explorar este paraíso natural con libertad y entusiasmo."</p>
        </div>
    </div>

    <div class="destinos-cuadros">
        <!-- Tarjeta de destino 1 -->
        <a href="sumidero.php" class="destino-cuadro">
            <div class="cuadro-image" style="background-image: url('view/img/imagen7.png');"></div>
            <div class="cuadro-info">
                <h3>Cañón del Sumidero</h3>
                <p>Un impresionante cañón natural con paredes de hasta 1,000 metros de altura, 
                    rodeado de fauna y vegetación. Se puede recorrer en bote por el río Grijalva.</p>
            </div>
        </a>

        <!-- Tarjeta de destino 2 -->
        <a href="cañon.php?destino=palenque" class="destino-cuadro">
            <div class="cuadro-image" style="background-image: url('view/img/imagen2.jpg');"></div>
            <div class="cuadro-info">
                <h3>Palenque</h3>
                <p>Un importante sitio arqueológico maya, con templos y pirámides rodeados de selva. 
                    Es famoso por su historia y arquitectura impresionante.</p>
            </div>
        </a>

        <!-- Tarjeta de destino 3 -->
        <a href="detalle_destino.php?destino=san_cristobal" class="destino-cuadro">
            <div class="cuadro-image" style="background-image: url('view/img/imagen6.jpg');"></div>
            <div class="cuadro-info">
                <h3>San Cristóbal de las Casas</h3>
                <p>Un encantador pueblo colonial con calles empedradas, mercados de artesanías y una rica cultura indígena, 
                    ideal para disfrutar de la historia y el folclore local.</p>
            </div>
        </a>

        <!-- Tarjeta de destino 4 -->
        <a href="detalle_destino.php?destino=agua_azul" class="destino-cuadro">
            <div class="cuadro-image" style="background-image: url('view/img/imagen3.jpg');"></div>
            <div class="cuadro-info">
                <h3>Agua Azul</h3>
                <p>Un conjunto de hermosas cascadas de agua turquesa en medio de la selva, perfectas para nadar y disfrutar de la naturaleza.</p>
            </div>
        </a>

        <!-- Tarjeta de destino 5 -->
        <a href="detalle_destino.php?destino=lagos_montebello" class="destino-cuadro">
            <div class="cuadro-image" style="background-image: url('view/img/destino5.jpg');"></div>
            <div class="cuadro-info">
                <h3>Lagos de Montebello</h3>
                <p>Un parque con lagos cristalinos de varios colores, rodeados de montañas y bosques, ideal para el ecoturismo y la fotografía.</p>
            </div>
        </a>

        <!-- Tarjeta de destino 6 -->
        <a href="detalle_destino.php?destino=sima_cotorras" class="destino-cuadro">
            <div class="cuadro-image" style="background-image: url('view/img/destino6.jpg');"></div>
            <div class="cuadro-info">
                <h3>Sima de las Cotorras</h3>
                <p>Un sumidero natural de 140 metros de profundidad, hogar de miles de guacamayas y otras aves, excelente para el ecoturismo.</p>
            </div>
        </a>

        <!-- Tarjeta de destino 7 -->
        <a href="destinos/sumidero" class="destino-cuadro">
            <div class="cuadro-image" style="background-image: url('view/img/imagen4.jpg');"></div>
            <div class="cuadro-info">
                <h3>Chiapa de Corzo</h3>
                <p>Un pintoresco pueblo colonial famoso por su zócalo, su fuente histórica y el "Parachico", una danza tradicional de la región.</p>
            </div>
        </a>
    </div>
    <br><br>
    <?php require_once("./view/layout/footer.php");?>
</body>

</html>

<head>
  <style>
    /* Sección general */
/* Sección general */
.destinos-section {
  position: relative;
  background-image: url('view/img/imagen3.jpg'); /* Fondo de la sección principal */
  background-size: cover;
  background-position: center;
  height: 400px;
  display: flex;
  align-items: center;
  justify-content: center;
}

.destinos-overlay {
  position: relative;
  background-color: rgba(0, 0, 0, 0.5);
  color: #fff;
  text-align: center;
  padding: 20px;
  max-width: 600px;
  border-radius: 10px;
}

.destinos-cuadros {
  display: flex;
  flex-wrap: wrap;
  gap: 20px;
  justify-content: center;
  padding: 20px;
}

/* Estilo para cada cuadro de destino */
.destino-cuadro {
  background-color: #fff;
  border-radius: 10px;
  overflow: hidden;
  width: 300px;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
  transition: transform 0.2s;
}

.destino-cuadro:hover {
  transform: scale(1.05);
}

.cuadro-image {
  width: 100%;
  height: 200px;
  background-size: cover;
  background-position: center;
}

.cuadro-info {
  padding: 15px;
  text-align: center;
}

.cuadro-info h3 {
  margin: 0;
  font-size: 1.5em;
  color: #333;
}

.cuadro-info p {
  color: #555;
  margin-top: 5px;
}
a {
    text-decoration: none;
}
.destino-cuadro a {
    text-decoration: none;
}

  </style>
</head>
