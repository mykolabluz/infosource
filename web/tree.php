<?php

function generateParents() {
    $array = array();
    $counter = rand(100, 1000);
    for ($i = 100; $i < $counter; $i++) {
        $position = rand(100, 1000);
        $parent = rand(100, 1000);
        $array[$parent] = $position;
    }
    return $array;
}

$parents = generateParents();
$array = array();
$val = rand(0, 900);
for ($i = 100; $i < $val + 100; $i++) {
    $parent_id = 0;
    if (in_array($i, $parents)) {
        $parent_id = array_search($i, $parents);
    }
    $array[$i] = array('parent_id' => $parent_id);
}

echo '<pre>';
print_r($array);
echo '<pre>';
die;


//echo '<pre>';
//print_r($array[$parent]);
//echo '<pre>';die;

//echo '<pre>';
//print_r($position);
//echo '<pre>';die;