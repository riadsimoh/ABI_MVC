<?php require APPROOT . '/views/inc/header.php'; ?>


  <div class="row container3 login ">
  <div class="container">
    <div class="col-md-6 mx-auto">
      <div class="card card-body bg-light my-5 shadow-lg">
        <?php echo flash('register_success') ?>
        <h2 class="mb-3 text-center">Connexion</h2>
     
        <form action="<?php echo URLROOT; ?>/users/login" method="post" class="rounded-lg " >
          <div class="form-group">
            <label for="text">Pseudo <sup>*</sup></label>
            <input type="text" name="userlogin" class="form-control form-control-lg <?php echo (!empty($data['userlogin_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['userlogin']; ?>">
            <span class="invalid-feedback"><?php echo $data['userlogin_err']; ?></span>
          </div>
          <div class="form-group">
            <label for="password">Mot de passe: <sup>*</sup></label>
            <input type="password" name="password" class="form-control form-control-lg <?php echo (!empty($data['password_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['password']; ?>">
            <span class="invalid-feedback"><?php echo $data['password_err']; ?></span>
          </div>
          <div class="row">
            <div class="col">
              <input type="submit" value="Se connecter" class="btn btn-secondary mx-auto d-block">
            </div>
            
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<?php require APPROOT . '/views/inc/footer.php'; ?>