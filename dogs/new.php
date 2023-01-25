<?php include '../inc/header.php'; ?>
<div class="container p-2">
  <form method="POST" action="create.php">
    <div class="p-2 col-6">
      <input class="form-control" type="text" placeholder="Nome" id="nome" name="nome" required/>
    </div>
    <div class="p-2 col-6">
      <input class="form-control" type="text" placeholder="Raça" id="raca" name="raca" required/>
    </div>
    <div class="p-2 col-6">
      <label for="data_nascimento">Data de Nascimento</label>
      <input class="form-control" type="date" id="data_nascimento" name="data_nascimento" required/>
    </div>
    <div class="p-2  col-6">
      <button class="btn btn-secondary" type="submit">Cadastrar</button>
    </div>
  </form>
</div>
<?php include '../inc/footer.php' ?>
