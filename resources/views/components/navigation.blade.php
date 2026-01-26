    @php
        $nombreCompleto = $negocio->negocio_nombre;
        $primeraPalabra = Str::before($nombreCompleto, ' ');
        $restoDelNombre = Str::after($nombreCompleto, ' ');
    @endphp

    <!-- Navegación -->
        <nav class="bg-white shadow-sm sticky top-0 z-50" x-data="{ open: false }">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex justify-between h-16 items-center">

                    <div class="shrink-0 flex items-center gap-2">
                        <a href="{{route('welcome')}}" class="flex items-center gap-2">
                            <div class="bg-blue-600 p-2 rounded-lg text-white">
                                <i class="fas fa-jedi fa-lg"></i>
                            </div>
                            <div class="flex items-center font-bold text-2xl">
                                <span class="text-blue-600">{{ $primeraPalabra }}</span>
                                <span class="text-yellow-500 ml-1">{{ $restoDelNombre !== $primeraPalabra ? $restoDelNombre : '' }}</span>
                            </div>
                        </a>
                    </div>

                    <div class="hidden md:flex items-center md:gap-3 lg:gap-6 font-medium">
                        <a href="{{route('inflables')}}" class="text-sm lg:text-base font-medium hover:text-blue-600 transition">Inflables</a>
                        <a href="{{route('mobiliario')}}" class="text-sm lg:text-base font-medium hover:text-yellow-600 transition">Mobiliario</a>
                        <a href="{{route('carpas')}}" class="text-sm lg:text-base font-medium hover:text-green-600 transition">Carpas</a>
                        <a href="{{route('rokolas')}}" class="text-sm lg:text-base font-medium hover:text-red-600 transition">Rokolas</a>
                        <a href="{{route('decoracion')}}" class="text-sm lg:text-base font-medium hover:text-fuchsia-600 transition">Decoración</a>

                        <button onclick="abrirModalZonas()" class="bg-yellow-500 text-white px-4 py-2 rounded-full text-xs lg:text-sm font-bold shadow-sm hover:bg-yellow-600 transition whitespace-nowrap">
                            Zonas
                        </button>

                        <a href="#contacto" class="bg-blue-600 text-white px-4 py-2 rounded-full text-xs lg:text-sm font-bold shadow-sm hover:bg-blue-700 transition whitespace-nowrap">
                            Cotizar
                        </a>
                    </div>

                    <div class="flex items-center md:hidden">
                        <button @click="open = !open" class="text-gray-500 hover:text-blue-600 focus:outline-none">
                            <svg class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path x-show="!open" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                                <path x-show="open" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>

            <div x-show="open"
                x-transition:enter="transition ease-out duration-200"
                x-transition:enter-start="opacity-0 -translate-y-4"
                x-transition:enter-end="opacity-100 translate-y-0"
                class="md:hidden bg-gray-50 border-t border-gray-100 pb-4"
                @click.away="open = false">
                <div class="px-4 pt-2 space-y-1">
                    <a href="{{route('inflables')}}" class="block px-3 py-2 text-base font-medium text-gray-700 hover:bg-blue-50 hover:text-blue-600 rounded-md">Inflables</a>
                    <a href="{{route('mobiliario')}}" class="block px-3 py-2 text-base font-medium text-gray-700 hover:bg-yellow-50 hover:text-yellow-600 rounded-md">Mobiliario</a>
                    <a href="{{route('carpas')}}" class="block px-3 py-2 text-base font-medium text-gray-700 hover:bg-green-50 hover:text-green-600 rounded-md">Carpas</a>
                    <a href="{{route('rokolas')}}" class="block px-3 py-2 text-base font-medium text-gray-700 hover:bg-red-50 hover:text-red-600 rounded-md">Rokolas</a>
                    <a href="{{route('decoracion')}}" class="block px-3 py-2 text-base font-medium text-gray-700 hover:bg-fuchsia-50 hover:text-fuchsia-600 rounded-md">Decoración</a>

                    <div class="pt-4 flex flex-col gap-2">
                        <button onclick="abrirModalZonas()" class="w-full bg-yellow-500 text-white px-4 py-3 rounded-xl font-bold shadow-md">
                            Zonas de Cobertura
                        </button>
                        <a href="#contacto" @click="open = false" class="w-full bg-blue-600 text-white text-center px-4 py-3 rounded-xl font-bold shadow-md">
                            Cotizar Ahora
                        </a>
                    </div>
                </div>
            </div>
        </nav>
    <!-- Navegación -->
