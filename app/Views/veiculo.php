<h1 style="color:#7f2da4 ;"> <?=$title?> </h1>

<table class="table">
  <tr>
    <td>marca</td>
    <td>modelo</td>
    <td>placa</td>
    <td>cor</td>
 </tr> 

 <?php

 foreach($veiculos as $veiculo_item){
   ?>
   <div >
   <tr style="color: #9539e7">
   <td> <?= $veiculo_item['marca'] ?></td> 
   <td> <?= $veiculo_item['modelo'] ?></td> 
   <td> <?= $veiculo_item['placa'] ?></td> 
   <td> <?= $veiculo_item['cor'] ?></td>
   <td><a href="excluirVeiculo/<?=$veiculo_item['id']?>" class="btn btn-danger">Apagar</a></td>
   <td><a href="editarVeiculo/<?=$veiculo_item['id']?>" class="btn btn-warning">Editar</a></td>
  </tr>
</div>

  <?php 
 }
 ?>
 </table>
