<?php require_once "../lib.php"; ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Dó Ré Mi - Artigos musicais - Cadastro</title>
<meta name="keywords" content="Dó Ré Mi artigos musicais" />
<meta name="description" content="Site de compra de artigos musicias" />
<!--link href="css/cadastro.css" rel="stylesheet" type="text/css" /-->

<script>
	
	function cad(){
		alert("Cadastro efetuado com sucesso!!!\nBoas compras!");
	}
</script>

<?php 
  //load_css('reset');
  load_css('bootstrap');
  load_css('cadastro'); 
  load_js('jquery');
  load_js('geral');
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
	  <p class="novo">Novo cadastro</p><p class="novo1">Preencha os campos abaixo:</p>
		
        	<form method="post" id="frmCampo">
				<fieldset>      
                	<legend> Dados para acesso </legend>          
                    <label class="texto">Email:</label>
                    <input type="text" name="emailCadastro" align="left" width="30" height="10"  /><br />
                    <label class="texto">Confirmação do Email:</label>
                    <input type="text" name="emailCadastro" align="left" width="30" height="10"  /><br />
                    <label class="texto">Senha:</label>
                    <input type="password" name="emailCadastro" align="left" width="30" height="10"  /><br />
                    <label class="texto">Confirme sua senha:</label>
                    <input type="password" name="emailCadastro" align="left" width="30" height="10"  />
                </fieldset>
                
                <fieldset>      
                	<legend> Dados Pessoais </legend>          
                    <label class="texto">Nome completo:</label>
                    <input type="text" name="emailCadastro" align="left" width="30" height="10"  /><br />
                    <label class="texto">Sexo:</label>
                    <input type="radio" name="sexoCadastro" value="Masculino" align="left" /> Masculino
                    <input type="radio" name="sexoCadastro" value="Feminino" align="left" /> Feminino<br />
                    <label class="texto">CPF:</label>
                    <input type="text" name="emailCadastro" placeholder="000.000.000-00" align="left" /><br />
                    <label class="texto">Data de nascimento:</label>
                    <input type="text" name="emailCadastro" placeholder="__/__/__" align="left" />
                </fieldset>
                
                <fieldset>      
                	<legend> Endereço </legend>          
                    <label class="cep">CEP:</label>
                    <input type="text" name="cepCadastro" align="left" width="30" height="10"  /><br />
                    <label class="texto">Logradouro:</label>
                    <input type="text" name="logradouroCadastro" align="left" width="30" height="10"  /><br />
                    <label class="texto">Número:</label>
                    <input type="text" name="numeroCadastro" align="left" width="20" height="10"  /><br />
                    <label class="texto">Complemento:</label>
                    <input type="text" name="compCadastro" align="left" width="30" height="10"  />
                    <label class="texto">Bairro:</label>
                    <input type="text" name="bairroCadastro" align="left" width="30" height="10"  />
                    <label class="texto">Cidade:</label>
                    <input type="text" name="cidadeCadastro" align="left" width="30" height="10"  />
                    <label class="texto">Estado:</label>
                    <select name="estadoCadastro" >
                    	<option value="">&nbsp;</option>
                        <option value="AC">AC</option>
                        <option value="AL">AL</option>
                        <option value="AP">AP</option>
                        <option value="AM">AM</option>
                        <option value="BA">BA</option>
                        <option value="CE">CE</option>
                        <option value="DF">DF</option>
                        <option value="ES">ES</option>
                        <option value="GO">GO</option>
                        <option value="MA">MA</option>
                        <option value="MT">MT</option>
                        <option value="MS">MS</option>
                        <option value="MG">MG</option>
                        <option value="PA">PA</option>
                        <option value="PB">PB</option>
                        <option value="PR">PR</option>
                        <option value="PE">PE</option>
                        <option value="PI">PI</option>
                        <option value="RJ">RJ</option>
                        <option value="RN">RN</option>
                        <option value="RS">RS</option>
                        <option value="RO">RO</option>
                        <option value="RR">RR</option>
                        <option value="SC">SC</option>
                        <option value="SP">SP</option>
                        <option value="SE">SE</option>
                        <option value="TO">TO</option>
                    </select>
                </fieldset>
                
                <fieldset>      
                	<legend> Dados para contato </legend>          
                    <label class="texto">Telefone:</label>
                    <input type="text" name="telefoneCadastro" align="left" width="30" height="10"  /><br />
                    <label class="texto">Celular:</label>
                    <input type="text" name="celularCadastro" align="left" width="30" height="10"  /><br />
           		</fieldset>
                
                <fieldset>      
                	<legend> Como conheceu o site? </legend>          
                    <input type="checkbox" name="comoCadastro" align="left"  /> Google&nbsp;&nbsp;&nbsp;
                    <input type="checkbox" name="comoCadastro" align="left"  /> Yahoo!&nbsp;&nbsp;&nbsp;
                    <input type="checkbox" name="comoCadastro" align="left"  /> Facebook&nbsp;&nbsp;&nbsp;
                    <input type="checkbox" name="comoCadastro" align="left"  /> R&aacute;dio&nbsp;&nbsp;&nbsp;
                    <input type="checkbox" name="comoCadastro" align="left"  /> TV&nbsp;&nbsp;&nbsp;
                    <input type="checkbox" name="comoCadastro" align="left"  /> Amigos<br />
           		</fieldset>
                
                <fieldset>      
                	<legend> Newsletters? </legend>          
                    Gostaria de receber por e-mail, not&iacute;cias e promoç&otilde;es do nosso site?
                    <input type="radio" name="newsCadastro" align="left"  /> Sim&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="radio" name="newsCadastro" align="left"  /> N&atilde;o<br />
           		</fieldset>
                
                <div class="botao2">
                	<a href="index.html" onclick="cad()">Efetuar cadastro</a>
                </div><!-- fim do botao -->
                
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
</body>
</html>
