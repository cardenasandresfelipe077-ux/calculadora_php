<?php
session_start();
// Seguridad simulada: si no pasó por el login, lo devuelve
if (!isset($_SESSION['usuario'])) {
    header("Location: index.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Red Solidaria - Dashboard</title>
    <script src="https://tailwindcss.com"></script>
</head>
<body class="bg-gray-50 font-sans">

    <!-- Barra de Navegación Superior -->
    <nav class="bg-white shadow-sm border-b border-gray-200 px-6 py-4 flex justify-between items-center">
        <div class="flex items-center space-x-2">
            <span class="text-xl">🍎</span>
            <span class="font-bold text-lg text-gray-800">Red Solidaria Alimentos</span>
        </div>
        <div class="flex items-center space-x-4">
            <span class="text-sm bg-green-100 text-green-800 px-3 py-1 rounded-full font-medium">
                🏢 <?php echo $_SESSION['usuario']; ?> (<?php echo $_SESSION['rol']; ?>)
            </span>
            <a href="logout.php" class="text-sm text-red-500 hover:text-red-700 font-medium">Cerrar Sesión</a>
        </div>
    </nav>

    <!-- Contenedor Principal -->
    <main class="max-w-7xl mx-auto p-6 space-y-6">
        
        <!-- Encabezado de bienvenida -->
        <div>
            <h1 class="text-2xl font-bold text-gray-900">Panel de Impacto Social</h1>
            <p class="text-sm text-gray-500">Monitoreo de excedentes y rescates en el departamento del Atlántico.</p>
        </div>

        <!-- Tarjetas de Estadísticas Rápidas (KPIs Estáticos) -->
        <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
            <div class="bg-white p-5 rounded-lg shadow-sm border border-gray-200">
                <p class="text-xs font-semibold text-gray-400 uppercase">Donaciones Activas</p>
                <p class="text-2xl font-bold text-gray-800 mt-1">12 Lotes</p>
            </div>
            <div class="bg-white p-5 rounded-lg shadow-sm border border-gray-200">
                <p class="text-xs font-semibold text-gray-400 uppercase">Kilos Rescatados (Mes)</p>
                <p class="text-2xl font-bold text-green-600 mt-1">1,450 Kg</p>
            </div>
            <div class="bg-white p-5 rounded-lg shadow-sm border border-gray-200">
                <p class="text-xs font-semibold text-gray-400 uppercase">Comedores Beneficiados</p>
                <p class="text-2xl font-bold text-gray-800 mt-1">24 Sedes</p>
            </div>
            <div class="bg-white p-5 rounded-lg shadow-sm border border-gray-200">
                <p class="text-xs font-semibold text-gray-400 uppercase">Municipios Cobiertos</p>
                <p class="text-2xl font-bold text-blue-600 mt-1">7 Municipios</p>
            </div>
        </div>

        <!-- Sección de Datos Simulados -->
        <div class="bg-white rounded-lg shadow-sm border border-gray-200 overflow-hidden">
            <div class="px-6 py-4 border-b border-gray-200 flex justify-between items-center bg-gray-50">
                <h2 class="font-bold text-gray-800">Alimentos Disponibles para Recogida Inmediata</h2>
                <span class="text-xs text-gray-400">Actualizado en tiempo real</span>
            </div>
            
            <div class="divide-y divide-gray-200">
                <!-- Ítem 1 -->
                <div class="p-6 flex flex-col md:flex-row justify-between items-start md:items-center space-y-3 md:space-y-0">
                    <div>
                        <h3 class="font-semibold text-gray-900 text-lg">30 Canastas de Tomate Chonto</h3>
                        <p class="text-sm text-gray-500">Donante: <span class="font-medium text-gray-700">Granabastos (Soledad)</span></p>
                        <p class="text-xs text-amber-600 mt-1 font-medium">⏳ Expira en: 4 horas</p>
                    </div>
                    <button onclick="alert('¡Simulación de Reserva Exitosa! El lote ha sido asignado a tu fundación y se generó el código QR de recogida.')" 
                            class="bg-green-600 text-white text-sm px-4 py-2 rounded shadow hover:bg-green-700 transition">
                        Solicitar Lote
                    </button>
                </div>

                <!-- Ítem 2 -->
                <div class="p-6 flex flex-col md:flex-row justify-between items-start md:items-center space-y-3 md:space-y-0">
                    <div>
                        <h3 class="font-semibold text-gray-900 text-lg">50 Almuerzos Ejecutivos Preparados</h3>
                        <p class="text-sm text-gray-500">Donante: <span class="font-medium text-gray-700">Restaurante Corrientazo Express (Barranquilla, Norte)</span></p>
                        <p class="text-xs text-red-600 mt-1 font-medium">⏳ Expira en: 1 hora</p>
                    </div>
                    <button onclick="alert('¡Simulación de Reserva Exitosa! El lote ha sido asignado a tu fundación y se generó el código QR de recogida.')" 
                            class="bg-green-600 text-white text-sm px-4 py-2 rounded shadow hover:bg-green-700 transition">
                        Solicitar Lote
                    </button>
                </div>

                <!-- Ítem 3 -->
                <div class="p-6 flex flex-col md:flex-row justify-between items-start md:items-center space-y-3 md:space-y-0">
                    <div>
                        <h3 class="font-semibold text-gray-900 text-lg">15 Bultos de Yuca y Plátano</h3>
                        <p class="text-sm text-gray-500">Donante: <span class="font-medium text-gray-700">Asociación Agrícola de Ponedera</span></p>
                        <p class="text-xs text-gray-500 mt-1 font-medium">📅 Expira en: 3 días</p>
                    </div>
                    <button onclick="alert('¡Simulación de Reserva Exitosa! El lote ha sido asignado a tu fundación y se generó el código QR de recogida.')" 
                            class="bg-green-600 text-white text-sm px-4 py-2 rounded shadow hover:bg-green-700 transition">
                        Solicitar Lote
                    </button>
                </div>
            </div>
        </div>

    </main>

</body>
</html>