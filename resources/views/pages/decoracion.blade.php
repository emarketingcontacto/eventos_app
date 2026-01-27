@extends('layouts.app')
{{-- seo --}}
@section('seo')
    <title>Decoración con Globos en León | Arcos y Arreglos para Fiestas | Todo Fiestas</title>
    <meta name="description" content="Decoración con globos en León. 🎈 Arcos y arreglos modernos para cumpleaños y bautizos. ¡Dale un toque espectacular a tu fiesta! Cotiza hoy mismo.">
    <link rel="canonical" href="{{ url()->current() }}">
    <meta property="og:title" content=" {{$negocio->negocio_nombre}} - Decoracion con Globos">
    <meta property="og:image" content="{{ asset('images/party-2.jpg') }}">
@endsection
{{-- seo end --}}

@section('content')

        <!-- Hero Section -->
            <header class="relative bg-fuchsia-300 py-16 md:py-24 overflow-hidden">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
                    <div class="grid md:grid-cols-2 gap-12 items-center">
                        <div class="text-slate-700">
                            <h1 class="text-4xl md:text-6xl font-extrabold leading-tight mb-6">
                                <span class="text-fuchsia-700 italic font-black underline">Decoración y Arcos de Globos</span> para Fiestas en León
                            </h1>
                            <h2 class="text-lg md:text-xl mb-8 opacity-90 text-slate-600" >
                                Arreglos de Globos para Cumpleaños, Bautizos y Comuniones: Diseños creativos para que tu celebración sea inolvidable.
                            </h2>
                            <p class="text-sm text-slate-700 mb-2">
                                ¿Viste un diseño que te encantó? Envíanos la foto y nosotros la hacemos realidad.
                            </p>
                            <div class="flex flex-col sm:flex-row gap-4">
                                @include('partials.whatsapp-button',['servicio'=>'Decoracion'])
                            </div>
                        </div>
                        <div class="relative flex justify-center">
                            <!-- Placeholder de imagen representativa -->
                            <div class="w-full max-w-md bg-white/10 p-4 rounded-3xl backdrop-blur-md border border-white/20">
                                <div class="aspect-video bg-fuchsia-500 rounded-2xl flex items-center justify-center relative overflow-hidden">
                                    {{-- <i class="fa-brands fa-fort-awesome text-9xl text-white group-hover:scale-110 transition-transform"></i> --}}
                                    <div class="text-9xl text-white group-hover:scale-110 transition-transform">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                            fill="currentColor"
                                            class="bi bi-balloon-fill w-[9rem] h-[9rem]"
                                            viewBox="0 0 16 16">
                                            <path fill-rule="evenodd" d="M8.48 10.901C11.211 10.227 13 7.837 13 5A5 5 0 0 0 3 5c0 2.837 1.789 5.227 4.52 5.901l-.244.487a.25.25 0 1 0 .448.224l.04-.08c.009.17.024.315.051.45.068.344.208.622.448 1.102l.013.028c.212.422.182.85.05 1.246-.135.402-.366.751-.534 1.003a.25.25 0 0 0 .416.278l.004-.007c.166-.248.431-.646.588-1.115.16-.479.212-1.051-.076-1.629-.258-.515-.365-.732-.419-1.004a2 2 0 0 1-.037-.289l.008.017a.25.25 0 1 0 .448-.224zM4.352 3.356a4 4 0 0 1 3.15-2.325C7.774.997 8 1.224 8 1.5s-.226.496-.498.542c-.95.162-1.749.78-2.173 1.617a.6.6 0 0 1-.52.341c-.346 0-.599-.329-.457-.644"/>
                                        </svg>
                                    </div>
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
                                <img class="w-full h-full object-cover transform group-hover:scale-110 transition-duration-500 cursor-pointer"
                                    src="
                                        {{$producto->prod_image_url
                                        ? Storage::url($producto->prod_image_url)
                                        : 'https://placehold.co/400x400/0024ff/ffffff?text=Proximamente' }}"
                                    alt="{{ $producto->prod_name }}"
                                    loading="lazy"
                                    onclick="abrirModal(event)">

                                @if ($producto->prod_precio)
                                    <div class="absolute top-4 right-4 bg-yellow-400 text-blue-900 font-black px-4 py-2 rounded-full shadow-lg text-lg">
                                        {{formatPrice($producto->prod_precio) }}
                                    </div>
                                @else
                                    <p>is empty</p>
                                @endif

                            </div>

                            <div class="p-6 flex flex-col flex-grow text-center">
                                <h3 class="text-2xl font-extrabold text-blue-900 mb-2">
                                    {{ $producto->prod_name }}
                                </h3>

                                <p class="text-slate-600 text-sm line-clamp-2 mb-6 italic flex-grow">
                                    "{{ $producto->prod_description }}"
                                </p>

                                <a href="https://wa.me/52{{$negocio->negocio_whatsapp}}?text=Hola, quisiera cotizar: {{ $producto->prod_name }}"
                                    class="inline-flex items-center justify-center w-full bg-blue-600 text-white font-bold py-3 rounded-xl hover:bg-blue-700 transition-colors gap-2">
                                    <i class="fab fa-whatsapp"></i> Cotizar ahora
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

