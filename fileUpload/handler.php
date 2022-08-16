<?php 

if(isset($_FILES)) {
    $file = $_FILES["file"];

    // Check for errors
    if(!$file["error"]) {
        $ALLOWED_IMAGES = ['image/jpg', 'image/jpeg', 'image/png', 'image/gif'];
        $MAX_SIZE = 2000 * 1024; // 2mb

        
        // Check for size [1024] 1kb 
        if($file["size"] > $MAX_SIZE) {
            die("File size is too large");
        }

        // Checking for file type
        if(!in_array($file["type"], $ALLOWED_IMAGES)) {
            die("File type is not allowed");
        }

        $filename_arr = explode(".", $file["name"]);

        $filename = $filename_arr[0];
        $filename .= time() . "." . $filename_arr[1];

        // Uploads Folder
        $destination = "./uploads/";
        $main_file = $file['tmp_name'];

        // Upload the file
        $isUploaded = move_uploaded_file($main_file, $destination.$filename);

        if($isUploaded) {
            echo "FILE UPLOADED";
        }
        else {
            echo "FILE FAILED TO UPLOAD";
        }
    }

}