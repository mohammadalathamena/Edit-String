<?php

class LevenshteinEditDistanceTest 
{
    function __construct()
    {
        $this->testSeq();
    }
    public function testSeq()
    {
        try {
        $this->testVariableType('asd','asd',1,1);
        $this->testLength(1,1);
          
        } catch (Error $th) {
            echo $th->getMessage();
        }
    }

    private function testVariableType($source , $target , $sLength , $tLength)
    {
        if ( gettype($source) != 'string') {
            echo "source is not string " ;
            throw new Exception("source is not string ");
         }
        if ( gettype($target) != 'string') {
            echo "target is not string " ;
            throw new Exception("target is not string ");

        }
        if ( gettype($sLength) != 'integer') {
            echo "sLength is not integer " ;
            throw new Exception("sLength is not integer ");

        }
        if ( gettype($tLength) != 'integer') {
            echo "tLength is not integer " ;
            throw new Exception("tLength is not integer ");

        }

         echo 'You pass variable type test <br/>';
     
    }

    private function testLength($sLength , $tLength)
    {
        if ($sLength <= 0 ) {
            echo "sLength is less or equal zero" ;
            throw new Exception("sLength is less or equal zero");
        }
        if ($tLength <= 0 ) {
            echo "tLength is less or equal zero" ;
            throw new Exception("tLength is less or equal zero");
        }
        echo 'You pass Length test <br/>';
     
    }
    
}

$test = new LevenshteinEditDistanceTest;
