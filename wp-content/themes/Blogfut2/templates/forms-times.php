<?php
$form = get_post_meta(get_the_ID(), 'post_form_time', true);

if ($form != 'none') {
    $dadosTimes = getTimes();
    ?>
    <div class="form-custom <?php echo $form ? 'form-times ' . $form : 'form-geral'; ?>">
        <div class="row">
            <?php if (!$form) { ?>
                <div class="col-xs-12">
                    <div class="form-top">
                        <p class="text-center">Cadastre seu e-mail e seja o primeiro a receber ofertas imperdíveis!</p>
                    </div>

                    <form accept-charset="UTF-8" method="post" action="https://receiver.emkt.dinamize.com/in/301603/1/73cfd/0">
                        <input type="hidden" name="update_mode" value="AS"/>
                        <input type="hidden" name="form-code" value="44"/>
                        <input type="hidden" name="isMsg" value="true"/>
                        <input type="hidden" name="text-confirmation" value="U2V1IGUtbWFpbCBmb2kgY2FkYXN0cmFkbyBjb20gc3VjZXNzbyE="/>
                        <input type="hidden" name="text-error" value=""/>
                        <input type="hidden" name="text-alert" value=""/>
                        <input type="hidden" name="cmp4" value="BlogFut_FormGeral"/>
                        <input type="hidden" name="phase-change" value="off"/>

                        <div class="form-inline">
                            <div class="form-group col-xs-12 col-sm-6">
                                <input type="text" name="cmp2"  placeholder="Nome*" class="form-control" maxlength="80" required="required" />
                            </div>
                            <div class="form-group col-xs-12 col-sm-6">
                                <input type="text" name="cmp1"  placeholder="E-mail*" class="form-control" maxlength="80" required="required" />
                            </div>
                            <div class="form-group col-xs-12 col-sm-6 genero">
                                <label class="radio-inline">
                                    <input type="radio" value="Feminino" name="cmp8" required="required"><span></span>Feminino
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" value="Masculino" name="cmp8"><span></span>Masculino
                                </label>
                            </div>
                            <div class="form-group col-xs-12 col-sm-6">
                                <input type="text" hd-name="cmp9" placeholder="Aniversário*" class="form-control dt-nasc" maxlength="10" required="required" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" />
                            </div>
                            <div class="col-xs-12">
                                <h4>
                                    Preferências
                                    <span>Selecione ao menos uma alternativa em cada coluna abaixo</span>
                                </h4>
                            </div>
                            <div class="form-group col-xs-12 col-sm-6">
                                <select multiple="multiple" hd-name="cmp12" class="form-control select-multi" data-placeholder="Time Brasileiro">
                                    <option value="Nenhum">Nenhum</option>
                                    <option value="Outro">Outro</option>
                                    <option value="Todos os Clubes da Lista">Todos os Clubes da Lista</option>
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
                                </select>
                                <input type="hidden" name="cmp12_action" value="replacement" />
                            </div>
                            <div class="form-group col-xs-12 col-sm-6">
                                <select multiple="multiple" hd-name="cmp13" class="form-control select-multi" data-placeholder="Time Internacional">
                                    <option value="Nenhum">Nenhum</option>
                                    <option value="Outro">Outro</option>
                                    <option value="Todos os Clubes da Lista">Todos os Clubes da Lista</option>
                                    <option value="AEK Atenas">AEK Atenas</option>
                                    <option value="Ajaccio">Ajaccio</option>
                                    <option value="Ajax">Ajax</option>
                                    <option value="Al-Hilal">Al-Hilal</option>
                                    <option value="Al-Ittihad">Al-Ittihad</option>
                                    <option value="Alcorcon">Alcorcon</option>
                                    <option value="América de Cáli">América de Cáli</option>
                                    <option value="Argentinos Juniors">Argentinos Juniors</option>
                                    <option value="Arsenal">Arsenal</option>
                                    <option value="Arsenal  Sarandí">Arsenal  Sarandí</option>
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
                                <input type="hidden" name="cmp13_action" value="replacement" />
                            </div>
                            <div class="form-group col-xs-12 col-sm-6">
                                <select multiple="multiple" hd-name="cmp14" class="form-control select-multi" data-placeholder="Esportes favoritos">
                                    <option value="Nenhum">Nenhum</option>
                                    <option value="Outro">Outro</option>
                                    <option value="Todos os Esportes da Lista">Todos os Esportes da Lista</option>
                                    <option value="Artes Marciais">Artes Marciais</option>
                                    <option value="Automobilismo">Automobilismo</option>
                                    <option value="Aventura">Aventura</option>
                                    <option value="Basquete">Basquete</option>
                                    <option value="Beisebol">Beisebol</option>
                                    <option value="Bike">Bike</option>
                                    <option value="Caminhada">Caminhada</option>
                                    <option value="Corrida">Corrida</option>
                                    <option value="Crossfit">Crossfit</option>
                                    <option value="Futebol">Futebol</option>
                                    <option value="Futebol Americano">Futebol Americano</option>
                                    <option value="Futebol Society">Futebol Society</option>
                                    <option value="Futsal">Futsal</option>
                                    <option value="Handebol">Handebol</option>
                                    <option value="Musculação">Musculação</option>
                                    <option value="Natação">Natação</option>
                                    <option value="Rugby">Rugby</option>
                                    <option value="Skate">Skate</option>
                                    <option value="Tennis">Tennis</option>
                                    <option value="Vôlei">Vôlei</option>
                                </select>
                                <input type="hidden" name="cmp14_action" value="replacement" />
                            </div>

                            <div class="form-group col-xs-12 col-sm-6">
                                <select multiple="multiple" hd-name="cmp15" class="form-control select-multi" data-placeholder="Interesses">
                                    <option value="Nenhum">Nenhum</option>
                                    <option value="Outro"> Outro</option>
                                    <option value="Acessórios de proteção">Acessórios de proteção</option>
                                    <option value="Artigos para árbitros">Artigos para árbitros</option>
                                    <option value="Artigos para goleiros">Artigos para goleiros</option>
                                    <option value="Bermudas">Bermudas</option>
                                    <option value="Bolas e acessórios">Bolas e acessórios</option>
                                    <option value="Bolsas e mochilas">Bolsas e mochilas</option>
                                    <option value="Bonés e gorros">Bonés e gorros</option>
                                    <option value="Camisas de seleções">Camisas de seleções</option>
                                    <option value="Camisas de time">Camisas de time</option>
                                    <option value="Chuteiras">Chuteiras</option>
                                    <option value="Combos promocionais">Combos promocionais</option>
                                    <option value="Fardamentos para times">Fardamentos para times</option>
                                    <option value="Jaquetas e moletons">Jaquetas e moletons</option>
                                    <option value="Moda casual">Moda casual</option>
                                    <option value="Novidades">Novidades</option>
                                    <option value="Personalização Grátis">Personalização Grátis</option>
                                    <option value="Promoções">Promoções</option>
                                    <option value="Roupas para treino">Roupas para treino</option>
                                    <option value="Tênis">Tênis</option>
                                </select>
                                <input type="hidden" name="cmp15_action" value="replacement" />
                            </div>

                            <div class="form-group col-xs-12"></div>
                            <div class="form-group col-xs-12"></div>
                            
                            <div class="form-group col-xs-12 col-sm-6">
                                <label class="aceite-label">
                                    <input type="checkbox" class="aceite-input" checked="checked"><span class="icon-checkbox checked"></span><span>Li e concordo com a <a href="https://www.futfanatics.com.br/politica-de-privacidade" target="_blank">Política de Privacidade</a></span>
                                </label>
                            </div>
                            <div class="form-group col-xs-12 col-sm-6">
                                <div class="buttons">
                                    <button type="submit">Receber Novidades</button>
                                    <button type="submit"><span class="glyphicon glyphicon-chevron-right"></span></button>
                                </div>
                            </div>
                            <div class="col-xs-12">
                                <div class="msg-resp"></div>
                            </div>
                        </div>
                    </form>
                </div>
            <?php } elseif ($form == 'blackfriday') { ?>
                <div class="col-xs-12">
                    <div class="form-top">
                        <h4>Black Friday <?php echo date('Y'); ?> FutFanatics</h4>
                        <p class="text-center">Cadastre seu e-mail e seja o primeiro a receber ofertas imperdíveis!</p>
                    </div>

                    <form accept-charset="UTF-8" method="post" action="https://receiver.emkt.dinamize.com/in/301603/1/73cfd/0">
                        <input type="hidden" name="update_mode" value="AS"/>
                        <input type="hidden" name="form-code" value="70"/>
                        <input type="hidden" name="isMsg" value="true"/>
                        <input type="hidden" name="text-confirmation" value="U2V1IGUtbWFpbCBmb2kgY2FkYXN0cmFkbyBjb20gc3VjZXNzbyE="/>
                        <input type="hidden" name="text-error" value=""/>
                        <input type="hidden" name="text-alert" value=""/>
                        <input type="hidden" name="cmp4" value="Black Friday 2019_Blog"/>
                        <input type="hidden" name="ignore-fields" value="on"/>
                        <input type="hidden" name="phase-change" value="off"/>

                        <div class="form-inline">
                            <div class="form-group col-xs-12 col-sm-6">
                                <input type="text" name="cmp2"  placeholder="Seu Nome*" class="form-control" maxlength="80" required="required" />
                            </div>
                            <div class="form-group col-xs-12 col-sm-6">
                                <input type="text" name="cmp1"  placeholder="Seu E-mail*" class="form-control" maxlength="80" required="required" />
                            </div>
                            <div class="form-group col-xs-12 col-sm-6">
                                <select name="cmp12" class="form-control select-single" data-placeholder="Time do Coração*" required="required">
                                    <option value="">Time do Coração*</option>
                                    <option value="Nenhum">Nenhum</option>
                                    <option value="Outro">Outro</option>
                                    <option value="Todos os Clubes da Lista">Todos os Clubes da Lista</option>
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
                                </select>
                                <input type="hidden" name="cmp12_action" value="replacement" />
                            </div>
                            <div class="form-group col-xs-12 col-sm-6">
                                <div class="buttons">
                                    <button type="submit">Cadastrar<span class="glyphicon glyphicon-chevron-right"></span></button>
                                </div>
                                <div class="text-right">
                                    <a href="https://www.futfanatics.com.br/politica-de-privacidade" target="_blank" class="politica">Política de Privacidade</a>
                                </div>
                            </div>
                            <div class="col-xs-12">
                                <div class="msg-resp"></div>
                            </div>
                        </div>
                    </form>
                </div>
            <?php } else { ?>
                <div class="col-xs-10 col-xs-offset-1">
                    <div class="form-top">
                        <div class="time-title hidden-xs">
                            <div class="icon <?php echo $form; ?>"></div>
                        </div>
                        <p>Cadastre seu e-mail e seja o primeiro a receber novidades e ofertas do <strong><?php echo $dadosTimes[$form]['nome-exibicao']; ?></strong></p>
                    </div>
                </div>
                <div class="col-xs-12">
                    <form accept-charset="UTF-8" method="post" action="<?php echo $dadosTimes[$form]['action']; ?>">
                        <input type="hidden" name="update_mode" value="AS"/>
                        <input type="hidden" name="isMsg" value="true"/>
                        <input type="hidden" name="text-confirmation" value="U2V1IGUtbWFpbCBmb2kgY2FkYXN0cmFkbyBjb20gc3VjZXNzbyE="/>
                        <input type="hidden" name="text-error" value=""/>
                        <input type="hidden" name="text-alert" value=""/>
                        <input type="hidden" name="phase-change" value="off"/>

                        <input type="hidden" name="form-code" value="<?php echo $dadosTimes[$form]['form-code']; ?>"/>
                        <input type="hidden" name="cmp4" value="<?php echo $dadosTimes[$form]['lead']; ?>"/>
                        <input name="cmp12" type="hidden" value="<?php echo $dadosTimes[$form]['time']; ?>"/>

                        <div class="form-inline">
                            <div class="form-group col-xs-12 col-sm-6">
                                <input type="text" name="cmp2" placeholder="Nome*" class="form-control" maxlength="80" required="required" />
                            </div>
                            <div class="form-group col-xs-12 col-sm-6">
                                <input type="text" name="cmp1" placeholder="E-mail*" class="form-control" maxlength="80" required="required" />
                            </div>
                            <div class="form-group col-xs-12 col-sm-6">
                                <label class="aceite-label">
                                    <input type="checkbox" class="aceite-input" checked="checked"><span class="icon-checkbox checked"></span><span>Li e concordo com a <a href="https://www.futfanatics.com.br/politica-de-privacidade" target="_blank">Política de Privacidade</a></span>
                                </label>
                            </div>
                            <div class="form-group col-xs-12 col-sm-6">
                                <div class="buttons">
                                    <button type="submit">Receber Novidades</button>
                                    <button type="submit"><span class="glyphicon glyphicon-chevron-right"></span></button>
                                </div>
                            </div>
                            <div class="col-xs-12">
                                <div class="msg-resp"></div>
                            </div>
                        </div>
                    </form>
                </div>
            <?php } ?>
        </div>
    </div>
    <?php
}
