<!-- FOOTER SECTION -->
<footer id="footer" class="footer dark-bg">
    <div class="container special-btn">
        <!-- BUTTON -->
        <button data-toggle="modal" data-target="#contact-modal" class="btn btn-theme btn-hv-dark btn-square btn-default">CONTÁCTANOS<i class="fa left-pad fa-envelope"></i></button>
    </div>
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-6 bottom-padding">
                    <!-- LOGO -->
                    <img src="<?= base_url() ?>assets/images/logo-light.png" alt="logo" width="85">
                    <br>
                    <?= $data_footer->copy_textarea ?>
                </div>
                <div class="col-md-4 col-sm-6 bottom-padding footer-widgets">
                    <!-- ADDRESS -->
                    <h5 class="widget-title text-uppercase">Nuestra Oficina</h5>
                    <address>
                    <div class="feature-box style-3">
                        <div class="icon-wrapper">
                            <!-- ICON -->
                            <i class="fa fa-map-marker"></i>
                        </div>  
                        <div class="inner-wrapper">
                            <!-- ADDRESS -->
                            <p class="feature-description"><?= $data_footer->direccion_text ?></p>  
                        </div>  
                    </div>
                    <div class="feature-box style-3">
                        <div class="icon-wrapper">
                            <!-- ICON -->
                            <i class="fa fa-phone"></i>
                        </div>  
                        <div class="inner-wrapper">
                            <!--  PHONE NUMBER -->
                            <p class="feature-description"> <?= $data_footer->telefono_text ?></p>
                        </div>  
                    </div>
                    <div class="feature-box style-3">
                        <div class="icon-wrapper">
                            <!-- ICON -->
                            <i class="fa fa-envelope"></i>
                        </div>  
                        <div class="inner-wrapper">
                            <!-- EMAIL -->
                            <p class="feature-description"><a class="a-active" href="mailto:<?= $data_footer->email_text ?>"><?= $data_footer->email_text ?></a></p>
                        </div>  
                    </div>
                    </address>
                </div>
                <div class="col-md-4 bottom-padding footer-widgets">
                    <!-- QUICK LINKS -->
                    <h5 class="widget-title text-uppercase">Enlaces</h5>
                    <ul class="arrow-list menu clearfix">
                        <li><a href="#" data-target="banner">Inicio</a></li>
                        <li><a href="#" data-target="our-process">Servicios</a></li>
                        <li><a href="#" data-target="how-it-works">Quienes Somos</a></li>
                        <li><a href="#" data-target="experience">Nuestro trabajo</a></li>
                        <li><a href="#" data-target="technologies">Contacto</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom footer-top-border">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="copyright">
                        &copy; 2016 <a href="index.html">Blanco y Negro</a>. Todos los derechos reservados.
                    </div>
                </div>
                <div class="col-md-6 text-right">
                    <ul class="footer-social-icons">
                        <li class="facebook"><a href="<?= $data_footer->link_facebook_text ?>" target="_blank"><i class="fa fa-facebook text-darkest social-facebook-hvcolor"></i></a></li>
                        <li class="linkedin"><a href="<?= $data_footer->link_linkedin_text ?>" target="_blank"><i class="fa fa-linkedin text-darkest social-linkedin-hvcolor"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- MODAL BOX Small -->
<div class="modal fade" id="contact-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header text-center">
                <button class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <div class="margin-20">
                    <h3 class="modal-title bottom-line text-color" id="myModalLabel">Contáctanos</h3>
                    <p>¿Tienes alguna pregunta? Escríbenos un mensaje.</p>
                </div>
            </div>
            <div class="modal-body">
                <p class="form-message" style="display: none;"></p>
                <div class="contact-form form-flat">
                    <!-- Form Begins -->
                    <form role="form" name="bootstrap-form" id="bootstrap-form" method="post" action="<?= base_url() ?>home/sendEmail">
                        <!-- Field 1 -->
                        <div class="input-text form-group margin-bottom-30">
                            <input type="text" name="nombre" class="input-name form-control" placeholder="Nombre" />
                        </div>
                        <!-- Field 2 -->
                        <div class="input-email form-group margin-bottom-30">
                            <input type="email" name="email" class="input-email form-control" placeholder="Email" />
                        </div>
                        <!-- Field 3 -->
                        <div class="input-email form-group margin-bottom-30">
                            <input type="text" name="telefono" class="input-phone form-control" placeholder="Teléfono" />
                        </div>
                        <!-- Field 4 -->
                        <div class="textarea-message form-group margin-bottom-30">
                            <textarea name="mensaje" class="textarea-message form-control" placeholder="Mensaje" rows="4"></textarea>
                        </div>
                        <!-- Button -->
                        <button class="btn btn-lg btn-theme btn-hv-dark btn-round btn-default btn-inline" type="submit">
                            <i class="fa fa-envelope right-pad"></i>ENVIAR MENSAJE</button>
                    </form>
                    <!-- Form Ends -->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- MODAL BOX Small END -->
<a href="#" id="back-to-top" title="Back to top"></a>
<!-- FOOTER SECTION -->