<?php
    $vitrine = get_post_meta(get_the_ID(), 'post_vitrine', true);

    if (!empty($vitrine)) {
        ?>
        <h5 class="vitrine-fut-title">Veja na Fut</h5>
        <div class="vitrine-fut owl-carousel owl-theme" id="vitrine-fut">
            <input type="hidden" name="vitrine_products" id="vitrine_products" value="<?= $vitrine; ?>">
        </div>
        <?php
    }
