<?php require APPROOT . '/views/inc/header.php'; ?>
<?php require APPROOT . '/views/inc/workspacebar.php'; ?>



  <div class="row">
    <div class="container">
    <div class="col-md-6 mx-auto">
      <div class="card card-body bg-light my-4">
        <h2 class="mb-5">Formulaire de création d'utilisateur</h2>
         
        <form action="<?php echo URLROOT; ?>/users/register" method="post">
          <div class="form-group">
            <label for="userlogin">Pseudo: <sup>*</sup></label>
            <input type="text" name="userlogin" class="form-control form-control-lg <?php echo (!empty($data['userlogin_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['userlogin']; ?>">
            <span class="invalid-feedback"><?php echo $data['userlogin_err']; ?></span>
          </div>
          <div class="form-group">
            <label for="password">Mot de passe <sup>*</sup></label>
            <input type="password" name="password" class="form-control form-control-lg <?php echo (!empty($data['password_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['password']; ?>">
            <span class="invalid-feedback"><?php echo $data['password_err']; ?></span>
          </div>
          <div class="form-group">
            <label for="confirm_password">Confirmer le mot de passe: <sup>*</sup></label>
            <input type="password" name="confirm_password" class="form-control form-control-lg <?php echo (!empty($data['confirm_password_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['confirm_password']; ?>">
            <span class="invalid-feedback"><?php echo $data['confirm_password_err']; ?></span>
          </div>

          <div class="row">
            <div class="col">
              <input type="submit" value="Enregister" class="btn btn-secondary mx-auto d-block">
            </div>
         
          </div>
        </form>
      </div>
    </div>
    </div>
  </div>
<?php require APPROOT . '/views/inc/footer.php'; ?>