<?php
namespace register;
class Register {
    protected $filepath;

    public function __construct($filepath)
    {
        $this->filepath= $filepath;
    }
    function loadRegister(){
        $jsondata= file_get_contents($this->filepath);
        $arr_data =json_decode($jsondata,true);
        return $arr_data;
    }
    //luu data duoi dang json
    function saveRegister($infor){
        $datajson =json_encode($infor);
        file_put_contents($this->filepath, $datajson);
    }

    function display(){
        $data= $this->loadRegister();
        $arr_register =[];
        foreach ($data as $item){
            $register= new Register($item);
            array_push($arr_register,$register);
        }
        // include_once "list";
    }

    function addRegister()
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $username = $_POST["username"];
            $email = $_POST["email"];
            $phone = $_POST["phone"];
            var_dump($username, $email, $phone);
        }
    }

    function deleteRegister($index){
        $data= $this->loadRegister();
        array_splice($data, $index ,1);
        $this->saveRegister();
        $this->loadRegister();
    }


}