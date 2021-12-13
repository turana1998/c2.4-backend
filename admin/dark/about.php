<?php require_once "header.php" ;
require_once "tinymce.php"; 
require_once "../settings/code/about.php"
?>
<div class="page-wrapper">
            <div class="container-fluid">
               <div class="row page-titles">
                    <div class="col-md-5 align-self-center">
                        <h4 class="text-themecolor">About Us</h4>
                    </div>  
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">About Information</h4>
                                <form class="form pt-3" enctype="multipart/form-data" action="#" method="POST">
                                  <div class="form-group">
                                        <label>Last Image</label>
                                        <br>
                                        <img name="ksekil" height="75px" src="../../<?= $data["photo1"]?>" >
                                        <input type="hidden"
                                         name="ksekil"  value="<?= $data["photo1"]?>" >
                                    </div>
                                    <div class="form-group">
                                        <label>About Title</label>
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-addon11"><i class="ti-write"></i></span>
                                            </div>
                                            <input type="text" class="form-control" name="title" value="<?= $data["title"]?>"
                                            aria-label="Username" aria-describedby="basic-addon11" >
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>About Description</label>
                                        <div class="input-group mb-3">
                                            <textarea name="description"  style="height:200px" class="form-control">
                                            <?= $data["description"]?>
                                            </textarea>
                                          
                                        </div>
                                    </div>
                                    <div class="input-group mb-3">
                                       <div class="input-group-prepend">
                                         <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
                                       </div>
                                       <div class="custom-file">
                                       <input name="photo" type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
                                       <label class="custom-file-label form-control" for="inputGroupFile01">png ,jpg,gif ,jfif</label>
                                      </div>
                                    </div>
                               
                                 <button name="redakte" type="submit" class="btn btn-success mr-2">Redakte Et</button>

                                
                                    
                                </form>
                            </div>
                        </div>
                    </div>
                    
                </div>
               </div>
            
        </div>
<?php require_once "footer.php" ?>