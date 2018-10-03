<?php
session_start();

$total = 0;
foreach($_SESSION['cart'] as $sp):
    $total += $sp['price']*$sp['soluong'];
?>
<h2><?=$sp['name']?></h2>
<p><?=$sp['price']?> * <?=$sp['soluong']?> = <?=number_format($sp['price']*$sp['soluong'])?></p>

<?php endforeach?>

<h3>Total : <?=$total?></h3>