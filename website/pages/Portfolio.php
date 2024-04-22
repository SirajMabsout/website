<?php
    session_start();
    if (!isset($_SESSION["user"])){
        header("location:../index.php");
    }
?>
<html>
    <head>
        <link rel="stylesheet" href="../CSS/mystyles.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
              
    </head>
    <body>

    <?php include 'menu.php'; ?>
        <div class="div100 content ">
            <br>
            <div class="div100 ">
                <div class="div50 divL marT marL">
                    <h11>Lebanese to Assembly(BBML)</h11>
                    <p>This project was done during my Computer Organization course
                        the main points that make this project important:</p>
                        <ul2>
                            <li>Only java  code is used.</li>
                            <li>Graphical user interface created.</li>
                            <li>Strings wrote in lebanese syntax</li>
                            <li>Converted to assembly arm v7</li>
                            <li>Output in txt file with code compailable</li>
                        </ul2>

    

                </div>

                <div class="div40 divR marT">

                    <div class="img-box">
                        <img class="img" src="../CO project/assembly.jpg">
                    </div>

                </div>
            </div>
            <div class="div100 divR marT">
                <div class="div40 divR">
                    <a href="COproject.php" class="link-display">
                        <div class="listing-info"><i class="fa fa-microchip"></i> BBML</div>
                    </a>
                </div>
            </div>
                


        


            <div class="div100 marT ">
                <div class="div50 divL marT marL">

                    <h11>Fly Haraty</h11>
                    <p>This project was done during my Database  Management Systems course
                        the main points that make this project important:</p>
                        <ul2>
                            <li>Only java  code is used.</li>
                            <li>Graphical user interface created.</li>
                            <li>Strings wrote in lebanese syntax</li>
                            <li>Converted to assembly arm v7</li>
                            <li>Output in txt file with code compailable</li>
                        </ul2>


                </div>

                <div class="div40 divR marT">

                    <div class="img-box">
                        <img class="img"  src="../database project/DBMS.png">
                    </div>

                </div>
                <div class="div40 divR marT">
                    <a href="DBMSproject.php" class="link-display">
                        <div class="listing-info"><i class="fa fa-plane"></i> Fly Haraty </div>
                    </a>
                    <br><br>
                </div>
                


            </div>



        </div>

        <?php include 'copyright.php'; ?>
        

    </body>


</html>
    