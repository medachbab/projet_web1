<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Import Excel</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php
    if(isset($_POST['import-excel'])){
        include_once('conn.php');

        $postType = $_POST['post'];
        switch($postType) {
            case 'student':
                require_once './etudiants.php';
                break;
            case 'teacher':
                require_once './prof.php';
                break;
            case 'admin':
                require_once './admin.php';
                break;
            default:
                break;
        }
    }
    ?>
   
    <div class="container">
        <div class="table-responsive">
            <h3 align="center">Import Excel</h3><br>
            <div class="box">
                <form method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="excel">Select Excel File</label>
                        <input type="file" name="excel-file" required class="form-control"/>
                    </div>
                    <div class="form-group">
                        <select name="post" class="form-select" required>
                            <option value="">Choose your post</option>
                            <option value="student">etudiant</option>
                            <option value="teacher">Professor</option>
                            <option value="admin">Admin</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <input type="submit" name="import-excel" value="Import" class="btn btn-success"/>
                    </div>
                    <p class="error"><?php if(!empty($msg)){echo $msg; } ?></p>
                </form>
            </div>
        </div>
    </div> 
</body>
</html>
