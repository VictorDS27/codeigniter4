<h1 style="color:#7f2da4 ;"> <?=$title?> </h1>

<table class="table">
  <tr>
    <td>Nome</td>
    <td>Profissão</td>
    <td>Idade</td>
    <td></td>
 </tr> 

 <?php

 foreach($pessoas as $pessoa_item){
   ?>
   <div >
   <tr style="color: #9539e7">
   <td> <?= $pessoa_item['nome'] ?></td> 
   <td> <?= $pessoa_item['profissao'] ?></td> 
   <td> <?= $pessoa_item['idade'] ?></td> 
   <td><a href="excluir/<?=$pessoa_item['id']?>" class="btn btn-danger">Apagar</a></td>
   <td><a href="" class="btn btn-warning">Editar</a></td>
  </tr>
</div>

  <?php 
 }
 ?>
 </table>
