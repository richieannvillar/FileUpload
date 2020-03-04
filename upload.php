<?php
    include_once("function.php");
    $file= $_FILES['file'];
    //echo"<pre>",print_r($file),"</pre>";
    $fileName= $file['name'];
    $fileType= $file['type'];
    $fileTmpname= $file['tmp_name'];
    $fileSize= $file['size'];
    $dir = "uploads/";

    foreach($fileName as $index => $name) {
        if(tanawonAngFileType($fileType[$index])) {
           if(tanawonAngSize($fileSize[$index])){
               $targetDir = $dir.basename($fileName[$index]);
                if(TanawonKungNaaNaBaNaNgaFile($targetDir)){
                    if(ibalhinSaDirectory($fileTmpname[$index],$targetDir)){
                        echo "Successfully uploaded ",$fileName[$index],"<br>";
                        //echo "<img scr='upload/".$file['name'][$index]."'>";
                    }
                }else{
                    echo "Unable to upload the selected file";
                }

           }else{
                echo "File is too big";
           }
        }else{
            echo "Unknown file";
        }
    }

    
    //scan "upload" folder and display them accordingly
    $folder = "uploads";
    $results = scandir('uploads');
    foreach ($results as $result) {
        if ($result === '.' or $result === '..') continue;

        if (is_file($folder . '/' . $result)) {
            echo '
                <div class="col-md-3">
                    <img src="'.$folder . '/' . $result.'" alt="..." style="width:250px; height:auto;">
                </div>';
        }
    }

?>