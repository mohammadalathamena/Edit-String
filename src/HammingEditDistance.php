<?php
namespace EditString;



class HammingEditDistance
{

    /**
     * measures the minimum number of substitutions required to change one string into the other,with Hamming theory  .
     * 
     * @param string $source 
     * @param string $target
     * @param int $count 
     * @param int index 
     * 
     * @return int 
     */
    public function calculate(string $source,string $target, int $count = 0, int $index = 0)
    {
  
        if(strlen($source) != strlen($target) ){
            return 'the source and target is not equal';
        }
        
        return isset($source[$index]) != '' ? $this->calculate($source, $target, ($source[$index] == $target[$index] ? $count : ++$count ), $index + 1) : $count;
    }
}