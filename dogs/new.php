<?php include '../inc/header.php'; ?>
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
    <button class="btn btn-warning"  onClick="JavaScript: window.history.back();">Cancelar</button>
  </div>
</form>
<?php include '../inc/footer.php' ?>
