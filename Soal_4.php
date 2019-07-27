<?php 



function count_vowels($word) {
    $vocal = " aiueo";
    $word = strtolower($word);
    $vocalA = str_split($vocal);
    $split_word = str_split($word);
    $countW = count($split_word);
    $result = 0;
    $r = 1;

    
    
    for ($i=0; $i<=$countW-1; $i++) {
        if (array_search($split_word[$i], $vocalA)) {
            $result = $r++;
        }
        
        
    }

// Viewer
echo $word;
echo " = ";
echo $result;

}


count_vowels("programmer");
?>