<?php 
  $titulo_pagina = "Recetas de Cocina Fáciles y Pastelería Saludable | Cooking W.M";
  require_once 'includes/header.php'; 
?>

        <section id="inicio" class="page-section active">
            <header>
                <div>
                    <h1 style="font-family: 'Arial Black', sans-serif; font-size: 28px; margin-bottom: 20px;">Recetas de Cocina Fáciles y Pastelería Saludable - Cooking W.M</h1>
                </div>
            </header>
            
            <div class="intro-container">
                <article class="intro-text">
                    <div>
                        <h2>Aprende a Cocinar Recetas Saludables y Postres Caseros paso a paso</h2>
                        <p>
                            Bienvenidos a <strong>Cooking with Mitch (Cooking W.M)</strong>, la plataforma gastronómica creada para guiarte a preparar las mejores <strong>recetas de cocina fáciles</strong> y nutritivas directamente en tu hogar. Creé esta comunidad pensando en quienes buscan alternativas de cocina equilibrada, sin complicarse con ingredientes inaccesibles o técnicas demasiado complejas.
                        </p>
                        <p>
                            En nuestra cocina, creemos apasionadamente que cocinar es una de las mejores formas de relajación, creatividad y bienestar personal. Nos enfocamos especialmente en la elaboración de platos utilizando ingredientes integrales, frutas frescas y opciones reducidas en azúcares refinados, demostrando que comer sabroso e interactivo es totalmente compatible con el cuidado personal.
                        </p>
                        
                        <h3>Ventajas de cocinar con ingredientes naturales y de temporada</h3>
                        <p>
                            Incorporar ingredientes frescos a tus preparaciones no solo maximiza el sabor de tus recetas, sino que aporta nutrientes esenciales como vitaminas, minerales y fibra. En nuestro portal encontrarás opciones para desayunos, almuerzos, cenas y meriendas explicadas al detalle para que logres resultados de nivel profesional desde la primera prueba.
                        </p>
                        
                        <h3>Una comunidad abierta de cocina colaborativa</h3>
                        <p>
                            Este espacio no es solo un recetario, es un punto de encuentro digital interactivo donde aficionados a la gastronomía, estudiantes y chefs profesionales comparten ideas, recomendaciones y experiencias. Navega por nuestras categorías de recetas dulces, platillos salados, opciones veganas y talleres en línea.
                        </p>
                    </div>
                </article>
                <aside class="ad-banner" role="img" aria-label="Publicidad sobre utensilios y productos de cocina saludables"></aside>
            </div>

            <section class="carousel-container" aria-label="Galería de productos destacados">
                <div>
                    <h3 style="font-family: 'Arial Black', sans-serif; margin-top: 0;">Galería de Productos Destacados</h3>
                    <img id="carousel-img" class="carousel-img" src="dulce.png" alt="Torrejas dulces artesanales - Receta de pastelería saludable fácil" onclick="ampliarImagen(this.src, this.alt)" title="Haz clic para ampliar">
                    <div class="carousel-controls">
                        <button type="button" onclick="cambiarImagen(-1)">Anterior</button>
                        <button type="button" onclick="cambiarImagen(1)">Siguiente</button>
                    </div>
                </div>
            </section>

            <article style="background: #fdf2f4; border: 2px solid #000; padding: 15px; border-radius: 8px; margin-top: 15px;">
                <div>
                    <h3 style="font-family: 'Arial Black', sans-serif; margin-top:0;">📌 Horarios de Atención y Talleres de Cocina</h3>
                    <p>En nuestro espacio gastronómico organizamos actividades de la siguiente manera:<br>
                    ¡Te esperamos para compartir las mejores recetas y aprendizajes juntos!</p>
                    
                    <pre>
Día             Horario             Actividad
---------------------------------------------------------
Lunes a Viernes 09:00 - 13:00 hs    Talleres de Cocina
Sábados         10:00 - 15:00 hs    Cocina en Vivo
Domingos        Cerrado             Descanso Creativo
                    </pre>
                </div>
            </article>

            <footer class="section-footer">
                <div>
                    <hr>
                    <p>Cooking W.M &copy; 2026 - Inicio</p>
                </div>
            </footer>
        </section>

        <section id="quienes-somos" class="page-section">
            <header>
                <div>
                    <h1 style="font-family: 'Arial Black', sans-serif; font-size: 28px; margin-bottom: 20px;">¿Quiénes Somos? - Conoce la Filosofía de Cooking W.M</h1>
                </div>
            </header>

            <article class="intro-text">
                <div>
                    <h2>Nuestra Historia y Pasión por la Gastronomía</h2>
                    <p>
                        Somos un equipo apasionado por la gastronomía, liderado por Mitch y apoyado por una comunidad activa de cocineros, estudiantes y amantes de la buena comida.
                        No nos consideramos una escuela rígida ni un sitio web corporativo de cocina; somos un punto de encuentro digital donde la creatividad culinaria no tiene límites.
                    </p>
                    <p>
                        Creemos firmemente en el concepto de <strong>"cocina colaborativa"</strong>, donde tanto un chef profesional con años de experiencia como una persona que recién está aprendiendo a encender el horno tienen el mismo valor y espacio para expresarse.
                    </p>
                    
                    <h2>Misión y Visión de nuestra comunidad culinaria</h2>
                    <p>
                        <strong>Misión:</strong> Democratizar la cocina, incentivar los hábitos de alimentación saludable y proveer herramientas reales de aprendizaje e inserción laboral a través de nuestra plataforma.
                    </p>
                    <p>
                        <strong>Visión:</strong> Convertirnos en la comunidad gastronómica digital de referencia en español, conectando a apasionados de la cocina con oportunidades reales de formación y trabajo.
                    </p>
                </div>
            </article>

            <footer class="section-footer">
                <div>
                    <hr>
                    <p>Cooking W.M &copy; 2026 - Quiénes Somos</p>
                </div>
            </footer>
        </section>

        <section id="faq" class="page-section">
            <header>
                <div>
                    <h1 style="font-family: 'Arial Black', sans-serif; font-size: 28px; margin-bottom: 20px;">Preguntas Frecuentes sobre Cursos y Recetas (FAQ)</h1>
                </div>
            </header>

            <div class="faq-section">
                <button type="button" class="accordion-button" aria-expanded="false" aria-controls="medios-pago-panel" onclick="toggleAccordion(this)">
                    Medios de Pago y Envíos de Insumos
                </button>
                <div id="medios-pago-panel" class="accordion-panel">
                    <p>Aceptamos tarjetas de crédito, débito y transferencias. Los envíos de insumos se realizan en un plazo de 24 a 48 horas.</p>
                </div>

                <details class="faq-item">
                    <summary>¿Cómo puedo subir mis propias recetas a la página?</summary>
                    <div class="faq-content">
                        <p>¡Es súper fácil! Solo necesitas crearte una cuenta en la pestaña "Cuenta". Una vez dentro de tu perfil, tendrás habilitada la opción de redactar tu receta, listar los ingredientes y subir una fotografía del resultado final.<br>Nuestro equipo revisará el contenido antes de publicarlo.</p>
                    </div>
                </details>

                <details class="faq-item">
                    <summary>¿Los cursos de cocina otorgan algún tipo de certificado?</summary>
                    <div class="faq-content">
                        <p>Sí, todos nuestros cursos (tanto el de Pastelería Saludable como el de Cocina Express) incluyen un certificado digital de participación avalado por Cooking W.M una vez que completas todos los módulos prácticos.</p>
                    </div>
                </details>

                <details class="faq-item">
                    <summary>¿Cómo puedo contactar a los cocineros de la sección CVs?</summary>
                    <div class="faq-content">
                        <p>Nuestra bolsa de empleo es 100% abierta y gratuita. En la sección "CVs", al seleccionar un perfil se desplegará su información de contacto (correo y teléfono) para comunicarte directamente sin intermediarios.</p>
                    </div>
                </details>

                <details class="faq-item">
                    <summary>¿Tengo que pagar algo para navegar en Cooking W.M?</summary>
                    <div class="faq-content">
                        <p>No, el acceso a las recetas, blogs y la visualización de la bolsa de trabajo es completamente gratuito.<br>Financiamos la plataforma a través de alianzas publicitarias y cursos opcionales.</p>
                    </div>
                </details>
            </div>

            <footer class="section-footer">
                <div>
                    <hr>
                    <p>Cooking W.M &copy; 2026 - Preguntas Frecuentes</p>
                </div>
            </footer>
        </section>

        <section id="menu" class="page-section">
            <header>
                <div>
                    <h1 style="font-family: 'Arial Black', sans-serif; font-size: 28px; margin-bottom: 20px;">Categorías del Menú - Recetas Dulces, Saladas y Saludables</h1>
                </div>
            </header>

            <div class="menu-category-row" tabindex="0" role="button" aria-label="Ir a la categoría de Recetas Dulces" onclick="openPage('menu-dulces')" onkeydown="if(event.key==='Enter'||event.key===' ') openPage('menu-dulces')">
                <div class="img-placeholder" role="img" aria-label="Postre casero y recetas de repostería saludable" style="background-image: url('dulce.png');"></div>
                <div class="menu-category-info">
                    <h2>Recetas Dulces y Postres Rápidos</h2>
                    <p>En esta sección se encuentran recetas dulces ideales para disfrutar en cualquier momento. Opciones ricas, simples y fáciles de preparar.</p>
                </div>
            </div>

            <div class="menu-category-row" tabindex="0" role="button" aria-label="Ir a la categoría de Recetas Saladas" onclick="openPage('menu-saladas')" onkeydown="if(event.key==='Enter'||event.key===' ') openPage('menu-saladas')">
                <div class="img-placeholder" role="img" aria-label="Plato salado nutritivo preparado en casa" style="background-image: url('salado.png');"></div>
                <div class="menu-category-info">
                    <h2>Recetas Saladas Nutritivas</h2>
                    <p>Opciones saladas, prácticas y nutritivas para cualquier plato del día con ingredientes al alcance de todos.</p>
                </div>
            </div>

            <div class="menu-category-row" tabindex="0" role="button" aria-label="Ir a la categoría de Recetas Saludables" onclick="openPage('menu-saludables')" onkeydown="if(event.key==='Enter'||event.key===' ') openPage('menu-saludables')">
                <div class="img-placeholder" role="img" aria-label="Platillo bajo en calorías y comida balanceada" style="background-image: url('saludable.png');"></div>
                <div class="menu-category-info">
                    <h2>Recetas Saludables e Integrales</h2>
                    <p>Pensadas para cuidar el cuerpo sin dejar de disfrutar del sabor. Opciones equilibradas e integrales.</p>
                </div>
            </div>

            <footer class="section-footer">
                <div>
                    <hr>
                    <p>Cooking W.M &copy; 2026 - Menú Principal</p>
                </div>
            </footer>
        </section>

        <section id="menu-dulces" class="page-section">
            <button class="back-arrow" onclick="openPage('menu')">&larr; Volver al Menú</button>
            <header>
                <div>
                    <h1 class="category-header">Especialidades y Recetas Dulces Caseras</h1>
                </div>
            </header>
            <div class="recipes-grid">
                <article class="recipe-item">
                    <div class="user-profile">
                        <div class="user-avatar" role="img" aria-label="Fotografía de perfil del usuario Povi_YT" style="background-image: url('povi.png');"></div>
                        <div class="user-info-text"><strong>Povi_YT</strong><span>Torrejas Dulces Caseras</span></div>
                    </div>
                    <div class="recipe-preview-img" role="img" aria-label="Plato preparado de Torrejas Dulces Caseras estilo artesanal" style="background-image: url('torrejas.png');" onclick="ampliarImagen('torrejas.png', 'Torrejas Dulces Caseras')"></div>
                </article>
                <article class="recipe-item">
                    <div class="user-profile">
                        <div class="user-avatar" role="img" aria-label="Fotografía de perfil de la usuaria Morena_23" style="background-image: url('morena.png');"></div>
                        <div class="user-info-text"><strong>Morena_23</strong><span>Trufas riquísimas de Chocolate</span></div>
                    </div>
                    <div class="recipe-preview-img" role="img" aria-label="Trufas de chocolate negro caseras sin azúcar refinada" style="background-image: url('trufas.png');" onclick="ampliarImagen('trufas.png', 'Trufas riquísimas de Chocolate')"></div>
                </article>
            </div>

            <footer class="section-footer">
                <div>
                    <hr>
                    <p>Cooking W.M &copy; 2026 - Recetas Dulces</p>
                </div>
            </footer>
        </section>

        <section id="menu-saladas" class="page-section">
            <button class="back-arrow" onclick="openPage('menu')">&larr; Volver al Menú</button>
            <header>
                <div>
                    <h1 class="category-header">Especialidades Saladas de Preparación Rápida</h1>
                </div>
            </header>
            <div class="recipes-grid">
                <article class="recipe-item">
                    <div class="user-profile">
                        <div class="user-avatar" role="img" aria-label="Fotografía de Jiselli Herrera" style="background-image: url('jiseli.png');"></div>
                        <div class="user-info-text"><strong>Jiselli-herrera</strong><span>Pollo al Curry Express</span></div>
                    </div>
                    <div class="recipe-preview-img" role="img" aria-label="Plato de Pollo al Curry Express con especias naturales" style="background-image: url('curry.png');" onclick="ampliarImagen('curry.png', 'Pollo al Curry Express')"></div>
                </article>
                <article class="recipe-item">
                    <div class="user-profile">
                        <div class="user-avatar" role="img" aria-label="Fotografía de Andrea Quintana" style="background-image: url('andrea.png');"></div>
                        <div class="user-info-text"><strong>andreaquintana</strong><span>Pasta a la Carbonara Tradicional</span></div>
                    </div>
                    <div class="recipe-preview-img" role="img" aria-label="Plato de Pasta a la Carbonara con receta italiana artesanal" style="background-image: url('carbonara.png');" onclick="ampliarImagen('carbonara.png', 'Pasta a la Carbonara Tradicional')"></div>
                </article>
            </div>

            <footer class="section-footer">
                <div>
                    <hr>
                    <p>Cooking W.M &copy; 2026 - Recetas Saladas</p>
                </div>
            </footer>
        </section>

        <section id="menu-saludables" class="page-section">
            <button class="back-arrow" onclick="openPage('menu')">&larr; Volver al Menú</button>
            <header>
                <div>
                    <h1 class="category-header">Platos Saludables y Nutritivos</h1>
                </div>
            </header>
            <div class="recipes-grid">
                <article class="recipe-item">
                    <div class="user-profile">
                        <div class="user-avatar" role="img" aria-label="Fotografía de Marcos Antonio" style="background-image: url('marcos.png');"></div>
                        <div class="user-info-text"><strong>Marcos_antonio</strong><span>Bowl de Salmón y Palta</span></div>
                    </div>
                    <div class="recipe-preview-img" role="img" aria-label="Bowl de Salmón fresco y Palta balanceado" style="background-image: url('salmon.png');" onclick="ampliarImagen('salmon.png', 'Bowl de Salmón y Palta')"></div>
                </article>
                <article class="recipe-item">
                    <div class="user-profile">
                        <div class="user-avatar" role="img" aria-label="Fotografía de Hong Shualin" style="background-image: url('hong.png');"></div>
                        <div class="user-info-text"><strong>Hong_shualin</strong><span>Ensalada de Garbanzos Fresca</span></div>
                    </div>
                    <div class="recipe-preview-img" role="img" aria-label="Ensalada de garbanzos fresca rica en proteína vegetal" style="background-image: url('garbanzos.png');" onclick="ampliarImagen('garbanzos.png', 'Ensalada de Garbanzos Fresca')"></div>
                </article>
            </div>

            <footer class="section-footer">
                <div>
                    <hr>
                    <p>Cooking W.M &copy; 2026 - Recetas Saludables</p>
                </div>
            </footer>
        </section>

        <section id="resena" class="page-section">
            <header>
                <div>
                    <h1 class="category-header">Reseñas y Opiniones sobre nuestras Recetas de Cocina</h1>
                </div>
            </header>
            
            <article class="review-card">
                <div class="user-avatar" role="img" aria-label="Foto de perfil de Lopez Carlos" style="background-image: url('carlos.png');"></div>
                <div class="review-content">
                    <strong>Lopez Carlos</strong> <span class="stars" aria-label="5 de 5 estrellas">★★★★★</span>
                    <p>"¡Increíble descubrimiento! Lo que más me gusta de esta página es lo claras y sencillas que son las instrucciones. Mis platos ahora parecen de restaurante."</p>
                </div>
            </article>

            <article class="review-card">
                <div class="user-avatar" role="img" aria-label="Foto de perfil de Pam Zam" style="background-image: url('pam.png');"></div>
                <div class="review-content">
                    <strong>Pam_zam</strong> <span class="stars" aria-label="5 de 5 estrellas">★★★★★</span>
                    <p>"Si buscas inspiración real para cocinar, este es el sitio indicado. Los ingredientes son fáciles de conseguir y los sabores nunca fallan."</p>
                </div>
            </article>

            <footer class="section-footer">
                <div>
                    <hr>
                    <p>Cooking W.M &copy; 2026 - Reseñas</p>
                </div>
            </footer>
        </section>

        <section id="blogs" class="page-section">
            <header>
                <div>
                    <h1 class="category-header">Blog Gastronómico: Consejos y Trucos Culinarios</h1>
                </div>
            </header>
            
            <article class="blog-card">
                <div class="blog-banner" role="img" aria-label="Ilustración de preparación de platillos con frutas frescas" style="background-image: url('blog1.png');"></div>
                <div class="blog-body">
                    <h2>Los Secretos Profesionales para Cocinar con Frutas Frescas</h2>
                    <div class="blog-meta">Publicado por Chef Mitch | Categoría: Saludable & Creativo</div>
                    
                    <p>Agregar frutas a tus platillos no solo aporta un toque fresco y dulce, sino que eleva los sabores a un nivel totalmente superior en la cocina moderna.</p>
                    
                    <h3>1. Equilibrio de Sabores en Platillos Dulces y Salados</h3>
                    <p>Para lograr un plato armónico, es esencial combinar el dulzor o acidez de la fruta con ingredientes salados o grasos.</p>

                    <div>
                        <h4>Ejemplos prácticos de maridaje:</h4>
                        <p>- Mangos con ensaladas de pollo deshebrado.<br>- Frutillas con reducciones de vinagre balsámico sobre carnes blancas.</p>
                    </div>

                    <h3>2. Técnicas de Cocción Recomendadas</h3>
                    <p>Las frutas se pueden caramelizar a la plancha o asar al horno para concentrar sus azúcares naturales.</p>

                    <section class="comments-section">
                        <div>
                            <h3>Comentarios de la Comunidad (2)</h3>
                            
                            <article class="comment-item">
                                <div>
                                    <h4>Mariana Solís (Hace 2 horas)</h4>
                                    <p>¡Excelente artículo! Probé asar piña con salmón y el resultado fue espectacular.</p>
                                </div>
                            </article>

                            <article class="comment-item">
                                <div>
                                    <h4>Diego Peralta (Hace 1 día)</h4>
                                    <p>No sabía que el aceto balsámico combinaba tan bien con frutillas. ¡Gracias por el tip!</p>
                                </div>
                            </article>
                        </div>
                    </section>
                </div>
            </article>

            <article class="blog-card">
                <div class="blog-banner" role="img" aria-label="Organización y planificación de ingredientes en la cocina" style="background-image: url('blog2.png');"></div>
                <div class="blog-body">
                    <h2>5 Tips para Organizarte en la Cocina y Desconectarte del Estrés</h2>
                    <div class="blog-meta">Publicado por Lic. Nutrición Clara | Categoría: Bienestar</div>
                    
                    <p>Cocinar no tiene por qué ser estresante. Con una buena planificación, la cocina se transforma en tu momento de relax diario.</p>

                    <h3>Técnica del Mise en Place para Ahorrar Tiempo</h3>
                    <p>Consiste en cortar, medir y organizar todos los ingredientes en recipientes antes de encender la cocina.</p>

                    <section class="comments-section">
                        <div>
                            <h3>Comentarios de la Comunidad (1)</h3>
                            <article class="comment-item">
                                <div>
                                    <h4>Sofía Ruiz (Hace 3 días)</h4>
                                    <p>El Mise en Place me cambió la vida, ahora no se me quema nada mientras cocino.</p>
                                </div>
                            </article>
                        </div>
                    </section>
                </div>
            </article>

            <footer class="section-footer">
                <div>
                    <hr>
                    <p>Cooking W.M &copy; 2026 - Blog</p>
                </div>
            </footer>
        </section>

        <section id="cursos" class="page-section">
            <header>
                <div>
                    <h1 class="category-header">Cursos de Cocina y Repostería Online con Certificado</h1>
                </div>
            </header>

            <div class="menu-category-row" tabindex="0" role="button" aria-label="Ver detalles del Curso de Pastelería Saludable" onclick="openCourse('Curso de Pastelería Saludable')" onkeydown="if(event.key==='Enter'||event.key===' ') openCourse('Curso de Pastelería Saludable')">
                <div class="img-placeholder" role="img" aria-label="Aprende pastelería saludable sin azúcar con certificación" style="background-image: url('pasteleria.png');"></div>
                <div class="menu-category-info">
                    <h2>Curso: Pastelería Saludable</h2>
                    <p>Aprende a preparar postres deliciosos utilizando harinas integrales, endulzantes naturales y frutas. ¡Inscríbete hoy!</p>
                </div>
            </div>

            <div class="course-form" style="margin-bottom: 30px;">
                <h2 style="font-family: 'Arial Black', sans-serif; font-size: 20px; text-align: center; margin-top: 0; margin-bottom: 15px;">Formulario de Inscripción a Cursos de Cocina</h2>
                <p style="margin-top:0; margin-bottom: 20px; font-weight: bold; text-align: center; font-size: 14px;">Completa tus datos e ingresa al curso de cocina que deseas realizar.</p>
                <form id="form-curso-directo" onsubmit="validarYMostrarResumen(event, 'directo')" novalidate>
                    <div class="form-group">
                        <label for="curso-directo">Selecciona tu Curso de Cocina</label>
                        <select id="curso-directo" name="curso">
                            <option value="Pastelería Saludable">Curso: Pastelería Saludable</option>
                            <option value="Cocina Express">Curso: Cocina Express</option>
                            <option value="Cocina Internacional">Curso: Cocina Internacional</option>
                            <option value="Técnicas Básicas de Cocina">Curso: Técnicas Básicas de Cocina</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="nombre-directo">Nombre Completo</label>
                        <input type="text" id="nombre-directo" name="nombre" placeholder="Tu nombre y apellido">
                        <div id="err-nombre-directo" class="error-msg">Por favor, ingresa tu nombre completo.</div>
                    </div>
                    <div class="form-group">
                        <label for="correo-directo">Correo Electrónico</label>
                        <input type="email" id="correo-directo" name="correo" placeholder="ejemplo@correo.com">
                        <div id="err-correo-directo" class="error-msg">Ingresa un correo electrónico válido (ejemplo@dominio.com).</div>
                    </div>
                    <div class="form-group">
                        <label for="nivel-directo">Nivel de experiencia</label>
                        <select id="nivel-directo" name="nivel">
                            <option value="principiante">Principiante</option>
                            <option value="intermedio">Intermedio</option>
                            <option value="avanzado">Avanzado</option>
                        </select>
                    </div>
                    <button type="submit" class="btn-submit">Ingresar al Curso</button>
                </form>
            </div>

            <article class="study-guide-card">
                <div>
                    <h2>Guía de Estudio en Línea: Pastelería Saludable y Alternativa</h2>
                    <p>Esta guía contiene el temario oficial y la estructura de estudio estructurada paso a paso para nuestros estudiantes.</p>

                    <h3>Módulo 1: Fundamentos de la Repostería Saludable</h3>
                    
                    <h4>Tema 1.1: Harinas Alternativas e Integrales</h4>
                    <ul>
                        <li><strong>Detalle de estudio:</strong> Diferencias de absorción entre harina de avena, almendras y coco.</li>
                        <li><strong>Práctica:</strong> Cálculo de hidratación en masas leudadas sin gluten.</li>
                    </ul>

                    <h4>Tema 1.2: Sustitutos de Azúcar Refinada</h4>
                    <ul>
                        <li><strong>Detalle de estudio:</strong> Uso de dátiles, eritritol, estevia pura y miel de agaves.</li>
                        <li><strong>Práctica:</strong> Elaboración de mermeladas caseras sin azúcar añadida.</li>
                    </ul>

                    <h3>Módulo 2: Técnicas de Horneado y Texturas</h3>
                    
                    <h4>Tema 2.1: Aglutinantes Naturales</h4>
                    <ul>
                        <li><strong>Detalle de estudio:</strong> Uso de semillas de chía o lino remojadas (huevo vegano) y gelatina natural.</li>
                        <li><strong>Práctica:</strong> Bizcocho esponjoso con base de chía y plátano maduro.</li>
                    </ul>

                    <h4>Tema 2.2: Coberturas y Rellenos Saludables</h4>
                    <ul>
                        <li><strong>Detalle de estudio:</strong> Frosting a base de yogur griego, cacao amargo y queso crema descremado.</li>
                    </ul>
                </div>
            </article>

            <footer class="section-footer">
                <div>
                    <hr>
                    <p>Cooking W.M &copy; 2026 - Cursos</p>
                </div>
            </footer>
        </section>

        <section id="detalle-curso" class="page-section">
            <button class="back-arrow" onclick="openPage('cursos')">&larr; Volver a Cursos</button>
            <header>
                <div>
                    <h1 class="category-header" id="curso-titulo">Formulario de Inscripción al Curso</h1>
                </div>
            </header>
            
            <div class="course-form">
                <p style="margin-top:0; margin-bottom: 20px; font-weight: bold; text-align: center;">Completa tus datos para obtener acceso inmediato al aula virtual.</p>
                <form id="form-curso-detalle" onsubmit="validarYMostrarResumen(event, 'detalle')" novalidate>
                    <div class="form-group">
                        <label for="nombre">Nombre Completo</label>
                        <input type="text" id="nombre" name="nombre" placeholder="Tu nombre y apellido">
                        <div id="err-nombre" class="error-msg">Por favor, ingresa tu nombre completo.</div>
                    </div>
                    <div class="form-group">
                        <label for="correo">Correo Electrónico</label>
                        <input type="email" id="correo" name="correo" placeholder="ejemplo@correo.com">
                        <div id="err-correo" class="error-msg">Ingresa un correo electrónico válido (ejemplo@dominio.com).</div>
                    </div>
                    <div class="form-group">
                        <label for="nivel">Nivel de experiencia</label>
                        <select id="nivel" name="nivel">
                            <option value="principiante">Principiante</option>
                            <option value="intermedio">Intermedio</option>
                            <option value="avanzado">Avanzado</option>
                        </select>
                    </div>
                    <button type="submit" class="btn-submit">Confirmar Inscripción</button>
                </form>
            </div>

            <footer class="section-footer">
                <div>
                    <hr>
                    <p>Cooking W.M &copy; 2026 - Inscripción</p>
                </div>
            </footer>
        </section>

        <section id="cvs" class="page-section">
            <header>
                <div>
                    <h1 class="category-header">Bolsa de Trabajo: Currículum Vitae de Chefs Profesionales</h1>
                </div>
            </header>

            <article class="cv-container">
                <header class="cv-header-block">
                    <div>
                        <h1>Carlos Mendoza</h1>
                        <p style="font-size: 18px; color: #333; margin: 0;"><strong>Chef Ejecutivo & Consultor Gastronómico</strong></p>
                        <p style="margin-top: 10px; font-size: 14px;"><strong>Email:</strong> c.mendoza@email.com | <strong>Tel:</strong> +34 600 123 456 | <strong>Ubicación:</strong> Madrid, España</p>
                    </div>
                </header>

                <section>
                    <div>
                        <h2 class="cv-section-title">Perfil Profesional</h2>
                        <p>Chef Ejecutivo con más de 10 años de trayectoria liderando brigadas de cocina en entornos hoteleros de alta exigencia y restaurantes de autor. Especialista en gastronomía mediterránea, optimización de costos (Food Cost) y diseño de menús saludables.</p>
                    </div>
                </section>

                <section>
                    <div>
                        <h2 class="cv-section-title">Experiencia Laboral</h2>
                        
                        <article class="cv-item">
                            <div>
                                <h3>Chef Ejecutivo - Hotel Grand Luxury 5*</h3>
                                <h4>Enero 2021 - Presente | Madrid, España</h4>
                                <ul>
                                    <li>Supervisión y liderazgo de un equipo de 18 cocineros y personal de plaza.</li>
                                    <li>Rediseño integral de la carta del restaurante, incrementando la rentabilidad en un 20%.</li>
                                    <li>Implementación de protocolos estrictos de calidad e higiene HACCP.</li>
                                </ul>
                            </div>
                        </article>

                        <article class="cv-item">
                            <div>
                                <h3>Sous Chef Senior - Restaurante Mar & Tierra</h3>
                                <h4>Marzo 2017 - Diciembre 2020 | Barcelona, España</h4>
                                <ul>
                                    <li>Coordinación directa del servicio en hora pico y gestión de proveedores.</li>
                                    <li>Capacitación del personal principiante en técnicas modernas de cocción al vacío (Sous-Vide).</li>
                                </ul>
                            </div>
                        </article>
                    </div>
                </section>

                <section>
                    <div>
                        <h2 class="cv-section-title">Educación y Formación Académica</h2>
                        
                        <article class="cv-item">
                            <div>
                                <h3>Máster en Alta Cocina y Gestión de Hostelería</h3>
                                <h4>Le Cordon Bleu | 2015 - 2016</h4>
                            </div>
                        </article>

                        <article class="cv-item">
                            <div>
                                <h3>Licenciatura en Artes Culinarias y Gastronomía</h3>
                                <h4>Universidad Gastronómica Internacional | 2011 - 2015</h4>
                            </div>
                        </article>
                    </div>
                </section>

                <section>
                    <div>
                        <h2 class="cv-section-title">Habilidades Técnicas y Competencias</h2>
                        <div>
                            <span class="cv-tag">Cocina al Vacío</span>
                            <span class="cv-tag">Gestión de Inventarios</span>
                            <span class="cv-tag">Diseño de Menús</span>
                            <span class="cv-tag">Liderazgo de Equipos</span>
                            <span class="cv-tag">Pastelería Saludable</span>
                            <span class="cv-tag">Control de Mermas</span>
                        </div>
                    </div>
                </section>

                <section>
                    <div>
                        <h2 class="cv-section-title">Idiomas</h2>
                        <p><strong>Español:</strong> Nativo | <strong>Inglés:</strong> Avanzado (C1) | <strong>Francés:</strong> Intermedio (B1)</p>
                    </div>
                </section>
            </article>

            <footer class="section-footer">
                <div>
                    <hr>
                    <p>Cooking W.M &copy; 2026 - Currículum Vitae</p>
                </div>
            </footer>
        </section>

        <section id="cuenta" class="page-section">
            <header>
                <div>
                    <h1 style="font-family: 'Arial Black', sans-serif; font-size: 28px; margin-bottom: 20px;">Mi Cuenta y Perfil de Usuario</h1>
                </div>
            </header>

            <div class="profile-header" style="text-align: center; background: #ffe5ec; padding: 20px; border: 2px solid #000; border-radius: 8px;">
                <div class="user-avatar" role="img" aria-label="Fotografía de perfil de Cherel-2009" style="width: 90px; height: 90px; margin: 0 auto 10px auto; background-image: url('yop.png');"></div>
                <h2 style="font-family: 'Arial Black', sans-serif; margin: 0;">Cherel-2009</h2>
                <p style="margin: 5px 0 0 0; color: #222;">Amante de la cocina saludable y participante activo.</p>
            </div>

            <h3 style="font-family: 'Arial Black', sans-serif; margin-top: 20px;">Mis Publicaciones Recientes de Recetas</h3>
            <article style="background: #fff; padding: 15px; border: 2px solid #000; border-radius: 8px;">
                <div>
                    <div class="user-profile" style="margin-bottom: 10px;">
                        <div class="user-avatar" role="img" aria-label="Avatar del usuario Cherel-2009" style="background-image: url('yop.png');"></div>
                        <div class="user-info-text">
                            <strong>Cherel-2009</strong>
                            <span>Zucchinis Rellenos Gratinados</span>
                        </div>
                    </div>
                    <div class="recipe-preview-img" role="img" aria-label="Receta de Zucchinis Rellenos Gratinados al horno" style="height: 250px; background-image: url('zucchini.png');" onclick="ampliarImagen('zucchini.png', 'Zucchinis Rellenos Gratinados')"></div>
                </div>
            </article>

            <footer class="section-footer">
                <div>
                    <hr>
                    <p>Cooking W.M &copy; 2026 - Mi Cuenta</p>
                </div>
            </footer>
        </section>

<?php 
  require_once 'includes/footer.php'; 
?>