<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title>
    <!-- <link rel="stylesheet" href="index.css"> -->
     <!--
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
-->
    <style>
        body { font-family: sans-serif; display: flex; justify-content: center; padding-top: 250px; }
        .form-container { height: 200px; border: 1px solid #ccc; padding: 20px; border-radius: 8px; width: 300px; }
        .field { margin-bottom: 15px; }
        button { 
            width: 100%; 
            padding: 10px; 
            background-color: #ff1563; 
            color: white; 
            border: none; 
            border-radius: 4px; 
            cursor: pointer; 
            font-weight: bold;
        }
        button:hover { background-color: #ff578f; }
    </style>

  </head>
  <body>


    <div class="form-container">
        <div class="field">
            <!-- Botón de Login (puedes cambiar el enlace según tu ruta) -->
            <button onclick="window.location.href='index.php?action=go_login'">Login</button>
        </div>
        
        <div class="field">
            <!-- Botón Create New Account con la ruta solicitada -->
            <button onclick="window.location.href='index.php?action=go_create'" style="background-color: #444;">Create New Account</button>
        </div>
    </div>
    <!--
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>

    -->
  </body>
</html>









