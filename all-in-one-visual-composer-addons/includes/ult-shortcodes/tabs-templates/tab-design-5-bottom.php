<div class="tab-main-container vca-tab-container tab-design-5"> 
    <div class="tab-content rounded">
        <?php do_shortcode( $content ); ?>
    </div> 
    <ul class="nav nav-tabs tab-marker tab-marker-bottom <?php echo $vca_tabs_icon_position; ?> margin-top-1" data-trigger="<?php echo $vca_tabs_trigger; ?>">
        <?php foreach (array_combine($tab_icons_array, $tab_title_array) as $tab_icon => $tab_title): ?>
           <li>
                <a data-toggle="tab" href="" data-mina="ripple"><i class="<?php echo $tab_icon; ?>"></i><strong> <?php echo $tab_title; ?> </strong><span></span></a>
            </li>
        <?php endforeach ?>
    </ul>
     

</div> 