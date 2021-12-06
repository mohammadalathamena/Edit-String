<?php


class LevenshteinEditDistance  
{

    public function __construct(){
        
    }
    /**
     * 
     */
    function calculate(string $source,string  $target,int $sLength,int $tLength)
{ 
    // If first string is empty, 
    if ($sLength == 0)
        return $tLength; 
  
    // If second string is empty,
    if ($tLength == 0) 
        return $sLength; 
  
    // If last characters of two 
    // strings are same, nothing 
    // much to do. Ignore last 
    // characters and get count 
    // for remaining strings. 
    if ($source[$sLength - 1] == $target[$tLength - 1])
    { 
        return $this->calculate($source, $target, 
                            $sLength - 1, $tLength - 1); 
    }
      
    // If last characters are not same, 
    // consider all three operations on 
    // last character of first string, 
    // recursively compute minimum cost 
    // for all three operations and take 
    // minimum of three values. 
  
    return 1 + min($this->calculate($source, $target, 
                                $sLength, $tLength - 1), // Insert 
                   $this->calculate($source, $target, 
                                $sLength - 1, $tLength), // Remove 
                   $this->calculate($source, $target, 
                                $sLength - 1, $tLength - 1)); // Replace 
} 
    // public function levenshtein(String $source = '', String $destination = '')
    // {
    //     print_r(func_get_args());
    //     return 'asd';
    // }
}

class HammingEditDistance
{
    public function calculate($source, $target , $count = 0 , $i = 0)
    {
        
        if (isset($source[$i]) != '') {
            echo $i . 'i<br/>' ;
            if ($source[$i] != $target[$i])
            // echo $count . '<br/>' ;
            $count++;
            $i++;
            $this->calculate($source , $target , $count , $i);
        }
        while (isset($source[$i]) != '')
        {
            if ($source[$i] != $target[$i])
            $count++;
            $i++;
            // echo $count . '<br/>' ;
        }
        return $count;
    }
}
$type = $_POST['type'] ;
$source = $_POST['source'];
$target = $_POST['target'];
$calObj = $type == 1 ? new LevenshteinEditDistance : new HammingEditDistance ;
// print_r($type)  ;
// die ;
if ($type) {
     $calObj->calculate(
        $source,
        $target,
        strlen($source),
        strlen($target)
    ); 
}else{
     $calObj->calculate(
        $source,
        $target
    ); 
}

