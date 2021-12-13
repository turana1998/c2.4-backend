<?php
    $siyahi=$CRUD->Select("portfoliokateqoriya",1);
    if(isset($_POST["redakte"])){
        $column='
           Ad=:ad,
           sira=:sira
           ';
        $arr=[
            "ad"=>$_POST["ad"],
            "sira"=>$_POST["sira"]
        ];
       
        $CRUD->INSERT("portfoliokateqoriya",$column,$arr) ? header("Location:portkat_add.php?status=ok"):header("Location:portkat_add.php?status=no")
         ;
    }
?>