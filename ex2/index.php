<?php
$page = 'Exercice 2';
include '../header.php';
$result = " ";
function returnString(){
    $result = 'Je suis une chaine de caractère.';
    return $result;
  }
  $result = returnString();
?>
<div class="card-header font-weight-bold bg-info col-sm-12">Afficher une chaine de caractère par une fonction</div>
<p><?= $result ?></p>
</div>
</div>
<?php include '../footer.php'; ?>