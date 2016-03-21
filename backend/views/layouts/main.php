<?php

use backend\assets\AppAsset;
use yii\widgets\Breadcrumbs;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\web\Request;
AppAsset::register($this);
?>
<?php $this->beginPage(); ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <meta charset="utf-8" />
        <title>Form Elements - Ace Admin</title>

        <meta name="description" content="Common form elements and layouts" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

        <!-- bootstrap & fontawesome -->
        <link rel="stylesheet" href="/static/css/bootstrap.min.css" />
        <link rel="stylesheet" href="/static/css/font-awesome.min.css" />

        <!-- page specific plugin styles -->
        <link rel="stylesheet" href="/static/css/jquery-ui.custom.min.css" />
        <link rel="stylesheet" href="/static/css/chosen.css" />
        <link rel="stylesheet" href="/static/css/datepicker.css" />
        <link rel="stylesheet" href="/static/css/bootstrap-timepicker.css" />
        <link rel="stylesheet" href="/static/css/daterangepicker.css" />
        <link rel="stylesheet" href="/static/css/bootstrap-datetimepicker.css" />
        <link rel="stylesheet" href="/static/css/colorpicker.css" />

        <!-- text fonts -->
        <link rel="stylesheet" href="/static/css/ace-fonts.css" />

        <!-- ace styles -->
        <link rel="stylesheet" href="/static/css/ace.min.css" />

        <!--[if lte IE 9]>
            <link rel="stylesheet" href="/static/css/ace-part2.min.css" />
        <![endif]-->
        <link rel="stylesheet" href="/static/css/ace-skins.min.css" />
        <link rel="stylesheet" href="/static/css/ace-rtl.min.css" />

        <!--[if lte IE 9]>
          <link rel="stylesheet" href="/static/css/ace-ie.min.css" />
        <![endif]-->

        <!--[if !IE]> -->
        <script type="text/javascript">
            window.jQuery || document.write("<script src='/static/js/jquery.min.js'>"+"<"+"/script>");
        </script>

        <!-- <![endif]-->

        <script type="text/javascript">
            if('ontouchstart' in document.documentElement) document.write("<script src='/static/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
        </script>

        <!--[if IE]>
        <script type="text/javascript">
         window.jQuery || document.write("<script src='/static/js/jquery1x.min.js'>"+"<"+"/script>");
        </script>
        <![endif]-->

        <!-- inline styles related to this page -->

        <!-- ace settings handler -->
        <script src="/static/js/ace-extra.min.js"></script>

        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->

        <!--[if lte IE 8]>
        <script src="/static/js/html5shiv.js"></script>
        <script src="/static/js/respond.min.js"></script>
        <![endif]-->
    </head>

    <body class="no-skin">
        <?php //$this->beginBody() ?>
        <!-- /section:basics/navbar.layout -->
        <div class="main-container" id="main-container" style=" margin-top:0px;">
            <!-- /section:basics/sidebar -->
            <div class="main-content" style="margin-left:0px;">

                <!-- /section:basics/content.breadcrumbs -->
                <div class="page-content">
                    <div class="page-header">
                        <?= Breadcrumbs::widget([
                            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
                        ]) ?>
                    </div>
                <?=$content?>

                </div><!-- /.page-content -->

            </div><!-- /.main-content -->

            <a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
                <i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
            </a>
        </div><!-- /.main-container -->

        <!-- basic scripts -->

        <script src="/static/js/bootstrap.min.js"></script>

        <!-- page specific plugin scripts -->

        <!--[if lte IE 8]>
          <script src="/static/js/excanvas.min.js"></script>
        <![endif]-->
        <!-- ace scripts -->
        <script src="/static/js/ace-elements.min.js"></script>
        <script src="/static/js/ace.min.js"></script>
        <script src="/static/js/jquery-ui.custom.min.js"></script>
        <script src="/static/js/jquery.ui.touch-punch.min.js"></script>
        <script src="/static/js/chosen.jquery.min.js"></script>
        <script src="/static/js/fuelux/fuelux.spinner.min.js"></script>
        <script src="/static/js/date-time/bootstrap-datepicker.min.js"></script>
        <script src="/static/js/date-time/bootstrap-timepicker.min.js"></script>
        <script src="/static/js/date-time/moment.min.js"></script>
        <script src="/static/js/date-time/daterangepicker.min.js"></script>
        <script src="/static/js/date-time/bootstrap-datetimepicker.min.js"></script>
        <script src="/static/js/bootstrap-colorpicker.min.js"></script>
        <script src="/static/js/jquery.knob.min.js"></script>
        <script src="/static/js/jquery.autosize.min.js"></script>
        <script src="/static/js/jquery.inputlimiter.1.3.1.min.js"></script>
        <script src="/static/js/jquery.maskedinput.min.js"></script>
        <script src="/static/js/bootstrap-tag.min.js"></script>


        <!-- design -->
        <link rel="stylesheet" href="/static/css/design.css" />
        <!-- design end -->
        <?php //$this->endBody() ?>
    </body>
</html>
<?php $this->endPage() ?>
