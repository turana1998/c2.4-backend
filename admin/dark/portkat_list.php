<?php require_once "header.php" ;
require_once "tinymce.php"; 
require_once "../settings/code/portKat.php"
?>
<div class="page-wrapper">
            <div class="container-fluid">
               <div class="row page-titles">
                    <div class="col-md-5 align-self-center">
                        <h4 class="text-themecolor">Portfolio kateqoriya Siyahi</h4>
                    </div>  
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Portfolio kateqoriya Siyahi</h4>
                                <div class="table-responsive">
                                    <table class="table color-bordered-table danger-bordered-table">
                                        <thead>
                                            <tr>
                                                
                                                <th>Ad</th>
                                                <th>Sira</th>
                                                <th>Status</th>
                                                <th>Emeliyyatlar</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                           <?php for($i=0;$i<count($siyahi);$i++){?>
                                            <tr>
                                               
                                                <td><?=$siyahi[$i]["Ad"]?></td>
                                                <td><?=$siyahi[$i]["sira"]?></td>
                                                <td>
                                                <input type="checkbox"  class="js-switch" data-color="#f62d51" <?=$siyahi[$i]["status"] ? "checked='checked'" : ""?>
                                                />
                                                </td>
                                                <td> 
                                                <button type="submit" class="btn btn-outline-danger"> <i class="fa fa-pencil"></i> Redakte</button>
                                                <button type="submit" class="btn btn-danger"> <i class="fa fa-pencil"></i> Silmek</button>
                                                </td>
                                            </tr>
                                           <?php }?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
               </div>
            
        </div>
<?php require_once "footer.php" ?>