<?php
$page = 'Exercice 7';
include '../header.php';
$genre = 'homme';
$age = 12;?>
<div class="card-header font-weight-bold bg-info col-sm-12">Homme/Femme, Majeur/Mineur</div>
<?php
function whoAreYou($genre, $age){
    if($genre == 'homme' && $age >= 18){
        return 'Vous êtes un ' .$genre. ' majeur, vous avez ' .$age. ' ans.';
    }
    elseif ($genre == 'homme'){
        return 'Vous êtes un ' .$genre. ' mineur, vous avez ' .$age. ' ans';
    }
    elseif($genre == 'femme' && $age >= 18){
        return 'Vous êtes une ' .$genre. ' majeure, vous avez ' .$age. ' ans.';
    }
    else{
        return 'Vous êtes une ' .$genre. ' mineure, vous avez ' .$age. ' ans';
    }
  }?>
<p><?= whoAreYou($genre, $age) ?></p>
</div>
</div>
<?php include '../footer.php'; ?>