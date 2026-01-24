@extends('layouts.app')
    @section('seo')
        {{-- seo --}}
            <title>Renta de Carpas en León | Toldos y Carpas para Eventos | Todo Fiestas</title>
            <meta name="description" content="Renta de carpas y toldos en León. 🎪 Protege tu evento del sol y la lluvia con nuestras carpas resistentes y elegantes. ¡Montaje rápido y profesional!">
            <link rel="canonical" href="{{ url()->current() }}">
            <meta property="og:title" content=" {{$negocio->negocio_nombre}} - Renta de Carpas">
            <meta property="og:image" content="{{ asset('images/carpa.webp') }}">
        {{-- seo --}}
    @endsection

    @section('content')
            <!-- Hero Section -->
                <header class="relative bg-green-300 py-16 md:py-24 overflow-hidden">
                    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
                        <div class="grid md:grid-cols-2 gap-12 items-center">
                            <div class="text-slate-700">
                                <h1 class="text-4xl md:text-6xl font-extrabold leading-tight mb-6">
                                    Renta de <span class="text-green-800 italic font-black underline"> Carpas y Toldos </span> para Eventos en León
                                <h2 class="text-lg md:text-xl mb-8 opacity-90 text-slate-600" >
                                    Renta de Toldos y Carpas para Eventos en León: No permitas que el sol o la lluvia arruinen tu fiesta, comodidad y protección total para tus invitados.
                                </h2>
                                <div class="flex flex-col sm:flex-row gap-4">
                                    @include('partials.whatsapp-button',['servicio'=>'Carpas'])
                                </div>
                            </div>
                            <div class="relative flex justify-center">
                                <!-- Placeholder de imagen representativa -->
                                <div class="w-full max-w-md bg-white/10 p-4 rounded-3xl backdrop-blur-md border border-white/20">
                                    <div class="aspect-video bg-green-500 rounded-2xl flex items-center justify-center relative overflow-hidden">
                                        <i class="fas fa-campground text-9xl text-white group-hover:scale-110 transition-transform"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </header>
            <!-- Hero Section -->

            {{-- main containt --}}
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                        @forelse ($productos as $producto)
                            <div class="group bg-white rounded-3xl shadow-md hover:shadow-2xl transition-all duration-300 border border-slate-100 overflow-hidden flex flex-col">

                                <div class="relative overflow-hidden aspect-square bg-slate-50">
                                    <img class="w-full h-full object-cover transform group-hover:scale-110 transition-duration-500"
                                        src="
                                            {{ $producto->prod_image_url ?
                                            Storage::url($producto->prod_image_url) :
                                            'https://placehold.co/400x400/14e809/000000?text=Proximamente'
                                        }}"
                                        alt="{{ $producto->prod_name }}"
                                        loading="lazy"
                                        onclick="abrirModal(event)">

                                    <div class="absolute top-4 right-4 bg-yellow-400 text-blue-900 font-black px-4 py-2 rounded-full shadow-lg text-lg">
                                        ${{ number_format($producto->prod_precio, 0) }}
                                    </div>
                                </div>

                                <div class="p-6 flex flex-col flex-grow text-center">
                                    <h3 class="text-2xl font-extrabold text-blue-900 mb-2">
                                        {{ $producto->prod_name }}
                                    </h3>

                                    <p class="text-slate-600 text-sm line-clamp-2 mb-6 italic flex-grow">
                                        "{{ $producto->prod_description }}"
                                    </p>

                                    <a href="https://wa.me/52{{$negocio->negocio_whatsapp}}?text=Hola, me interesa el inflable {{ $producto->prod_name }}"
                                    class="inline-flex items-center justify-center w-full bg-blue-600 text-white font-bold py-3 rounded-xl hover:bg-blue-700 transition-colors gap-2">
                                        <i class="fab fa-whatsapp"></i> Apartar ahora
                                    </a>
                                </div>
                            </div>
                        @empty
                            <div class="col-span-full text-center py-12">
                                <i class="fas fa-search text-slate-300 text-5xl mb-4"></i>
                                <p class="text-slate-500">Por el momento no tenemos inflables disponibles en esta sección.</p>
                            </div>
                        @endforelse
                    </div>
                </div>
            {{-- main containt end --}}

            {{-- new Contacto --}}
                @include('partials.contacto')
            {{-- new Contacto end--}}

            {{-- modal --}}
                <x-modal-visor></x-modal-visor>
            {{-- modal ens --}}

        @push('scripts')
            <script src="{{asset('/script/script.js')}}"></script>
        @endpush

    @endsection
