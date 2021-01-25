<?php 

    echo '<nav class="navbar navbar-expand-lg navbar-dark position-relative" role="navigation">';

    echo '<div class="container">';
    echo "<a class=' navbar-brand logo-brand' href='index.php'>
            <img class='logo' src='images/logo.jpg' alt='logo Paysames'>
            <div class='position-absolute paysames-txt'>Paysames</div>
        </a>";

    echo  '<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#myNavbar" aria-controls="myNavbar" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    
    <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="navbar-nav ml-auto list-item-nav">
            <li class="nav-item">
                <a class="nav-link" href="laferme.php">La Ferme</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="gestepaysan.php">Les Gestes Paysans</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Le Blog</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">La Boutique</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="index.php#contactez"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill-rule="evenodd" d="M1.75 3A1.75 1.75 0 000 4.75v14c0 .966.784 1.75 1.75 1.75h20.5A1.75 1.75 0 0024 18.75v-14A1.75 1.75 0 0022.25 3H1.75zM1.5 4.75a.25.25 0 01.25-.25h20.5a.25.25 0 01.25.25v.852l-10.36 7a.25.25 0 01-.28 0l-10.36-7V4.75zm0 2.662V18.75c0 .138.112.25.25.25h20.5a.25.25 0 00.25-.25V7.412l-9.52 6.433c-.592.4-1.368.4-1.96 0L1.5 7.412z"></path></svg></a>
            </li>
        </ul>
    </div> </div> </nav>';

?>