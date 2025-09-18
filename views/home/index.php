<?php include_once __DIR__ . "/../templates/header.php"; ?>

<section id="inicio" class="hero">
    <div class="contenedor">
    
    <div class="contenido-texto">
        <span class="tag">Especialista Certificado</span>
        <h1>
        Cuidado Especializado para tu <span class="azul">Salud Auditiva</span>
        </h1>
        <p>
        Más de <?php echo obtenerAniosExperiencia(); ?> años de experiencia en otorrinolaringología. Tratamientos modernos y atención personalizada para cada paciente.
        </p>
    <div class="acciones">
        <a href="https://wa.me/2461567821" class="btn-primario">Agendar Cita</a>
        <a href="tel:+522461567821" class="btn-secundario">
        <i class="fas fa-phone-alt" aria-hidden="true"></i>Llamar Ahora
        </a>
    </div>
    </div>
        <div class="hero-imagen">
            <img class="hero-imagen"  src="/assets/images/home/dr_roberto.jpg" alt="Foto del Doctor">
        </div>
    </div>
</section>


<section id="servicios" class="servicios">
    <div class="contenedor">
        <h2>Servicios Médicos</h2>
        <p class="descripcion">
            Ofrecemos una amplia gama de servicios especializados en otorrinolaringologia
        </p>

        <div class="servicios-grid">
            <!-- Card 1-->
            <div class="card">
                <div class="icono">
                    <i class="fa-solid fa-ear-listen" aria-hidden="true"></i>
                </div>
                <h3>Enfermedades del Oído, Garganta y Nariz</h3>
                <p>Diagnóstico y tratamiento de patologías comunes del sistema otorrinolaringológico</p>
                <a href="/enfermedades" class="btn">Ver Enfermedades</a>
            </div>

                        <!-- Card 2-->
            <div class="card">
                <div class="icono">
                    <i class="fa-solid fa-stethoscope" aria-hidden="true"></i>
                </div>
                <h3>Cirugías Médicas</h3>
                <p>Procedimientos quirúrgicos especializados para resolver problemas estructurales</p>
                <a href="/cirugias" class="btn">Ver Cirugías</a>
            </div>

                        <!-- Card 3-->
            <div class="card">
                <div class="icono">
                    <i class="fa-solid fa-user-nurse" aria-hidden="true"></i>
                </div>
                <h3>Procedimientos Estéticos</h3>
                <p>Tratamientos estéticos faciales quirúrgicos y no quirúrgicos</p>
                <a href=" " class="btn">Ver Procesos Estéticos</a>
            </div>


        </div>



    </div>
</section>

<section id="doctor" class="acerca-doctor">
    <div class="contenedor">
        <div class="contenido">
            <div class="doctor-imagen">
                <!-- TODO: Aqui ira la foto del doctor-->
                <img src="/assets/images/home/dr_roberto.jpg" alt="Foto del doctor">
            </div>
            <div class="doctor-info">
                <span class="certificado">Certificado</span>
                <h2>Acerca del Doctor</h2>
                <p>
                    Dr. Roberto Herrera es un otorrinolaringólogo certificado con más de <?php echo obtenerAniosExperiencia(); ?> años de experiencia en el diagnóstico y tratamiento de transtornos del oído, nariz y garganta.
                </p>
                <ul class="doctor-logros">
                    <li><i class="fas fa-award"></i> Certificado por el Consejo Mexicano de Otorrinolaringología</li>
                    <li><i class="fas fa-award"></i> Especialización en Cirgugía Endoscópica Nasal</li>
                    <li><i class="fas fa-award"></i> Miembro de la Sociedad Mexicana de Otorrinolaringología</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section id="testimonios" class="testimonios">
    <div class="container">
        <h2>Testimonios de Pacientes</h2>
        <p class="descripcion">Lo que dicen nuestros pacientes sobre su experiencia</p>

                <!-- Elfsight Google Reviews | Untitled Google Reviews -->
        <div class="elfsight-app-7cf088b5-c22a-4d92-9184-088e3e596af7" data-elfsight-app-lazy></div>
        <script src="https://static.elfsight.com/platform/platform.js" async></script>
        <!-- <div class="cards">
            <div class="card">
                <h3>María González</h3>
                <span class="fecha">Hace 2 semanas</span>
                <div class="estrellas">★★★★★</div>
                <p><em>"Excelente atención, el Dr. me ayudó mucho con mi problema de audición. Muy profesional y amable."</em></p>
            </div> .card -->
<!-- 
                        <div class="card">
                <h3>Carlos Rodríguez</h3>
                <span class="fecha">Hace 1 mes</span>
                <div class="estrellas">★★★★★</div>
                <p><em>"La cirugía de nariz fue un éxito total. El doctor explicó todo muy bien y el seguimiento fue perfecto."</em></p>
            </div> .card -->
<!-- 
            <div class="card">
                <h3>Ana Martínez</h3>
                <span class="fecha">Hace 1 mes</span>
                <div class="estrellas">★★★★★</div>
                <p><em>"Muy recomendado. Solucionó mi problema de garganta que tenía hace años. Gracias Doctor!!."</em></p>
            </div> .card -->

        </div> <!-- .cards -->

        <div class="centrado">
            <!-- <a href="#" class="btn-secundario">Ver Más Testimonios</a> -->
        </div>
    </div>
</section>

<section id="contacto" class="contacto">
    <div class="container">
    <h2>Ubicación y Contacto</h2>
    <p class="descripcion">Estamos aquí para ayudarte. Contáctanos para agendar tu cita</p>

    <div class="contenido">
        <!-- Información de contacto -->
        <div class="info-contacto">
            <h3>Información de Contacto</h3>

        <div class="item">
            <span class="icono"><i class="fas fa-phone-alt"></i></span>
            <div>
            <strong>Teléfono</strong><br />
            +52 (246) 156 7821
            </div>
        </div>

        <div class="item">
            <span class="icono"><i class="fas fa-envelope"></i></span>
        <div>
            <strong>Email</strong><br />
            dr.herreraorl@hotmail.com
        </div>
        </div>

        <div class="item">
            <span class="icono"><i class="fas fa-map-marker-alt"></i></span>
            <div>
            <strong>Dirección</strong><br />
            G. Valle 18, Centro, 9000 <br />
            Tlaxcala de Xicohténcatl, Tlax
            </div>
        </div>

        <div class="item">
            <span class="icono"><i class="fas fa-clock"></i></span>
            <div>
            <strong>Horarios</strong><br />
            Lun - Vie: 11:00 AM - 6:00 PM<br />
            </div>
        </div>
        </div>

        <!-- Mapa -->
        <div class="mapa">
        <h3>Mapa de Ubicación</h3>
        <div class="mapa-placeholder">
            <iframe class="mapa-placeholder" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3764.995653607893!2d-98.2271652!3d19.325994899999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85cfd92e61804277%3A0x58dbcc22dd8caa0f!2sCLINICA%20DE%20OTORRINOLARINGOLOGIA!5e0!3m2!1ses-419!2smx!4v1739245872811!5m2!1ses-419!2smx" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <a href="https://wa.me/2461567821" class="btn-primario">Agendar Cita Ahora</a>
        </div>
    </div>
    </div>
</section>

<?php include_once __DIR__ . "/../templates/footer.php"; ?>