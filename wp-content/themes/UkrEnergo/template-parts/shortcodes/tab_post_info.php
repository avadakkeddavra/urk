<div  class="tab-info <?php if($atts['active'] == true): echo 'active-tab'; endif ?>" id="<?php echo $atts['id']; ?>">
    <h4 class="h-info"><?php echo $atts['title']; ?></h4>
    <?php echo $content ?>
</div>