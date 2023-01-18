<?php
  include './inc/header.php';
  $dogs = mysqli_query($dbconn, 'SELECT * FROM dogs ORDER BY nome;');
?>
<div class="container">
  <div class="d-flex p-2 bd-highlight">
    <div class="d-flex flex-row bd-highlight align-items-center">
      <div class="col">
        <h3>Dogs</h3>
      </div>
      <div class="col">
        <form class="d-flex m-2"  action="dogs_new.php">
          <button class="btn btn-outline-secondary" type="submit">Novo</button>
        </form>
      </div>
    </div>
  </div>
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
