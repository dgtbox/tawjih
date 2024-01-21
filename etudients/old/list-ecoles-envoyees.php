<?php session_start(); ?>
<!DOCTYPE html>
<html>
    
<head>
    <title>Home</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,700">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            
                background: linear-gradient(to top, rgba(94,44,127,0.9136904761904762), rgba(222,190,217,1));
                width: 100%;
                height: 100vh;
                background-repeat: no-repeat;
                background-attachment: fixed;
                background-size: cover;
        }
        .navbar {
            background-color: #debed9;
        }
        .card {
            margin-bottom: 20px;
        }
        .fixed-bottom {
            background-color: #371a4a;
            color: #fff;
        }
        .fixed-bottom a {
            color: #fff;
            text-decoration: none;
        }
        .fixed-bottom a i {
            margin-bottom: 5px;
        }

        .row {
            margin-top: 6px;}

        
        a.liens {
            text-decoration: none;
            color: blue;
            cursor: pointer;
        }

        a.liens:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>
<nav class="navbar navbar-expand-lg">
  <div class="container-md">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  </div>
</nav>
    <div class="container mx-auto p-4">
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex mb-3">
                            <h6 class="card-title mb-0 flex-grow-1">Liste des candidatures envoyées</h6>
                            <div class="flex-shrink-0">
                            </div>
                        </div>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>École</th>
                                    <th>Reponse de l'ecole</th>
                                    <th>Accusé</th>
                                </tr>
                            </thead>
                            <tbody class="list form-check-all">
                                <?php
                                include('conn.php');
                                $sql = "SELECT * FROM dossier WHERE statut_interne = 3  ";
                                $result = mysqli_query($coni, $sql);
                                while ($row = mysqli_fetch_assoc($result)) {
                                ?>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="flex-grow-1 ms-2 name">
                                                <a href="detail-ecole.php" class="liens">
                                                                                        <?php
                                                                                    $sql1 = "SELECT * FROM ecole WHERE id = " . $row['id_ecole'] . "";
                                                                                    $result1 = mysqli_query($coni, $sql1);
                                                                                    $row1 = mysqli_fetch_assoc($result1);
                                                                                   
                                                                                
                                                                                    echo $row1['nom']; 
                                                                                    ?></a></div>
                                            </div>
                                        </td>
                                        <td class="etat-dossier">aucune</td>
                                        <td class="remarque"><li class="list-inline-item" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="View">
                                                <a href="../employees/acuse/<?php echo $row['id']?>_acuse.pdf"><i class="ri-download-fill align-bottom text-muted"></i></a>
                                            </li></td>
                                        
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <nav class="fixed-bottom" style="border-radius:10px 10px 0px 0; height : 50px; margin-top: 20px;">
        <div class="container">
            <div class="row">
                <div class="col">
                    <a class="text-white font-weight-bold d-flex flex-column align-items-center" href="#">
                        <i class="fas fa-home"></i>
                        Home
                    </a>
                </div>
                <div class="col">
                    <a class="text-white font-weight-bold d-flex flex-column align-items-center" href="#">
                        <i class="fas fa-info-circle"></i>
                        About
                    </a>
                </div>
                <div class="col">
                    <a class="text-white font-weight-bold d-flex flex-column align-items-center" href="#">
                        <i class="fas fa-envelope"></i>
                        Contact
                    </a>
                </div>
            </div>
        </div>
    </nav>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/js/all.min.js"></script>
</body>
</html>
