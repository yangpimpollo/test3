<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Usuario</title>
    <style>
        body { font-family: sans-serif; display: flex; justify-content: center; padding-top: 200px; }
        .form-container { border: 1px solid #ccc; padding: 20px; border-radius: 8px; width: 300px; }
        .field { margin-bottom: 15px; }
        label { display: block; margin-bottom: 5px; }
        input { width: 100%; padding: 8px; box-sizing: border-box; }
        button { width: 100%; padding: 10px; background-color: #ff1563; color: white; border: none; border-radius: 4px; cursor: pointer; }
        button:hover { background-color: #ff578f; }
    </style>
</head>
<body>

<div class="form-container">
    <h2>Nuevo Usuario</h2>
    
    <form action="index.php?action=create'; " method="POST">
        
        <div class="field">
            <label for="user_name">Nombre de Usuario:</label>
            <input type="text" id="user_name" name="user_name" required placeholder="fulano de tal">
        </div>

        <div class="field">
            <label for="email">Correo Electrónico:</label>
            <input type="email" id="email" name="email" required placeholder="fulanodetal@ejemplo.com">
        </div>

        <div class="field">
            <label for="pass">Contraseña:</label>
            <input type="password" id="pass" name="pass" required placeholder="********">
        </div>

        <button type="submit">Registrar</button>
        
    </form>
</div>

</body>
</html>