<?php
    ob_start();
    require_once "../settings/db.php";
    $db=new DBConnection;

    require_once "../settings/class/general.php";
    $General=new General;

    require_once "../settings/class/crud.php";
    $CRUD=new CRUD;


    if(isset($_POST["pks"])){
        $arr=[];
        $data=$CRUD->Select("portfoliokateqoriya",1,null,null,"sira");
        for($i=0;$i<count($data);$i++){
            array_push($arr,$data[$i]["sira"]);
        }
        $data=json_encode($arr);
        print_r($data);
    }
?>