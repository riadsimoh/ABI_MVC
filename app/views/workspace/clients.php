<?php require APPROOT . '/views/inc/header.php'; ?>

<?php require APPROOT . '/views/inc/workspacebar.php'; ?>




<div class="container container2 table-responsive">
    <?php if(isset($data['clients'])) { ?>
    <table class="table table-striped table-bordered">
        <thead class="thead-dark">
        <tr class="table-primary" >
            <th>Raison social</th>
            <th>Adresse client</th>
            <th>Secteur d'activité</th>
            <th>Ville </th>
            <th>Code postal</th>
            <th>Chiffre d'affaire</th>
            <th>Effectif</th>
            <th>Telephone</th>
          </tr>
        </thead>
        <tbody>
  <? foreach ($data['clients'] as $client) : ?>
      <tr>
        <td><?php echo ucfirst($client->RAISONSOCIALE) ?></td>
        <td><?php echo ucfirst($client->ADRESSECLIENT) ?></td>
        <td><?php echo ucfirst($client->ACTIVITE)?></td>
         
        <td><?php echo ucfirst($client->VILLECLIENT) ?></td>
        <td><?php echo ucfirst($client->CODEPOSTALCLIENT) ?></td>
   
        <td><?php echo ucfirst($client->CA) ?></td>
        <td><?php echo ucfirst($client->EFFECTIF )?></td>
        <td><?php echo ucfirst($client->TELEPHONECLIENT)?></td>
      </tr>
 <? endforeach ; ?>
  </tbody>
  </table>
  </div>
  <?php } ?>
  <?php  require APPROOT . '/views/inc/footer.php'; ?>
