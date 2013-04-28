<div class="container">
    <div class="row">
        <div class="span5 pull-left">
            <div class="logo pull-left">
                <a href="<?php echo get_site_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/keocko.png"></a>
            </div>
        </div>
        <div class="span6 offset1 pull-right margintop30">
            <div class="row">
                <div class="span1 flags">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/HUN.png" alt="Magyarul"/>
                    <img src="<?php echo get_template_directory_uri(); ?>/images/UK.png" alt="in English"/>
                </div>
                <div class="span4 search-box">
                    <? get_template_part ('_partials/searchbox'); ?>
                </div>
            </div>
        </div>
    </div>
</div>