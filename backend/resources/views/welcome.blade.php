<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AQ F1 Porra</title>
    <link href="css/style.css" rel="stylesheet">
</head>

<body class="bg-custom text-white min-h-screen">
    <div class="container mx-auto px-4 py-8">
        <header class="mb-12 flex items-center justify-between">
            <div class="flex items-center space-x-2">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-cyan" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 21v-4m0 0V5a2 2 0 012-2h6.5l1 1H21l-3 6 3 6h-8.5l-1-1H5a2 2 0 00-2 2zm9-13.5V9" />
                </svg>
                <h1 class="text-2xl font-bold">AQ F1 Porra</h1>
            </div>
            <nav>
                <ul class="flex space-x-4">
                    <li><a href="#" class="hover:text-cyan">Inicio</a></li>
                    <li><a href="#" class="hover:text-cyan">Clasificación</a></li>
                    <li><a href="#" class="hover:text-cyan">Reglas</a></li>
                </ul>
            </nav>
        </header>
        <main class="grid gap-12 md:grid-cols-2">
            <div class="flex flex-col justify-center space-y-6">
                <h2 class="text-4xl font-bold leading-tight">
                    ¡Únete a la emoción de la Fórmula 1 con nuestra porra!
                </h2>
                <p class="text-xl">
                    Compite con tus amigos, predice los resultados y demuestra tus conocimientos de F1.
                </p>
                <div class="flex space-x-4">
                    <a href="/" class="btn inline-flex items-center justify-center px-4 py-2 border border-transparent text-base font-medium rounded-md text-white bg-cyan hover:bg-cyan">
                        Registrarse
                    </a>
                    <a href="/" class="btn inline-flex items-center justify-center px-4 py-2 border border-cyan text-base font-medium rounded-md text-cyan bg-transparent hover:bg-cyan hover:text-white">
                        Iniciar Sesión
                    </a>
                </div>
            </div>
            <div class="relative hidden md:block">
                <img src="/" alt="Coche de Fórmula 1" class="rounded-lg object-cover w-full h-full">
                <div class="absolute inset-0 bg-custom bg-opacity-50 rounded-lg image-overlay"></div>
                <div class="absolute inset-0 flex items-center justify-center">
                    <div class="text-center">
                        @if ($nextRace)
                        <h2>Próxima Carrera</h2>
                        <p><strong>Nombre:</strong> {{ $nextRace->name }}</p>
                        <p><strong>Fecha:</strong> {{ $nextRace->date->format('d-m-Y H:i') }}</p>
                        @else
                        <p>No hay próximas carreras programadas.</p>
                        @endif
                    </div>
                </div>
            </div>
        </main>
    </div>
</body>

</html>