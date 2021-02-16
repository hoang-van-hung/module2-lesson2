<?php
function loadRegister($filepath){
    $jsondata= file_get_contents($filepath);
    $arr_data =json_decode($jsondata,true);
    return $arr_data;
}
    function saveDataJSON($filepath, $username, $email,$phone){
    try {
        $infor =array(
            'name'=>$username,
            'email'=>$email,
            'phone'=>$phone
        );
        $arr_data =loadRegister($filepath);
        //lay du lieu tu file json
        array_push($arr_data,$infor);
        //push thong tin nguoi dung
        $jsonData =json_encode($arr_data,JSON_PRETTY_PRINT);
        //khoi phuc du lieu ban dau
        file_put_contents($filepath,$jsonData);
        }catch (Exception $e){
        echo 'Loi: '.$e->getMessage().'<br>';
    }
}




?>


