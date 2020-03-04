<?php
    function tanawonAngFileType($file){
        $allowed = array('jpeg', 'jpg', 'png');
        $fileExt = explode("/",$file);
        return in_array(end($fileExt),$allowed) ? true : false;
    }


    function tanawonAngSize($file){
        return ($file <= 10000000) ? true : false;
    }

    function TanawonKungNaaNaBaNaNgaFile($file){
        return (!file_exists($file)) ? true : false;
    }

    function ibalhinSaDirectory($file,$target){
        return move_uploaded_file($file,$target);
    }
   
?>