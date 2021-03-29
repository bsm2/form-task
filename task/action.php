<?php 


require 'connection.php';    

if($_SERVER['REQUEST_METHOD'] == "POST"){

    function validation($str){

        return stripcslashes(htmlspecialchars(trim($str)));

    }

    $title      = validation($_POST['title']);
    $content    = validation($_POST['article']);

    // Validation 

    $messages = array();

    if (strlen($_POST['title']) < 2 || strlen($_POST['title']) > 20||empty($_POST['title'])) {
        $messages[]= 'error in the title';
    } else {
        echo $title.'<br>';
    }

    if (strlen($_POST['article']) < 10 || strlen($_POST['article']) > 100 ||empty($_POST['article'])) {
        $messages[]= 'error in the article';
    } else {
        echo $content.'<br>';
    }
    // image file validation
    $fileTmpName = $_FILES['image']['tmp_name'];
    $fileName = $_FILES['image']['name'];

    $fileExt = explode('.',$fileName);    
    $count =   count($fileExt);
    $extension = strtolower($fileExt[$count-1]);

    $imageName = time().$fileExt[0].'.'.$extension;

    $allow_ex = array('jpg','gif','png');
    
    if(in_array($extension,$allow_ex)){
        $uploadFolder = './uploads/'; 
        $destPath = $uploadFolder.$imageName;

        if(move_uploaded_file($fileTmpName,$destPath)){
            echo 'File '.$imageName.' Uploaded<br>';
        }else{
            $messages[] = 'Error in Upload File';
        }

    }else{

        $messages[] = 'error in file extension wrong file';
    }

        
    

    if( !empty($messages)){
        
        foreach ($messages as $message) {
            echo $message.'<br>';
        }

    }else{
        $query = "insert into posts (title,content,image) values('$title','$content','$imageName')";

            $result =   mysqli_query($con,$query);

            if($result){
                echo  'data inserted ';
            }else{
                echo   'error in insert op';
            }

    }
    




}else{

    $errorMessage =  'Error in request method';

    header('Location:index.php?errorMessage='.$errorMessage);


}






?>