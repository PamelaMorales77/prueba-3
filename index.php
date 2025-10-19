<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">
    <div class="w-full max-w-md">
        <div class="bg-white shadow-xl rounded-lg px-8 pt-6 pb-8 mb-4">
            <h2 class="text-2xl font-bold text-center text-gray-800 mb-6">Iniciar Sesión</h2>
            <form action="dashboard.html" method="GET">
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="usuario">Usuario</label>
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="usuario" type="text" placeholder="ejemplo@correo.com">
                </div>
                <div class="mb-6">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="contrasena">Contraseña</label>
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" id="contrasena" type="password" placeholder="********">
                </div>
                <div class="flex items-center justify-between">
                    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">Entrar al Dashboard</button>
                    <a class="inline-block align-baseline font-bold text-sm text-blue-500 hover:text-blue-800" href="#">Registrarse</a>
                </div>
            </form>
        </div>
    </div>
</body>
</html>