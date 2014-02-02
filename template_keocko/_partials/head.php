<head>
    <meta charset='<?php bloginfo( 'charset' ); ?>' />
    <meta content='width=device-width' name='viewport'>
    <title>
        <?php wp_title( '|', true, 'right' ); ?>
    </title>
    <link rel="profile" href="http://gmpg.org/xfn/11" />
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
    <link href="<?php echo get_template_directory_uri(); ?>/stylesheets/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri(); ?>/stylesheets/bootstrap-responsive.min.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri(); ?>/stylesheets/custom.css" rel="stylesheet">
    <script src="<?php echo get_template_directory_uri(); ?>/javascripts/jquery-1.9.1.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/javascripts/bootstrap.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/javascripts/custom.js"></script>
    <!--[if lt IE 9]>
    <script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
    <![endif]-->
    <?php wp_head(); ?>
</head>