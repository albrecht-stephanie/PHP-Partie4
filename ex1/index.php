<?php
$page = 'Exercice 1';
include '../header.php';
$result = " ";
function returnTrue(){
    $result = true;
    return $result;
  }
  $result = returnTrue();
?>
<div class="card-header font-weight-bold bg-info col-sm-12">Afficher "True"</div>
<p><?= (boolval($result) ? 'true' : 'false'); ?></p>
</div>
</div>
<?php include '../footer.php'; ?>