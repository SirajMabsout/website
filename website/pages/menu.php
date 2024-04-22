<?php

?>

html>
    <head>
        <link rel="stylesheet" href="../CSS/mystyles.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
              
    </head>

<div class="background-menu" id="header">
                <div class="div30 divl">
                    <div id="dropdown-menu">
                        <span><i class="ico menu-ico"></i>MENU</span>
                        <div class="dropdown-content">
                            <ul>
                                <a href="Home.php">
                                    <li><i class="fa fa-home yellow" aria-hidden="true"></i> Home Page</li>
                                </a>
                                <a href="cv.php">
                                    <li><i class="fa fa-file yellow" aria-hidden="true"></i> My CV</li>
                                </a>
                                <a href="Extra.php">
                                    <li><i class="fa fa-map yellow" aria-hidden="true"></i> Extra Curriculim</li>
                                </a>
                                <a href="Portfolio.php">
                                  <li><i class="fa fa-archive yellow" aria-hidden="true"></i> My Portfolio</li>
                                </a>
                                <a href="COproject.php">
                                    <li><i class="fa fa-microchip yellow" aria-hidden="true"></i> BBML</li>
                                </a>
                                <a href="DBMSproject.php">
                                    <li><i class="fa fa-plane yellow" aria-hidden="true"></i> Fly Haraty</li>
                                </a>
                            </ul>
                        </div>
                    </div>
                </div>

            <div class="div60 divL">
            <div class="wel">
                <span>WELCOME  <?php echo $_SESSION["user"] ; ?> </span>
            </div>
            </div>
            <div class="div10 divR">
            <a href="../logout.php" class="logout">
                Logout <i class="bi bi-box-arrow-right"></i>
            </a>
        </div>
</div>