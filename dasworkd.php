<body class="bg-gray-100 min-h-screen">
    <div class="flex">
        <aside class="w-64 bg-gray-800 h-screen p-4 text-white">
            <h1 class="text-xl font-bold mb-6">Dashboard Admin</h1>
            <ul>
                <li class="mb-2"><a href="#" class="block p-2 rounded hover:bg-gray-700">Inicio</a></li>
                <li class="mb-2"><a href="#" class="block p-2 rounded hover:bg-gray-700">Reportes</a></li>
                <li class="mb-2"><a href="#" class="block p-2 rounded hover:bg-gray-700">Usuarios</a></li>
                <li class="mb-2"><a href="index.html" class="block p-2 rounded hover:bg-red-700 bg-red-500">Salir</a></li>
            </ul>
        </aside>
        <main class="flex-1 p-8">
            <h1 class="text-3xl font-bold text-gray-800 mb-8">Resumen General</h1>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
                <div class="bg-white p-6 rounded-lg shadow-md border-l-4 border-blue-500">
                    <p class="text-gray-500">Usuarios Activos</p>
                    <p class="text-3xl font-bold text-gray-900">1,250</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-md border-l-4 border-green-500">
                    <p class="text-gray-500">Ingresos (Est.)</p>
                    <p class="text-3xl font-bold text-gray-900">$34,800</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-md border-l-4 border-yellow-500">
                    <p class="text-gray-500">Proyectos</p>
                    <p class="text-3xl font-bold text-gray-900">45</p>
                </div>
            </div>

            <div class="bg-white p-6 rounded-lg shadow-md">
                <h3 class="text-xl font-semibold mb-4">Ventas Mensuales (Gráfico)</h3>
                <div class="h-64 bg-gray-200 flex items-center justify-center text-gray-500">
                    [Espacio para el Gráfico con JavaScript/Chart.js]
                </div>
            </div>

        </main>
    </div>
</body>
</html>