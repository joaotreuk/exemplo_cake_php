<table>
  <tr>
    <th>Código</th><th>Nome</th><th>Fone</th><th>Ações</th>
  </tr>
  <?php
    foreach($clientes as $rg):
      echo("<tr>
        <td>".$rg['Cliente']['id']."</td>
        <td>".$rg['Cliente']['nome']."</td>
        <td>".$rg['Cliente']['fone']."</td>
        <td class='actions'>");
      echo $html->link("Editar",array('action' => 'edit',$rg['Cliente']['id']));
      echo $html->link("Excluir",array('action' => 'delete',$rg['Cliente']['id']),null,'Excluir?');
      echo("</td></tr>");
    endforeach;
  ?>
</table>

<?php echo $html->link("Cadastrar Novo","/clientes/add") ?>