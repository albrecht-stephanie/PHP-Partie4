<?php
$page = 'Exercice 3';
include '../header.php';
$firstString ='Je suis une dévelppeuse web junior';
$secondString ='En formation à La Manu.';
$result = " ";?>
<div class="card-header font-weight-bold bg-info col-sm-12">Afficher la concaténation de deux chaines de caractères</div>
<?php
function returnStrings($firstString,$secondString){
    $result = $firstString. ' ' .$secondString;
  }?>
<p><?= 'On obtient :' .returnStrings($firstString,$secondString) ?></p>
</div>
</div>
<?php include '../footer.php'; ?>