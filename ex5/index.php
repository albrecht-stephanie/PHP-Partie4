<?php
$page = 'Exercice 5';
include '../header.php';
$number = 3;
$string = 'chats'?>
<div class="card-header font-weight-bold bg-info col-sm-12">Afficher la concaténation d'un nombre et d'une chaines de caractères</div>
<?php
function concat($number, $string){
    return $number . $string;
}
?>
<p><?= 'J\'ai ' .concat($number, $string) ?></p>
</div>
</div>
<?php include '../footer.php'; ?>