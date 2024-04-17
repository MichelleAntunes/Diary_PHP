<?php
  include_once("templates/header.php");
?>
  <div class="container">
    <?php include_once("templates/backbtn.html"); ?>
    <h1 id="main-title">Edit Contact</h1>
    <form id="create-form" action="<?= $BASE_URL ?>/config/process.php" method="POST">
      <input type="hidden" name="type" value="edit">
      <input type="hidden" name="id" value="<?= $contact['id'] ?>">
      <div class="form-group">
        <label for="name">Nome do contato:</label>
        <input type="text" class="form-control" id="name" name="name" placeholder="Enter the name" value="<?= $contact['name'] ?>" required>
      </div>
      <div class="form-group">
        <label for="phone">Telefone do contato:</label>
        <input type="text" class="form-control" id="phone" name="phone" placeholder="Enter the phone" value="<?= $contact['phone'] ?>"required>
      </div>
      <div class="form-group">
        <label for="observations">Observations:</label>
        <textarea type="text" class="form-control" id="observations" name="observations"   placeholder="Enter the observations" rows="3"> <?= $contact['phone'] ?>" </textarea>
      </div>
      <button type="submit" class="btn btn-primary">Update</button>
    </form>
  </div>
<?php
  include_once("templates/footer.php");
?>