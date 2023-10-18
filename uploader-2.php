function upload_image($file, $path) 
{
        $allowed_types = array('jpg', 'jpeg', 'png', 'gif'); // allowed image types
        $filename = $file['name'];
        $filetype = strtolower(pathinfo($filename, PATHINFO_EXTENSION)); // get file extension
    
        if (!in_array($filetype, $allowed_types)) {
            return "Invalid file type. Only JPG, JPEG, PNG and GIF are allowed.";
        }
    
        $upload_path = $path . basename($filename);
    
        if (move_uploaded_file($file['tmp_name'], $upload_path)) {
            //check the file is exist or not
            if(file_exists($upload_path)){
                return false;
            }
            return $upload_path;
        } else {
            return false;
        }
    
}
