<?php 

include_once 'includes/header.php';

include_once 'php_action/db_connect.php';

if(isset($_GET['id'])){
 
  $id = mysqli_escape_string($connect, $_GET['id']);

  $sql = "SELECT *FROM clients WHERE id = '$id'";
  $resut = mysqli_query($connect, $sql);
  $data = mysqli_fetch_array($resut);

}

?>

<div class="row">
  <div class="col s12 m6 push-m3">
    <h3 class="light">Editar cliente</h3>
    <form action="php_action/update.php" method="POST">
      <input type="hidden" name="id" value="<?php echo $data['id'] ?>">

      <div class="input-field col s12">
        <label for="name">Nome</label>
        <input type="text" name="name" id="name" value="<?php echo $data['name']; ?>">
      </div>
      
      <div class="input-field col s12">
        <label for="lastname">Sobrenome</label>
        <input type="text" name="lastname" id="lastname" value="<?php echo $data['lastname']; ?>">
      </div>
      
      <div class="input-field col s12">
        <label for="email">E-mail</label>
        <input type="text" name="email" id="email" value="<?php echo $data['email']; ?>">
      </div>
      
      <div class="input-field col s12">
        <label for="age">Idade</label>
        <input type="text" name="age" id="age" value="<?php echo $data['age']; ?>">
      </div>
      
      <button type="submit" name="btn-edit" class="btn">Atualizar</button>
      <a href="index.php" class="btn green">Lista de clientes</a>
    
    </form>
  </div>
</div>

<?php 

include_once 'includes/footer.php'

?>