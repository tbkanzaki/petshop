<?php include './inc/header.php' ?>
<?php
  $sql = 'SELECT * FROM dogs ORDER BY nome;';
  $result = mysqli_query($dbconn,$sql);
?>
<h1>Dogs</h1>
<div class="line"></div>
  <table class="table table-striped table-hover">
    <thead>
      <tr>
        <th scope="col">Nome</th>
        <th scope="col">Raça</th>
        <th scope="col">Nascimento</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach($result as $line){ ?>
      <tr>
        <td scope="row"><?= $line['nome'] ?></td>
        <td scope="row"><?= $line['raca'] ?></td>
        <td scope="row"><?= $line['data_nascimento'] ?></td>
      </tr>
      <?php } ?>
    </tbody>
  </table>
<?php mysqli_free_result($result); ?>
</div>
<?php include './inc/footer.php' ?>
