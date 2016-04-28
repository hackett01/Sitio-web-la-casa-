<?php include 'header.php' ?>
<section class="banner" background="img/banner-contacto.jpg" background-size="cover">
    <h1 class="wow fadeIn" data-wow-duration="2s">¡Ponte en contacto e iniciemos tu proyecto!</h1>
</section>
<section id="contacto">
    <div class="row nom" >
        <div class="col-lg-7">
                <h1 class="wow fadeIn"  data-wow-duration="2s">¡Con gusto te invitamos un café!</h1>
                <p class="wow fadeIn"  data-wow-duration="2s">En La Casa de los Pixeles nos encatará recibirte para platicar de las necesidades de tu proyecto y juntos encontrar la mejor solución que se adecue a tus objetivos y presupuesto. Deja un mensaje en el formulario y te contactaremos tan pronto como podamos para darle seguimiento a tu mensaje.</p>
            <div class="row">
                <div class="col-sm-7">
                    <form action="" class="on wow fadeIn"  data-wow-duration="2s" data-wow-delay="0.3s">
                        <label for="nombre">Nombre</label>
                        <input type="text" name="nombre" id="nombre" class="form-control">
                        <label for="correo">Correo</label>
                        <input type="text" name="correo" id="correo" class="form-control">
                        <label for="asunto">Asunto</label>
                        <input type="text" name="asunto" id="asunto" class="form-control">
                        <label for="mensaje">Mensaje</label>
                        <textarea type="text" name="mensaje" id="mensaje" class="form-control"></textarea>
                        <div class="recaptcha">
                            <!-- <div class="checkbox">
                                <input type="checkbox" id="recaptcha">
                                <label for="recaptacha" id="recaptchaLabel"></label>
                                <span id="response">No soy un robot</span>
                            </div> -->
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
                        <button type="submit" class="btn turquesa">Enviar Mensaje</button>
                        <div id="success-msg"><div></div></div>
                    </form>
                </div>
                <div class="col-sm-5 wow fadeIn"  data-wow-duration="2s" data-wow-delay="0.3s">
                    <h3>Síguenos en Redes Sociales</h3>
                    <ul class="social">
                        <li><a target="_blank" href="http://www.facebook.com/CasadePixeles"><i class="lcp-icon lcp-fb"></i></a></li>
                        <li><a target="_blank" href="http://twitter.com/lacasadepixeles"><i class="lcp-icon lcp-tw"></i></a></li>
                    </ul>
                    <h3>También nos puedes contactar por estos medios</h3>
                    <ul>
                        <li><a href="mailto:hola@lacasadelospixeles.com"><i class="lcp-icon lcp-mail"></i> hola@lacasadelospixeles.com</a></li>
                        <li><a href="tel:2225830327"><i class="lcp-icon lcp-phone"></i> +52 2225 83 03 27</a></li>
                        <li><a target="_blank" href="http://www.google.com.mx/maps/place/La+casa+de+los+pixeles/@18.8013122,-107.2430773,5z/data=!3m1!4b1!4m2!3m1!1s0x85cfc0912b8f5a11:0x7f13fed22929df38?hl=en"><i class="lcp-icon lcp-mark"></i> Puebla 39 Ote, 2018-A Col. El Mirador</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-lg-5">
            <div id="map" class="wow fadeIn"  data-wow-duration="2s" ></div>
        </div>
    </div>
</section>
<?php include 'footer.php' ?>