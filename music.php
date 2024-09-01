<?php
/*
Template Name: Music
*/
get_header();
?>

<div id="main">
    <div id="content">
        <input type="hidden" id="pagina_actual" name="pagina_actual" value="<?php echo esc_attr(get_the_title()); ?>">
        <?php if (!is_user_logged_in()): ?>
            <?php echo do_shortcode('[inicio]'); ?>
        <?php else: ?>

            <div id="menuData" style="display:none;" pestanaActual="">
                <div data-tab="Música"></div>
            </div>
            
                    <?php echo musica() ?>

        <?php endif; ?>
    </div>
</div>
<?php
get_footer();
?>