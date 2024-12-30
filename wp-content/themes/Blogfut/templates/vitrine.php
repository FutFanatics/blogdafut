<?php
$vitrine = get_post_meta(get_the_ID(), 'post_vitrine', true);

if (!empty($vitrine)) {
    ?>
    <div class="vitrine-fut owl-carousel owl-theme" id="vitrine-fut">
        <input type="hidden" name="vitrine_products" id="vitrine_products" value="<?php echo $vitrine; ?>">
    </div>
    <?php
}
