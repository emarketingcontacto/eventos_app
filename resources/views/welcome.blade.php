@extends('layouts.app')

    @section('seo')
        {{-- seo --}}
            <title>Todo Fiestas León | Renta de Inflables, Mobiliario y Música para Eventos</title>
            <meta name="description" content="Renta de inflables, mobiliario, carpas y rokolas en León. 🥳 Equipo limpio, puntualidad y los mejores precios para tu fiesta. ¡Cotiza tu evento hoy!">
            <link rel="canonical" href="{{ url()->current() }}">
            <meta property="og:title" content="Diversión Total - Renta de Inflables">
            <meta property="og:image" content="{{ asset('images/party-3.jpg') }}">
        {{-- seo --}}
    @endsection

    @push('styles')
        <style>
             /* Tus estilos FAQ que ya tenías */
            .faq-content { display: none; }
            .faq-icon { transition: transform 0.3s ease;  }
            .faq-item.active .faq-content { display: block; }
            .faq-item.active .faq-icon { transform: rotate(180deg); }
            html { scroll-behavior: smooth; }
        </style>
    @endpush

    @section('content')

        <!-- Hero Section -->
            <header class="relative bg-blue-600 py-16 md:py-24 overflow-hidden">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
                    <div class="grid md:grid-cols-2 gap-12 items-center">
                        <div class="text-white">
                            <h1 class="text-4xl md:text-6xl font-extrabold leading-tight mb-6">
                                ¡Hacemos que tu fiesta sea <span class="text-yellow-400 italic font-black underline">Inolvidable!</span>
                            </h1>
                            <p class="text-lg md:text-xl mb-8 opacity-90">
                                Renta de inflables, mesas, sillas y lonas. Todo lo que necesitas para tu evento en un solo lugar. Servicio puntual y equipo sanitizado.
                            </p>
                            <div class="flex flex-col sm:flex-row gap-4">
                                <a href="#servicios" class="bg-white text-blue-700 px-8 py-4 rounded-xl font-bold text-center hover:bg-yellow-400 hover:text-blue-900 transition-all shadow-xl">
                                    Ver Catálogo
                                </a>
                                @include('partials.whatsapp-button',['servicio'=>'Directo'])
                            </div>
                        </div>
                        <div class="relative flex justify-center">
                            <!-- Placeholder de imagen representativa -->
                            <div class="w-full max-w-md bg-white/10 p-4 rounded-3xl backdrop-blur-md border border-white/20">
                                <div class="aspect-video bg-blue-400 rounded-2xl flex items-center justify-center relative overflow-hidden">
                                    <i class="fas fa-store-alt text-8xl text-white opacity-50"></i>
                                    <div class="absolute bottom-4 left-4 right-4 bg-white p-4 rounded-xl shadow-lg">
                                        <div class="flex items-center gap-3">
                                            <div class="w-10 h-10 bg-yellow-400 rounded-full flex items-center justify-center text-blue-800">
                                                <i class="fas fa-check"></i>
                                            </div>
                                            <p class="text-sm font-bold text-slate-700 leading-tight">Servicio garantizado para el día de tu evento</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Decoración de fondo -->
                <div class="absolute top-0 right-0 w-64 h-64 bg-yellow-400 rounded-full mix-blend-multiply filter blur-3xl opacity-20 -mr-32 -mt-32"></div>
                <div class="absolute bottom-0 left-0 w-64 h-64 bg-blue-400 rounded-full mix-blend-multiply filter blur-3xl opacity-20 -ml-32 -mb-32"></div>
            </header>
        <!-- Hero Section -->

        <!-- Sección de Servicios -->
            <section id="servicios" class="py-20 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-16">
                    <h2 class="text-3xl md:text-4xl font-bold text-slate-900 mb-4">Nuestro <span class="text-brand-blue">Catálogo de Rentas</span> </h2>
                    <div class="h-1.5 w-20 bg-yellow-400 mx-auto rounded-full"></div>
                    <p class="mt-6 text-slate-600 max-w-2xl mx-auto">Equipos de alta calidad, limpios y seguros para tu tranquilidad y la diversión de tus invitados.</p>
                </div>

                <div class="grid md:grid-cols-3 gap-8 justify-center">
                    <!-- Inflables -->
                        <div class="bg-white rounded-3xl shadow-sm hover:shadow-xl transition-all border border-slate-100 overflow-hidden group">
                            <div class="h-56 bg-blue-100 flex items-center justify-center overflow-hidden">
                                <i class="fa-brands fa-fort-awesome text-6xl text-blue-500 group-hover:scale-110 transition-transform"></i>
                            </div>
                            <div class="p-8">
                                <h3 class="text-xl font-bold mb-2">Juegos Inflables</h3>
                                <p class="text-slate-600 mb-4 text-sm h-24">Contamos con castillos, resbaladillas y albercas de pelotas. Diferentes tamaños para cada espacio.</p>

                                <div class="flex justify-between items-center p-2 mt-6 text-blue-600 cursor-pointer rounded-md hover:bg-blue-600 hover:text-white">
                                    <a href="{{route('inflables')}}" class="flex flex-1 justify-between">
                                        <span class="font-bold">Desde
                                            ${{number_format($inflableMinimo,2)}}
                                        </span>
                                        <i class="fas fa-arrow-right text-xl"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    <!-- Inflables -->

                    <!-- Mobiliario -->
                        <div class="bg-white rounded-3xl shadow-sm hover:shadow-xl transition-all border border-slate-100 overflow-hidden group">
                            <div class="h-56 bg-yellow-200 flex items-center justify-center overflow-hidden">
                                <i class="fas fa-chair text-6xl text-yellow-500 group-hover:scale-110 transition-transform"></i>
                            </div>
                            <div class="p-8">
                                <h3 class="text-xl font-bold mb-2">Mesas y Sillas</h3>
                                <p class="text-slate-600 mb-4 text-sm h-24">Mobiliario estándar y tipo Tiffany. Sillas cómodas y mesas resistentes para 10 personas.</p>

                                <div class="flex justify-between items-center p-2 mt-6 text-blue-600 cursor-pointer rounded-md hover:bg-brand-yellow hover:text-slate-600">
                                    <a href="{{route('mobiliario')}}" class="flex flex-1 justify-between">
                                        <span class="font-bold">Paquetes económicos</span>
                                        <i class="fas fa-arrow-right text-xl"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    <!-- Mobiliario -->

                    <!-- Carpas -->
                        <div class="bg-white rounded-3xl shadow-sm hover:shadow-xl transition-all border border-slate-100 overflow-hidden group">
                            <div class="h-56 bg-green-200 flex items-center justify-center overflow-hidden">
                                <i class="fas fa-campground text-6xl text-green-500 group-hover:scale-110 transition-transform"></i>
                            </div>
                            <div class="p-8">
                                <h3 class="text-xl font-bold mb-2">Lonas y Carpas</h3>
                                <p class="text-slate-600 mb-4 text-sm h-24">Protege a tus invitados del sol o la lluvia. Lonas de uso rudo en diversas medidas.</p>

                                <div class="flex justify-between items-center p-2 mt-6 text-blue-600 cursor-pointer rounded-md hover:bg-green-500 hover:text-white">
                                    <a href="{{route('carpas')}}" class="flex flex-1 justify-between">
                                        <span class="font-bold">Instalación incluida</span>
                                        <i class="fas fa-arrow-right text-xl"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    <!-- Carpas -->

                    <!-- Rokolas -->
                        <div class="bg-white rounded-3xl shadow-sm hover:shadow-xl transition-all border border-slate-100 overflow-hidden group">
                            <div class="h-56 bg-red-100 flex items-center justify-center overflow-hidden">
                                <i class="fa-solid fa-music text-6xl text-red-500 group-hover:scale-110 transition-transform"></i>
                            </div>
                            <div class="p-8">
                                <h3 class="text-xl font-bold mb-2">Rokolas</h3>
                                <p class="text-slate-600 mb-4 text-sm h-24">Anima a tus invitados con la música que los ponga a bailar.</p>

                                <div class="flex justify-between items-center p-2 mt-6 text-blue-600 cursor-pointer rounded-md hover:bg-red-500 hover:text-white">
                                    <a href="{{route('rokolas')}}" class="flex flex-1 justify-between">
                                        <span class="font-bold">Música a tu gusto</span>
                                        <i class="fas fa-arrow-right text-xl"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    <!-- Rokolas end -->

                    {{-- Decoracion --}}
                        <div class="bg-white rounded-3xl shadow-sm hover:shadow-xl transition-all border border-slate-100 overflow-hidden group">
                            <div class="h-56 bg-fuchsia-200 flex items-center justify-center overflow-hidden">
                                <div class="text-fuchsia-500 group-hover:scale-110 transition-transform">
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                        fill="currentColor"
                                        class="bi bi-balloon-fill w-20 h-20"
                                        viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M8.48 10.901C11.211 10.227 13 7.837 13 5A5 5 0 0 0 3 5c0 2.837 1.789 5.227 4.52 5.901l-.244.487a.25.25 0 1 0 .448.224l.04-.08c.009.17.024.315.051.45.068.344.208.622.448 1.102l.013.028c.212.422.182.85.05 1.246-.135.402-.366.751-.534 1.003a.25.25 0 0 0 .416.278l.004-.007c.166-.248.431-.646.588-1.115.16-.479.212-1.051-.076-1.629-.258-.515-.365-.732-.419-1.004a2 2 0 0 1-.037-.289l.008.017a.25.25 0 1 0 .448-.224zM4.352 3.356a4 4 0 0 1 3.15-2.325C7.774.997 8 1.224 8 1.5s-.226.496-.498.542c-.95.162-1.749.78-2.173 1.617a.6.6 0 0 1-.52.341c-.346 0-.599-.329-.457-.644"/>
                                    </svg>
                                </div>
                            </div>
                            <div class="p-8">
                                <h3 class="text-xl font-bold mb-2">Decoración</h3>
                                <p class="text-slate-600 mb-4 text-sm h-24">Especialistas en el diseño de arco de globos y decoraciones temáticas.</p>

                                <div class="flex justify-between items-center p-2 mt-6 text-blue-600 cursor-pointer rounded-md hover:bg-fuchsia-500 hover:text-white">
                                    <a href="{{route('decoracion')}}" class="flex flex-1 justify-between">
                                        <span class="font-bold">Ambiente Perfecto</span>
                                        <i class="fas fa-arrow-right text-xl"></i>

                                    </a>
                                </div>
                            </div>
                        </div>
                    {{-- Decoracion end --}}

                    {{-- paquetes todo incluido --}}
                        <div class="bg-gradient-to-br from-blue-600 to-indigo-700 rounded-3xl shadow-lg hover:shadow-2xl transition-all overflow-hidden group border-4 border-white">
                            <div class="h-56 bg-white/10 flex items-center justify-center overflow-hidden relative">
                                {{-- Un icono que represente "Paquete" o "Regalo" --}}
                                <i class="fas fa-gift text-6xl text-white group-hover:scale-110 transition-transform"></i>
                                {{-- Badge de "Popular" --}}
                                <span class="absolute top-4 right-4 bg-yellow-400 text-blue-900 text-xs font-black px-3 py-1 rounded-full uppercase tracking-widest">Ahorra más</span>
                            </div>
                            <div class="p-8">
                                <h3 class="text-xl font-bold mb-2 text-white">Paquetes Todo Incluido</h3>
                                <p class="text-brand-yellow mb-4 text-sm h-24">
                                    La solución completa para tu fiesta: Inflable, mobiliario, carpa y decoración con globos a un precio especial.
                                </p>

                                <div class="flex justify-between items-center p-2 mt-6 text-white cursor-pointer rounded-md border border-white/30 hover:bg-white hover:text-blue-600 transition-all">
                                    <a href="https://wa.me/52{{$negocio->negocio_whatsapp}}?text=Hola, me interesan los paquetes todo incluido" class="flex flex-1 justify-between items-center">
                                        <span class="font-bold">Cotizar Paquete</span>
                                        <i class="fas fa-arrow-right text-xl"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    {{-- paquetes todo incluido end --}}
                </div>
            </section>
        <!-- Sección de Servicios end -->

        <!-- Galería-->
            <section id="galeria" class="py-24 bg-white px-6">
                <div class="max-w-7xl mx-auto">
                    <div class="text-center mb-16">
                        <h2 class="text-4xl font-black text-brand-dark tracking-tighter">Eventos <span class="text-brand-blue">Recientes</span></h2>
                         <div class="h-1.5 w-20 bg-yellow-400 mx-auto rounded-full mt-3 mb-3"></div>
                        <p class="text-slate-500">Mira lo bien que lucen nuestros equipos en acción.</p>
                    </div>
                    <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                        <div class="h-64 rounded-3xl overflow-hidden shadow-lg hover:shadow-2xl hover:scale-110 transition-all md:translate-y-6">
                            <img src="{{asset('/images/tobogan.webp')}}" alt="renta-de-inflables" class="w-full h-full object-cover">
                        </div>
                        <div class="h-64 rounded-3xl overflow-hidden shadow-lg hover:shadow-2xl hover:scale-110 transition-all md:translate-y-6">
                            <img src="{{asset('/images/rokola.webp')}}" alt="renta-rokolas" class="w-full h-full object-cover">
                        </div>
                        <div class="h-64 rounded-3xl overflow-hidden shadow-lg hover:shadow-2xl hover:scale-110 transition-all md:translate-y-6">
                            <img src="{{asset('/images/party-2.jpg')}}" alt="renta-mesas-y-sillas" class="w-full h-full object-cover">
                        </div>
                        <div class="h-64 rounded-3xl overflow-hidden shadow-lg hover:shadow-2xl hover:scale-110 transition-all md:translate-y-6">
                            <img src="{{asset('/images/carpa.webp')}}" alt="renta-carpas" class="min-w-full min-h-full w-full h-full object-cover">
                        </div>

                        {{-- <div class="aspect-square md:aspect-video rounded-3xl overflow-hidden shadow-lg hover:shadow-2xl hover:scale-105 transition-all md:translate-y-6">
                            <img src="{{asset('/images/carpa.webp')}}"
                                alt="renta-carpas"
                                class="w-full h-full object-cover object-center">
                        </div> --}}

                    </div>
                </div>
            </section>
        <!-- Galería -->

        <!-- FAQ (Preguntas Frecuentes) -->
            <section id="faq" class="py-24 bg-slate-200 px-6">
                <div class="max-w-3xl mx-auto">
                    <h2 class="text-3xl font-black text-center mb-4 text-text-brand-dark">Preguntas <span class="text-brand-blue">Frecuentes</span></h2>
                    <div class="h-1.5 w-20 bg-yellow-400 mx-auto rounded-full mb-12"></div>
                    <div class="space-y-4">
                        <!-- FAQ Item -->
                        <div class="faq-item bg-white rounded-2xl border border-slate-200 shadow-sm cursor-pointer overflow-hidden" onclick="toggleFaq(this)">
                            <div class="flex justify-between items-center p-6">
                                <h4 class="font-black text-slate-800 tracking-tight">¿Qué zonas de León cubren?</h4>
                                <i class="fas fa-chevron-down text-brand-blue faq-icon transition-transform"></i>
                            </div>
                            <div class="faq-content px-6 pb-6 text-slate-600 text-sm leading-relaxed">
                                Cubrimos toda el área metropolitana de León, Guanajuato, incluyendo zonas como Sierra de Lobos, Puerto Interior y fraccionamientos periféricos con
                                un ligero cargo de flete si aplica.

                            <button onclick="abrirModalZonas()" class="text-brand-blue hover:text-brand-yellow text-sm font-bold underline transition">
                                Revisa las Zonas de Cobertura donde no hay cargo extra por entregar
                            </button>

                            </div>
                        </div>

                        <div class="faq-item bg-white rounded-2xl border border-slate-200 shadow-sm cursor-pointer overflow-hidden" onclick="toggleFaq(this)">
                            <div class="flex justify-between items-center p-6">
                                <h4 class="font-black text-slate-800 tracking-tight">¿Cómo se realiza el pago?</h4>
                                <i class="fas fa-chevron-down text-brand-blue faq-icon transition-transform"></i>
                            </div>
                            <div class="faq-content px-6 pb-6 text-slate-600 text-sm leading-relaxed">
                                Puedes apartar con un depósito del 20% y liquidar el resto al momento de la entrega en efectivo o mediante transferencia electrónica.
                            </div>
                        </div>

                        <div class="faq-item bg-white rounded-2xl border border-slate-200 shadow-sm cursor-pointer overflow-hidden" onclick="toggleFaq(this)">
                            <div class="flex justify-between items-center p-6">
                                <h4 class="font-black text-slate-800 tracking-tight">¿Qué pasa si llueve?</h4>
                                <i class="fas fa-chevron-down text-brand-blue faq-icon transition-transform"></i>
                            </div>
                            <div class="faq-content px-6 pb-6 text-slate-600 text-sm leading-relaxed">
                                Nuestras carpas son 100% impermeables. En caso de inflables, recomendamos apagarlos durante la lluvia fuerte por seguridad eléctrica y reanudarlos cuando pase.
                            </div>
                        </div>

                        <div class="faq-item bg-white rounded-2xl border border-slate-200 shadow-sm cursor-pointer overflow-hidden" onclick="toggleFaq(this)">
                            <div class="flex justify-between items-center p-6">
                                <h4 class="font-black text-slate-800 tracking-tight">¿Hay descuento si necesito varios productos?</h4>
                                <i class="fas fa-chevron-down text-brand-blue faq-icon transition-transform"></i>
                            </div>
                            <div class="faq-content px-6 pb-6 text-slate-600 text-sm leading-relaxed">
                                Podemos armar paquetes todo incluido y darte un descuento de hasta al 15%
                            </div>
                        </div>

                    </div>
                </div>
            </section>
        <!-- FAQ (Preguntas Frecuentes) -->

        {{-- new Contacto --}}
            @include('partials.contacto')
        {{-- new Contacto end--}}

        {{-- GMB --}}
            @include('partials.map')
        {{-- GMB end --}}

        {{-- modal zonas --}}
            <x-modal-zonas></x-modal-zonas>
        {{-- modal zonas end --}}

    @endsection

@push('scripts')
    <script>
        function toggleFaq(element) {
            // 1. Buscamos si hay algún otro item que ya tenga la clase 'active'
            const activeItem = document.querySelector('.faq-item.active');

            // 2. Si existe un item activo Y no es el que acabamos de clickear, lo cerramos
            if (activeItem && activeItem !== element) {
                activeItem.classList.remove('active');
            }
            // 3. Ahora sí, hacemos el toggle del elemento actual
            element.classList.toggle('active');
        }
    </script>
    <script src="{{asset('script/script.js')}}"></script>
@endpush
