<form method="get" id="form-example">

 <input type="text" name="CC">
 <button type="submit">Enviar</button>

</form>

<?php

     //Captura os dados do formulario
     $campExemplo =  $_GET['CC'];

     $name = 'arquivo.txt';

     //Concatena os valores no formato que quer salvar Exemplo: csv
     $text = $campExemplo . "\n". "";

     //Abre o arquivo para gravar se não existir ele cria
     $file = fopen($name, 'a');  

     fwrite($file, $text); // Grava os dados no arquivo
     fclose($file); // Fecha o arquivo que foi aberto


      ?>