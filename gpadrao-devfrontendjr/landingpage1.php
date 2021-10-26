<?php
    include("db.php");

    if(isset($_POST['registrar'])){
       
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $telefone = $_POST['telefone'];
        $endereco = $_POST['endereco'];
        $numero = $_POST['numero'];
        $estado = $_POST['estado'];
        
        mysql_query("INSERT INTO `pessoas` 
                    (`nome`, `email`, `telefone`, `endereco`, `numero`, `estado`)
                    VALUES 
                    ('$nome','$email','$telefone','$endereco','$numero', '$estado')
                    ");
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conarec 2019 - LP</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400&display=swap" rel="stylesheet">

    <script src="https://kit.fontawesome.com/a5a99dad4e.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="stylelandingpage1.css" >
</head>

<header>
    <img src="img\conarec-logolp.png">
</header>


<body>
<!--Tema superior, centralizado e com fundo azul escuro-->
    <div class="theme-h1">
        <h1>TEMA: "O CONSUMIDOR HACKEADO: A<br>
        REINVENÇÃO DA LIBERDADE DE ESCOLHA"</h1>
    </div>

<!--setor abaixo do tema superior, constituído de duas áreas, uma à esquerda e outra à direita
Esquerda: theme-h2
Direita: date-local-->
    <div class="higher">
            <h2 class="theme-h2"><b>"O CONSUMIDOR HACKEADO: a<br>
            reinvenção da liberdade de escolha"</b></h2>
             
            <h2 class="date-local">DATA: 10 E 11 DE NOVEMBRO<br>
            LOCAL: TRANSAMÉRICA EXPO CENTER - SP<br>
            ON-LINE E PRESENCIAL</h2>
    </div>
<!--setor central, constituído de texto e formulário
div principal: CENTER-LP
div texto: DESC-LP
div formulário: FORM-LP


-->
    <div class="center-lp">
        <div class="desc-lp">
            <h4>O consumidor está mudando. A imersão digital transformou a experiência de como compramos, trabalhamos e nos relacionamos, potencializando o poder dos algoritmos e a assertividade das ofertas.</h4>

            <p>Agora, as empresas têm todos os dados do cliente, mas até que ponto o conhece de verdade para engajar e construir as melhores experiências? Compre seu ingresso e venha descobrir no <b>CONAREC</b>.<br><br>

            Faça esse <b>MBA Express em Customer Experience</b>, transforme a sua visão estratégica, reconstrua a liberdade de escolha e reflita sobre tudo o que aprendemos nos últimos meses vivenciando o autêntico hackeamento do consumidor. Garanta agora a sua vaga.<br><br><br> 

            O maior congresso de Customer Experience da América Latina, conectado à perspectiva inovadora da Consumidor Moderno vem, há 19 anos, lançando conceitos decisivos no mercado brasileiro, como:<br><br>
                
            <b>As empresas com causa e propósito<br><br>
                    
            O potencial dos Millennials<br><br>
                    
            O pós-consumidor</b><br><br>
                    
            Entre outros…<br><br>
                    
            Agora, mais do que nunca, é hora de nos unirmos com foco no engajamento do consumidor.<br><br>
                    
            CONAREC 2021: o caminho mais curto entre o home office e o board room. IMPERDÍVEL!</p>
        </div>
        
        
        <form method="POST" class="form-lp">         
            <div>
                <h2 class="invite-form"><b>CADASTRE-SE NO CONAREC 2021</b></h2>
            </div>   
        
            <div class="name" class="input-data">
                <p>Nome completo</p>
                <input type="name" name="nome" placeholder="Marcos Almeida Correia"></input>
            </div>

            <div class="email" class="input-data">
                <p>Digite seu melhor e-mail</p>
                <input type="email" name="email" placeholder="exemplo@gmail.com"></input>
            </div>

            <div class="text" class="input-data">
                <p>Telefone</p>
                <input type="text" name="telefone" placeholder="DDD + Número"></input>
            </div>

            <div class="full-adress">
                <div class="address" class="input-data">
                    <p>Endereço</p>
                    <input type="text" name="endereco"placeholder="Ex: Rua Pacaembu"></input>
                </div> 
                    
                <div class="streetnumber" class="input-data">
                    <p>Número</p>
                    <input type="text" name="numero" placeholder="Ex: 658"></input>
                </div>
            </div>   
    <!--ESTADO
    PHP E CONEXÃO COM BANCO DE DADOS, COMANDO SELECT PARA CONSULTAR TABELA DE ESTADO-->
            <div class="state" class="input-data">
                <p>Estado</p>
                <select name="estado">
                    <option>Selecione</option>
                    
                    <?php
                        $resultado_estados = mysql_query("SELECT * FROM estados");
                        while($row_estados = mysql_fetch_assoc($resultado_estados)){
                    ?>

                    <option value="<?php echo $row_estados['sigla']; ?>">
                        <?php echo $row_estados['sigla'];?>
                    </option>
 
                    <?php
                        }                    
                    ?>


                </select>
            </div>
    <!--PHP e MySQL ^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^-->
            <div class="submitform">
                    <input type="submit" name="registrar" value="Cadastrar"class="submit-button"></input>
            </div>
        </form>  
           
    </div>
        
    <hr>
    <div class="sponsors">
        <h2>PATROCÍNIO</h2>
        <img src="img\sponsors-partners.png" class="footer-sponsors">
    </div>  
</body>
</html>