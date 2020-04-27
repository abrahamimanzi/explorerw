<nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container">
        <!-- <a class="navbar-brand" href="<?=DN?>">
            <img src="images/logo.png" class="logo-image">
        </a> -->
        <a class="navbar-brand" href="<?=DN?>">
            <b>EXPLORE RWANDA</b>
            <br>
            <small>Tourist information website</small>
        </a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <i class="icon icon-list"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav mx-auto">
                <!-- <li class="nav-item">
                        <a class="nav-link" href="<?=DN?>">Home</a>
                </li> -->
                <li class="nav-item">
                    <a class="nav-link" href="why-rwanda">Why Rwanda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Where to stay</a>
                </li>
                <!-- <li class="nav-item">
                    <a class="nav-link" href="#">What to see & do</a>
                </li> -->
                <li class="nav-item">
                    <a class="nav-link" href="where-to-go">Where to go</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="plan-your-trip">Plan your trip</a>
                </li>
            </ul>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                English 
                </a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">Kinyarwanda</a>
                    <a class="dropdown-item" href="#">French</a>
                    <a class="dropdown-item" href="#">English</a>
                </div>
            </li>
            <!-- <li class="nav-item redirect-link" style=""> -->
            <li class="nav-item dropdown myaccount-link">
                <!-- <a class="nav-link" href="<?=DN?>/login">Login</a> -->
                <?php 
                    if($session_subscriber->isLoggedIn()){ ?>
                        <!-- <a class="nav-link" href="<?=DN?>/net/logout">Logout</a> -->
                        <!-- <a class="nav-link" href="<?=DN?>/net/logout" style="font-size: 14px !important;">My Account</a> -->

                        <a class="nav-link " href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="font-size: 14px !important;padding: .5rem .2rem;">
                        My Account 
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">My Profile</a>
                            <!-- <a class="dropdown-item" href="#">French</a> -->
                            <a class="dropdown-item" href="<?=DN?>/net/logout">Logout</a>
                        </div>
                    <?php
                    }else{?>
                        <a class="nav-link" data-toggle="modal" data-target="#myModal">Login</a>
                        <?php
                    }
                ?>
                
                

            </li>

                
            <img src="<?=DN?>/images/flag.png" class="flag-img md-block d-none d-sm-none d-lg-block">
        </div>
    </div>
</nav>
