    <!-- Contacto -->
     <section id="contacto" class="py-24 bg-brand-blue px-6">
        <div class="max-w-7xl mx-auto grid lg:grid-cols-2 gap-16">

            <div class="text-white">
                <h2 class="text-5xl font-black italic tracking-tighter mb-8">
                    ¿Listo para la
                    <span class="text-brand-yellow">Diversión?</span>
                </h2>
                <p class="text-xl text-blue-300 mb-12 leading-relaxed italic">
                    ¡Contactános hoy mismo y asegura tu fecha. !Los fines de semana se agotan rápido!
                </p>

                <div class="mb-12">
                    <h4 class="text-sm font-bold uppercase tracking-widest text-brand-yellow mb-4 opacity-80">
                        Zonas de Cobertura con flete incluido:
                    </h4>
                    <div class="flex flex-wrap gap-3">
                        @foreach($zonas->take(6) as $zona)
                            <span class="bg-brand-yellow/10 border border-brand-yellow/30 text-brand-yellow px-4 py-1.5 rounded-full text-sm font-black italic tracking-tight">
                                <i class="fas fa-map-marker-alt mr-1 text-[10px]"></i>
                                {{ $zona }}
                            </span>
                        @endforeach

                        @if ($zonas->count() > 1)
                             {{-- Link para abrir el modal si hay muchas más zonas --}}
                            <button onclick="abrirModalZonas()" class="text-white/60 hover:text-brand-yellow text-sm font-bold underline transition">
                                Ver todas las zonas de cobertura...
                            </button>
                        @endif

                    </div>
                    <p class="text-base text-blue-200/60 mt-4 italic">
                        * Si tu zona no aparece, cotizamos el flete extra vía WhatsApp.
                    </p>
                </div>

            </div>
            <div class="flex flex-col justify-center space-y-12 text-white">
                <div class="flex items-center gap-4" >
                    <div class="w-12 h-12 bg-brand-yellow rounded-xl flex items-center justify-center text-blue-900 text-xl border border-white/20">
                        <i class="fas fa-phone"></i>
                    </div>
                    <a href="tel:{{$negocio->negocio_telefono}}">
                        <span class="text-2xl font-black tracking-tight italic hover:text-brand-light-blue">
                                {{formatPhone($negocio->negocio_telefono)}}
                        </span>
                    </a>
                </div>
                <div class="flex items-center gap-4">
                    <a class="flex items-center" href="https://wa.me/52{{$negocio->negocio_whatsapp}}?text='Hola quisiera asegurar una fecha">
                        <div class="w-12 h-12  bg-brand-yellow rounded-xl flex items-center justify-center text-blue-900 text-3xl border border-white/20">
                            <i class="fab fa-whatsapp"></i>
                        </div>
                        <span class="text-xl font-bold italic pl-3 hover:text-brand-light-blue">
                            Enviar WhatsApp directo
                        </span>
                    </a>
                </div>
            </div>


        </div>
     </section>
    <!-- Contacto end -->
