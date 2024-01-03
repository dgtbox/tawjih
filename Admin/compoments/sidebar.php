<div class="app-menu navbar-menu">
            <!-- LOGO -->
            <div class="navbar-brand-box">
                <!-- Dark Logo-->
                <a href="home.php" class="logo logo-dark">
                    <span class="logo-sm">
                        <img src="assets/images/logo-sm.png" alt="" height="22">
                    </span>
                    <span class="logo-lg">
                        <img src="assets/images/logo-dark.png" alt="" height="17">
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
                                        <a href="list-etudient.html" class="nav-link" data-key="t-chat"> Liste des etudients </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="add-etudient.html" class="nav-link" data-key="t-chat">Ajouter un etudient</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="edit-etudient.html" class="nav-link" data-key="t-chat">Modifier un etudient</a>
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
                                        <a href="list-employees.html" class="nav-link" data-key="t-chat">Liste des employées</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="add-employees.html" class="nav-link" data-key="t-chat">ajouter un employer</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="edit-employees.html" class="nav-link" data-key="t-chat">modifier un employée</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#sidebartask" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebartask">
                                            Task
                                        </a>
                                        <div class="collapse menu-dropdown" id="sidebartask">
                                            <ul class="nav nav-sm flex-column">
                                                
                                                <li class="nav-item">
                                                    <a href="list-task.html" class="nav-link" data-key="t-chat"> Liste des tasks </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="add-task.html" class="nav-link" data-key="t-chat">Ajouter un task</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="edit-task.html" class="nav-link" data-key="t-chat">Modifier un task</a>
                                                </li>
                                            </ul>
                                        </div>
                                        
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link menu-link" href="#sidebarecoles" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarecoles">
                                <i class="bx bx-file"></i> <span data-key="t-apps">Ecoles</span>
                            </a>
                            <div class="collapse menu-dropdown" id="sidebarecoles">
                                <ul class="nav nav-sm flex-column">
                                    
                                    <li class="nav-item">
                                        <a href="list-ecole.html" class="nav-link" data-key="t-chat"> Liste des écoles </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="add-ecole.html" class="nav-link" data-key="t-chat">Ajouter une école</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="edit-ecole.html" class="nav-link" data-key="t-chat">Modifier une école</a>
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
                                            Dossiers
                                        </a>
                                        <div class="collapse menu-dropdown" id="sidebardossiersetat">
                                            <ul class="nav nav-sm flex-column">
                                                
                                                <li class="nav-item">
                                                    <a href="list-dossiers.php" class="nav-link" data-key="t-chat"> Liste les dossiers </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="list-dossiers-valide.html" class="nav-link" data-key="t-chat"> Dossiers validé</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="list-dossiers-non-valide.php" class="nav-link" data-key="t-chat">Dossiers non validé</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="list-dossiers-en-attendent.php" class="nav-link" data-key="t-chat">Dossiers en attend</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="list-dossiers-annulé  .html" class="nav-link" data-key="t-chat">Dossiers annulé</a>
                                                </li>
                                            </ul>
                                        </div>
                                        
                                    </li>
                                    <li class="nav-item">
                                        <a href="add-dossiers.html" class="nav-link" data-key="t-chat">Ajouter un dossier</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="edit-dossiers.html" class="nav-link" data-key="t-chat">Modifier un dossier</a>
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