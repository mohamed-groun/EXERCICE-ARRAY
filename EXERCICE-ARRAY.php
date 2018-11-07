<?php
$tab=range(0,63);
$tab2=[];
$tab3=[];
for ($i=0; $i <=63 ;$i++) {
    $tab2[$i]=$tab[$i]/10 ;
}
foreach ($tab2 as $i){

    $tab3["$i"]=sin($i);
}
?>
<table border="3">
    <th> key</th>
    <th>valeur</th>
    <?php
foreach ($tab3 as $item=> $value) { ?>
    <tr>
        <td> <?php  echo $item  ?> </td>
        <td> <?php  echo $value ?></td>
    </tr>
    <?php
}
?>

