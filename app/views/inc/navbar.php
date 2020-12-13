<nav class="navbar navbar-expand-lg navbar-dark bg-dark navbar-1">
    <div class="container nav-p">
      <img class="logo" src=<?php echo URLROOT . '/public/img/abi_logo.png' ?> alt="logo">
      <a class="navbar-brand mt-4 " href="<?php echo URLROOT; ?>"><?php echo SITENAME; ?></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse  navbar-collapse" id="navbarsExampleDefault">
      
        
        <ul class="navbar-nav ml-auto ">
         <?php if(isset($_SESSION['user_id'])) : ?>
     
          <li class="nav-item">

          <a class="nav-link" href="<?php echo URLROOT; ?>/users/logout">Déconnexion <i class="fas fa-sign-out-alt"></i></a>
          </li>
     
          <li class="nav-item">
            <a class="nav-link" href="<?php echo URLROOT; ?>/workspace/index"><? echo   ucfirst($_SESSION['userlogin'])  ?></a>
            
          </li>


          <?php else : ?>
            <li class="nav-item">
            <a class="nav-link" href="<?php echo URLROOT; ?>/pages/index">Accueil</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo URLROOT; ?>/pages/services">Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo URLROOT; ?>/pages/contact">Contact</a>
          </li>
          <li class="nav-item">
            <a class="nav-link nav-icon" href="<?php echo URLROOT; ?>/users/login"><i class="fas fa-user-circle "></i></a>
          </li>
        <?php endif ;?>
        </ul>
      </div>
      </div>
    </nav>
        