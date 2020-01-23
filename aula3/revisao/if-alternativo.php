<?php $condicao = "true"; ?>

<?php if ($condicao === true): ?>
Valor 'true' booleano
<?php elseif($condicao === "true"): ?>
Valor 'true' string
<?php else: ?>
Valor falso
<?php endif ?>