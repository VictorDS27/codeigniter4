<form method="post" action="concluir">
<div class="main-cadastro">
    <div class="direita-cadastro">
        <h1>Cadastre seu veiculo:</h1>
        <img src="<?=base_url()?>/img/astronauta.svg" class="imagemAstro" alt="astro">
    </div>
    <div class="esquerda-cadastro">
        <div class="card-cadastro">
            <h1>Cadastrar</h1>
            
            <div class="textfield">
                <label for="marca">Marca</label>
                <input type="text" name="marca" placeholder="marca"
                value="<?= isset($veiculo['marca']) ? $veiculo['marca'] : "" ?>">
            </div>
            <div class="textfield">
                <label for="modelo">Modelo</label>
                <input type="text" name="modelo" placeholder="modelo"
                value="<?= isset($veiculo['modelo']) ? $veiculo['modelo'] : "" ?>">
            </div>
            <div class="textfield">
                <label for="placa">Placa</label>
                <input type="text" name="placa" placeholder="placa"
                value="<?= isset($veiculo['placa']) ? $veiculo['placa'] : "" ?>">
            </div>
            <div class="textfield">
                <label for="cor">Cor</label>
                <input type="text" name="cor" placeholder="cor"
                value="<?= isset($veiculo['cor']) ? $veiculo['cor'] : "" ?>">
            </div>
            <input type="hidden" name="id"
            value="<?= isset($veiculo['id']) ? $veiculo['id'] : "" ?>">
            <button type="submit" class="btn-cadastro">Cadastrar</button>
        </div>
    </div>
</div>
</form>