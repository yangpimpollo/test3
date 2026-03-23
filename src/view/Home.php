<div class="form-container">
    <div class="field">
        <!-- Botón de Login (puedes cambiar el enlace según tu ruta) -->
        <button onclick="window.location.href='index.php?action=login'">Login</button>
    </div>
    
    <div class="field">
        <!-- Botón Create New Account con la ruta solicitada -->
        <button onclick="window.location.href='index.php?action=create'" style="background-color: #444;">Create New Account</button>
    </div>
</div>

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
