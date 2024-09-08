<!DOCTYPE html>
<head>
<link rel="stylesheet" type="text/css" href="../styles/css.css" />
</head>
<body>
</body>
</html>
<?php 
function data($data){
    return date("d/m/Y", strtotime($data));
}
function year($data){
    return date("Y", strtotime($data));
}

if(isset($_POST['enviado'])){
    if(empty($_POST['nome']) || empty($_POST['dataNascimento'])){
        ?><h1>INFORMAÇÕES FALTANDO!!</h1><br><a href="../../index.php">VOLTAR PARA O FORMULARIO</a><?php 
    }else{
        $nome = $_POST['nome'];
        $desc = $_POST['descricao'];
        $data = $_POST['dataNascimento'];       
        ?>

       <div id="Curriculo"> 
        <h1 class="titulo"><?php echo 'NOME: '.$nome;?></h1>
        <h1 class="titulo"><?php echo 'DATA DE NASCIMENTO: '.data("$data")."(".(2024-year("$data") ." anos" ).")"."<br>";?></h1>
        <div class="desc">
        <p class="paragrafo">SOBRE VOCÊ<br></p>
        <p class="paragrafo"><?php echo "$desc.<br>";?></p>
        </div>
        <p class="paragrafo">COMPETÊNCIAS: <br><?php foreach($_POST['enviado'] as $comp){echo "$comp<br>";}?></p>
        </div>

        <div id="apertar">
        <input type="button" value="Imprimir" id="imprimir"/>
        </div>


        <script>
            //sumir e aparecer botao quando apertado
        const but = document.getElementById("imprimir");
            but.addEventListener("click", impressao);
        
            function impressao(){   
            but.style.display = "none";  
            print();
        }

        window.addEventListener("afterprint",aparecer);
        
        function aparecer() {
            but.style.display = "inline-block";  // mostrar botão novamente
      
        }
      </script>
      <?php 
    }   
}
?>

