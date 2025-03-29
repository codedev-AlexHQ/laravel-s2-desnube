<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arriba Perú</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background: linear-gradient(135deg, #D91023 0%, #ffffff 50%, #D91023 100%);
            font-family: 'Arial Black', 'Arial Bold', sans-serif;
            text-align: center;
        }
        
        .arriba-peru {
            font-size: 8vw;
            font-weight: 900;
            color: #ffffff;
            text-shadow: 
                3px 3px 0 #D91023,
                6px 6px 0 #000000;
            letter-spacing: 2px;
            text-transform: uppercase;
            animation: pulse 2s infinite alternate;
        }
        
        @keyframes pulse {
            from {
                transform: scale(1);
                text-shadow: 
                    3px 3px 0 #D91023,
                    6px 6px 0 #000000;
            }
            to {
                transform: scale(1.05);
                text-shadow: 
                    5px 5px 0 #D91023,
                    10px 10px 0 #000000;
            }
        }
    </style>
</head>
<body>
    <div class="arriba-peru">ARRIBA PERÚ</div>
</body>
</html>