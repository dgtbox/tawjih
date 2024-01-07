<div class="page-wrapper">
    <div class="content container-fluid">

        <div class="page-header">
            <div class="row align-items-center">
                <div class="col-sm-12">
                    <div class="page-sub-header">
                        <h3 class="page-title">Ajouter des étudiants</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="students.php">étudiant</a></li>
                            <li class="breadcrumb-item active">Ajouter des étudiants</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="card comman-shadow">
                    <div class="card-body">
                        <form action="student-upload-exec.php" enctype="multipart/form-data" method="post">
                            <div class="row">
                                <div class="col-12">
                                    <h5 class="form-title student-info">Informations sur les étudiants <span><a
                                                href="javascript:;"><i class="feather-more-vertical"></i></a></span>
                                    </h5>
                                </div>
                                <div class="col-12 col-sm-4">
                                    <div class="form-group local-forms">
                                        <label>CLASSE <span class="login-danger">*</span></label>
                                        <select name="id" class="form-control select">
                                            <option>Choisissez la classe dans laquelle sera ajoutée les élèves figurant dans le fichier.</option>
                                            <?php
                                            include('conn.php');
                                            $sql = "SELECT * FROM classe";
                                            $result = mysqli_query($coni, $sql);
                                            while ($row = mysqli_fetch_assoc($result)) {?>
                                            <option value="<?php echo $row["id"] ?>"><?php echo $row["classe"] ?></option>
                                            <?php
                                            }?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-4">
                                    <div class="form-group students-up-files">
                                        <label>Seuls les fichiers CSV compatibles seront acceptés. <br>(taille max : 24Mo)</label>
                                        <div class="uplod">
                                            <label class="file-upload image-upbtn mb-0">
                                            Choisir le fichier <input name="fl" id="fl" type="file">
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="student-submit">
                                        <button type="submit" class="btn btn-primary">Soumettre</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container ">
    <button class="btn btn-primary button-btn " onclick="goBack()">Retour</button>

</div>