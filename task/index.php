
<?php
    
    if (isset($_GET['errorMessage'])) {
        echo $_GET['errorMessage'];
    }
    
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Register</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>

    <div class="container">
        <h2>Write Article</h2>
        <form method="post" action="action.php" enctype="multipart/form-data">

            <div class="form-group">
                <label for="exampleInputEmail1">Title</label>
                <input type="text" name="title" class="form-control" id="exampleInputName" aria-describedby="" placeholder="Enter Title">
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1" lang="ar"  dir="rtl">Article</label>
                <textarea type="text" name="article" class="form-control"  placeholder="Enter Article" rows="4"></textarea>
            </div>

            <div class="form-group ">
                <label for="inputGroupFile02">Image</label>
                <input type="file" name="image" class="form-control" id="inputGroupFile02">
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>

        </form>
    </div>
    <br>

</body>

</html>

