<div class="app-menu navbar-menu">
            <!-- LOGO -->
            <div class="navbar-brand-box">
                <!-- Dark Logo-->
                <a href="home.php" class="logo logo-dark">
                    <span class="logo-sm">
                        <img src="assets/images/logo-sm.png" alt="" height="22">
                    </span>
                     
                </a>
                <!-- Light Logo-->
                <a href="home.php" class="logo logo-light">
                    <span class="logo-sm">
                        <img src="assets/images/logo-sm.png" alt="" height="22">
                    </span>
                    <span class="logo-lg">
                        <img src="assets/images/logo-light.png" alt="" height="17">
                    </span>
                </a>
                <button type="button" class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover" id="vertical-hover">
                    <i class="ri-record-circle-line"></i>
                </button>
            </div>

            <div id="scrollbar">
                <div class="container-fluid">

                    <div id="two-column-menu">
                    </div>
                    <ul class="navbar-nav" id="navbar-nav">
                        <li class="menu-title"><span data-key="t-menu">Menu</span></li>
                        <li class="nav-item">
                            <a class="nav-link menu-link" href="home.php">
                                <i class="bx bx-home"></i> <span>Home</span>
                            </a>
                            
                        </li> <!-- end Dashboard Menu -->
                       
                        <li class="nav-item">
                            <a class="nav-link menu-link" href="#sidebaretudients" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebaretudients">
                                <i class="bx bx-file"></i> <span data-key="t-apps">etudients</span>
                            </a>
                            <div class="collapse menu-dropdown" id="sidebaretudients">
                                <ul class="nav nav-sm flex-column">
                                    
                                    <li class="nav-item">
                                        <a href="list-etudient.php" class="nav-link" data-key="t-chat"> Liste des etudients </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="add-etudient.php" class="nav-link" data-key="t-chat">Ajouter un etudient</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link menu-link" href="#sidebaremployees" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebaremployees">
                                <i class="bx bx-file"></i> <span data-key="t-apps">Employées</span>
                            </a>
                            <div class="collapse menu-dropdown" id="sidebaremployees">
                                <ul class="nav nav-sm flex-column">
                                    
                                    <li class="nav-item">
                                        <a href="list-employees.php" class="nav-link" data-key="t-chat">Liste des employées</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="add-employees.php" class="nav-link" data-key="t-chat">ajouter un employer</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <!-- <li class="nav-item">
                            <a class="nav-link menu-link" href="#sidebaradmin" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebaradmin">
                                <i class="bx bx-file"></i> <span data-key="t-apps">Admin</span>
                            </a>
                            <div class="collapse menu-dropdown" id="sidebaradmin">
                                <ul class="nav nav-sm flex-column">
                                    
                                    <li class="nav-item">
                                        <a href="list-admin.php" class="nav-link" data-key="t-chat">Liste des admins</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="add-admin.php" class="nav-link" data-key="t-chat">ajouter un admin</a>
                                    </li>
                                </ul>
                            </div>
                        </li> -->
                        <li class="nav-item">
                            <a class="nav-link menu-link" href="#sidebarecoles" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarecoles">
                                <i class="bx bx-file"></i> <span data-key="t-apps">Ecoles</span>
                            </a>
                            <div class="collapse menu-dropdown" id="sidebarecoles">
                                <ul class="nav nav-sm flex-column">
                                    
                                    <li class="nav-item">
                                        <a href="list-ecole.php" class="nav-link" data-key="t-chat"> Liste des écoles </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="add-ecole.php" class="nav-link" data-key="t-chat">Ajouter une école</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link menu-link" href="#sidebardossiers" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebardossiers">
                                <i class="bx bx-file"></i> <span data-key="t-apps">Dossiers</span>
                            </a>
                            <div class="collapse menu-dropdown" id="sidebardossiers">
                                <ul class="nav nav-sm flex-column">
                                    
                                    <li class="nav-item">
                                        <a class="nav-link" href="#sidebardossiersetat" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebardossiersetat">
                                        Fonctionnalité employe                                        </a>
                                        <div class="collapse menu-dropdown" id="sidebardossiersetat">
                                            <ul class="nav nav-sm flex-column">
                                                
                                                <li class="nav-item">
                                                    <a href="list-dossiers-non-traite.php" class="nav-link" data-key="t-chat"> Dossiers non Traité</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="list-dossiers-en-attente.php" class="nav-link" data-key="t-chat">Dossiers En attente</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="list-dossiers-temine.php" class="nav-link" data-key="t-chat">Dossiers Terminé</a>
                                                </li>
                                            </ul>
                                        </div>
                                        
                                    </li>
                                    <li class="nav-item">
                                        <a href="add-dossiers.php" class="nav-link" data-key="t-chat">Ajouter un dossier</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link menu-link" href="#sidebarperiode" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarperiode">
                                <i class="bx bx-file"></i> <span data-key="t-apps">Période de candidature</span>
                            </a>
                            <div class="collapse menu-dropdown" id="sidebarperiode">
                                <ul class="nav nav-sm flex-column">
                                    
                                    <li class="nav-item">
                                        <a href="list-ecole-periode.php" class="nav-link" data-key="t-chat"> Liste des périodes des écoles </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="add-ecole-periode.php" class="nav-link" data-key="t-chat">Ajouter une période d'école</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link menu-link" href="#sidebararticles" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebararticles">
                                <i class="bx bx-file"></i> <span data-key="t-apps">Articles</span>
                            </a>
                            <div class="collapse menu-dropdown" id="sidebararticles">
                                <ul class="nav nav-sm flex-column">
                                    
                                    <li class="nav-item">
                                        <a href="list-article.php" class="nav-link" data-key="t-chat"> Liste des articles </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="add-article.php" class="nav-link" data-key="t-chat">Ajouter un article</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link menu-link" href="#sidebarannonce" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarannonce">
                                <i class="bx bx-file"></i> <span data-key="t-apps">Annonce</span>
                            </a>
                            <div class="collapse menu-dropdown" id="sidebarannonce">
                                <ul class="nav nav-sm flex-column">
                                    
                                    <li class="nav-item">
                                        <a href="list-annonce.php" class="nav-link" data-key="t-chat"> Liste des annonces </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="add-annonce.php" class="nav-link" data-key="t-chat">Ajouter une annonce</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
                <!-- Sidebar -->
            </div>

            <div class="sidebar-background"></div>
        </div>