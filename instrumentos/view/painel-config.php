<?php require_once "../lib.php"; ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Dó Ré Mi - Artigos musicais - Cadastro</title>
<meta name="keywords" content="Dó Ré Mi artigos musicais" />
<meta name="description" content="Site de compra de artigos musicias" />
<!--link href="css/cadastro.css" rel="stylesheet" type="text/css" /-->

<?php 
  //load_css('reset');
  load_css('bootstrap');
  load_css('cadastro');   
  
?>

</head>

<body>
<div id="pagina">
  <div id="topo">
  	<h1 class="logo">
    	<a href="../index.php"><img src="../img/logo4.png" title="Dó Ré Mi" alt="Dó Ré Mi - Artigos musicias" width="300" height="200"/>
    </h1>
  	<div class="contaPedidos">
    	<a href="#">Minha conta | </a> 
    	<a href="#">Meus Pedidos | </a> 
    	<a href="#">Meu carrinho (0)</a>
        
   	  <div id="login">
        	<form method="post">
            	<h3>Efetue o seu login</h3>
       	  		<label>Login</label>
        		<input type="text" name="emailLogin" value="E-mail" align="left" width="30" height="10"  />
                <br />
                <label>Senha</label>
                <input type="password" name="senhaLogin" value="Senha" align="left" width="30" height="10"  />
                <div class="botao">
                	<a href="#">CONFIRMA</a>
                </div><!-- fim do botao -->          
      		</form>
            <a href="#"> Cadastre-se</a>
      	</div><!-- fim do login -->        
    </div><!-- fim do contaPedidos -->
  </div><!-- fim do menu -->
  
  <div id="menu">
  	<img src="img/lupa.png" title="Buscar" alt="Buscar" />
    <input type="text" placeholder="Buscar por" />
    
  </div><!-- fim do menu -->
  <div id="conteudo">     
    <div id="conteudo_central">
	  <p class="novo">Painel de configuração</p>
		      
        <div class="tab">
          <button class="tablinks" onclick="openTab(event, 'Cores')" id="defaultOpen">Cores</button>
          <button class="tablinks" onclick="openTab(event, 'Images')">Imagens</button>
          <button class="tablinks" onclick="openTab(event, 'ConfAdv')">Configurações avançadas</button>
        </div>
      <form action="">
        <div id="Cores" class="tabcontent">
          <div id="change" style="height: 50px; background-color: rgb(255, 0, 0)"></div>
          <input oninput="changeRed(this.value)" onchange="changeRed(this.value)" id="slideRed" name="slideRed" min="0" max="255" type="range"><br/>
          <input oninput="changeGreen(this.value)" onchange="changeGreen(this.value)" id="slideGreen" name="slideGreen" min="0" max="255" type="range"><br/>
          <input oninput="changeBlue(this.value)" onchange="changeBlue(this.value)" id="slideBlue" name="slideBlue" min="0" max="255" type="range"><br/>
          <label class="texto">Confirmação do Email:</label>
          <input type="text" name="emailCadastro" align="left" width="30" height="10"  /><br />
          <label class="texto">Senha:</label>
          <input type="password" name="emailCadastro" align="left" width="30" height="10"  /><br />
          <label class="texto">Confirme sua senha:</label>
          <input type="password" name="emailCadastro" align="left" width="30" height="10"  />
        </div>

        <div id="Images" class="tabcontent">
          <h3>Logo</h3>
          <label>Logo do site: </label>
          <input type="file"><br/>
          <h3>FavIcon</h3>
          <label>Ícone de favorito: </label>
          <input type="file">
        </div>

        <div id="ConfAdv" class="tabcontent">
          <h3>Configurações avançadas</h3>
          <label>E-mail para contato</label>
          <input type="email">
        </div>

        <input type="submit" class="btn btn-primary" value="Salvar alterações">
      </form>
              
    </div><!-- fim do conteudo_central -->
  </div> <!-- fim do conteúdo -->
  
  <div id="rodape">
    	<p align="right"><img src="img/cartoes.jpg" alt="Formas de pagamentos" /></p>
    <hr color="#CCCCCC" />
    <div class="copy">COPYRIGHT 2013 - D&Oacute; R&Eacute; MI | RAZ&Atilde;O SOCIAL: RP3 IND&Uacute;STRIA DE INSTRUMENTOS LTDA. | CNPJ 03.030.333/0003-33 | ENDEREÇO: RUA OCRICROCRIDES COROZIRIO, 333 - CIC - CRISCI&Uacute;MA - PR - CEP 33333-333
    </div><!-- fim da copy -->
  </div> <!-- fim do rodapé -->
</div> <!-- fim da página -->
<?php
  load_js('jquery');
  load_js('custom');
?>
</body>
</html>
