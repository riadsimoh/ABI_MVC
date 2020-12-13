<div class="container mb-5">
<div class="row">
    <div class="col-sm-6  mx-auto mt-3">
<div class="btn-group btn-group-justified">
  <a href="<?php echo URLROOT; ?>/workspace/listclients" class="btn btn-secondary mx-1">List des clients</a>
  <a href="<?php echo URLROOT; ?>/workspace/listprojets" class="btn btn-secondary mx-1">List des projets</a>


  <?php if($_SESSION['userlogin'] == 'admin') : ?>
   <a href="<?php echo URLROOT; ?>/users/register"  class="btn btn-secondary mx-1">Créer un utilisateur</a>

   

  <?php
  
   endif ; ?>

</div>
</div>
  </div>
  </div>