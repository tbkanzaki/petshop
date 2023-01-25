<?php
  include './inc/header.php';
  $dogs = mysqli_query($dbconn, 'SELECT * FROM dogs ORDER BY nome;');
?>
<div class="container p-3">
  <table class="table table-striped table-hover">
    <thead>
      <tr>
        <th>Nome</th>
        <th>Raça</th>
        <th>Nascimento</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach($dogs as $dog): ?>
      <tr>
        <td><?= $dog['nome'] ?></td>
        <td><?= $dog['raca'] ?></td>
        <td><?= date('d-m-Y', strtotime($dog['data_nascimento'])) ?></td>
      </tr>
      <?php endforeach ?>
    </tbody>
  </table>
</div>
<?php
  mysqli_free_result($dogs);
  include './inc/footer.php';
?>
