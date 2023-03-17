<?php 

include_once 'includes/header.php';

?>

<div class="row">
  <div class="col s12 m6 push-m3">
    <h3 class="light">Novo cliente</h3>
    <form action="php_action/create.php" method="POST">

      <div class="input-field col s12">
        <label for="name">Nome</label>
        <input type="text" name="name" id="name">
      </div>
      
      <div class="input-field col s12">
        <label for="lastname">Sobrenome</label>
        <input type="text" name="lastname" id="lastname">
      </div>
      
      <div class="input-field col s12">
        <label for="email">E-mail</label>
        <input type="text" name="email" id="email">
      </div>
      
      <div class="input-field col s12">
        <label for="age">Idade</label>
        <input type="text" name="age" id="age">
      </div>
      
      <button type="submit" name="btn-register" class="btn">Cadastrar</button>
      <a href="index.php" class="btn green">Lista de clientes</a>
    
    </form>
  </div>
</div>

<?php 

include_once 'includes/footer.php'

?>