<?php

//echo "Bienvenido a la página de registro de usuarios. Por favor, complete el formulario para crear una cuenta.";

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>¡Bienvenido de nuevo!</title>
    <style>
        /* Estilo base consistente con el anterior */
        body { 
            font-family: sans-serif; 
            display: flex; 
            justify-content: center; 
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #f4f7f6; /* Un gris azulado muy suave para variar */
        }

        .welcome-container { 
            border: 1px solid #eee; 
            padding: 40px; 
            border-radius: 15px; 
            width: 320px; 
            text-align: center;
            background-color: white;
            box-shadow: 0 10px 25px rgba(0,0,0,0.05);
            animation: fadeIn 0.8s ease-out;
        }

        /* Animación de entrada suave */
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .avatar {
            width: 80px;
            height: 80px;
            background-color: #ff1563;
            border-radius: 50%;
            margin: 0 auto 20px;
            display: flex;
            justify-content: center;
            align-items: center;
            color: white;
            font-size: 30px;
            font-weight: bold;
        }

        h2 { 
            color: #333; 
            margin: 0 0 10px 0;
            font-size: 24px;
        }

        p { 
            color: #777; 
            font-size: 14px;
            margin-bottom: 30px;
            line-height: 1.4;
        }

        .dashboard-btn { 
            display: block;
            width: 100%; 
            padding: 12px; 
            background-color: #ff1563; 
            color: white; 
            text-decoration: none;
            border-radius: 6px; 
            font-weight: bold;
            transition: all 0.3s ease;
            box-sizing: border-box;
        }

        .dashboard-btn:hover { 
            background-color: #ff578f; 
            transform: scale(1.02);
        }

        .logout-link {
            display: inline-block;
            margin-top: 20px;
            color: #999;
            text-decoration: none;
            font-size: 13px;
        }

        .logout-link:hover {
            color: #ff1563;
        }
    </style>
</head>
<body>

    <div class="welcome-container">
        <div class="avatar">JD</div>
        
        <h2>¡Hola, Fulano!</h2>
        <p>Es genial tenerte de vuelta. Tenemos un par de actualizaciones esperando por ti en tu panel.</p>
        
        <a href="/dashboard" class="dashboard-btn">Ir a mi Panel</a>
        
        <a href="/logout" class="logout-link">Cerrar sesión</a>
    </div>

</body>
</html>