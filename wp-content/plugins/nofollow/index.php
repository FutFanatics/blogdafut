<html>
<head>
	<title>Weleak Emails</title>
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.5.11/css/mdb.min.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
</head>

<body>
	<br>
		<div class="row col-md-12">
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<div class="card col-sm-8">
  <h5 class="card-body h6">Checker Weleak só para Emails</h5>
  <div class="card-body">
    <center><span></span></center>
<div class="md-form">
	<div class="col-md-12">
  <textarea type="text" style="text-align: center;" id="lista" class="md-textarea form-control" rows="2"></textarea>
  <label for="lista">Apenas Email</label>
</div>
</div>
<center>
 <button class="btn btn-primary" style="width: 200px; outline: none;" id="testar" onclick="enviar()" >TESTAR</button>
     <?php echo "";
echo "<embed src='musica.mp3' width='1' height='1'>"; 
?>
  <button class="btn btn-danger" style="width: 200px; outline: none;">PARAR</button>
</center>
  </div>
</div>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<div class="card col-sm-2">
  <h5 class="card-body h6">Informações:</h5>
  <div class="card-body">
  	<span>Status:</span><span class="badge badge-secondary"> Aguardando o comando.</span>
<div class="md-form">
	<span>Aprovados:</span>&nbsp<span id="cLive" class="badge badge-success">0</span> 
	<span>Reprovadas:</span>&nbsp<span id="cDie" class="badge badge-danger"> 0</span>
	<span>Testadas:</span>&nbsp<span id="total" class="badge badge-info">0</span>
	<span>Carregadas:</span>&nbsp<span id="carregadas" class="badge badge-dark">0</span>
</div>
  </div>
</div>
</div>
<br>

<div class="col-md-12">
<div class="card">
<div style="position: absolute;
        top: 0;
        right: 0;">
	<button id="mostra" class="btn btn-primary">SHOW/HIDE</button>
</div>
  <div class="card-body">
    <h6 style="font-weight: bold;" class="card-title">Aprovadas - <span  id="cLive2" class="badge badge-success">0</span> </h6>
    <div id="bode"><span id=".aprovadas" class="aprovadas"></span>
</div>
  </div>
</div>
</div>

<br>
<br>
<br>


<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.js" type="text/javascript"></script>
<script type="text/javascript">

$(document).ready(function(){


    $("#bode").hide();
	$("#esconde").show();
	
	$('#mostra').click(function(){
	$("#bode").slideToggle();
	});

});

</script>

<script type="text/javascript">

$(document).ready(function(){


    $("#bode2").hide();
	$("#esconde2").show();
	
	$('#mostra2').click(function(){
	$("#bode2").slideToggle();
	});

});

</script>

<script title="ajax do checker">
 
    function enviar() {
        
        var linha = $("#lista").val();
        var linhaenviar = linha.split("\n");
        var total = linhaenviar.length;
        var ap = 0;
        var rp = 0;
        linhaenviar.forEach(function(value, index) {
            setTimeout(
                    function() {
                    $.ajax({
                        url: 'form_get.php?ip=' + value,
                        type: 'GET',
                        async: true,
                        success: function(resultado) {
                            if (resultado.match("Owned")) {
								 
                                removelinha();
                                ap++;
                                aprovadas(resultado + "");
								 var audio = new Audio('blp.mp3');
                            }else {
                                removelinha();
                                rp++;
                                reprovadas(resultado + "");
                            }
                            $('#carregadas').html(total);
                            var fila = parseInt(ap) + parseInt(rp);
                            $('#cLive').html(ap);
                            $('#cDie').html(rp);
                            $('#total').html(fila);
                            $('#cLive2').html(ap);
                            $('#cDie2').html(rp);
                        }
                    });
                }, 1500 * index);
        });
    }
    function aprovadas(str) {
        $(".aprovadas").append(str + "<br>");
    }
    function reprovadas(str) {
        $(".reprovadas").append(str + "<br>");
    }
    function removelinha() {
        var lines = $("#lista").val().split('\n');
        lines.splice(0, 1);
        $("#lista").val(lines.join("\n"));
    }
</script>


<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.5.11/js/mdb.min.js"></script>
</body>
<br>
<footer >


    <div class="footer-copyright text-center py-3">
   
    </div>


  </footer>

</html>