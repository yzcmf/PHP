<?php
$food = array('Pasta','Pizza','Salad');
echo $food[1];
echo '<br>';
print_r($food);//Print all the elements in the array;
echo '<br>';
$food[4]='fruit';
// associative arrays;
$food_associative = array('Pasta'=>300,'Pizza'=>30,'Salad'=>3000);
echo $food_associative['Pasta'];
echo '<br>';
print_r($food_associative);//Print all the elements in the array;
echo '<br>';
// multi-dimensional arrays;
$food_multi = array('Healthy'=>array('apple','banbana'),'Unhealthy'=>array('Pizza','Ice cream'));
echo $food_multi['Healthy'][0];
echo '<br>';
print_r($food_multi);//Print all the elements in the array;
echo '<br>';
foreach($food_multi as $element => $inner_array)
{
echo '<strong>'.$element.'</strong><br>';
foreach($inner_array as $item)
{
echo $item.'<br>';
}
}
?>