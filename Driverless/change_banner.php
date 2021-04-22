<?php
include 'admin_nav.php';
include 'inc/db.php';
?>
                <div class="d-flex flex-column" id="content-wrapper">
                    <div id="content">
                        <div class="container-fluid">
                            <div class="d-sm-flex justify-content-between align-items-center mb-4">
                                <h3 class="text-dark mb-0">Change Banner</h3>
                            </div>
                            <div>
                                <form method="POST" enctype="multipart/form-data">
<?php
if (isset($_POST["submit"])) {
        $filename = $_FILES["banner"]["name"];
        $tempname = $_FILES["banner"]["tmp_name"];	
        move_uploaded_file($tempname,"./assets/img/banner/"."banner.jpg");
        echo '<div class="alert alert-success">Banner Updated Successfully.</div>';
}
?>
                                    <div class="form-group d-flex">
                                        <input class="form-control-file" name="banner" type="file" style="width: 635.297px" />
                                        <button type="submit" name="submit"  class="btn btn-primary" type="button">
                                        Update
                                        </button>
                                        
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>