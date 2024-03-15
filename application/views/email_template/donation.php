<!doctype html>
<html lang="en-US">
<head>
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
    <style type="text/css">
        a:hover { text-decoration: underline !important; }
    </style>
</head>
<body marginheight="0" topmargin="0" marginwidth="0" style="margin: 0px; background-color: #f2f8f9;" leftmargin="0">
<table cellspacing="0" border="0" cellpadding="0" width="100%" bgcolor="#f2f8f9" style="@import url(https://fonts.googleapis.com/css?family=Roboto:300,400,500); font-family: 'Roboto', sans-serif , Arial, Helvetica, sans-serif;">
    <tr>
        <td>
            <table style="background-color: #f2f8f9; max-width:670px; margin:0 auto;" width="100%"  border="0" align="center" cellpadding="0" cellspacing="0">
                <tr>
                    <td style="height:80px;">&nbsp;</td>
                </tr>
                <tr>
                    <td style="text-align:center;">
                        <a href="<?php echo base_url(); ?>" title="<?php echo dt_get_CompanyName(); ?>"><img height="61" width="240" src="<?php echo dt_get_CompanyLogo(); ?>" title="<?php echo dt_get_CompanyName(); ?>" alt="<?php echo dt_get_CompanyName(); ?>"></a>
                    </td>
                </tr>
                <tr>
                    <td style="height:40px;">&nbsp;</td>
                </tr>
                <tr>
                    <td>
                        <table width="95%" border="0" align="center" cellpadding="0" cellspacing="0" style="max-width:670px; background:#fff; border-radius:3px; text-align:center;-webkit-box-shadow:0 1px 3px 0 rgba(0, 0, 0, 0.16), 0 1px 3px 0 rgba(0, 0, 0, 0.12);-moz-box-shadow:0 1px 3px 0 rgba(0, 0, 0, 0.16), 0 1px 3px 0 rgba(0, 0, 0, 0.12);box-shadow:0 1px 3px 0 rgba(0, 0, 0, 0.16), 0 1px 3px 0 rgba(0, 0, 0, 0.12)">
                            <tr>
                                <td style="height:40px;">&nbsp;</td>
                            </tr>
                            <tr>
                                <td style="padding:0 15px;">
                                    <h3 style="color:#3075BA; font-weight:400; margin:0;">Hi, <?php echo isset($NAME) ? $NAME : ""; ?></h3><br><br><br>

                                    <h1 style="color:#3075BA; font-weight:400; margin:0;font-size:32px;"><?php echo dt_translate('thank_you'); ?></h1><br>

                                    <p style="font-size:15px; color:#171f23de; margin:8px 0 0; line-height:24px;"> <?php echo str_replace("AMOUNT",dt_price_format($AMOUNT),dt_translate('donation_email_message'));; ?></p>
                                    <span style="display:inline-block; vertical-align:middle; margin:29px 0 26px; border-bottom:1px solid #cecece; width:100px;"></span>
                                </td>
                            </tr>
                            <tr>
                                <td style="height:40px;">&nbsp;</td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td style="height:20px;">&nbsp;</td>
                </tr>
                <tr>
                    <td style="text-align:center;">
                        <p style="font-size:14px; color:#455056bd; line-height:18px; margin:0 0 0;"><strong>&copy;</strong> <?php echo dt_get_CompanyName() . " " . date("Y"); ?></p>
                    </td>
                </tr>
                <tr>
                    <td style="height:80px;">&nbsp;</td>
                </tr>
            </table>
        </td>
    </tr>
</table><!--/100% body table-->
</body>
</html>