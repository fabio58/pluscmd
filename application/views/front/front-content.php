<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title><?php echo $title; ?></title>
        <meta name="description" content="<?php echo $descri ?>"/>
        <link rel="shortcut icon" type="image/png" href="public/images/logoPlus.png"/>
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
        <link rel="stylesheet" href="<?php echo base_url() ?>public/layout/styles/layout.css" type="text/css" />
        <link rel="stylesheet" href="<?php echo base_url() ?>public/css/bootstrap.min.css" type="text/css" />
        <link rel="stylesheet" href="<?php echo base_url() ?>public/css/bootstrap-theme.min.css" type="text/css" />


        <script type="text/javascript" src="<?php echo base_url() ?>public/layout/scripts/jquery.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url() ?>public/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url() ?>public/js/bootstrap-dropdown.js"></script>
        <link href="https://fonts.googleapis.com/css?family=Molengo" rel="stylesheet"/> 
        <link href="https://fonts.googleapis.com/css?family=Molengo|Nothing+You+Could+Do" rel="stylesheet"/> 
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
            <div id="breadcrumb">
                <?php echo $this->breadcrumbs->show(); ?>

            </div>
        </div>
        <!-- ####################################################################################################### -->
        <?php $this->load->view($content) ?>
        <!-- ####################################################################################################### -->

        <!-- ####################################################################################################### -->
        <div class="wrapper col5">
            <div id="copyright">
                <p class="fl_left">Copyright &copy; <?php echo date("Y") ?> - All Rights Reserved - <a href="http://www.plusmedia.com.py">www.plusmedia.com.py</a></p>

                <br class="clear" />
            </div>
        </div>
    
    </body>
</html>