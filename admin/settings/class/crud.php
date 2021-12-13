<?php
  class CRUD{
      public function Select($table,$multi=0,$where=null,$arr=null,$column="*"){
        global $db;
        $slc=$db->prepare("SELECT {$column} from {$table} {$where}");
        $slc->execute($arr);
        return $multi ? $slc->fetchAll(PDO::FETCH_ASSOC) : $slc->fetch(PDO::FETCH_ASSOC);
      }
      public function UPDATE($table,$column=null,$where=null,$arr=null)
      {
            global $db;
            $upd=$db->prepare("UPDATE {$table} set {$column} {$where}");
            $dys=$upd->execute($arr);
            return $dys ? 1 : 0;
      }
      public function Insert($table,$column=null,$arr=null){
            global $db;
            $ins=$db->prepare("INSERT into {$table} set {$column}");
            $dys=$ins->execute($arr);
            return $dys ? 1 : 0;
         
      }
  }

?>