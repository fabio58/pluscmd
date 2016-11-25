<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>Plusmedia</title>
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
        <link rel="shortcut icon" type="image/png" href="public/images/logoPlus.png"/>
        <link rel="stylesheet" href="<?php echo base_url() ?>public/layout/styles/layout.css" type="text/css" />
        <link rel="stylesheet" href="<?php echo base_url() ?>public/css/bootstrap.min.css" type="text/css" />
        <link rel="stylesheet" href="<?php echo base_url() ?>public/css/bootstrap-theme.min.css" type="text/css" />

        <script type="text/javascript" src="<?php echo base_url() ?>public/layout/scripts/jquery.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url() ?>public/layout/scripts/jquery.jcarousel.pack.js"></script>
        <script type="text/javascript" src="<?php echo base_url() ?>public/layout/scripts/jquery.jcarousel.setup.js"></script>
        <script type="text/javascript" src="<?php echo base_url() ?>public/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url() ?>public/js/bootstrap-dropdown.js"></script>
        <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet"/>
       <style type="text/css">
            #breadcrumb li a{
                background-color: transparent !important;
                color:#fff;
            }
            #topnav ul li a{
                font-family: 'Molengo', sans-serif;
                font-size: 15px;
            }
            .contacto p{
                font-family: 'Molengo', sans-serif;
            }
            h1,h2,h3{
                font-family: 'Molengo', sans-serif !important;
            }
            .nav {
                font-size: 16px;
                height: 54px;
                list-style: outside none none;
                margin-bottom: 0;
                margin-top: 46px;
                padding-left: 0;
                overflow: unset;
            }
            .active a{
                font-family: 'Molengo', sans-serif !important;
                border: 1px #b2c629 dashed !important;
                background-color: #B2C629 !important;
                color: #fff!important;
            }
        </style>
        
        <!--Start of Zopim Live Chat Script-->
        <script type="text/javascript">
            window.$zopim || (function (d, s) {
                var z = $zopim = function (c) {
                    z._.push(c)
                }, $ = z.s =
                        d.createElement(s), e = d.getElementsByTagName(s)[0];
                z.set = function (o) {
                    z.set.
                            _.push(o)
                };
                z._ = [];
                z.set._ = [];
                $.async = !0;
                $.setAttribute("charset", "utf-8");
                $.src = "//v2.zopim.com/?3dzPTr2y3BtWIIaiAdM6otQdgzEWNHOL";
                z.t = +new Date;
                $.
                        type = "text/javascript";
                e.parentNode.insertBefore($, e)
            })(document, "script");
        </script>
        <!--End of Zopim Live Chat Script-->
    </head>
    <script>
        (function (i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function () {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
            a = s.createElement(o),
                    m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

        ga('create', 'UA-65591851-2', 'auto');
        ga('send', 'pageview');

    </script>

    <body id="top">
        <!-- ####################################################################################################### -->

             <div class="row">
            <div class="col-md-2">
                <a style="float: right;" href="http://www.plusmedia.com.py"><img src="<?php echo base_url() ?>public/images/logoPlus.png" width="100px"/></a>

            </div>
                        <?php $this->load->view('front/menu'); ?>
        </div>


        <!-- ####################################################################################################### -->
      <div class="wrapper col2" style="z-index: 1">
       
            <div id="featured_slide">
                <div id="featured_content">
                    <ul>
                        <li><img src="<?php echo base_url() ?>public/images/sitios-web.jpg" alt="" />
                            <div class="floater">
                                <h2>Desarrollo de Sitios Web</h2>
                                <p>Siéntase parte de este listado de clientes y amigos. Nuestros Clientes  <a href="#clientes">Clientes y Amigos</a></p> 

                                <p class="readmore"><a href="#clientes">Con Quienes Trabajamos &raquo;</a></p>

                            </div>
                        </li>

                        <li><img src="<?php echo base_url() ?>public/images/software2.jpg" alt="" />
                            <div class="floater">
                                <h2>Desarrollo de Software a Medida</h2>
                                <p>Realizamos Software a medida y de Gestión como Facturación, Stock, Control de asistencia, etc. </p>
                                <p class="readmore"><a href="<?php echo base_url('software') ?>">Continúa leyendo sobre Software &raquo;</a></p>
                            </div>
                        </li>

                    </ul>
                </div>
                <a href="javascript:void(0);" id="featured-item-prev"><img src="<?php echo base_url() ?>public/layout/images/prev.png" alt="" /></a> <a href="javascript:void(0);" id="featured-item-next"><img src="<?php echo base_url() ?>public/layout/images/next.png" alt="" /></a> </div>
        </div>
        <!-- ####################################################################################################### -->
        <div class="wrapper col3">
            <div id="container">
                <div class="homepage">
                    <center><iframe width="560" height="315" src="https://www.youtube.com/embed/M9QfbkAX3ic?rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe></center>
                    <br class="clear" />
                </div>
            </div>
        </div>
        <!-- ####################################################################################################### -->
        <div class="wrapper col4">
            <div id="footer">
                <div class="box1">
                    <h2>Acerca de nosotros</h2>
                    <img class="imgl" src="<?php echo base_url() ?>public/images/logoPlus.png" alt="" />

                    <p style="text-align: justify">Desde el año 2011 Plusmedia se encuentra trabajando para usted, nos encanta trabajar con sitios Web y software, nos dedicamos a dar soluciones a los problemas informáticos </p>

                </div>
                <div class="box contactdetails">
                    <h2>Estamos en:</h2>
                    <ul>
                        <li>Fernando de la Mora - Zona Sur</li>
                        <li>Capitán Montiel esq/ Mcal. Estigarribia - 1er Piso oficina 2B</li>
                        <li>Tel: 0201 3388655</li>
                        <li>Cel: 0984 64 87 33</li>
                        <li>Email: info@plusmedia.com.py</li>
                        <li><a href="https://www.facebook.com/pages/Plus-Media/101930326597283"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="http://www.linkedin.com/in/plusMediapy"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="https://twitter.com/plus_mediapy"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="https://plus.google.com/b/103952230276043689780/+PlusmediaPy"><i class="fa fa-google-plus"></i> </a></li>
                    </ul>
                </div>
                <div class="box flickrbox">
                    <h2>Nuestros Clientes</h2>
                    <div class="wrap">
                        <div class="fix"></div>
                        <div class="flickr_badge_image" id="flickr_badge_image1"><a name="clientes" href="#"><img src="<?php echo base_url() ?>public/img/endoterapia.jpg" alt="" /></a></div>
                        <div class="flickr_badge_image" id="flickr_badge_image2"><a href="#"><img src="<?php echo base_url() ?>public/img/consultora.jpg" alt="" /></a></div>
                        <div class="flickr_badge_image" id="flickr_badge_image3"><a href="#"><img src="<?php echo base_url() ?>public/img/setepar.jpg" alt="" /></a></div>
                        <div class="flickr_badge_image" id="flickr_badge_image4"><a href="#"><img src="<?php echo base_url() ?>public/img/cess.jpg" alt="" /></a></div>
                        <div class="flickr_badge_image" id="flickr_badge_image5"><a href="#"><img src="<?php echo base_url() ?>public/img/uass.jpg" alt="" /></a></div>
                        <div class="flickr_badge_image" id="flickr_badge_image6"><a href="#"><img src="<?php echo base_url() ?>public/img/cedin.jpg" alt="" /></a></div>
                        <div class="fix"></div>
                    </div>
                </div>
                <br class="clear" />
            </div>
        </div>
        <!-- ####################################################################################################### -->
        <div class="wrapper col5">
            <div id="copyright">
                <p class="fl_left">Copyright &copy; <?php echo date("Y") ?> - All Rights Reserved - <a href="http://www.plusmedia.com.py">www.plusmedia.com.py</a></p>
                
                <br class="clear" />
            </div>
        </div>
    </body>
</html>