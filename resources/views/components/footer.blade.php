      @php
        $nombreCompleto = $negocio->negocio_nombre;
        $primeraPalabra = Str::before($nombreCompleto, ' ');
        $restoDelNombre = Str::after($nombreCompleto, ' ');
    @endphp


    <!-- Footer -->
        <footer class="bottom-0 left-0 w-full bg-slate-900 py-12 text-white">
            <div class="max-w-7xl mx-auto px-4 text-center">

                <div class="flex w-full items-center justify-center font-bold text-2xl">
                    <span class="text-blue-600">{{ $primeraPalabra }}</span>
                    <span class="text-yellow-500 ml-1">
                        {{ $restoDelNombre != $primeraPalabra ? $restoDelNombre : '' }}
                    </span>
                </div>

                <div class="flex w-100 justify-around pb-2">
                    <a href="{{$negocio->negocio_facebook}}" class="text-brand-yellow text-3xl hover:text-brand-light-blue transition-all">
                        <i class="fa-brands fa-facebook"></i>
                    </a>
                </div>

                <a class="text-brand-yellow hover:text-brand-light-blue" href="tel:{{$negocio->negocio_telefono}}">
                    <p class="mb-4 font-bold text-xl">{{ formatPhone($negocio->negocio_telefono) }}</p>
                </a>
                <p class="text-slate-100 text-md">{{$negocio->negocio_direccion}}</p>
                <p class="text-slate-500 text-sm">© 2026 Todos los derechos reservados.</p>
                <a href="https://solucion-e.com.mx" class="text-yellow-300 text-sm hover:text-brand-light-blue">solucion-<span class="text-red-500">e</span></a>
            </div>
        </footer>
    <!-- Footer -->
