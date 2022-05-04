<h1 style="color:#7f2da4 ;"> <?=$title?> </h1>

<table class="table">
  <tr>
    <td>Nome</td>
    <td>Profissão</td>
    <td>Idade</td>
 </tr> 

 <?php

 foreach($pessoas as $pessoa_item){
   ?>
   <div >
   <tr style="color: #9539e7">
   <td> <?= $pessoa_item['nome'] ?></td> 
   <td> <?= $pessoa_item['profissao'] ?></td> 
   <td> <?= $pessoa_item['idade'] ?></td> 
  </tr>
</div>

  <?php 
 }
 ?>
 </table>
