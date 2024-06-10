<?php 
$uploadDir = 'uploads/'; 
$response = array( 
    'status' => 0, 
    'message' => 'Form submission failed, please try again.' 
); 
//if (isset($_POST['submit'])){

// If form is submitted 
if(isset($_POST['name']) || isset($_POST['email']) || isset($_POST['file']) || isset($_POST['message1']))
{ 
    
    // Get the submitted form data 
    require 'connection.php';
    $conn=Connect();
    $name = $conn->real_escape_string($_POST['name']); 
    $email = $conn->real_escape_string($_POST['email']); 
    $message1 = $conn->real_escape_string($_POST['message1']);
    // Check whether submitted data is not empty 
    if(!empty($name) && !empty($email) && !empty($message1)){ 
        // Validate email 
        if(filter_var($email, FILTER_VALIDATE_EMAIL) === false){ 
            $response['message'] = 'Please enter a valid email.'; 
        }else{ 
            $uploadStatus = 1; 
             
            // Upload file 
            $uploadedFile = ''; 
            if(!empty($_FILES["file"]["name"])){ 
                 
                // File path config 
                $fileName = basename($_FILES["file"]["name"]); 
                $targetFilePath = $uploadDir . $fileName; 
                $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION); 
                 
                // Allow certain file formats 
                $allowTypes = array('jpg', 'png', 'jpeg'); 
                if(in_array($fileType, $allowTypes)){ 
                    // Upload file to the server 
                    if(move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)){ 
                        $uploadedFile = $fileName; 
                    }else{ 
                        $uploadStatus = 0; 
                        $response['message'] = 'Sorry, there was an error uploading your file.'; 
                    } 
                }else{ 
                    $uploadStatus = 0; 
                    $response['message'] = 'Sorry, only JPG, JPEG, & PNG files are allowed to upload.'; 
                } 
            } 
             
            if($uploadStatus == 1){ 
                // Include the database config file 
                 
                // Insert form data in the database 
                $insert = $conn->query("INSERT INTO form_data (name,email,file_name,Message) VALUES ('".$name."','".$email."','".$uploadedFile."','".$message1."')"); 
                 
                if($insert){ 
                    $response['status'] = 1; 
                    $response['message'] = 'Form data submitted successfully!'; 
                } 
            } 
        } 
    }else{ 
         $response['message'] = 'Please fill all the mandatory fields (name and email).'; 
    } 
    $conn->close();
} 
    
 
// Return response 
echo json_encode($response);