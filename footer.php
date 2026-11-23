</main> 
</div>

<div id="image-modal" class="image-modal">
    <img id="modal-img" src="" alt="Vista ampliada de la preparación culinaria">
    <p id="modal-caption" style="color: #fff; font-family: 'Arial Black', sans-serif; margin-top: 10px;"></p>
    <button type="button" class="close-btn" onclick="cerrarImagenModal()">Cerrar Imagen</button>
</div>

<div id="summary-modal" class="summary-modal">
    <div class="summary-card">
        <h3>📋 Resumen de la Inscripción</h3>
        <p>Por favor confirma si tus datos son correctos antes de enviar:</p>
        <div id="summary-content" style="font-size: 14px; line-height: 1.8;"></div>
        <div class="summary-actions">
            <button type="button" class="btn-cancel" onclick="cerrarResumenModal()">Cancelar</button>
            <button type="button" class="btn-confirm" onclick="confirmarEnvioFormulario()">Confirmar y Enviar</button>
        </div>
    </div>
</div>

<script>
    window.addEventListener('DOMContentLoaded', function() {
        alert("¡Bienvenido a Cooking W.M! 🍳✨ Descubre nuestras mejores recetas, cursos y consejos gastronómicos.");
        iniciarReloj();
    });

    function iniciarReloj() {
        function actualizar() {
            const ahora = new Date();
            const opcionesFecha = { year: 'numeric', month: 'short', day: 'numeric' };
            const fechaStr = ahora.toLocaleDateString('es-ES', opcionesFecha);
            const horaStr = ahora.toLocaleTimeString('es-ES');
            
            const clockEl = document.getElementById('clock');
            if (clockEl) {
                clockEl.innerText = `${fechaStr} - ${horaStr}`;
            }
        }
        actualizar();
        setInterval(actualizar, 1000);
    }

    function toggleDarkMode() {
        document.body.classList.toggle('dark-mode');
        const btn = document.querySelector('.theme-toggle-btn');
        if (document.body.classList.contains('dark-mode')) {
            btn.innerText = "☀️ Modo Claro";
        } else {
            btn.innerText = "🌙 Modo Oscuro";
        }
    }

    function ampliarImagen(src, caption) {
        const modal = document.getElementById('image-modal');
        const modalImg = document.getElementById('modal-img');
        const modalCaption = document.getElementById('modal-caption');
        
        modalImg.src = src;
        modalCaption.innerText = caption || '';
        modal.classList.add('is-active');
    }

    function cerrarImagenModal() {
        document.getElementById('image-modal').classList.remove('is-active');
    }

    let formularioPendiente = null;
    let datosPendientes = {};

    function validarEmail(email) {
        const regex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        return regex.test(email);
    }

    function validarYMostrarResumen(event, tipoForm) {
        event.preventDefault();

        let inputNombre, inputCorreo, inputCurso, inputNivel;
        let errNombre, errCorreo;

        if (tipoForm === 'directo') {
            inputNombre = document.getElementById('nombre-directo');
            inputCorreo = document.getElementById('correo-directo');
            inputCurso = document.getElementById('curso-directo');
            inputNivel = document.getElementById('nivel-directo');
            errNombre = document.getElementById('err-nombre-directo');
            errCorreo = document.getElementById('err-correo-directo');
        } else {
            inputNombre = document.getElementById('nombre');
            inputCorreo = document.getElementById('correo');
            inputCurso = { value: document.getElementById('curso-titulo').innerText };
            inputNivel = document.getElementById('nivel');
            errNombre = document.getElementById('err-nombre');
            errCorreo = document.getElementById('err-correo');
        }

        let esValido = true;

        inputNombre.classList.remove('input-error');
        inputCorreo.classList.remove('input-error');
        errNombre.style.display = 'none';
        errCorreo.style.display = 'none';

        if (inputNombre.value.trim() === '') {
            inputNombre.classList.add('input-error');
            errNombre.style.display = 'block';
            esValido = false;
        }

        if (!validarEmail(inputCorreo.value.trim())) {
            inputCorreo.classList.add('input-error');
            errCorreo.style.display = 'block';
            esValido = false;
        }

        if (!esValido) {
            return;
        }

        datosPendientes = {
            tipo: tipoForm,
            nombre: inputNombre.value.trim(),
            correo: inputCorreo.value.trim(),
            curso: inputCurso.value,
            nivel: inputNivel.value
        };

        document.getElementById('summary-content').innerHTML = `
            <strong>👤 Nombre:</strong> ${datosPendientes.nombre}<br>
            <strong>📧 Correo:</strong> ${datosPendientes.correo}<br>
            <strong>📚 Curso:</strong> ${datosPendientes.curso}<br>
            <strong>⭐ Nivel:</strong> ${datosPendientes.nivel}
        `;

        document.getElementById('summary-modal').classList.add('is-active');
    }

    function cerrarResumenModal() {
        document.getElementById('summary-modal').classList.remove('is-active');
    }

    function confirmarEnvioFormulario() {
        cerrarResumenModal();

        alert(`¡Inscripción Exitosa!\n\nDetalles del Registro:\n- Nombre: ${datosPendientes.nombre}\n- Correo: ${datosPendientes.correo}\n- Curso: ${datosPendientes.curso}\n- Nivel: ${datosPendientes.nivel}\n\nSe ha enviado la confirmación a tu correo electrónico.`);

        if (datosPendientes.tipo === 'directo') {
            document.getElementById('nombre-directo').value = '';
            document.getElementById('correo-directo').value = '';
        } else {
            document.getElementById('nombre').value = '';
            document.getElementById('correo').value = '';
            openPage('cursos');
        }
    }

    function openPage(pageId) {
        const pages = document.querySelectorAll('.page-section');
        pages.forEach(page => page.classList.remove('active'));

        const buttons = document.querySelectorAll('.nav-btn');
        buttons.forEach(btn => btn.classList.remove('active'));

        const targetPage = document.getElementById(pageId);
        if (targetPage) {
            targetPage.classList.add('active');
        }

        const activeBtn = Array.from(buttons).find(btn => {
            const attr = btn.getAttribute('onclick');
            return attr && attr.includes(`'${pageId}'`);
        });
        if(activeBtn) activeBtn.classList.add('active');
        
        window.scrollTo(0, 0);
    }

    function openCourse(courseName) {
        document.getElementById('curso-titulo').innerText = courseName;
        openPage('detalle-curso');
    }

    function registrarCurso(event) {
        validarYMostrarResumen(event, 'detalle');
    }

    function registrarCursoDirecto(event) {
        validarYMostrarResumen(event, 'directo');
    }

    const productosGaleria = [
        { src: 'dulce.png', alt: 'Torrejas dulces artesanales - Receta de pastelería saludable fácil' },
        { src: 'salado.png', alt: 'Platillo salado especial del día preparado en casa' },
        { src: 'saludable.png', alt: 'Ensalada nutritiva y fresca balanceada' }
    ];
    let indiceActual = 0;

    function cambiarImagen(direccion) {
        indiceActual += direccion;
        if (indiceActual < 0) {
            indiceActual = productosGaleria.length - 1;
        } else if (indiceActual >= productosGaleria.length) {
            indiceActual = 0;
        }
        const imgElement = document.getElementById('carousel-img');
        imgElement.src = productosGaleria[indiceActual].src;
        imgElement.alt = productosGaleria[indiceActual].alt;
    }

    function toggleAccordion(button) {
        const expanded = button.getAttribute('aria-expanded') === 'true' || false;
        button.setAttribute('aria-expanded', !expanded);
        
        const panelId = button.getAttribute('aria-controls');
        const panel = document.getElementById(panelId);
        if (panel) {
            panel.classList.toggle('is-open');
        }
    }
</script>

</body>
</html>