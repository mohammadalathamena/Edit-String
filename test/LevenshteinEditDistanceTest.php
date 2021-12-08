<?php

namespace Test ;
use EditString\LevenshteinEditDistance;
use Error;
use Exception;

class LevenshteinEditDistanceTest 
{
    public $result = [];
    public function start($source, $target,$correct)
    {
  
        try {
                $this->testVariableType($source,$target) 
                ->testLength(strlen($source),strlen($target))
                ->testCases($source, $target,$correct);

        } catch (Error $error) {
            echo $error->getMessage();
            
        }
    }

    private function testVariableType($source , $target )
    {
        if ( gettype($source) != 'string') {
            array_push($this->result ,[
                "result"=>false,
                "message"=>'source is not string '
                ])  ;
            throw new Exception("source is not string ");
         }
        if ( gettype($target) != 'string') {
            array_push($this->result ,[
                "result"=>false,
                "message"=>'target is not string '
                ] )  ;
            throw new Exception("target is not string ");

        }
   
        array_push($this->result ,[
            "result"=>true,
            "message"=>'all variable are string , You pass variable type test'
            ]  )  ;
        return $this;
     
    }

    private function testLength($source , $target)
    {
        if ($source <= 0 ) {
            array_push($this->result ,[
                "result"=>false,
                "message"=>'source is not equal zero'
                ]  )  ;
            throw new Exception("source is less or equal zero");
        }
        if ($target <= 0 ) {
            array_push($this->result ,[
                "result"=>false,
                "message"=>'target is not equal zero'
                ]  )  ;
            throw new Exception("target is less or equal zero");
        }
        array_push($this->result ,[
            "result"=>true,
            "message"=>'Source length and Target length are equal zero , you pass Length test'
            ] )  ;
        return $this;
     
    }

    private function testCases($source, $target,$correct){
        $levenshtein = new LevenshteinEditDistance();
        if($levenshtein->calculate($source,$target,strlen($source),strlen($target))!= $correct){
            array_push($this->result ,[
                "result"=>false,
                "message"=>'function dose not work good   '
                ] )  ;
            throw new Exception("function dose not work good  "); 
        }
             array_push($this->result ,[
                "result"=>true,
                "message"=>'calculate true'
                ])  ;

        return $this;
    }
    
}

