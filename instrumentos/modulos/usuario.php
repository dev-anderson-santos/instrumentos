<?php
require_once(dirname(dirname(__FILE__))."/lib.php");

proteger_arquivo(basename(__FILE__));

switch ($tela) {
    case 'login':
?>    
    <form method="post" action="">
        <h3>Efetue o seu login</h3>
        <label for="usuario">Usuário</label>
        <input type="text" name="usuario" align="left" width="30" height="10"  />
        <br />
        <label for="senha">Senha</label>
        <input type="password" name="senha" align="left" width="30" height="10"  />
        <div class="botao">
            <button type="submit">Acessar</button>
        </div><!-- fim do botao -->  
        <?php
            $erro = isset($_GET['erro']);
            switch($erro) {
                case 1:
                    echo '<div class="sucesso">Você fez log off do sistema</div>';
                    break;
                case 2:
                    echo '<div class="erro">Dados incorretos. Usuário inativo</div>';
                    break;
                case 3:
                    echo '<div class="erro">Faça login antes de acessar a página solicitada</div>';
                    break;
            }
        ?>
    </form>
        
<?php
    break;
    
    default:
        echo '<p>Erro 404</p>';
        break;
}