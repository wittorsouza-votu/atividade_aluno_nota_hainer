
<?php

$linhas = file("cadastro.txt", FILE_IGNORE_NEW_LINES);
?>

<table border="1">
  <tr>
    <th>nome</th>
    <th>nota1</th>
    <th>nota2</th>
    <th>media</th>
    <th>aprovado</th>
    <th>reprovado</th>
    <th>resulatado</th>
  </tr>

  <?php foreach ($linhas as $linha) {
   
      $partes = explode("|", $linha);
    ?>
    <tr>
      <td><?= $partes[0] ?></td>
      <td><?= $partes[1] ?></td>
      <td><?= $partes[2] ?></td>
      <td><?= $partes[3] ?></td>
      <td><?= $partes[4] ?></td>
      <td>?=$total?</td>
      <td colspan="4"><td>
        
      $linhas
      

    
    </tr>
  <?php } ?>

</table>