<style type="text/css">
    form.formIntegration2 *,
    form.formIntegration2 *::before,
    form.formIntegration2 *::after {
        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
        box-sizing: border-box;
    }

    form.formIntegration2 {
        width: 100%;
        margin: 0 auto;
    }

    form.formIntegration2 input[type="text"] {
        outline: none;
        width: 100%;
    }

    form.formIntegration2 select {
        width: 100%;
        overflow: auto;
    }

    form.formIntegration2 select.invi-select {
        display: none;
        width: 0px;
        height: 0px;
        border: none;
    }

    form.formIntegration2 textarea {
        width: 100%;
        height: 80px;
        overflow: auto;
        resize: vertical;
    }

    form.formIntegration2 div.containerMultiple {
        width: 100%;
        overflow: auto;
        border: 1px solid #bec5cb;
        padding: 2px;
        background-color: #FFF;
        position: relative;
    }

    form.formIntegration2 div.containerMultiple div {
        min-height: 20px;
    }

    form.formIntegration2 div.containerMultiple div label {
        white-space: nowrap;
        display: inline-block;
        position: relative;
    }

    form.formIntegration2 input.type_PHN_DDI {
        text-align: center;
    }

    form.formIntegration2 div.div_PHN_DDI {
        width: 28%;
        margin-right: 2%;
        text-align: center;
        display: inline-block;
    }

    form.formIntegration2 div.div_PHN_NUM {
        width: 70%;
        display: inline-block;
    }

    form.formIntegration2 .div_PHN.hidden_DDI div.div_PHN_DDI {
        width: 0;
        display: none;
    }

    form.formIntegration2 .div_PHN.hidden_DDI div.div_PHN_NUM {
        width: 100%;
        display: inline-block;
    }

    form.formIntegration2 .field-error {
        border-color: #CC0000 !important;
    }

    form.formIntegration2 .g-recaptcha {
        margin-bottom: 5px;
    }

    form.formIntegration2 .DinamizeDivMessageSuccess,
    form.formIntegration2 .DinamizeDivMessageAlert,
    form.formIntegration2 .DinamizeDivMessageError,
    form.formIntegration2 .DinamizeDivCaptchaMessage {
        display: none;
        margin: 0px 0px 10px;
        color: rgb(255, 255, 255);
        font-size: 14px;
        font-family: arial;
        padding: 15px;
    }

    form.formIntegration2 .DinamizeDivMessageSuccess {
        background-color: rgb(20, 118, 18);
    }

    form.formIntegration2 .DinamizeDivMessageAlert,
    form.formIntegration2 .DinamizeDivMessageError,
    form.formIntegration2 .DinamizeDivCaptchaMessage {
        background-color: #ac0000;
    }

    form.formIntegration2 div.block {
        display: block;
        margin-bottom: 10px;
    }

    form.formIntegration2 div.block:last-child {
        margin-bottom: 0px;
    }

    form.formIntegration2 div.vertical {
        display: block;
    }

    form.formIntegration2 div.horizontal {
        display: inline-block;
        vertical-align: middle;
    }

    form.formIntegration2 div.horizontal.divlabel {
        width: 28%;
        margin-right: 2%;
        text-align: right;
    }

    form.formIntegration2 div.horizontal.divinput {
        width: 70%
    }

    form.formIntegration2 div.containerAllInline div.block {
        display: inline-block;
        margin-right: 5px;
        margin-bottom: 5px;
    }

    form.formIntegration2 div.containerAllInline div.horizontal.divinput {
        width: 182px
    }

    form.formIntegration2 .submit {
        position: relative;
        width: 100%
    }

    form.formIntegration2 .submit.class1 {
        text-align: left;
    }

    form.formIntegration2 .submit.class2 {
        text-align: left;
        width: 70%
    }

    form.formIntegration2 .submit.class3 {
        text-align: center;
    }

    form.formIntegration2 .submit.class4 {
        text-align: right;
    }

    form.formIntegration2 .submit.class5 {
        text-align: center;
    }

    form.formIntegration2 .submit.class5 input[type=submit] {
        width: 100%
    }

    form.formIntegration2 .spinner {
        display: none;
    }

    form.formIntegration2.style1 label {
        color: #4a5765;
        font-family: arial;
        font-size: 14px;
    }

    form.formIntegration2.style1 input[type="text"] {
        border: 2px solid #bec5cb;
        -webkit-border-radius: 3px;
        -moz-border-radius: 3px;
        border-radius: 3px;
        box-shadow: 0 0 0 4px transparent;
        color: #4a5766;
        font-size: 13px;
        padding: 9px 6px;
        height: 38px;
    }

    form.formIntegration2.style1 input[type="submit"] {
        -webkit-appearance: none;
        border: medium none;
        background-color: #0e6e0e;
        color: #ffffff;
        cursor: pointer;
        font: bold 13px/38px Arial;
        height: 38px;
        padding: 0 15px;
        display: inline-block;
        -webkit-border-radius: 3px;
        -moz-border-radius: 3px;
        border-radius: 3px;
        margin: 5px 0 0 0;
    }

    form.formIntegration2.style1 div.containerMultiple,
    form.formIntegration2.style1 select,
    form.formIntegration2.style1 textarea {
        border: 2px solid #bec5cb;
        border-radius: 3px;
        -webkit-border-radius: 3px;
        -moz-border-radius: 3px;
        box-shadow: 0 0 0 4px transparent;
        color: #4a5766;
    }

    form.formIntegration2.style1 select {
        height: 40px;
    }

    form.formIntegration2.style1 textarea {
        max-height: 200px;
        min-height: 52px;
    }

    form.formIntegration2.style1 .spinner {
        display: none;
        bottom: 0;
        height: 18px;
        left: 0;
        margin: auto;
        position: absolute;
        right: 0;
        top: 0;
    }

    form.formIntegration2.style1 .spinner>div {
        width: 18px;
        height: 18px;
        background-color: #fff;
        border-radius: 100%;
        display: inline-block;
        -webkit-animation: sk-bouncedelay 1.4s infinite ease-in-out both;
        animation: sk-bouncedelay 1.4s infinite ease-in-out both;
    }

    form.formIntegration2.style1 .spinner .bounce1 {
        -webkit-animation-delay: -0.32s;
        animation-delay: -0.32s;
    }

    form.formIntegration2.style1 .spinner .bounce2 {
        -webkit-animation-delay: -0.16s;
        animation-delay: -0.16s;
    }

    form.formIntegration2.style1 .checkbox-container {
        display: block;
        position: absolute !important;
        padding-left: 22px;
        margin-bottom: 4px;
        cursor: pointer;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
    }

    form.formIntegration2.style1 .checkbox-container input {
        position: absolute;
        opacity: 0;
        cursor: pointer;
        height: 0;
        width: 0;
        top: 0;
        left: 0;
    }

    form.formIntegration2.style1 .checkmark {
        position: absolute;
        top: 0;
        left: 0;
        height: 18px;
        width: 18px;
        background-color: #FFF;
        border: 2px solid #BBB;
        border-radius: 3px;
    }

    form.formIntegration2.style1 .checkbox-container:hover input~.checkmark {
        border: 2px solid #777;
    }

    form.formIntegration2.style1 .checkmark:after {
        content: "";
        position: absolute;
        display: none;
    }

    form.formIntegration2.style1 .checkbox-container input:checked~.checkmark:after {
        display: block;
    }

    form.formIntegration2.style1 .checkbox-container .checkmark:after {
        left: 5px;
        top: 0px;
        width: 5px;
        height: 12px;
        border: solid #555;
        border-width: 0 3px 3px 0;
        -webkit-transform: rotate(45deg);
        -ms-transform: rotate(45deg);
        transform: rotate(45deg);
    }

    form.formIntegration2.style2 label {
        font-family: arial;
        font-size: 14px;
    }

    form.formIntegration2.style2 input[type="text"] {
        border: 1px solid #bec5cb;
        box-shadow: 0 0 0 4px transparent;
        color: #4a5766;
        font-size: 13px;
        padding: 9px 6px;
    }

    form.formIntegration2.style2 div.containerMultiple {
        max-height: 82px;
    }

    form.formIntegration2.style2 div.containerMultiple,
    form.formIntegration2.style2 select,
    form.formIntegration2.style2 textarea {
        border: 1px solid #bec5cb;
        box-shadow: 0 0 0 4px transparent;
        color: #4a5766;
    }

    form.formIntegration2.style2 select {
        height: 40px;
    }

    form.formIntegration2.style2 textarea {
        max-height: 200px;
        min-height: 52px;
    }

    form.formIntegration2.style2 ::-webkit-input-placeholder {
        color: #000000;
    }

    form.formIntegration2.style2 ::-moz-placeholder {
        color: #000000;
        font-family: arial;
    }

    form.formIntegration2.style2 :-ms-input-placeholder {
        color: #000000;
        font-family: arial;
    }

    form.formIntegration2.style2 :-moz-placeholder {
        color: #000000;
        font-family: arial;
    }

    form.formIntegration2.style2 .spinner {
        display: none;
        bottom: 0;
        height: 18px;
        left: 0;
        margin: auto;
        position: absolute;
        right: 0;
        top: 0;
    }

    form.formIntegration2.style2 .spinner>div {
        width: 18px;
        height: 18px;
        background-color: #fff;
        border-radius: 100%;
        display: inline-block;
        -webkit-animation: sk-bouncedelay 1.4s infinite ease-in-out both;
        animation: sk-bouncedelay 1.4s infinite ease-in-out both;
    }

    form.formIntegration2.style2 .spinner .bounce1 {
        -webkit-animation-delay: -0.32s;
        animation-delay: -0.32s;
    }

    form.formIntegration2.style2 .spinner .bounce2 {
        -webkit-animation-delay: -0.16s;
        animation-delay: -0.16s;
    }

    @-webkit-keyframes sk-bouncedelay {

        0%,
        80%,
        100% {
            -webkit-transform: scale(0)
        }

        40% {
            -webkit-transform: scale(1.0)
        }
    }

    @keyframes sk-bouncedelay {

        0%,
        80%,
        100% {
            -webkit-transform: scale(0);
            transform: scale(0);
        }

        40% {
            -webkit-transform: scale(1.0);
            transform: scale(1.0);
        }
    }
</style>

<section id="newsletter">
    <div class="container">

    <form version="2.0" class="formIntegration formIntegration2 " accept-charset="UTF-8" method="post" onsubmit="return dinForms.ValidateForm(this)" action="https://receiver.emkt.dinamize.com/in/301603/1/73cfd/0" target="DinamizeIframeFormIntegration" data-name="QmxvZ18yMDI1">

            <div class="box-newletter">
                <div class="box-newletter-img">

                    <?php if($link_url = get_option('newsletter_link')): ?>
                        <a href="<?= esc_url($link_url); ?>" target="_blank">
                    <?php endif; ?>

                        <?php if ($imagem_url = get_option('newsletter_imagem')): ?>
                            <img src="<?= esc_url($imagem_url); ?>" alt="Imagem da Newsletter" />
                        <?php endif; ?>

                    <?php if($link_url = get_option('newsletter_link')): ?>
                        </a>
                    <?php endif; ?>
                </div>

                <div class="box-newletter-content">
                    <h3><?= (esc_html(get_option('newsletter_titulo'))) ?? 'Assine nossa Newsletter!'; ?></h3>

                    <input type="hidden" name="update_mode" value="AS" />
                    <input type="hidden" name="form-code" value="163" />
                    <input type="hidden" name="isMsg" value="true" />

                    <div class="DinamizeDivCaptchaMessage">Captcha obrigatório</div>
                    <div class="DinamizeDivMessageAlert"></div>
                    <div class="DinamizeDivMessageSuccess">Seu e-mail foi cadastrado com sucesso!</div>
                    <div class="DinamizeDivMessageError"></div>
                    <input type="hidden" name="text-confirmation" value="U2V1IGUtbWFpbCBmb2kgY2FkYXN0cmFkbyBjb20gc3VjZXNzbyE=" />
                    <input type="hidden" name="text-error" value="" />
                    <input type="hidden" name="text-alert" value="" />
                    <input type="hidden" name="cmp4" value="form_blog_2025" />
                    <input type="hidden" name="phase-change" value="off" />

                    <div class="">
                        <div class="block">
                            <input type="text" name="cmp2" placeholder="Nome" format="" class="type_VC field-required  input-field" maxlength="80" />
                        </div>
                        <div class="block">
                            <input type="text" name="cmp1" placeholder="E-mail" format="" class="type_EMAIL field-required  input-field" maxlength="80" />
                        </div>


                        <div class="block">
                            <select name="cmp12" class="type_LVM" hd-name="cmp12">
                                <option value="" disabled selected>Time Brasileiro</option>

                                <option value="ABC de Natal">ABC de Natal</option>
                                <option value="Aimoré">Aimoré</option>
                                <option value="Altos do Piauí">Altos do Piauí</option>
                                <option value="América Mineiro">América Mineiro</option>
                                <option value="América RJ">América RJ</option>
                                <option value="América RN">América RN</option>
                                <option value="ASA de Arapiraca">ASA de Arapiraca</option>
                                <option value="Athletico Paranaense">Athletico Paranaense</option>
                                <option value="Atlético Goianiense">Atlético Goianiense</option>
                                <option value="Atlético Mineiro">Atlético Mineiro</option>
                                <option value="Audax Osasco">Audax Osasco</option>
                                <option value="Avaí">Avaí</option>
                                <option value="Bahia">Bahia</option>
                                <option value="Bahia de Feira">Bahia de Feira</option>
                                <option value="Bangu">Bangu</option>
                                <option value="Boa Esporte">Boa Esporte</option>
                                <option value="Botafogo">Botafogo</option>
                                <option value="Botafogo da Paraíba">Botafogo da Paraíba</option>
                                <option value="Botafogo de Ribeirão Preto">Botafogo de Ribeirão Preto</option>
                                <option value="Brasil de Pelotas">Brasil de Pelotas</option>
                                <option value="Brasília">Brasília</option>
                                <option value="Brasiliense">Brasiliense</option>
                                <option value="Campinense">Campinense</option>
                                <option value="Caxias do Sul">Caxias do Sul</option>
                                <option value="Ceará">Ceará</option>
                                <option value="Chapecoense">Chapecoense</option>
                                <option value="Clube do Remo">Clube do Remo</option>
                                <option value="Corinthians">Corinthians</option>
                                <option value="Coritiba">Coritiba</option>
                                <option value="CRAC">CRAC</option>
                                <option value="CRB Alagoas">CRB Alagoas</option>
                                <option value="Criciúma">Criciúma</option>
                                <option value="Cruzeiro">Cruzeiro</option>
                                <option value="CSA">CSA</option>
                                <option value="Cuiabá">Cuiabá</option>
                                <option value="Desportiva Ferroviária ES">Desportiva Ferroviária ES</option>
                                <option value="Ferroviária">Ferroviária</option>
                                <option value="Ferroviária de Araraquara">Ferroviária de Araraquara</option>
                                <option value="Ferroviário CE">Ferroviário CE</option>
                                <option value="Figueirense">Figueirense</option>
                                <option value="Flamengo">Flamengo</option>
                                <option value="Flamengo Piauí">Flamengo Piauí</option>
                                <option value="Fluminense">Fluminense</option>
                                <option value="Fluminense de Feira">Fluminense de Feira</option>
                                <option value="Fortaleza">Fortaleza</option>
                                <option value="Gama">Gama</option>
                                <option value="Goiás">Goiás</option>
                                <option value="Goytacaz">Goytacaz</option>
                                <option value="Grêmio">Grêmio</option>
                                <option value="Guarani">Guarani</option>
                                <option value="Íbis">Íbis</option>
                                <option value="Internacional">Internacional</option>
                                <option value="Itabaiana">Itabaiana</option>
                                <option value="Ituano">Ituano</option>
                                <option value="Joinville">Joinville</option>
                                <option value="Juventude">Juventude</option>
                                <option value="Juventus">Juventus</option>
                                <option value="Linense">Linense</option>
                                <option value="Londrina EC">Londrina EC</option>
                                <option value="Luverdense">Luverdense</option>
                                <option value="Madureira">Madureira</option>
                                <option value="Marília">Marília</option>
                                <option value="Maringá">Maringá</option>
                                <option value="Metropolitano">Metropolitano</option>
                                <option value="Mirassol">Mirassol</option>
                                <option value="Mogi Mirim">Mogi Mirim</option>
                                <option value="Moto Club">Moto Club</option>
                                <option value="Náutico">Náutico</option>
                                <option value="Noroeste de Bauru">Noroeste de Bauru</option>
                                <option value="Novo Hamburgo">Novo Hamburgo</option>
                                <option value="Oeste Barueri">Oeste Barueri</option>
                                <option value="Operário Ferroviário">Operário Ferroviário</option>
                                <option value="Palmeiras">Palmeiras</option>
                                <option value="Paraná Clube">Paraná Clube</option>
                                <option value="Parnahyba">Parnahyba</option>
                                <option value="Paysandu">Paysandu</option>
                                <option value="Pelotas">Pelotas</option>
                                <option value="Penapolense">Penapolense</option>
                                <option value="Ponte Preta">Ponte Preta</option>
                                <option value="Portuguesa">Portuguesa</option>
                                <option value="Rio Branco ES">Rio Branco ES</option>
                                <option value="River Piauí">River Piauí</option>
                                <option value="Sampaio Corrêa">Sampaio Corrêa</option>
                                <option value="Santa Cruz">Santa Cruz</option>
                                <option value="Santo André">Santo André</option>
                                <option value="Santos">Santos</option>
                                <option value="São Bento">São Bento</option>
                                <option value="São Bernardo">São Bernardo</option>
                                <option value="São Caetano">São Caetano</option>
                                <option value="São Paulo">São Paulo</option>
                                <option value="Sergipe">Sergipe</option>
                                <option value="Sport Recife">Sport Recife</option>
                                <option value="Vasco da Gama">Vasco da Gama</option>
                                <option value="Vila Nova GO">Vila Nova GO</option>
                                <option value="Vila Nova MG">Vila Nova MG</option>
                                <option value="Vitória BA">Vitória BA</option>
                                <option value="Vitória ES">Vitória ES</option>
                                <option value="Volta Redonda">Volta Redonda</option>
                                <option value="XV de Piracicaba">XV de Piracicaba</option>
                                <option value="Outro">Outro</option>
                                <option value="Nenhum">Nenhum</option>
                                <option value="Todos os Clubes da Lista">Todos os Clubes da Lista</option>


                            </select>
                        </div>

                        <div class="block">

                            <select name="cmp13" class="type_LVM" hd-name="cmp13">
                                <option value="" disabled selected>Time Internacional</option>
                                <option value="AEK Atenas">AEK Atenas</option>
                                <option value="Ajaccio">Ajaccio</option>
                                <option value="Ajax">Ajax</option>
                                <option value="Al-Hilal">Al-Hilal</option>
                                <option value="Al-Ittihad">Al-Ittihad</option>
                                <option value="Alcorcon">Alcorcon</option>
                                <option value="América de Cáli">América de Cáli</option>
                                <option value="Argentinos Juniors">Argentinos Juniors</option>
                                <option value="Arsenal">Arsenal</option>
                                <option value="Arsenal  Sarandí">Arsenal Sarandí</option>
                                <option value="Aston Villa">Aston Villa</option>
                                <option value="Atalanta">Atalanta</option>
                                <option value="Atlas">Atlas</option>
                                <option value="Atletico de Bilbao">Atletico de Bilbao</option>
                                <option value="Atlético de Madrid">Atlético de Madrid</option>
                                <option value="Atlético Nacional">Atlético Nacional</option>
                                <option value="Banfield">Banfield</option>
                                <option value="Barcelona">Barcelona</option>
                                <option value="Barcelona de Guayaquil">Barcelona de Guayaquil</option>
                                <option value="Bayer Leverkusen">Bayer Leverkusen</option>
                                <option value="Bayern de Munique">Bayern de Munique</option>
                                <option value="Benfica">Benfica</option>
                                <option value="Besiktas">Besiktas</option>
                                <option value="Blackburn Rovers">Blackburn Rovers</option>
                                <option value="Boca Juniors">Boca Juniors</option>
                                <option value="Bolívar">Bolívar</option>
                                <option value="Bologna">Bologna</option>
                                <option value="Bordeaux">Bordeaux</option>
                                <option value="Borussia Dortmund">Borussia Dortmund</option>
                                <option value="Borussia Monchengladbach">Borussia Monchengladbach</option>
                                <option value="Bournemouth">Bournemouth</option>
                                <option value="Braga">Braga</option>
                                <option value="Bristol Rovers">Bristol Rovers</option>
                                <option value="Burnley">Burnley</option>
                                <option value="Caracas">Caracas</option>
                                <option value="Cardiff City">Cardiff City</option>
                                <option value="Celta de Vigo">Celta de Vigo</option>
                                <option value="Celtics">Celtics</option>
                                <option value="Cerezo Osaka">Cerezo Osaka</option>
                                <option value="Cerro Porteño">Cerro Porteño</option>
                                <option value="Chelsea">Chelsea</option>
                                <option value="Chicago Fire">Chicago Fire</option>
                                <option value="Chivas Guadalajara">Chivas Guadalajara</option>
                                <option value="Cienciano">Cienciano</option>
                                <option value="Club America">Club America</option>
                                <option value="Clubes CONCACAF">Clubes CONCACAF</option>
                                <option value="Colo Colo">Colo Colo</option>
                                <option value="Comunicaciones">Comunicaciones</option>
                                <option value="Cruz Azul">Cruz Azul</option>
                                <option value="Crystal Palace">Crystal Palace</option>
                                <option value="CSKA Moscou">CSKA Moscou</option>
                                <option value="DC United">DC United</option>
                                <option value="Defensor Sporting">Defensor Sporting</option>
                                <option value="Deportivo Cáli">Deportivo Cáli</option>
                                <option value="Deportivo de La Coruña">Deportivo de La Coruña</option>
                                <option value="Deportivo Saprissa">Deportivo Saprissa</option>
                                <option value="Deportivo Toluca">Deportivo Toluca</option>
                                <option value="Derby County">Derby County</option>
                                <option value="Dínamo de Kiev">Dínamo de Kiev</option>
                                <option value="Emelec">Emelec</option>
                                <option value="Empoli">Empoli</option>
                                <option value="Espanyol">Espanyol</option>
                                <option value="Estrela Vermelha">Estrela Vermelha</option>
                                <option value="Estudiantes de La Plata">Estudiantes de La Plata</option>
                                <option value="Everton">Everton</option>
                                <option value="Fenerbahçe">Fenerbahçe</option>
                                <option value="Feyenoord">Feyenoord</option>
                                <option value="Feyernoord">Feyernoord</option>
                                <option value="Fiorentina">Fiorentina</option>
                                <option value="Fulham">Fulham</option>
                                <option value="Futebol Alemão">Futebol Alemão</option>
                                <option value="Futebol Asiático">Futebol Asiático</option>
                                <option value="Futebol Espanhol">Futebol Espanhol</option>
                                <option value="Futebol Francês">Futebol Francês</option>
                                <option value="Futebol Inglês">Futebol Inglês</option>
                                <option value="Futebol Italiano">Futebol Italiano</option>
                                <option value="Futebol Sulamericano">Futebol Sulamericano</option>
                                <option value="Galatasaray">Galatasaray</option>
                                <option value="Gamba Osaka">Gamba Osaka</option>
                                <option value="Genoa">Genoa</option>
                                <option value="Getafe">Getafe</option>
                                <option value="Granada">Granada</option>
                                <option value="Guangzhou Evergrande">Guangzhou Evergrande</option>
                                <option value="Hertha Berlin">Hertha Berlin</option>
                                <option value="Hoffennheim">Hoffennheim</option>
                                <option value="Hull City">Hull City</option>
                                <option value="Huracán">Huracán</option>
                                <option value="Independiente">Independiente</option>
                                <option value="Independiente Medellín">Independiente Medellín</option>
                                <option value="Independiente Santa Fe">Independiente Santa Fe</option>
                                <option value="Inter de Milão">Inter de Milão</option>
                                <option value="Ipswich Town">Ipswich Town</option>
                                <option value="Jorge Wilstermann">Jorge Wilstermann</option>
                                <option value="Junior Barranquila">Junior Barranquila</option>
                                <option value="Juventus">Juventus</option>
                                <option value="Kashima Antlers">Kashima Antlers</option>
                                <option value="La Equidad">La Equidad</option>
                                <option value="Lanús">Lanús</option>
                                <option value="Lazio">Lazio</option>
                                <option value="LDU Quito">LDU Quito</option>
                                <option value="Leeds United">Leeds United</option>
                                <option value="Leicester">Leicester</option>
                                <option value="Libertad">Libertad</option>
                                <option value="Lille">Lille</option>
                                <option value="Liverpool">Liverpool</option>
                                <option value="Los Angeles Galaxy">Los Angeles Galaxy</option>
                                <option value="Lyon">Lyon</option>
                                <option value="Málaga">Málaga</option>
                                <option value="Mallorca">Mallorca</option>
                                <option value="Manchester City">Manchester City</option>
                                <option value="Manchester United">Manchester United</option>
                                <option value="Middlesbrough">Middlesbrough</option>
                                <option value="Milan">Milan</option>
                                <option value="Millonários">Millonários</option>
                                <option value="Monaco">Monaco</option>
                                <option value="Nacional do Uruguai">Nacional do Uruguai</option>
                                <option value="Nantes">Nantes</option>
                                <option value="Napoli">Napoli</option>
                                <option value="Necaxa">Necaxa</option>
                                <option value="Nenhum">Nenhum</option>
                                <option value="New York City">New York City</option>
                                <option value="Newcastle">Newcastle</option>
                                <option value="Newell's Old Boys">Newell's Old Boys</option>
                                <option value="Nice">Nice</option>
                                <option value="Norwich City">Norwich City</option>
                                <option value="Nottingham Forest">Nottingham Forest</option>
                                <option value="Nuremberg">Nuremberg</option>
                                <option value="Olimpia">Olimpia</option>
                                <option value="Olympiakos">Olympiakos</option>
                                <option value="Olympique de Marseille">Olympique de Marseille</option>
                                <option value="Once Caldas">Once Caldas</option>
                                <option value="Orlando City">Orlando City</option>
                                <option value="Outras Ligas Européias">Outras Ligas Européias</option>
                                <option value="Outro">Outro</option>
                                <option value="Pachuca">Pachuca</option>
                                <option value="Palermo">Palermo</option>
                                <option value="Panathinaikos">Panathinaikos</option>
                                <option value="Paris Saint-Germain">Paris Saint-Germain</option>
                                <option value="Parma">Parma</option>
                                <option value="Peñarol">Peñarol</option>
                                <option value="Pohang Steelers">Pohang Steelers</option>
                                <option value="Porto">Porto</option>
                                <option value="PSV">PSV</option>
                                <option value="Pumas UNAM">Pumas UNAM</option>
                                <option value="Queens Park Rangers">Queens Park Rangers</option>
                                <option value="Racing Club">Racing Club</option>
                                <option value="Rangers">Rangers</option>
                                <option value="Real Betis">Real Betis</option>
                                <option value="Real Madrid">Real Madrid</option>
                                <option value="Red Bull Leipzig">Red Bull Leipzig</option>
                                <option value="Red Bull New York">Red Bull New York</option>
                                <option value="Rennes">Rennes</option>
                                <option value="Restante do Mundo">Restante do Mundo</option>
                                <option value="River Plate">River Plate</option>
                                <option value="Roma">Roma</option>
                                <option value="Rosário Central">Rosário Central</option>
                                <option value="Rubin Kazan">Rubin Kazan</option>
                                <option value="Saint-Étienne">Saint-Étienne</option>
                                <option value="Sampdoria">Sampdoria</option>
                                <option value="San Lorenzo">San Lorenzo</option>
                                <option value="Schalke 04">Schalke 04</option>
                                <option value="Sevilla">Sevilla</option>
                                <option value="Shakhtar Donetsk">Shakhtar Donetsk</option>
                                <option value="Shandong Luneng">Shandong Luneng</option>
                                <option value="Sheffield FC">Sheffield FC</option>
                                <option value="Sheffield United">Sheffield United</option>
                                <option value="Sochaux">Sochaux</option>
                                <option value="Southampton">Southampton</option>
                                <option value="Sparta Praga">Sparta Praga</option>
                                <option value="Spartak Moscou">Spartak Moscou</option>
                                <option value="Sporting Cristal">Sporting Cristal</option>
                                <option value="Sporting Lisboa">Sporting Lisboa</option>
                                <option value="Sportivo Luqueño">Sportivo Luqueño</option>
                                <option value="Stoke City">Stoke City</option>
                                <option value="Stuttgart">Stuttgart</option>
                                <option value="Swansea City">Swansea City</option>
                                <option value="The Strongest">The Strongest</option>
                                <option value="Tigres">Tigres</option>
                                <option value="Tijuana">Tijuana</option>
                                <option value="Todos os Clubes da Lista">Todos os Clubes da Lista</option>
                                <option value="Tolima">Tolima</option>
                                <option value="Torino">Torino</option>
                                <option value="Toronto FC">Toronto FC</option>
                                <option value="Tottenham">Tottenham</option>
                                <option value="Toulouse">Toulouse</option>
                                <option value="Udinese">Udinese</option>
                                <option value="Universidad Catolica">Universidad Catolica</option>
                                <option value="Universidad de Chile">Universidad de Chile</option>
                                <option value="Valência">Valência</option>
                                <option value="Vélez Sársfield">Vélez Sársfield</option>
                                <option value="Villareal">Villareal</option>
                                <option value="Watford">Watford</option>
                                <option value="Werder Bremen">Werder Bremen</option>
                                <option value="West Bromwich">West Bromwich</option>
                                <option value="West Ham">West Ham</option>
                                <option value="Wolfsburg">Wolfsburg</option>
                                <option value="Wolves">Wolves</option>
                                <option value="Yokohama Marinos">Yokohama Marinos</option>
                                <option value="Zenit">Zenit</option>
                            </select>
                        </div>
                    </div>

                    <div class="box-politica-privacidade">
                        <input id="ck-politica-privacidade" class="field-required" type="checkbox" name="aceito" required>
                        <label for="ck-politica-privacidade">Li e concordo com a <a href="https://www.futfanatics.com.br/politica-de-privacidade" target="_blank">Política de Privacidade</a></label>
                    </div>

                    <div class="horizontal class1 submit submit-button-td" style="text-align: center;">
                        <input type="submit" value="Cadastre-se" original-value="Inscreva-me" class="dinSubmit submit-btn" />
                        <div class="spinner">
                            <div class="bounce1"></div>
                            <div class="bounce2"></div>
                            <div class="bounce3"></div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</section>

<script type="text/javascript">
    ! function(t, e) {
        "function" == typeof define && define.amd ? define(e) : "object" == typeof exports ? module.exports = e() : t.VMasker = e()
    }(this, function() {
        var t = "9",
            e = "A",
            n = "S",
            i = [8, 9, 16, 17, 18, 36, 37, 38, 39, 40, 91, 92, 93],
            o = function(t) {
                for (var e = 0, n = i.length; n > e; e++)
                    if (t == i[e]) return !1;
                return !0
            },
            r = function(t) {
                return t = t || {}, t = {
                    precision: t.hasOwnProperty("precision") ? t.precision : 2,
                    separator: t.separator || ",",
                    unit: t.unit && t.unit.replace(/[\s]/g, "") + " " || "",
                    suffixUnit: t.suffixUnit && " " + t.suffixUnit.replace(/[\s]/g, "") || "",
                    zeroCents: t.zeroCents,
                    lastOutput: t.lastOutput
                }, t.moneyPrecision = t.zeroCents ? 0 : t.precision, t
            },
            s = function(i, o, r) {
                for (; o < i.length; o++)(i[o] === t || i[o] === e || i[o] === n) && (i[o] = r);
                return i
            },
            l = function(t) {
                this.elements = t
            };
        l.prototype.unbindElementToMask = function() {
            for (var t = 0, e = this.elements.length; e > t; t++) this.elements[t].lastOutput = "", this.elements[t].onkeyup = !1, this.elements[t].onkeydown = !1, this.elements[t].value.length && (this.elements[t].value = this.elements[t].value.replace(/\D/g, ""))
        }, l.prototype.bindElementToMask = function(t) {
            for (var e = this, n = function(n) {
                    n = n || window.event;
                    var i = n.target || n.srcElement;
                    o(n.keyCode) && setTimeout(function() {
                        e.opts.lastOutput = i.lastOutput, i.value = a[t](i.value, e.opts), i.lastOutput = i.value, i.setSelectionRange && e.opts.suffixUnit && i.setSelectionRange(i.value.length, i.value.length - e.opts.suffixUnit.length)
                    }, 0)
                }, i = 0, r = this.elements.length; r > i; i++) this.elements[i].lastOutput = "", this.elements[i].onkeyup = n, this.elements[i].value.length && (this.elements[i].value = a[t](this.elements[i].value, this.opts))
        }, l.prototype.maskMoney = function(t) {
            this.opts = r(t), this.bindElementToMask("toMoney")
        }, l.prototype.maskNumber = function() {
            this.opts = {}, this.bindElementToMask("toNumber")
        }, l.prototype.maskAlphaNum = function() {
            this.opts = {}, this.bindElementToMask("toAlphaNumeric")
        }, l.prototype.maskPattern = function(t) {
            this.opts = {
                pattern: t
            }, this.bindElementToMask("toPattern")
        }, l.prototype.unMask = function() {
            this.unbindElementToMask()
        };
        var a = function(t) {
            if (!t) throw new Error("VanillaMasker: There is no element to bind.");
            var e = "length" in t ? t.length ? t : [] : [t];
            return new l(e)
        };
        return a.toMoney = function(t, e) {
            if (e = r(e), e.zeroCents) {
                e.lastOutput = e.lastOutput || "";
                var n = "(" + e.separator + "[0]{0," + e.precision + "})",
                    i = new RegExp(n, "g"),
                    o = t.toString().replace(/[\D]/g, "").length || 0,
                    s = e.lastOutput.toString().replace(/[\D]/g, "").length || 0;
                t = t.toString().replace(i, ""), s > o && (t = t.slice(0, t.length - 1))
            }
            var l = t.toString().replace(/[\D]/g, ""),
                a = new RegExp("(\\" + e.separator + ")$"),
                u = l.substr(0, l.length - e.moneyPrecision),
                p = u.substr(0, u.length % 3),
                h = new Array(e.precision + 1).join("");
            u = u.substr(u.length % 3, u.length);
            for (var c = 0, f = u.length; f > c; c++) p += u[c];
            if (!e.zeroCents) {
                var g = l.length - e.precision,
                    m = l.substr(g, e.precision),
                    v = m.length,
                    y = e.precision > v ? e.precision : v;
                h = (h + m).slice(-y)
            }
            var b = e.unit + p + e.separator + h + e.suffixUnit;
            return b.replace(a, "")
        }, a.toPattern = function(i, o) {
            var r, l = "object" == typeof o ? o.pattern : o,
                a = l.replace(/\W/g, ""),
                u = l.split(""),
                p = i.toString().replace(/\W/g, ""),
                h = p.replace(/\W/g, ""),
                c = 0,
                f = u.length,
                g = "object" == typeof o ? o.placeholder : void 0;
            for (r = 0; f > r; r++) {
                if (c >= p.length) {
                    if (a.length == h.length) return u.join("");
                    if (void 0 !== g && a.length > h.length) return s(u, r, g).join("");
                    break
                }
                if (u[r] === t && p[c].match(/[0-9]/) || u[r] === e && p[c].match(/[a-zA-Z]/) || u[r] === n && p[c].match(/[0-9a-zA-Z]/)) u[r] = p[c++];
                else if (u[r] === t || u[r] === e || u[r] === n) return void 0 !== g ? s(u, r, g).join("") : u.slice(0, r).join("")
            }
            return u.join("").substr(0, r)
        }, a.toNumber = function(t) {
            return t.toString().replace(/(?!^-)[^0-9]/g, "")
        }, a.toAlphaNumeric = function(t) {
            return t.toString().replace(/[^a-z0-9 ]+/i, "")
        }, a
    });

    if (typeof dinForms == "undefined" || dinForms.version < 1.3) {
        var dinForms = {
            version: 1.3,
            onLoad: function() {
                //
                var forms = document.getElementsByClassName("formIntegration");
                for (var k = 0; k < forms.length; ++k) {
                    var inputElement = forms[k].getElementsByClassName("din-input-mask");
                    for (var i = 0; i < inputElement.length; ++i) {
                        switch (inputElement[i].getAttribute("din-mask-type")) {
                            case "DT":
                            case "DH":
                                var str = inputElement[i].getAttribute("format");
                                VMasker(inputElement[i]).maskPattern(str.replace(/D|M|A|Y|H/g, "9"));
                                break;
                            case "INT":
                                VMasker(inputElement[i]).maskNumber();
                                break;
                            case "FLT":
                                var str = inputElement[i].getAttribute("format");
                                VMasker(inputElement[i]).maskMoney({
                                    separator: str
                                });
                                break;
                        }
                    }
                }

                //
                var referer = document.referrer ? document.referrer.match(/:\/\/(.[^/]+)/)[1] : "";
                var hostname = window.location.hostname;
                if (referer != hostname) {
                    var jsonParams = {
                        "url": window.location.href,
                        "referer": document.referrer
                    };
                    var cookieData = btoa(JSON.stringify(jsonParams));
                    dinForms.SetCookie("dinTrafficSource", cookieData, 90);
                }
            },
            ValidateForm: function(form) {
                this.LimpaAvisos(form);

                /********************************************************/
                // validação de cada tipo de campo
                /********************************************************/
                var elem = form.elements;
                var enviar = true;
                for (var i = 0; i < elem.length; i++) {
                    if (elem[i].type == "hidden") {
                        continue
                    }

                    var classList = elem[i].className.split(" ");

                    this.removeClass("field-error", elem[i]);
                    elem[i].value = elem[i].value.trim();

                    if (classList.indexOf("type_EMAIL") != -1) {
                        if (!this.validateEmail(elem[i].value)) {
                            this.addClass("field-error", elem[i]);
                            enviar = false;
                        }
                    } else if (classList.indexOf("type_DT") != -1) {
                        if (elem[i].value != "" && !this.existDate(this.prepareDate(elem[i].value, elem[i].getAttribute("format")), false)) {
                            this.addClass("field-error", elem[i]);
                            enviar = false;
                        }
                    } else if (classList.indexOf("type_DH") != -1) {
                        if (elem[i].value != "" && !this.existDate(this.prepareDate(elem[i].value, elem[i].getAttribute("format")), true)) {
                            this.addClass("field-error", elem[i]);
                            enviar = false;
                        }
                    } else if (classList.indexOf("type_PHN_NUM") != -1) {
                        var fieldName = elem[i].getAttribute("hd-name");
                        var text = elem[i].value;
                        var patPhone = /\d+/g;
                        var res;
                        var resultNum = "";
                        var resultDDI = "";
                        res = text.match(patPhone);

                        if (res !== null) {
                            resultNum = res.join("");
                        }

                        form.elements[fieldName].value = "";

                        if (text != "" && resultNum.length < 3) {
                            this.addClass("field-error", elem[i]);
                            enviar = false;
                        } else if (resultNum.length >= 3) {

                            text = form.elements[fieldName + "_DDI"].value
                            res = text.match(patPhone);

                            if (res !== null) {
                                resultDDI = res.join("");
                                form.elements[fieldName].value = resultDDI + resultNum;
                            } else {
                                this.addClass("field-error", form.elements[fieldName + "_DDI"]);
                                enviar = false;
                            }
                        }
                    }

                    // CAMPOS OBRIGATORIOS
                    if (classList.indexOf("field-required") != -1) {

                        // Todos os campos não-LVM
                        if (classList.indexOf("type_LVM") == -1) {
                            if (elem[i].value.trim() == "") {
                                this.addClass("field-error", elem[i]);
                                enviar = false;
                            }
                        }

                        // else lvm...
                        if (classList.indexOf("type_LVM") != -1) {
                            var hdName = elem[i].getAttribute("hd-name");
                            var ok = false;

                            this.removeClass("field-error", form.getElementsByClassName("containerMultiple_" + hdName)[0]); // é o único caso que a classe é removida deste jeito

                            var checkboxes = form.getElementsByClassName("chk_" + hdName);
                            for (var j = 0; j < checkboxes.length; j++) {
                                if (checkboxes[j].checked == true) {
                                    ok = true;
                                    break;
                                }
                            }
                            if (!ok) {
                                this.addClass("field-error", form.getElementsByClassName("containerMultiple_" + hdName)[0]);
                                enviar = false;
                            }
                        }
                    }

                }
                /********************************************************/
                // Em caso de falha na validação...
                // Mensagem de Campo Obrigatório
                /********************************************************/
                if (!enviar) {
                    var msgError = form.getElementsByClassName("DinamizeDivMessageError")[0];
                    if (msgError && msgError.innerHTML.length) {
                        msgError.style.display = "block";
                    }
                    return false
                }

                /********************************************************/
                // Escreve valores nos campos hidden (quando necessário)
                /********************************************************/

                // Listas de Valores Multiplos (LVM)
                var lvmElements = form.getElementsByClassName("type_LVM");
                var checkboxes, checkedValues;
                var hdName;
                for (var i = 0; i < lvmElements.length; i++) {
                    hdName = lvmElements[i].getAttribute("hd-name");

                    checkboxes = form.getElementsByClassName("chk_" + hdName);
                    checkedValues = "";

                    if (checkboxes.length > 0) {
                        for (var k = 0; k < checkboxes.length; k++) {
                            if (checkboxes[k].checked) {
                                checkedValues += "|" + checkboxes[k].value;
                            }
                        }
                    }
                    checkedValues = checkedValues.replace("|", "");
                    form.elements[lvmElements[i].getAttribute("hd-name")].value = checkedValues;
                }

                // Datas
                this.setDateValues(form, "type_DT");
                this.setDateValues(form, "type_DH");

                // Floats
                var fltElements = form.getElementsByClassName("type_FLT");
                for (var i = 0; i < fltElements.length; i++) {
                    form.elements[fltElements[i].getAttribute("hd-name")].value = fltElements[i].value.replace(",", ".");
                };

                /********************************************************/
                // finalizando...
                /********************************************************/

                //  se for preview... dá msg de sucesso e cai fora!
                var isPreview = form.elements["isPreview"];
                if (isPreview) {
                    dinForms.ResetFormValues(form);
                    return false
                }

                // LEADTRACKER
                // Precisamos descobrir se o objeto de leadTracker existe no mesmo frame que este formulário está, ou se está no parent (ou no top).
                // Usamos a referencia deste frame a partir disto.
                // Para ter o máximo de compatibilidade, verifico se o browser suporta estes objetos.
                // Resolve idealmente o uso de leadtracker por popups

                // faz try-catch pois o frame parent/top pode ser de outro dominio, isto gerará um erro do tipo cross-domain.
                try {
                    var frame
                    if (typeof dinLeadTracker !== "undefined") {
                        frame = window;
                    } else if (typeof window.parent !== "undefined" && typeof window.parent.dinLeadTracker !== "undefined") {
                        frame = window.parent;
                    } else if (typeof window.top !== "undefined" && typeof window.top.dinLeadTracker !== "undefined") {
                        frame = window.top;
                    }

                    // se encontramos leadtracker em algum dos frames, seta!
                    if (typeof frame !== "undefined" && frame.dinLeadTracker.isActive()) {
                        var formElements = form.elements;
                        if (typeof formElements.cmp1 !== "undefined") {
                            frame.dinLeadTracker.SetLeadEmail(formElements.cmp1.value);
                        }
                        if (typeof formElements.cmp3 !== "undefined") {
                            frame.dinLeadTracker.SetLeadExternalId(formElements.cmp3.value);
                        }
                    }
                } catch (e) {
                    console.warn("Leadtracker ignored because of Cross-Domain error.");
                    console.warn(e);
                }

                var isCaptcha = this.hasCaptcha(form);
                if (isCaptcha) {
                    form.getElementsByClassName("DinamizeDivCaptchaMessage")[0].style.display = "none";
                    var recaptcha = form.elements["g-recaptcha-response"];
                    if (recaptcha.value === "") {
                        form.getElementsByClassName("DinamizeDivCaptchaMessage")[0].style.display = "block";
                        grecaptcha.reset(); // ver se precisa
                        return false;
                    }
                }

                let formType = "";
                if (document.body.getAttribute("data-type")) {
                    formType = document.body.getAttribute("data-type");
                }
                let eventLabel = "";
                let term = "";
                if (form.getAttribute("data-name")) {
                    eventLabel = term = atob(form.getAttribute("data-name"));
                }
                let campaign = term;
                if (form.getAttribute("data-campaign")) {
                    campaign = atob(form.getAttribute("data-campaign"));
                }

                if (formType !== "") {
                    // Para registrar a conversão do formulário no GA
                    dinGAFunctions.sendEvent("contact_conversion", formType, eventLabel)

                    // Para registrar a UTMs dentro do GA
                    dinGAFunctions.setUTMs("dinamize", formType, campaign, term);
                }

                // Se o form usa "msg", não faz action com redirect.
                var isMsg = form.elements["isMsg"].value;
                var redirectElement = form.elements["redirect-url-js"] ? form.elements["redirect-url-js"] : form.elements["redirect-url-pp"];
                if (isMsg == "true" || (redirectElement && redirectElement.value != "")) {
                    this.LoadingForm(form);
                    if (typeof playRoulette == "function") {
                        playRoulette(form.querySelector('input[type="sumit"]'));
                    }
                    return false; // posta o conteudo, mas não executa action do form
                }

                // Posta pro nosso receiver e este fará um redirect.
                return true;
            },
            setDateValues: function(form, className) {
                var dtElements = form.getElementsByClassName(className);
                for (var i = 0; i < dtElements.length; i++) {
                    if (dtElements[i].value == "") {
                        continue;
                    }
                    form.elements[dtElements[i].getAttribute("hd-name")].value = this.prepareDate(dtElements[i].value, dtElements[i].getAttribute("format"));
                };
            },
            // NOVO, apenas landing page
            SetCookie: function(cname, cvalue, exdays) {
                var d = new Date();
                d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
                var expires = "expires=" + d.toUTCString();
                document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
            },
            hasCaptcha: function(form) {
                // Detecta se existe este elemento (deprecated) de captcha.
                if (form.elements["dnz-captcha-google"] != undefined) {
                    return true;
                }
                // Validação normal
                var action = form.getAttribute("action");
                if (action === null) {
                    return false;
                }

                action = action.split("/");
                if (action.length == 8) {
                    if (action[7] == 1) {
                        return true;
                    }
                }
                return false;
            },
            LoadingForm: function(form) {
                //
                if (document.getElementById("DinamizeIframeFormIntegration") == undefined) {
                    var ifrm = document.createElement("iframe");
                    ifrm.setAttribute("id", "DinamizeIframeFormIntegration");
                    ifrm.setAttribute("name", "DinamizeIframeFormIntegration");
                    ifrm.style.display = "none";
                    document.body.appendChild(ifrm);
                }

                if (this.GetCookie("dinTrafficSource")) {
                    // MANTER COM ID, SÓ PRECISAMOS DE UM POR document
                    if (document.getElementById("__dinTrafficSource")) {
                        document.getElementById("__dinTrafficSource").setAttribute("value", this.GetCookie("dinTrafficSource"));
                    } else {
                        var ts = document.createElement("input");
                        ts.type = "hidden";
                        ts.name = "__dinTrafficSource";
                        // MANTER COM ID, SÓ PRECISAMOS DE UM POR document
                        ts.id = "__dinTrafficSource";
                        ts.value = this.GetCookie("dinTrafficSource");
                        form.appendChild(ts);
                    }
                }

                this.Spinner(form, true);

                var redirectElement = form.elements["redirect-url-pp"];
                if (redirectElement && redirectElement.value != "") {
                    this.Request(form.getAttribute("action") + "/", this.serialize(form), form);
                } else {
                    // Usa um "img" para fazer uma requisição
                    var imgReq = document.createElement("img");
                    imgReq.setAttribute("id", "DinamizeImgResponse");
                    imgReq.style.display = "none"; // redundancia

                    imgReq.onload = function() {
                        // LandingPage
                        redirectElement = form.elements["redirect-url-js"];
                        if (redirectElement && redirectElement.value != "") {
                            location.href = redirectElement.value;
                        }
                        // Fim LandingPage
                        dinForms.Spinner(form, false);
                        dinForms.ResetFormValues(form);
                    }
                    imgReq.onerror = function() {
                        dinForms.Spinner(form, false);

                        // elemento deprecated
                        var msgErrorDep = form.getElementsByClassName("divMessageError")[0];
                        if (msgErrorDep) {
                            msgErrorDep.style.display = "block";
                        }

                        var msgAlert = form.getElementsByClassName("DinamizeDivMessageAlert")[0];
                        if (msgAlert) {
                            msgAlert.style.display = "block";
                        }
                    }
                    imgReq.src = form.getAttribute("action") + "/?" + this.serialize(form) + "&a=" + Math.floor((Math.random() * 99999) + 1);
                    form.appendChild(imgReq);
                }
            },
            Request: function(url, params, form) {
                var xmlhttp = new XMLHttpRequest();
                xmlhttp.onreadystatechange = function() {
                    if (xmlhttp.readyState == XMLHttpRequest.DONE) { // XMLHttpRequest.DONE == 4
                        if (xmlhttp.status >= 200 && xmlhttp.status <= 299) {
                            if ((form.elements["redirect-url-pp"].value.includes(window.location.origin))) {
                                parent.location.href = form.elements["redirect-url-pp"].value;
                            } else {
                                window.open(form.elements["redirect-url-pp"].value, "_blank");
                            }
                            dinForms.Spinner(form, false);
                            dinForms.ResetFormValues(form);
                        } else {
                            dinForms.Spinner(form, false);
                            // elemento deprecated
                            var msgErrorDep = form.getElementsByClassName("divMessageError")[0];
                            if (msgErrorDep) {
                                msgErrorDep.style.display = "block";
                            }
                            var msgAlert = form.getElementsByClassName("DinamizeDivMessageAlert")[0];
                            if (msgAlert) {
                                msgAlert.style.display = "block";
                            }
                        }
                    }
                };
                if (typeof params === "string" && params !== "") {
                    url += "?" + params; // encodeURI(params);
                }

                xmlhttp.open("POST", url, true);
                xmlhttp.send();
            },
            Spinner: function(form, show) {
                // manter versão por compatibilidade?
                var submitElement = form.getElementsByClassName("dinSubmit")[0];
                var spinnerElement = form.getElementsByClassName("spinner")[0];

                if (show) {
                    if (spinnerElement)
                        spinnerElement.style.display = "block";

                    if (submitElement)
                        submitElement.value = "";

                } else {
                    if (spinnerElement)
                        spinnerElement.style.display = "none";

                    if (submitElement)
                        submitElement.value = submitElement.getAttribute("original-value");
                }
            },
            GetCookie: function(cname) {
                var name = cname + "=";
                var decodedCookie = decodeURIComponent(document.cookie);
                var ca = decodedCookie.split(";");
                for (var i = 0; i < ca.length; i++) {
                    var c = ca[i];
                    while (c.charAt(0) == " ") {
                        c = c.substring(1);
                    }
                    if (c.indexOf(name) == 0) {
                        return c.substring(name.length, c.length);
                    }
                }
                return "";
            },
            ResetFormValues: function(form) {
                // jquery existe?
                if (typeof($) != "undefined") {
                    // iCheck existe?
                    if ((typeof($().iCheck) != "undefined")) {
                        $(form).find("input[type=\"checkbox\"]:not(.cssOnly)").iCheck("uncheck");
                    }
                }

                var msgSuccess = form.getElementsByClassName("DinamizeDivMessageSuccess")[0];
                if (msgSuccess) {
                    msgSuccess.style.display = "block";
                }
                var imgRequest = document.getElementById("DinamizeImgResponse");
                if (imgRequest) {
                    imgRequest.remove();
                }
                form.reset();
            },
            LimpaAvisos: function(form) {
                var msgSuccess = form.getElementsByClassName("DinamizeDivMessageSuccess")[0];
                if (msgSuccess)
                    msgSuccess.style.display = "none";

                var msgAlert = form.getElementsByClassName("DinamizeDivMessageAlert")[0];
                if (msgAlert)
                    msgAlert.style.display = "none";

                var msgError = form.getElementsByClassName("DinamizeDivMessageError")[0];
                if (msgError)
                    msgError.style.display = "none";

                // elemento deprecated, de landingPage
                var msgErrorDep = form.getElementsByClassName("divMessageError")[0];
                if (msgErrorDep)
                    msgErrorDep.style.display = "none";

                var msgCaptcha = form.getElementsByClassName("DinamizeDivCaptchaMessage")[0];
                if (msgCaptcha)
                    msgCaptcha.style.display = "none";
            },
            validateEmail: function(email) {
                var re = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
                return re.test(email);
            },
            prepareDate: function(date, format) {
                var newDate, time;
                format = format.substr(0, 10).replace("/", "").replace("/", "").replace("-", "").replace("-", "");
                time = date.substr(10, 15);

                if (format == "DDMMAAAA") {
                    newDate = date[6] + date[7] + date[8] + date[9] + "-" + date[3] + date[4] + "-" + date[0] + date[1];
                } else if (format == "MMDDAAAA") {
                    newDate = date[6] + date[7] + date[8] + date[9] + "-" + date[0] + date[1] + "-" + date[3] + date[4];
                } else if (format == "AAAAMMDD") {
                    newDate = date[0] + date[1] + date[2] + date[3] + "-" + date[5] + date[6] + "-" + date[8] + date[9];
                }

                return newDate + time;
            },
            existDate: function(date, time) {
                if (time) {
                    if (date.length != 16) {
                        return false;
                    }
                } else if (!time) {
                    if (date.length != 10) {
                        return false;
                    }
                    date += " 00:00";
                }

                var NEWDATE = new Date(date.replace("-", "/").replace("-", "/"));
                var strNewdate;

                var y = NEWDATE.getFullYear().toString();
                var m = (NEWDATE.getMonth() + 1).toString();
                var d = NEWDATE.getDate().toString();
                var h = NEWDATE.getHours().toString();
                var min = NEWDATE.getMinutes().toString();
                strNewdate = y + "-" + (m[1] ? m : "0" + m[0]) + "-" + (d[1] ? d : "0" + d[0]) + " " + (h[1] ? h : "0" + h[0]) + ":" + (min[1] ? min : "0" + min[0]);

                if (date != strNewdate) {
                    return false;
                }

                return true;
            },
            addClass: function(classname, element) {
                var cn = element.className;
                if (cn.indexOf(classname) != -1) {
                    return;
                }
                if (cn != "") {
                    classname = " " + classname;
                }
                element.className = cn + classname;
            },
            removeClass: function(classname, element) {
                var cn = element.className;
                var rxp = new RegExp("\\s?\\b" + classname + "\\b", "g");
                cn = cn.replace(rxp, "");
                element.className = cn;
            },
            //funcao do google faz o serialize estilo JQuery
            serialize: function(form) {
                if (!form || form.nodeName !== "FORM") {
                    return
                }
                var i, j, q = [];
                for (i = form.elements.length - 1; i >= 0; i = i - 1) {
                    if (form.elements[i].name === "") {
                        continue
                    }
                    switch (form.elements[i].nodeName) {
                        case "INPUT":
                            switch (form.elements[i].type) {
                                case "text":
                                case "hidden":
                                case "password":
                                case "button":
                                case "reset":
                                case "submit":
                                    q.push(form.elements[i].name + "=" + encodeURIComponent(form.elements[i].value));
                                    break;
                                case "checkbox":
                                case "radio":
                                    if (form.elements[i].checked) {
                                        q.push(form.elements[i].name + "=" + encodeURIComponent(form.elements[i].value))
                                    }
                                    break;
                                case "file":
                                    break
                            }
                            break;
                        case "TEXTAREA":
                            q.push(form.elements[i].name + "=" + encodeURIComponent(form.elements[i].value));
                            break;
                        case "SELECT":
                            switch (form.elements[i].type) {
                                case "select-one":
                                    q.push(form.elements[i].name + "=" + encodeURIComponent(form.elements[i].value));
                                    break;
                                case "select-multiple":
                                    for (j = form.elements[i].options.length - 1; j >= 0; j = j - 1) {
                                        if (form.elements[i].options[j].selected) {
                                            q.push(form.elements[i].name + "=" + encodeURIComponent(form.elements[i].options[j].value))
                                        }
                                    }
                                    break
                            }
                            break;
                        case "BUTTON":
                            switch (form.elements[i].type) {
                                case "reset":
                                case "submit":
                                case "button":
                                    q.push(form.elements[i].name + "=" + encodeURIComponent(form.elements[i].value));
                                    break
                            }
                            break
                    }
                }
                return q.join("&")
            },
        };
        var dinGAFunctions = {
            setUTMs: function(source, medium, campaign, term) {
                if (!window.parent) {
                    return;
                }
                if (typeof window.parent.dinFunctions !== "object" || typeof window.parent.dinFunctions.setUTMs !== "function") {
                    return;
                }
                window.parent.dinFunctions.setUTMs(source, medium, campaign, term);
            },
            sendEvent: function(eventName, eventCategory, eventLabel) {
                if (!window.parent) {
                    return;
                }
                if (typeof window.parent.dinFunctions !== "object" || typeof window.parent.dinFunctions.sendEventGA !== "function") {
                    return;
                }
                window.parent.dinFunctions.sendEventGA(eventName, eventCategory, eventLabel, 1);
            }
        };
    }
    
    if (document.readyState === "complete") {
        dinForms.onLoad();
    } else {
        if (window.attachEvent) {
            window.attachEvent("load", dinForms.onLoad);
        } else {
            window.addEventListener("load", dinForms.onLoad);
        }
    }
</script>