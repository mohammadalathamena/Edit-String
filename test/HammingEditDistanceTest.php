<?php 
// require './src/HammingEditDistance.php';
namespace Test ; 
use EditString\HammingEditDistance;
use Error;
use Exception;

class HammingEditDistanceTest
{
    public $result = [];

    public function start($source , $target , $correct)
    {

        try {
                $this->testVariableType($source,$target)
                    ->testEqual(strlen($source),strlen($target))
                    ->testCases($source, $target,$correct);
          
        } catch (Error $error) {
            echo $error->getMessage() ;
        }
    }

    private function testVariableType($source , $target)
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
            return $this ;

    }

    private function testEqual($source , $target)
    {
        if (strlen($source) != strlen($target)) {
            array_push($this->result ,[
                "result"=>false,
                "message"=>'source is not equal with target'
                ]  )  ;
            throw new Exception("source is not equal with target");
        }
        array_push($this->result ,[
            "result"=>true,
            "message"=>'Source length and Target length are equal , You pass Length test '
            ] )  ;
            return $this ;

    }
    private function testCases($source, $target , $correct)
    {
        $hamming = new HammingEditDistance();

             if($hamming->calculate($source,$target) != $correct){
                array_push($this->result ,[
                    "result"=>false,
                    "message"=>'function dose not work good'
                    ] )  ;
                 throw new Exception("function dose not work good  ");
             }
             array_push($this->result ,[
                "result"=>true,
                "message"=>'calculate true'
                ])  ;
             return $this ;
    }
}

