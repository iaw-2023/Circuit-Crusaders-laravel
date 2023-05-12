@extends('layouts.base')

@section('content')
    <div class="mt-16 ">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-8">
            <a href="{{ route('motos.index') }}" class=" scale-100 p-6 bg-black dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                <div>
                    <h4 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">Motos</h4>
                    <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                    Puede crear, borrar y editar Motos </p>
                </div>
            </a>

            <a href="{{ route('estilos.index') }}" class="scale-100 p-6 bg-black dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500 ">
                <div>
                    <h4 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">Estilos</h4>

                    <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                        Puede crear, borrar y editar Estilos     </p>
                </div>
            </a>

            <a href="{{ route('estilos.index') }}" class="scale-100 p-6 bg-black dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                <div>
                    <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">Clientes</h2>

                    <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                        Puede ver todos los clientes y sus caracterisiticas                    
                    </p>
                </div>
            </a>

            <a class="scale-100 p-6 bg-black dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                <div>
                    <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">Reportes</h2>

                    <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                     Puede ver reportes filtrados por fecha o por cliente
                    </p>
                </div>
            </a>
        </div>
    </div>
@endsection