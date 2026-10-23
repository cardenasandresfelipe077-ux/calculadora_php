<?php
session_start();

// Credenciales de prueba simula un usuario de la fundación o donante
$usuario_correcto = "atlanticosolidario@gmail.com";
$password_correcto = "123456";
$error = "";

// Validamos si el formulario fue enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'] ?? '';
    $password = $_POST['password'] ?? '';

    if ($email === $usuario_correcto && $password === $password_correcto) {
        // Guardamos la sesión simulada y vamos al Dashboard
        $_SESSION['usuario'] = "Fundación Nutriendo al Atlántico";
        $_SESSION['rol'] = "Receptor"; // Puede ser Donante o Receptor
        header("Location: dashboard.php");
        exit();
    } else {
        $error = "Credenciales incorrectas. Usa: atlanticosolidario@gmail.com / 123456";
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Red Solidaria - Login</title>
    <!-- Usamos Tailwind CSS desde CDN para que se vea moderno sin instalar nada -->
    <script src="https://tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex items-center justify-center h-screen">

    <div class="bg-white p-8 rounded-lg shadow-lg w-full max-w-md">
        <div class="text-center mb-6">
            <h1 class="text-2xl font-bold text-green-600">🍎 Red Solidaria</h1>
            <p class="text-gray-500 text-sm mt-1">Banco de Alimentos del Atlántico</p>
        </div>

        <?php if (!empty($error)): ?>
            <div class="bg-red-100 text-red-700 p-3 rounded mb-4 text-sm text-center">
                <?php echo $error; ?>
            </div>
        <?php endif; ?>

        <form action="index.php" method="POST" class="space-y-4">
            <div>
                <label class="block text-sm font-medium text-gray-700">Correo Electrónico</label>
                <input type="email" name="email" required placeholder="ejemplo@correo.com"
                       class="mt-1 block w-full p-2.5 border border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500">
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700">Contraseña</label>
                <input type="password" name="password" required placeholder="••••••••"
                       class="mt-1 block w-full p-2.5 border border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500">
            </div>

            <button type="submit" 
                    class="w-full bg-green-600 text-white p-2.5 rounded-md font-semibold hover:bg-green-700 transition duration-200">
                Iniciar Sesión
            </button>
        </form>

        <div class="mt-6 text-xs text-gray-400 text-center bg-gray-50 p-2 rounded">
            <strong>Modo Demo para Instructor:</strong><br>
            User: atlanticosolidario@gmail.com | Pass: 123456
        </div>
    </div>

</body>
</html>