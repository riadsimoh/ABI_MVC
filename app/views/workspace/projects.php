<?php require APPROOT . '/views/inc/header.php'; ?>

<?php require APPROOT . '/views/inc/workspacebar.php'; ?>




<div class="container container2 table-responsive">

    <?php if(isset($data['clients'])) { ?>
    <table class="table table-striped table-bordered ">
        <thead class="thead-light">
          <tr class="table-primary" >
            <th>Raison social</th>
            <th>Nom du projet</th>
            <th>Type du projet</th>

        </thead>
        <tbody>
  <? foreach ($data['clients'] as $client) : ?>
      <tr>
        <td><?php echo ucfirst($client->RAISONSOCIALE)?></td>
        <td><?php echo ucfirst($client->NOMPROJET) ?></td>
        <td><?php echo ucfirst($client->TYPEPROJET) ?></td>
         
      </tr>
 <? endforeach ; ?>
  </tbody>
  </table>
  </div>
  <?php } ?>
  <?php  require APPROOT . '/views/inc/footer.php'; ?>

