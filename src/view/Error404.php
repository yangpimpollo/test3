<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Error 404 - No Encontrado</title>
    <style>
        /* Reutilizando y adaptando tu estilo base */
        body { 
            font-family: sans-serif; 
            display: flex; 
            justify-content: center; 
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #f9f9f9;
        }

        .error-container { 
            border: 1px solid #ccc; 
            padding: 40px; 
            border-radius: 12px; 
            width: 350px; 
            text-align: center;
            box-shadow: 0 4px 15px rgba(0,0,0,0.05);
            background-color: white;
        }

        h1 { 
            font-size: 80px; 
            margin: 0; 
            color: #ff1563; /* Tu color principal */
        }

        p { 
            color: #666; 
            margin-bottom: 30px; 
            line-height: 1.5;
        }

        .back-button { 
            display: inline-block;
            width: 100%; 
            padding: 12px; 
            background-color: #ff1563; 
            color: white; 
            text-decoration: none;
            border-radius: 4px; 
            font-weight: bold;
            transition: background-color 0.3s;
        }

        .back-button:hover { 
            background-color: #ff578f; 
        }

        .icon {
            font-size: 50px;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>

    <div class="error-container">
        <div class="icon">🔍</div>
        <h1>404</h1>
        <p>¡Uy! Parece que la página que buscas se ha ido de vacaciones o nunca existió.</p>
        
        <a href="/" class="back-button">Volver al Inicio</a>
    </div>

</body>
</html>