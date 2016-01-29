<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!doctype html>
<html lang=pt-BR>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="x-ua-compatible" content="IE=edge, chrome=1" />
        <title>{title}</title>
        <meta name="description" content="" />
        <meta name="author" content="" />
        <meta name="viewport" content="width=device-width; initial-scale=1.0" />

        <link rel="shortcut icon" href="/favicon.ico" />
        <link rel="apple-touch-icon" href="/apple-touch-icon.png" />

        {headerIncludes}
    </head>
    <body>
        <!-- HTML CODE -->
        <div class="container">
            {content}
        </div>
        {defaultFooter}
<!-- END OF HTML CODE AND FOOTER INCLUDES -->
{footerIncludes}
        <!-- INTERACTIONS OBJECTS -->
        <div class="modal fade modal-alert" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
            <div class="modal-dialog modal-sm">
                <div class="modal-content">
                    <div class="spacer-v-20"></div>
                    <button class="btn btn-default btn-block btn-alert-ok">OK</button>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
        <!--  END OF INTERACTIONS OBJECTS -->

    </body>
</html>

<?php
/* End of file painel.php */
/* Location ./src/app/views/painel.php */
?>



