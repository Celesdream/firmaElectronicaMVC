<?php 
$uploadDir = '../uploads/'; 
$allowTypes = array('pdf', 'doc', 'docx', 'jpg', 'png', 'jpeg'); 

$response = array( 
    'status' => 0, 
    'message' => 'xxxxx' 
); 

if(isset($_POST['name']) || isset($_POST['email']) || isset($_POST['file']))
{ 
    $name = $_POST['name']; 
    $email = $_POST['email']; 

    if(!empty($name) && !empty($email))
    { 
        if(filter_var($email, FILTER_VALIDATE_EMAIL) === false)
        { 
            $response['message'] = 'xxx'; 
        }
        else
        { 
            $uploadStatus = 1; 
            
            $uploadedFile = ''; 
            if(!empty($_FILES["file"]["name"]))
            { 
                $fileName = basename($_FILES["file"]["name"]); 
                $targetFilePath = $uploadDir . $fileName; 
                $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION); 
                
                if(in_array($fileType, $allowTypes))
                { 
                    if(move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)){ 
                        $uploadedFile = $fileName; 
                    }else
                    { 
                        $uploadStatus = 0; 
                        $response['message'] = 'xxxx'; 
                    } 
                }
                else
                { 
                    $uploadStatus = 0; 
                    $response['message'] = 'xxxxxx'.implode('/', $allowTypes).'xxxx'; 
                } 
            } 
            
            if($uploadStatus == 1)
            { 
                include_once '../config/conDoc.php'; 
                $sqlQ = "INSERT INTO form_data (name,email,file_name,submitted_on) VALUES (?,?,?,NOW())"; 
                $stmt = $db->prepare($sqlQ); 
                $stmt->bind_param("sss", $name, $email, $uploadedFile); 
                $insert = $stmt->execute(); 
                
                if($insert)
                { 
                    $response['status'] = 1; 
                    $response['message'] = 'xxxxxx'; 
                } 
            } 
        } 
    }
    else
    { 
        $response['message'] = 'xxxx'; 
    } 
} 

echo json_encode($response);