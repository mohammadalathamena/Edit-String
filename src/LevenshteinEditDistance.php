<?php
namespace EditString;



class LevenshteinEditDistance  
{
    /**
     * measures the minimum number of substitutions required to change one string into the other,with Levenshtein theory  .
     * 
     * @param string $source 
     * @param string $target
     * @param int $sourceLength 
     * @param int targetLength  
     * 
     * @return int
     */
    public function calculate(string $source,string  $target,int $sourceLength,int $targetLength)
    { 
        if ($sourceLength == 0) {
            return $targetLength; 
        }
        if ($targetLength == 0) {
            return $sourceLength; 
        }
        if ($source[$sourceLength - 1] == $target[$targetLength - 1]) { 
            return $this->calculate($source, $target,$sourceLength - 1, $targetLength - 1); 
        }
    
        return 1 + min($this->calculate($source, $target,  $sourceLength, $targetLength - 1), // Insert 
                    $this->calculate($source, $target, $sourceLength - 1, $targetLength), // Remove 
                    $this->calculate($source, $target, $sourceLength - 1, $targetLength - 1) // Replace
                    );  
    } 

}