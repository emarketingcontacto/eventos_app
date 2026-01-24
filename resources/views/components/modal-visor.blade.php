<!-- Modal -->
            <div id="modalOverlay" class="fixed w-full inset-0 z-50 hidden items-center justify-center p-4 transition">
                <div class="absolute inset-0 bg-slate-900/60 backdrop-blur-sm"></div>
                <div id="modalContent" class="relative bg-slate-50/50 rounded-xl p-4 md:p-8 shadow-2xl
                transform transition-all duration-300 scale-95 w-[95%] h-[80%] md:w-2/3 md:h-3/4 flex flex-col items-center">
                    <button onclick="cerrarModal()" class="absolute top-2 right-2 md:top-4 md:right-6 text-slate-500 hover:text-red-500 z-10">
                        <i class="fas fa-times-circle text-2xl"></i>
                    </button>
                    <div class="w-full h-full flex items-center justify-center overflow-hidden">
                        <img id="imagenModal" src="" alt="Producto" class="max-w-full max-h-full object-contain rounded-lg">
                    </div>
                </div>
            </div>
        <!-- modal end  -->
