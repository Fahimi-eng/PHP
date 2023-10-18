<?php
//default: image uploader
function uploader($file , $name_of_input_file , $file_size=50000 , $path_of_store = "uploader/" , $accepted_file_extensions = array('image/jpg' , 'image/jpeg' , 'image/png' , 'image/gif'))
{
    $upload_status = 1; // 1 is ok - 0 is not ok
    $message = '';

    $path = $path_of_store . basename($file['name']);
    $fileType = mime_content_type($file['tmp_name']);

    //check file extension
    if(! in_array($fileType , $accepted_file_extensions)){
        $message = "File type error. Your file type is: ".$fileType;
        $upload_status = 0;
    }

    //check the file is exist or not
    if(file_exists($path)){
        $message = $message." Storage error. Your file already exists";
        $upload_status = 0;
    }

    //check file size
    if($file['size'] > $file_size){
        $message = $message . "File size error. Your file size not in rang";
        $upload_status = 0;
    }

    //store
    if($upload_status == 0){
        $message = $message . " The file was not uploaded.";
        return $message;
    }
    else{
        if(move_uploaded_file($file[$name_of_input_file]['tmp_name'] , $path)){
            $message = "The file" . htmlspecialchars($file[$name_of_input_file]['name'] . "has been uploaded");
        }
        else{
            $message = "Some Unknown error occured.";
        }
        return $message;
    }
}