
<?php require APPROOT . '/views/inc/header.php'; ?>    
<div class="contact">

<section class="container container-form" id="contact">
      <div class="row text-dark justify-content-between">
        <div class="col-md-7 p-5">
          <h2 class="mb-5 text-info">Contactez-nous</h2>
          <form class="contact-form rounded-lg" action="#">
            <div class="row">
              <div class="col-md-6">
                <div class="md-form">
                  <label for="name" class="">Nom et prénom</label>
                  <input type="text" id="name" name="name" class="form-control">
                </div>
              </div>
              <div class="col-md-6">
                <div class="md-form">
                  <label for="email" class="">Email</label>
                  <input type="text" id="email" name="email" class="form-control">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="md-form">
                  <label for="subject" class="">Sujet</label>
                  <input type="text" id="subject" name="subject" class="form-control">

                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="md-form">
                  <label for="message">Votre message</label>
                  <textarea id="message" name="message" rows="4" class="form-control md-textarea"></textarea>

                </div>

              </div>
            </div>
            <div class="text-center text-md-left mt-5">
              <input type="submit" class="btn btn-info" value="Envoyer">
            </div>
          </form>
        </div>
        <div class="col-md-5 text-center pt-5 mt-5">
          <ul class="list-unstyled mb-0">
            <li><i class="fas fa-map-marker-alt fa-2x"></i>
              <p>Paris, 94126, France</p>
            </li>

            <li><i class="fas fa-phone mt-4 fa-2x"></i>
              <p>+33 214 567 89</p>
            </li>

            <li><i class="fas fa-envelope mt-4 fa-2x"></i>
              <p>contact@ABI.com</p>
            </li>
          </ul>
        </div>
      </div>
    </section>
</div>
    

 
<?php require APPROOT . '/views/inc/footer.php'; ?>







