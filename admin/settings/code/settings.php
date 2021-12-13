<?php
    $data=$CRUD->Select("settings");

    if(isset($_POST["redakte"])){
        $olcu=$_FILES["logo"]["size"];
        $tip=$_FILES["logo"]["type"];
        $tmp=$_FILES["logo"]["tmp_name"];
        $ad=$_FILES["logo"]["name"];
        $ksekil=$_POST["ksekil"];
        $tipler=["image/png","image/jpg","image/jpeg","image/webp","image/svg"];
        $yol="../../sekil/".$ad;

        if($olcu>0 && !in_array($tip,$tipler)){
            header("Location:settings.php?status=no");
            exit();
        }

        $column='
           title=:title,
           description=:description,
           keywords=:keywords,
           phone=:phone,
           location=:location,
           email=:email,
           logo=:logo
           ';
        $arr=[
            "title"=>$_POST["title"],
            "description"=>$_POST["description"],
            "keywords"=>$_POST["keywords"],
            "phone"=>$_POST["phone"],
            "location"=>$_POST["location"],
            "email"=>$_POST["email"],
            "logo"=>$olcu>0 ? substr($yol,6) : $ksekil
        ];
        if( $CRUD->UPDATE("settings",$column,null,$arr)){
            $olcu>0 ? unlink("../../".$ksekil) :"";
            move_uploaded_file($tmp,$yol);
            header("Location:settings.php?status=ok");
        }
        else{
            header("Location:settings.php?status=no");
            exit();
        }
        // $CRUD->UPDATE("settings",$column,null,$arr) ? header("Location:settings.php?status=ok"):header("Location:settings.php?status=no")
         ;
    }
?>