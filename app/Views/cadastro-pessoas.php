            <form method="post" action="gravar">
<div class="main-cadastro">
    <div class="direita-cadastro">
        <h1>Cadastre-se</h1>
        <img src="<?=base_url()?>/img/cadastrop.svg" class="imagemAstro" alt="astro">
    </div>
    <div class="esquerda-cadastro">
        <div class="card-cadastro">
            <h1>Cadastrar</h1> 

            <div class="textfield">
                <label for="nome">Nome</label>
                <input type="text" name="nome" placeholder="Nome"
                value="<?= isset($pessoa['nome']) ? $pessoa['nome'] : "" ?>">
            </div>
            <div class="textfield">
                <label for="Profissao">Profissão</label>
                <input type="text" name="profissao" placeholder="Profissão"
                value="<?= isset($pessoa['profissao']) ? $pessoa['profissao'] : "" ?>">
            </div>
            <div class="textfield">
                <label for="Idade">Idade</label>
                <input type="number" name="idade" placeholder="Idade"
                value="<?= isset($pessoa['idade']) ? $pessoa['idade'] : "" ?>">
            </div>
            <input type="hidden" name="id"
            value="<?= isset($pessoa['id']) ? $pessoa['id'] : "" ?>">
            <button type="submit" class="btn-cadastrop">Cadastrar</button>
  
     </div>   
  
    </div>
</div>
  </form>