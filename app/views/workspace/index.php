<?php require APPROOT . '/views/inc/header.php'; ?>

<?php require APPROOT . '/views/inc/workspacebar.php'; ?>

<div class="row container2 text-center ">
  <div class="col-md-8 mx-auto">
    <h2>Bienvenu sur le Workspace </h2>
    <p> <?php if ($_SESSION['userlogin'] == 'admin') {
       echo "Vous êtes l'Admin, vous avez le droit de créer un utilisateur";  
    }

      
      ?></p>
  </div>
</div>






  <?php  require APPROOT . '/views/inc/footer.php'; ?>