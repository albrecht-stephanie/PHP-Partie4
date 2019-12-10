<?php
$page = 'Exercice 8';
include '../header.php';
$firstNumber = 15;
$secondNumber = 12;
$thirdNumber = 40;?>
<div class="card-header font-weight-bold bg-info col-sm-12">Somme de trois variables</div>
<?php
function sum($firstNumber, $secondNumber, $thirdNumber){
    return 'Résultat : ' .($firstNumber + $secondNumber + $thirdNumber);
  }?>
<p><?= sum($firstNumber, $secondNumber, $thirdNumber) ?></p>
</div>
</div>
<?php include '../footer.php'; ?>