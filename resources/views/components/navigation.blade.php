    @php
        $nombreCompleto = $negocio->negocio_nombre;
        $primeraPalabra = Str::before($nombreCompleto, ' ');
        $restoDelNombre = Str::after($nombreCompleto, ' ');
    @endphp

    <!-- Navegación -->
        <nav class="bg-white shadow-sm sticky top-0 z-50">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex justify-between h-16 items-center">
                    <div class="shrink-0 flex items-center gap-2">
                        <div class="bg-blue-600 p-2 rounded-lg text-white">
                            <a href="{{route('welcome')}}">
                                <i class="fas fa-jedi fa-lg"></i>
                        </div>
                            {{-- <span class="text-2xl font-bold text-blue-600">Diversión<span class="text-yellow-500">Total</span></span>
                            <span>{{$negocio->negocio_nombre}}</span> --}}

                                <div class="flex items-center font-bold text-2xl">
                                    <span class="text-blue-600">{{ $primeraPalabra }}</span>
                                    <span class="text-yellow-500 ml-1">
                                        {{ $restoDelNombre !== $primeraPalabra ? $restoDelNombre : '' }}
                                    </span>
                                </div>
                            </a>
                    </div>
                    <div class="hidden md:flex space-x-8 font-medium">
                        <a
                            class="text-lg font-medium transition-all pb-1 {{ request()->routeIs('inflables') ? 'border-b-2 border-blue-600 text-blue-600' : 'border-b-2 border-transparent hover:text-blue-600 hover:border-blue-600 transition-all duration-300' }}"
                            href="{{route('inflables')}}">Inflables
                        </a>
                        <a
                            class="text-lg font-medium transition-all pb-1 {{ request()->routeIs('mobiliario') ? 'border-b-2 border-yellow-400 text-yellow-700' : 'border-b-2 border-transparent hover:text-yellow-400 hover:border-yellow-400 transition-all duration-300' }}"
                            href="{{route('mobiliario')}}">Mobiliario
                        </a>
                        <a
                            class="text-lg font-medium transition-all pb-1 {{ request()->routeIs('carpas') ? 'border-b-2 border-green-500 text-green-700' : 'border-b-2 border-transparent hover:text-green-600 hover:border-green-400 transition-all duration-300' }}"
                            href="{{route('carpas')}}">Carpas
                        </a>
                        <a
                            class="text-lg font-medium transition-all pb-1 {{ request()->routeIs('rokolas') ? 'border-b-2 border-red-700 text-red-700' : 'border-b-2 border-transparent hover:text-red-600 hover:border-red-400 transition-all duration-300' }}"
                            href="{{route('rokolas')}}">Rokolas
                        </a>

                        <a
                            class="text-lg font-medium transition-all pb-1 {{ request()->routeIs('decoracion') ? 'border-b-2 border-fuchsia-700 text-fuchsia-700' : 'border-b-2 border-transparent hover:text-fuchsia-600 hover:border-fuchsia-400 transition-all duration-300' }}"
                            href="{{route('decoracion')}}">Decoración
                        </a>


                        <a href="{{route('welcome')}}/#servicios" class="text-lg font-medium transition-all pb-1 hover:text-blue-600 hover:transition">Servicios</a>

                        <button class="bg-yellow-500 text-sm text-white px-1 py-1 rounded-full w-full hover:bg-yellow-600 transition shadow-md" onclick="abrirModalZonas()">Zonas Cobertura</button>

                        <a href="#contacto" class="bg-blue-600 text-sm text-center text-white px-1 py-4 rounded-full w-full hover:bg-blue-700 transition shadow-md">Cotizar Ahora</a>

                    </div>
                </div>
            </div>
        </nav>
    <!-- Navegación -->
