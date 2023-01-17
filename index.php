<?php include './inc/header.php';
  $dogs = mysqli_query($dbconn, 'SELECT * FROM dogs ORDER BY nome;'); ?>
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
      <?php foreach($dogs as $dog){ ?>
      <tr>
        <td scope="row"><?= $dog['nome'] ?></td>
        <td scope="row"><?= $dog['raca'] ?></td>
        <td scope="row"><?= date('d-m-Y', strtotime($dog['data_nascimento'])) ?></td>
      </tr>
      <?php } ?>
    </tbody>
  </table>
</div>
<?php mysqli_free_result($dogs);
include './inc/footer.php'; ?>
