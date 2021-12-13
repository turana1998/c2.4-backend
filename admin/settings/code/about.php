<?php
    $data=$CRUD->Select("about");
    if(isset($_POST["redakte"])){
        $olcu=$_FILES["photo"]["size"];
        $tip=$_FILES["photo"]["type"];
        $tmp=$_FILES["photo"]["tmp_name"];
        $ad=$_FILES["photo"]["name"];
        $ksekil=$_POST["ksekil"];
        $tipler=["image/png","image/jpg","image/jpeg","image/webp","image/svg"];
        $yol="../../sekil/".$ad;

        if($olcu>0 && !in_array($tip,$tipler)){
            header("Location:about.php?status=no");
            exit();
        }

        $column='
           title=:title,
           description=:description,
           photo1=:photo
           ';
        $arr=[
            "title"=>$_POST["title"],
            "description"=>$_POST["description"],
            "photo"=>$olcu>0 ? substr($yol,6) : $ksekil
        ];
        if( $CRUD->UPDATE("about",$column,null,$arr)){
            $olcu>0 ? unlink("../../".$ksekil) :"";
            move_uploaded_file($tmp,$yol);
            header("Location:about.php?status=ok");
        }
        else{
            header("Location:about.php?status=no");
            exit();
        }
        // $CRUD->UPDATE("settings",$column,null,$arr) ? header("Location:settings.php?status=ok"):header("Location:settings.php?status=no")
         ;
    }

?>