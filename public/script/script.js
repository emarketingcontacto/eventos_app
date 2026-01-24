function toggleFaq(element) {
            // Cerrar todos primero
            document.querySelectorAll('.faq-item').forEach(item => {
                if (item !== element) item.classList.remove('active');
            });
            // Alternar el actual
            element.classList.toggle('active');
}

// Modal Imagenes Productos
function abrirModal(e) {
    const modal = document.getElementById('modalOverlay');
    const content = document.getElementById('modalContent');
    modal.classList.remove('hidden');
    modal.classList.add('flex'); // Cambiamos hidden por flex para centrar
    document.body.style.overflow = 'hidden'; // Evita que se haga scroll al fondo
    const imgSrc = e.target.src;
    content.classList.remove('scale-95');
    content.classList.add('scale-100');
    actualizarImagen(imgSrc);
}

function cerrarModal() {
    const modal = document.getElementById('modalOverlay');
    modal.classList.add('hidden');
    modal.classList.remove('flex');
    document.body.style.overflow = 'auto'; // Habilita el scroll de nuevo
}

function actualizarImagen(imgSrc) {
    let imgElement = document.getElementById('imagenModal');
    imgElement.src = imgSrc;
}

// Modal Zonas
function abrirModalZonas() {
    const modalZonas = document.getElementById('modalZonas');
    modalZonas.classList.remove('hidden');
    modalZonas.classList.add('flex');
}

function cerrarModalZonas() {
    const modalZonas = document.getElementById('modalZonas');
    modalZonas.classList.add('hidden');
    modalZonas.classList.remove('flex');

}
