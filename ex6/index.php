<?php
$page = 'Exercice 6';
include '../header.php';
$lastName ='Smith';
$fistName ='Valéry';
$age = 26;?>
<div class="card-header font-weight-bold bg-info col-sm-12">Faire une phrase avec 3 variables</div>
<?php
function returnStrings($lastName, $fistName, $age){
    return  'Bonjour ' .$lastName. ' ' .$fistName. ', tu as '.$age. 'ans.';
  }?>
<p><?= returnStrings($lastName, $fistName, $age) ?></p>
</div>
</div>
<?php include '../footer.php'; ?>