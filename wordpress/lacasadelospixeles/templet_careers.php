<?php include 'header.php' ?>
<section class="banner background careers" background="img/banner-jobs.jpg" background-size="cover">
    <div class="container wow fadeIn" data-wow-duration="2s" data-wow-delay="0.5s">
        <div class="row">
        <div class="col-md-10 col-md-offset-1">
        <h1>Hagamos de Internet un mejor lugar.</h1>
        <p>Estámos en busca de personas que sientan una gran pasión por el diseño y desarrollo web/móvil, disfruten de aprender constantemente y de construir productos de calidad.</p>
        </div>
        </div>
    </div>
</section>

<!-- /Banner Principal -->

<div class="container">
    <div class="row">
        <div class="col-sm-10 col-md-offset-1 careers-heading">
            <figure><img src="img/icon-work.svg" alt="Work with us"></figure>
            <h2>Trabaja con nosotros</h2>
            <p>Nos gusta encontrar soluciones a problemas complicados. Nos gusta divertirnos mientras trabajamos. Nos gusta un mundo donde el bueno diseño y funcionalidad ganen. Estamos en busca de gente creativa, apasionada y que trabaje en equipo para que nos ayude a construir productos que marquen una diferencia en el mundo. Estas son algunas de las cosas que ofrecemos a nuestro equpo de trabajo:</p>
        </div>
    </div>
    <div class="row job-benefits">
        <div class="col-sm-5 col-md-offset-1">
            <figure><img src="img/icon-money.svg" alt="Icon Money"></figure>
            <h3>Sueldo competitivo</h3>
            <p>Nos gusta que nuestro equipo de trabajo reciba los beneficios que se merecen por el gran trabajo que realizan, ofrecemos un sueldo justo con posibilidades de crecer.</p>
        </div>
        <div class="col-sm-5">
            <figure><img src="img/icon-coffee.svg" alt="Icon Coffee"></figure>
            <h3>Buen ambiente de trabajo</h3>
            <p>Siempre cuidamos que el ambiente de trabajo sea cómodo y relajado para ser más productivos, ofrecemos horarios flexibles, snacks y ambiente amigable.</p>            
        </div>
    </div>
    <div class="row job-benefits second-row">
        <div class="col-sm-5 col-md-offset-1">
            <figure><img src="img/icon-gym.svg" alt="Icon Gym"></figure>
            <h3>Salud y Bienestar</h3>
            <p>Sabemos que el ejercicio mejora nuestro estado de animo y eso se refleja al trabajar por eso todo nuestro equipo cuenta con acceso gratuito a gimnasio con alberca y diferentes actividades.</p>
        </div>
        <div class="col-sm-5">
            <figure><img src="img/icon-capacitacion.svg" alt="Icon Capacitacion"></figure>
            <h3>Capacitación</h3>
            <p>Somos un equipo con ganas de aprender y probar nuevas tecnologías, es parte de nuestro ADN por eso contamos con suscripción a diferentes plataformas de educación online para estar al día y crear mejores productos.</p>            
        </div>
    </div>    
</div>

<div class="image-middle">
    <img src="img/careers-image-divider.jpg" alt="La Casa de los Pixeles Trabaja con Nosotros">
</div>

<div class="container">
    <div class="row available-positions">
        <figure><img src="img/icon-work.svg" alt="Work Icon"></figure>
        <h2>Puestos Disponibles</h2>
    </div>

    <section class="apply-form-content">
        <div class="apply-form">
            <div class="form-heading">
                <img src="img/close-icon.svg" class="close-form" />
                <h4>¿Tienes lo que se necesita?</h4>
                <p>Envíanos el siguiente formulario con tus datos y nos pondremos en contacto.</p>
            </div>
            <div class="form-body">
               <form id="applyform" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="vacant" id="vacant" value="test" class="form-control"/>
                    <label>Escribe tu Nombre</label>
                    <input type="text" name="name" class="required form-control" required>
                    <label>Escribe tu Correo</label>
                    <input type="email" name="email" class="required form-control" required>
                    <label>Sube tu CV<span class="small"> (.pdf, .doc, .docx)</span></label>
                    <div class="upload-value"></div>
                    <label for="upload-cv"><img src="img/upload-icon.svg" /> Selecciona el archivo de tu computadora</label>
                    <input type="file" name="upload-cv" id="upload-cv" value="" class="form-control">
                    <label>Sitios que acostumbras visitar</label>
                    <input name="site1" type="text">
                    <input name="site2" type="text">
                    <input name="site3" type="text">
                    <label>Sitios Personales</label>
                    <input type="text" name="website" class="website form-control" placeholder="Portafolio o Sitio Personal" required>
                    <input type="text"  name="linkedin" class="linkedin" placeholder="Perfil Linkedin">
                    <input type="text" name="behance" class="behance" placeholder="Perfil Behance o Github">
                    <label>Algo más que debamos saber de tí</label>
                    <textarea name="others" ></textarea>
                      <div class="recaptcha">
                            <input name="recaptcha-status" id="recaptcha-status" type="hidden" class="form-control">
                        </div>
                        <script src='https://www.google.com/recaptcha/api.js?onload=reCaptchaCallback&render=explicit'></script>
                        <script>
                            var RC2KEY = '6LfNMA4TAAAAANMYiBCOAZxLR-hxnNIxj9dbbZGD';
                            function reCaptchaVerify(response) {
                                if (response === document.querySelector('.g-recaptcha-response').value) {
                                    /* do something */
                                    $('#recaptcha-status').val('no-robot')
                                }
                            }

                            function reCaptchaExpired () {
                                /* do something when it expires */
                            }

                            function reCaptchaCallback () {
                                grecaptcha.render('g-recaptcha', {
                                    'sitekey': RC2KEY,
                                    'callback': reCaptchaVerify,
                                    'expired-callback': reCaptchaExpired
                                });
                            }
                        </script>
                        <div id="g-recaptcha" data-sitekey="6LfNMA4TAAAAANMYiBCOAZxLR-hxnNIxj9dbbZGD"></div>
                        <br>
                        <button type="submit" class="emerald-btn">Aplicar ahora</button>
                    <div id="success-msg"><div>
               </form>
            </div>
        </div>
    </section>

    <div class="job-available">
        <div class="row job-header">
            <div class="col-md-6 col-md-offset-1">
                <div class="job-title">
                    <h3>Diseñador Web y UX</h3>
                    <span>Puebla, México</span>
                </div>
            </div>
            <div class="col-md-4">
                <a href="#link" onclick="apply('Diseñador Web')" class="emerald-btn pull-right apply">Aplicar para el puesto</a>
            </div>
        </div><!--row-->
        <div class="row job-description">
            <div class="col-md-10 col-md-offset-1">
                <p>Tienes el poder de transformar un <i>brief</i> en excelentes diseños que funcionan de maravilla siguiendo las tendencias de usabilidad y resuelven problemas de comunicación. Pasas demasiado tiempo en behance o dribbble y siempre estás buscando libros o artículos que te ayuden a mejorar y mantenerte actualizado.</p>
                <div class="collapse" id="read-more-1">
                    <h3>Requisitos</h3>
                    <ul class="requeriments-list">
                        <li>3+ años diseñando para web (comprobables)</li>
                        <li>Excenelente manejo de Photoshop enfocado a diseño web</li>
                        <li>Conocimientos intermedios en Illustrator</li>
                        <li>Dominar la teoría del color</li>
                        <li>Dominar retículas y proporciones</li>
                        <li>Sabes dónde y por qué debes usar un JPG en lugar de un PNG o visceversa</li>
                        <li>Conocimiento en exportación de <i>assets</i> optimizados</li>
                        <li>Conocimiento de las limitaciones de programación en tus diseños</li>
                        <li>Sumamente actualizado en tendencias visuales</li>
                    </ul>
                    <h3>Extras</h3>
                    <ul class="requeriments-list">
                        <li>Conocimientos en HTML/CSS</li>
                        <li>Manejo de paquetería de diseño para diseño impreso o editorial</li>
                        <li>Experiencia trabajando con equipos de desarrollo de software</li>
                        <li>Excelentes habilidades como ilustrador</li>
                    </ul>
                </div>
                <a class="read-more-btn" role="button" data-toggle="collapse" href="#read-more-1" aria-expanded="false" aria-controls="collapseExample">
                  Ver Requisitos <img src="img/arrow-collapse.svg" class="icon-expand">
                </a>
            </div>
        </div>
    </div><!--job-available-->


    <div class="job-available">
        <div class="row job-header">
            <div class="col-md-6 col-md-offset-1">
                <div class="job-title">
                    <h3>Desarrollador Front-End</h3>
                    <span>Puebla, México / Remoto</span>
                </div>
            </div>
            <div class="col-md-4">
                <a href="#link" onclick="apply('Desarrollador Front-End')" class="emerald-btn pull-right apply">Aplicar para el puesto</a>
            </div>
        </div><!--row-->
        <div class="row job-description">
            <div class="col-md-10 col-md-offset-1">
                <p>Eres un maestro de HTML y CSS, gustas de leer artículos, noticias y libros relacionados con el front-end; Javascript y tú son uno mismo y estás al tanto del poder que tienes en tus manos. Te gusta trabajar en equipo y aprender constantemente, además de que siempre has sido creativo y te gusta encontrar nuevas soluciones a problemas comunes.</p>
                <div class="collapse" id="read-more-2">
                    <h3>Requisitos</h3>
                    <ul class="requeriments-list">
                        <li>3+ años creando sitios web desde cero</li>
                        <li>Excelente nivel en HTML y CSS (comprobable en calidad y velocidad)</li>
                        <li>Manejo de frameworks como Bootstrap o Foundation</li>
                        <li>Conocimientos intermedios de Javascript</li>
                        <li>Habilidad para poder convertir un PSD a un sitio web funcional</li>
                        <li>Excelente atención al detalle</li>
                        <li>Actualizado en cuanto a las mejores prácticas en HTML, CSS y JS</li>
                        <li>Capacidades para crear sitios "Pixel-perfect"</li>
                        <li>Inglés intermedio-avanzado</li>
                    </ul>
                    <h3>Extras</h3>
                    <ul class="requeriments-list">
                        <li>Manejo Avanzado de Javascript</li>
                        <li>Conocimiento en AngularJS, NodeJS o algun otro framework de JS</li>
                        <li>Experiencia con integraciones de APIs de terceros</li>
                        <li>Wordpress theming &amp; customization</li>
                        <li>Magento</li>
                    </ul>
                </div>
                <a class="read-more-btn" role="button" data-toggle="collapse" href="#read-more-2" aria-expanded="false" aria-controls="collapseExample">
                  Ver Requisitos <img src="img/arrow-collapse.svg" class="icon-expand">
                </a>
            </div>
        </div>
    </div><!--job-available-->

     <div class="job-available">
        <div class="row job-header">
            <div class="col-md-6 col-md-offset-1">
                <div class="job-title">
                    <h3>Programador Web Back-End</h3>
                    <span>Puebla, México</span>
                </div>
            </div>
            <div class="col-md-4">
                <a href="#link" onclick="apply('Programador Web Back-End')" class="emerald-btn pull-right apply">Aplicar para el puesto</a>
            </div>
        </div><!--row-->
        <div class="row job-description">
            <div class="col-md-10 col-md-offset-1">
                <p>Has dedicado tu vida profesional a las artes oscuras del Back-end, al utilizar aplicaciones -sin quererlo- comienzas a imaginar el modelo de datos y el cómo lo hacen, te mantienes actualizado en las últimas tecnologías y nuevas formas de lograr tus objetivos; y cuando vez una nueva tecnología o herramienta no puedes esperar para comenzar a jugar con ella.</p>
                <div class="collapse" id="read-more-3">
                    <h3>Requisitos</h3>
                    <ul class="requeriments-list">
                        <li>3+ años de experiencia programando Back-End</li>
                        <li>Excelentes conocimientos en PHP 5.4+</li>
                        <li>Experiencia en POO y MVC</li>
                        <li>Experiencia usando Git y resolución de conflictos en el flujo de trabajo</li>
                        <li>Experiencia con Bootstrap y jQuery</li>
                        <li>Experiencia con MySQL, Postgres (incluyendo consultas avanzadas, vistas, procedimientos y disparadores)</li>
                        <li>Experiencia en diseño de estructuras de datos relacionales y no relacionales</li>
                    </ul>
                    <h3>Extras</h3>
                    <ul class="requeriments-list">
                        <li>Experencia con Redis o MongoDB</li>
                        <li>Wordpress Theming y Plug in Development</li>
                        <li>Otro lenguaje de back-end</li>
                    </ul>
                </div>
                <a class="read-more-btn" role="button" data-toggle="collapse" href="#read-more-3" aria-expanded="false" aria-controls="collapseExample">
                  Ver Requisitos <img src="img/arrow-collapse.svg" class="icon-expand">
                </a>
            </div>
        </div>
    </div><!--job-available-->

    <div class="job-available">
        <div class="row job-header">
            <div class="col-md-6 col-md-offset-1">
                <div class="job-title">
                    <h3>Programador Android</h3>
                    <span>Puebla, México</span>
                </div>
            </div>
            <div class="col-md-4">
                <a href="#link" onclick="apply('Programador Android')" class="emerald-btn pull-right apply">Aplicar para el puesto</a>
            </div>
        </div><!--row-->
        <div class="row job-description">
            <div class="col-md-10 col-md-offset-1">
                <p>Hace tiempo que sabes que el futuro son las apps móviles y no piensas dejarlo así, te gusta descargar apps para deducir como fueron programadas e incluso has hecho unos clones de algunas que te gustan; te mantienes actualizado mediante artículos y libros; y simplemente no puedes dejar de aprender.</p>
                <div class="collapse" id="read-more-4">
                    <h3>Requisitos</h3>
                    <ul class="requeriments-list">
                        <li>3+ años de experiencia construyendo aplicaciones altamente escalables en Android</li>
                        <li>Comprometido para producir código que siga las mejores prácticas de la industria</li>
                        <li>Experiencia desarrollando apps complejas</li>
                        <li>Especial cuidado en el detalle de diseño de interfaces, usabilidad y entrega de código</li>
                        <li>Dominio de Android SDK Java, JSON, XML, SOAP, REST</li>
                        <li>Dominio de de Rest APIs y Web Services</li>
                        <li>Experiencia con POO</li>
                        <li>Experiencia en reproducción de video en Android, Google Maps, Android Push Notifications, Cloud Messaging y Android UI</li>
                        <li>Comprensión de tecnologías del lado del servidor como PHP o Java y protocolo HTTP</li>
                        <li>Git</li>
                        <li>Publicación de apps en Google Play Store</li>
                        <li>Building Systems Gradle y Maven</li>
                    </ul>
                </div>
                <a class="read-more-btn" role="button" data-toggle="collapse" href="#read-more-4" aria-expanded="false" aria-controls="collapseExample">
                  Ver Requisitos <img src="img/arrow-collapse.svg" class="icon-expand">
                </a>
            </div>
        </div>
    </div><!--job-available-->


</div>

<?php include 'footer.php' ?>
<script>
</script>