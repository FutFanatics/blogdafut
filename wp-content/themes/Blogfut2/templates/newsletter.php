<section id="newsletter">
    <div class="container">
        
        <form method="post" enctype="multipart/form-data" >
            <div class="box-newletter">
                <div class="box-newletter-img">
                    <?php if ($imagem_url = get_option('newsletter_imagem')): ?>
                        <img src="<?= esc_url($imagem_url); ?>" alt="Imagem da Newsletter" />
                    <?php endif; ?>
                </div>

                <div class="box-newletter-content">
                <h3><?= (esc_html(get_option('newsletter_titulo')))?? 'Assine nossa Newsletter!' ; ?></h3>
                    <input type="email" name="email" placeholder="E-mail" required>
                    
                    <select name="time">
                        <option value="" disabled selected>Qual o seu time do coração?</option>
                    </select>

                    <div class="box-politica-privacidade">
                        <input id="ck-politica-privacidade" type="checkbox" name="aceito" required>
                        <label for="ck-politica-privacidade">Li e concordo com a política de privacidade</label>
                    </div>

                    <button type="submit">Inscreva-me</button> 
                </div>
            </div>
        </form>
    </div>
</section>

