<!-- Modal -->
    <div id="modalZonas" class="fixed w-full inset-0 z-50 hidden items-center justify-center p-4 transition">
        <div class="absolute inset-0 bg-slate-900/60 backdrop-blur-sm"></div>
        <div id="modalContent" class="relative bg-slate-50/50 rounded-xl p-4 md:p-8 shadow-2xl
        transform transition-all duration-300 scale-95 w-[95%] h-[80%] md:w-2/3 md:h-3/4 flex flex-col items-center">
            <button onclick="cerrarModalZonas()" class="absolute top-2 right-2 md:top-4 md:right-6 text-slate-500 hover:text-red-500 z-10">
                <i class="fas fa-times-circle text-2xl"></i>
            </button>
            <div class="text-4xl text-brand-yellow">Zonas de Cobertura Sin Cargos Extras</div>
            <div class="w-full h-full flex items-center gap-4 flex-wrap justify-center overflow-hidden bg-brand-blue ">
                    @foreach($zonas as $zona)
                    <span class="bg-brand-yellow/10 border border-brand-yellow/30 text-brand-yellow px-4 py-1.5 rounded-full text-sm font-black italic tracking-tight">
                        <i class="fas fa-map-marker-alt mr-1 text-[10px]"></i>
                        {{ $zona }}
                    </span>
                @endforeach
            </div>
        </div>
    </div>
<!-- modal end  -->
