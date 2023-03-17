<?php 

// Conexão
include_once 'php_action/create.php';

include_once 'includes/header.php';

include_once 'includes/message.php'

?>

<div class="row">
  <div class="col s12 m6 push-m3">
    <h3 class="light">Clientes</h3>
    <table class="striped">
      <thead>
        <tr>
          <th>Nome:</th>
          <th>Sobrenome:</th>
          <th>Email:</th>
          <th>Idade:</th>
        </tr>
      </thead>

      <tbody>
        
        <?php
        
        $sql = "SELECT * FROM clients";
        $result = mysqli_query($connect, $sql);

        while($data = mysqli_fetch_array($result)):

        ?>

        <tr>
          <td><?php echo $data['name'] ?></td>
          <td><?php echo $data['lastname'] ?></td>
          <td><?php echo $data['email'] ?></td>
          <td><?php echo $data['age'] ?></td>
          <td><a href="edit.php?id=<?php echo $data['id']; ?>" class="btn-floating orange"><i class="material-icons">edit</i></a></td>
          <td><a href="#modal<?php echo $data['id']; ?>" class="btn-floating red modal-trigger"><i class="material-icons">delete</i></a></td>
          <!-- Modal structure -->
          <div id="modal<?php echo $data['id']; ?>" class="modal">
            <div class="modal-content">
              <h4>Tem certeza que deseja excluir esse cliente?</h4>
            </div>
            <div class="modal-footer">
              <form action="php_action/delete.php" method="POST">
                <input type="hidden" name="id" value="<?php echo $data['id']; ?>">
                <button type="submit" name="btn-delete" class="btn red">Sim, quero deletar</button>
                <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Cancelar</a>
              </form>
            </div>
          </div>
        </tr>

        <?php endwhile; ?>

      </tbody>
    </table>
    <br>
    <a href="add.php" class="btn">Adicionar cliente</a>
  </div>
</div>

<?php 

include_once 'includes/footer.php';

?>