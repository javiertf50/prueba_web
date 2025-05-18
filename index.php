<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>La Gran Final - Champions League</title>
    <style>
        body {
            font-family: 'Arial Black', Gadget, sans-serif;
            margin: 0;
            padding: 0;
            color: white;
            background: url('https://images.unsplash.com/photo-1574629810360-7efbbe195018?ixlib=rb-4.0.3') no-repeat center center fixed;
            background-size: cover;
            position: relative;
        }
        
        body::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.7);
            z-index: -1;
        }
        
        .container {
            max-width: 1000px;
            margin: 0 auto;
            padding: 20px;
            position: relative;
        }
        
        h1 {
            color: #ffd700;
            text-align: center;
            font-size: 3em;
            text-shadow: 2px 2px 4px #000;
            margin-bottom: 30px;
        }
        
        h2 {
            color: #1e90ff;
            border-bottom: 2px solid #ff4500;
            padding-bottom: 5px;
        }
        
        .highlight {
            color: #ff6347;
            font-weight: bold;
        }
        
        .team-container {
            display: flex;
            justify-content: space-around;
            margin: 30px 0;
            flex-wrap: wrap;
        }
        
        .team {
            text-align: center;
            background: rgba(0, 0, 0, 0.6);
            padding: 20px;
            border-radius: 10px;
            width: 40%;
            min-width: 300px;
            margin: 10px;
            box-shadow: 0 0 15px rgba(255, 215, 0, 0.5);
        }
        
        .team-logo {
            width: 150px;
            height: 150px;
            object-fit: contain;
            margin-bottom: 15px;
        }
        
        .video-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
            margin: 40px 0;
        }
        
        .video {
            width: 45%;
            min-width: 300px;
            margin: 10px 0;
            background: rgba(0, 0, 0, 0.7);
            padding: 15px;
            border-radius: 8px;
        }
        
        iframe {
            width: 100%;
            height: 250px;
            border: none;
            border-radius: 5px;
        }
        
        .video-title {
            color: #ffd700;
            text-align: center;
            margin: 10px 0;
        }
        
        .content {
            background: rgba(0, 0, 0, 0.6);
            padding: 25px;
            border-radius: 10px;
            line-height: 1.7;
            font-size: 1.1em;
        }
        
        footer {
            text-align: center;
            margin-top: 40px;
            padding: 20px;
            background: rgba(0, 0, 0, 0.8);
            border-top: 1px solid #ffd700;
        }
        
        .social-links a {
            color: #1e90ff;
            margin: 0 10px;
            text-decoration: none;
            font-size: 1.2em;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>¡LA GRAN FINAL DE CHAMPIONS!</h1>
        
        <div class="team-container">
            <div class="team">
                <img src="https://upload.wikimedia.org/wikipedia/en/thumb/a/a7/Paris_Saint-Germain_F.C..svg/1200px-Paris_Saint-Germain_F.C..svg.png" alt="PSG" class="team-logo">
                <h2>PARIS SAINT-GERMAIN</h2>
                <p>Buscando su primer título en la máxima competición europea</p>
            </div>
            
            <div class="team">
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/0/05/FC_Internazionale_Milano_2021.svg/1200px-FC_Internazionale_Milano_2021.svg.png" alt="Inter de Milán" class="team-logo">
                <h2>INTER DE MILÁN</h2>
                <p>Con experiencia en finales y hambre de gloria</p>
            </div>
        </div>
        
        <div class="content">
            <h2>El duelo del año</h2>
            <p>El <span class="highlight">PSG vs Inter de Milán</span> promete ser una final para el recuerdo. Dos estilos de juego contrastantes se enfrentarán en el escenario más grande del fútbol europeo.</p>
            
            <p>Mientras el PSG llega con su juego ofensivo y lleno de estrellas, el Inter apuesta por solidez defensiva y contraataques letales. Una batalla entre dos filosofías que harán vibrar a los aficionados.</p>
            
            <h2>Videos destacados</h2>
            <p>Revive los momentos clave que llevaron a estos equipos a la final:</p>
            
            <div class="video-container">
                <div class="video">
                    <h3 class="video-title">Camino del PSG a la final</h3>
                    <iframe src="https://www.youtube.com/embed/ejemplo1" allowfullscreen></iframe>
                </div>
                
                <div class="video">
                    <h3 class="video-title">La remontada épica del Inter</h3>
                    <iframe src="https://www.youtube.com/embed/ejemplo2" allowfullscreen></iframe>
                </div>
                
                <div class="video">
                    <h3 class="video-title">Mejores jugadas de semifinales</h3>
                    <iframe src="https://www.youtube.com/embed/ejemplo3" allowfullscreen></iframe>
                </div>
                
                <div class="video">
                    <h3 class="video-title">Análisis táctico previo</h3>
                    <iframe src="https://www.youtube.com/embed/ejemplo4" allowfullscreen></iframe>
                </div>
            </div>
            
            <h2>¿Quién levantará la orejona?</h2>
            <p>Los expertos debaten sin descanso sobre el favorito. El PSG cuenta con mayor individualidad, pero el Inter muestra un juego colectivo admirable. Será cuestión de ver qué prevalece en la noche decisiva.</p>
            
            <p>Una cosa es segura: sin importar el resultado, este partido escribirá una nueva página en la historia de la Champions League.</p>
        </div>
        
        <footer>
            <div class="social-links">
                <a href="#">Twitter</a> | 
                <a href="#">Facebook</a> | 
                <a href="#">Instagram</a>
            </div>
            <p>© 2023 Pasión Fútbol - Todos los derechos reservados</p>
        </footer>
    </div>
</body>
</html>
