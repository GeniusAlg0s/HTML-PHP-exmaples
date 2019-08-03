<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

 
$str = 'This is Main String';
 
if (strpos($str, 'This') !== false) {
    echo 'true';
}

    
   
    ?>
<p> test form for prime enter number</p>
<form>
<input name="number" type ="text">
<input  type ="submit" value="Go!">
</form>
<?php
 function find_non_repeat($word) {
  //$chr = null;
  for ($i = 0; $i <= strlen($word); $i++) {
     if (substr_count($word, substr($word, $i, 1)) == 1) {
        return substr($word, $i, 1);
     }
  }
}

echo find_non_repeat("aaaabbbcccdde")."\n";
echo find_non_repeat("abcdea")."\n";

// need help here
function  stcompress($string){
   $count = 0;
$result = "";
    for ($i = 0; $i <= strlen($string); $i++){
        $count++;
        if($string[$i] !== $string[$i+1]){
           $result += $string[i] + $count;
           
           $count= 0; 
            }
        }
        return $result;
    }
    
    echo stcompress( "aabcccc");
?>
