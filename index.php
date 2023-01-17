<?php include './inc/header.php';
  $result = mysqli_query($dbconn,'SELECT * FROM dogs ORDER BY nome;'); ?>
<div class="container">
  <h1>Dogs</h1>
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
        <td scope="row"><?= date('d-m-Y',strtotime($line['data_nascimento'])) ?></td>
      </tr>
      <?php } ?>
    </tbody>
  </table>
</div>
<?php mysqli_free_result($result);
include './inc/footer.php'; ?>
