<?php 
    
    include_once ("header.php")
?>
    <div class="container">
        <div class="card p-2 mt-2">
            <form action="upload.php" method="post" enctype="multipart/form-data">
                <h3>Upload image</h3>
                <div class="card p-2">
                    <input type="file" name="file[]" multiple>
                </div>              
                <button class="btn btn-danger mt-2" type="submit">
                    <i class="fas fa-file-upload"></i></span> Upload
                </button>
            </form>
        </div>  
    </div>
<?php

?>
