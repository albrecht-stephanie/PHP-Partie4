<?php
$page = 'Exercice 3';
include '../header.php';?>
<div class="card-header font-weight-bold bg-info col-sm-12">Plus grand ou plus petit</div>
<?php
$firstNumber = 15;
$secondNumber = 25;
function compare($firstNumber, $secondNumber){
    if($firstNumber > $secondNumber){
        return 'Le nombre est plus grand';
    }
    elseif($firstNumber < $secondNumber){
        return 'Le nombre est plus petit';
    }
    else{
        return'Les nombres sont identiques';
    }
}?>
<p><?= compare($firstNumber, $secondNumber)?></p>
</div>
</div>
<?php include '../footer.php'; ?>
