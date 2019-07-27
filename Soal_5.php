<?php 

$sort_alfa = " abcdefghijklmnopqrstuvwxyz";

function sort_array($data) {
    
    $data_count = count($data);
    $new_data[] = 0;
    $ndc = 0;
    $temp = 0;
    $r = 0;
    for ($i=0; $i<$data_count; $i++) {
        $idc = count($data[$i]);
        if($idc < $ndc) {
            if ($data[$i] < $new_data[$r]) {
                array_replace($new_data[0], $new_data[$r]);
                $new_data[$r] = $data[$i];
                // $temp = $data[$i];
            } else {
                $temp = $data[$i];
            }
            
            $ndc = $idc;
        } else {
            
            $ndc = $idc;
        }

        $r++;
        $new_data[$r] = $temp;
    }
    var_dump($new_data);
}


// Viewer
$data = [
    ['a','c','b','e','d'],
    ['g','e','f'],
    ['f','k'],
    
];



sort_array($data);
?>


