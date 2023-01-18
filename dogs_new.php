<?php include './inc/header.php'; ?>
<div class="container p-2">
  <form method="POST" action="dogs_create.php">
    <div class="form-floating p-2">
      <input  class="form-control" type="text" placeholder="Nome" id="nome" name="nome" required/>
    </div>
    <div class="form-floating p-2">
      <input  class="form-control" type="text" placeholder="Raça" id="raca" name="raca" required/>
    </div>
    <div class="form-floating p-2">
      <label for="data_nascimento">Data de Nascimento</label>
      <input  class="form-control" type="date" placeholder="Data de Nascimento" id="data_nascimento" name="data_nascimento" required/>
    </div>
    <div class="p-2">
      <button class="btn btn-secondary" type="submit" >Enviar</button>
    </div>
  </form>
</div>
<?php include './inc/footer.php' ?>
