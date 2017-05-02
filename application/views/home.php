
<!-- Page Loader -->
<div id="pageloader">
    <div class="loader-inner">
        <img src="<?= base_url() ?>assets/images/base/loader.gif" alt="">
    </div>
</div>
<!-- PAGE WRAPPER -->
<div id="page-wrapper" class="right-push header-dropdown-dark">
    <div class="content-wrapper">
        
        <?= $header ?>
        
        <!-- GRID SECTION -->
        <!-- SLIDER SECTION -->
        <section class="slider-section" id="banner">
            <div class="owl-carousel navigation-colored show-nav-hover nav-square dots-mini" data-items="1" data-margin="" data-loop="true" data-merge="true" data-nav="true" data-dots="true" data-stagepadding="0" data-mobile="1" data-tablet="1" data-desktopsmall="1" data-desktop="1" data-autoplay="false" data-delay="5000" data-navigation="true">
                <?php foreach ($home as $item) { ?>
                <div class="item">
                    <!-- IMAGE-->
                    <img src="<?= base_url() ?>admin/uploads/files/<?= $item->imagen_file  ?>" alt="" class="img-responsive" width="1600" height="800">
                    <div class="container slider-content vertical-middle text-center">
                        <!-- TITLE-->
                        <h2 class="bor-lr text-uppercase animated top-padding" data-animate="fadeInUpBig" data-animation-delay="300"><?= $item->titulo_text  ?></h2>
                        <!-- TEXT-->
                        <p class="animated hidden-xs" data-animate="fadeInDownBig" data-animation-delay="800"><?= strip_tags($item->descripcion_textarea) ?></p>
                        <!-- ICON-->

                        <?php 
                            switch ($item->link_boton_select) {
                                case 'Inicio':
                                    $link = 'banner';
                                    break;

                                case 'Servicios':
                                    $link = 'our-process';
                                    break;

                                case 'Quienes Somos':
                                    $link = 'how-it-works';
                                    break;

                                case 'Nuestro Trabajo':
                                    $link = 'banner';
                                    break;

                                case 'Nosotros':
                                    $link = 'experience';
                                    break;

                                case 'Contacto':
                                    $link = 'technologies';
                                    break;
                                
                                default:
                                    $link = 'technologies';
                                    break;
                            }
                        ?>
                        <div class="animated" data-animate="fadeInUpBig" data-animation-delay="1200">
                            <a data-target="<?= $link ?>" class="btn to-section btn-lg btn-theme btn-hv-dark btn-rounded btn-default"><?= $item->texto_boton_text  ?></a>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
        </section>
        <!-- SLIDER SECTION -->
        <!-- PROCESS STEP SECTION -->
        <section id="our-process" class="no-bottom-padding">
            <div class="container">
                <div class="row text-center">
                    <?php $i=1; foreach ($services as $item) { ?>
                    <div class="col-md-4 bottom-margin">
                        <!-- FEATURE BOX -->
                        <div class="feature-box hv-wrapper style-4 border-rounded">
                            <div class="style-4-box">
                                <div class="feature-inner-wrapper">
                                    <div class="icon-wrapper">
                                        <!-- ICON -->
                                        <i class="<?= $item->icono_text  ?> fa fa-2x icon-shape-circle icon-light icon-theme-bg"></i>
                                    </div>
                                    <div class="feature-title bottom-line">
                                        <!-- FEATURE TITLE -->
                                        <h5><?= $item->titulo_text  ?></h5>
                                        <!-- STEP -->
                                        <span class="process-step">0<?= $i ?></span>
                                    </div>
                                </div>
                                <!-- FEATURE DESCRIPTION -->
                                <p class="feature-description"><?= strip_tags($item->descripcion_textarea) ?> </p>
                            </div>
                        </div>
                        <!-- /.FEATURE BOX -->
                    </div>
                     <?php $i++; } ?>
                </div>
            </div>
        </section>
        <!-- PROCESS STEP SECTION -->
        <!-- HOW IT WORKS SECTION -->
        <section id="how-it-works" class="light-bg bottom-padding">
            <div class="container">
                <?php $i=1; foreach ($portfolio as $item) { ?>
                
                <?php if($i%2 != 0){ ?>
                <div class="row">
                    <div class="col-md-3 col-md-offset-1 bottom-margin-sm">
                        <!-- IMAGE-->
                        <img class="img-responsive img-circle" src="<?= base_url() ?>admin/uploads/files/<?= $item->imagen_file ?>" alt="<?= $item->titulo_text ?>" width="400" height="400" />
                    </div>
                    <div class="col-md-6 col-md-offset-1 bottom-margin-sm">
                        <!-- TITLE -->
                        <h3 class="bottom-line"><?= $item->titulo_text ?></h3>
                        <!-- TEXT -->
                        <?= $item->descripcion_textarea ?>
                    </div>
                </div>
                <?php }else{ ?>
                <div class="row">
                    <div class="col-md-6 col-md-offset-1 bottom-margin-sm">
                        <!-- TITLE -->
                        <h3 class="bottom-line"><?= $item->titulo_text ?></h3>
                        <!-- TEXT -->
                        <?= $item->descripcion_textarea ?>
                    </div>
                    <div class="col-md-3 col-md-offset-1 bottom-margin-sm">
                        <!-- IMAGE-->
                        <img class="img-responsive img-circle" src="<?= base_url() ?>admin/uploads/files/<?= $item->imagen_file  ?>" alt="<?= $item->titulo_text ?>" width="400" height="400" />
                    </div>
                </div>
                <?php } ?>

                <?php if($i<count($portfolio)){ ?>
                <hr class="hr-md">
                <?php } ?>

                <?php $i++; } ?>
            </div>
        </section>
        <!-- HOW IT WORKS SECTION -->
        <!-- FACTORS SECTION -->
        <section class="bg-image bottom-padding-sm parallax-bg typo-light" data-stellar-background-ratio="0.5" data-background="<?= base_url() ?>admin/uploads/files/<?= $experience->imagen_de_fondo_file ?>" id="experience">
            <div class="overlay-darker"></div>
            <div class="container text-left">
                <div class="row">
                    <div class="col-md-5">
                        <!-- TITLE -->
                        <h3 class="font-weight-bold"><?= $experience->titulo_text ?></h3>
                    </div>
                    <div class="col-md-6 col-md-offset-1">
                        <!-- TEXT -->
                        <?= $experience->descripcion_textarea ?>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="column-5">
                        <?php $features = explode(',', $experience->caracteristicas_list); ?>
                        <?php for ($i=0; $i < count($features); $i++) { ?>
                            <div class="c-col-5 bottom-padding-sm">
                                <div class="counter-wrapper hv-wrapper">
                                <!-- COUNTER NUMBER -->
                                <?php $feature = explode('-', $features[$i]) ?>
                                <div data-count="<?= $feature[1] ?>" class="number-counter font-weight-bold"><span class="counter"></span></div>
                                <!-- COUNTER TITLE -->
                                    <h5><?= $feature[0] ?></h5>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </section>
        <!-- FACTORS SECTION -->
        <!-- TECHNOLOGIES SECTION -->
        <section id="technologies" class="bottom-padding-md">
            <div class="container">
                <div class="row">
                    <?php foreach ($about as $item) { ?>
                    <div class="col-md-4">
                        <!-- FEATURE BOX -->
                        <div class="feature-box hv-wrapper style-5">
                            <div class="feature-inner-wrapper">
                                <div class="icon-wrapper">
                                    <!-- ICON -->
                                    <i class="<?= $item->icono_text ?> fa-4x icon-shape-circle icon-light icon-theme-bg icon-hvtheme icon-hvtransparent-bg icon-hvbordered-theme border b2 solid"></i>
                                </div>
                                <div class="title-wrapper">
                                    <!-- FEATURE TITLE -->
                                    <h5 class="feature-title"><?= $item->titulo_text ?></h5>
                                    <!-- FEATURE DESCRIPTION -->
                                    <?= $item->descripcion_textarea ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </section>
        <!-- TECHNOLOGIES SECTION -->
       
        <!-- /.GRID SECTION -->
    </div>

    <?= $footer ?>

</div>  
<!-- /. PAGE WRAPPER -->
<script type="text/javascript" src="<?= base_url() ?>assets/js/jquery.js"></script>
<script type="text/javascript" src="<?= base_url() ?>assets/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?= base_url() ?>assets/js/bootstrapValidator.min.js"></script>
<script type="text/javascript" src="<?= base_url() ?>assets/js/jquery.mmenu.min.all.js"></script>
<script type="text/javascript" src="<?= base_url() ?>assets/js/jquery.sticky.js"></script>
<script type="text/javascript" src="<?= base_url() ?>assets/js/jquery.appear.min.js"></script>
<script type="text/javascript" src="<?= base_url() ?>assets/js/owl.carousel.min.js"></script>
<script type="text/javascript" src="<?= base_url() ?>assets/js/jquery.stellar.min.js"></script>
<script type="text/javascript" src="<?= base_url() ?>assets/js/count-to.js"></script>
<script type="text/javascript" src="<?= base_url() ?>assets/js/custom.js"></script>
