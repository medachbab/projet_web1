<?php
require_once './ajouter_etudiant.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ajouter etudiants</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</head>
<body>
    <div class="container my-5">
        <h2>ajouter un etudiant</h2>
        <?php
            if (!empty($errorMessage)){
                echo" <div class='alert alert-waring alert-disissible fade show' role='alert'>
                <strong>$errorMessage</strong>
                <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                
                </div>";
            }
        ?>      
        <form method="post">
            <div class="row mb-3"> 
                <label class="col-sm-3 col_form-label"> Nom</label>
                <div class=" col-sm-6">
                    <input type="text" class="form-control" name="nom" value="<?php echo $Nom;?>">
                </div>
            </div>
           
            <div class="row mb-3">
                <label class="col-sm-3 col_form-label"> prenom</label>
                <div class=" col-sm-6">
                    <input type="text" class="form-control" name="prenom"  value="<?php echo $prenom;?>">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col_form-label"> gmail</label>
                <div class=" col-sm-6">
                    <input type="text" class="form-control" name="gmail"  value="<?php echo $gmail;?>">
                </div>
            </div>
            <!-- <div class="row mb-3">
                <label class="col-sm-3 col_form-label"> hashed_pass</label>
                <div class=" col-sm-6">
                    <input type="text" class="form-control" name="hashed_pass"  value="<?php echo $hashed_pass;?>">
                </div>
            </div>    -->
            <div class="row mb-3">
            <label class="col-sm-3 col_form-label"> num_etudiant</label>
            <div class=" col-sm-6">
                <input type="text" class="form-control" name="num_etudiant"  value="<?php echo $num_etudiant;?>">
            </div>
            </div>
            <div class="row mb-3">
            <label class="col-sm-3 col_form-label"> id_niveau</label>
            <div class=" col-sm-6">
                <input type="text" class="form-control" name="id_niveau"  value="<?php echo $id_niveau;?>">
            </div>
            </div>
            <div class="row mb-3">
            <label class="col-sm-3 col_form-label"> id_filiere</label>
            <div class=" col-sm-6">
                <input type="text" class="form-control" name="id_filiere"  value="<?php echo $id_filiere;?>">
            </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col_form-label"> mail_etudiant</label>
                <div class=" col-sm-6">
                    <input type="text" class="form-control" name="mail_etudiant"  value="<?php echo $mail_etudiant;?>">
                </div>
            </div>


            <?php
            if (!empty($successMessage)){
                echo" 
                <div class='alert alert-waring alert-disissible fade show' role='alert'>
                <strong>$successMessage</strong>
                <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                
                </div>";
            }
        ?>
            <div class="row mb-3">
                <div class="offset-sm-3 col-sm-3 d-grid">
                    <button type="submit" class="btn btn-primary">Ajouter</button>
                </div>
                <div class="col-sm-3 d-grid">
                    <a class="btn btn-outline-primary" href="index.php" role="button">Cancel</a>
                </div>
            </div>
        </form>
    </div>
    
</body>
</html>