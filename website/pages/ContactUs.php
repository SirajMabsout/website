<?php
    session_start();
    if (!isset($_SESSION["user"])){
        header("location:../index.php");
    }
?>
<head>
    <link rel="stylesheet" href="../CSS/mystyles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
</head>

<body>
    <?php include 'menu.php'; ?>
    <div class="content">
        <div class="div100 marT marL"><h11><br>Hope everything was ok with you while traversing the website
            if you want to contact us reach us out
        </h11></div>
        <div class="div50 divl">
            <div class="marL" >
                <br><br>
                <h2>How to contact us <i class="fa fa-question-circle yellow" aria-hidden="true"></i></h2>
                <h5 class="font">You can reach me through:</h5>
                    <ul2><li>Mail</li><li>Phone number</li><li>Github</li><li>Linkedin</li></ul2>
                <p class="h1">
                    <br>
                    On the right you can see my contacts and note that they are hyperlinked<br>just click on them and they will 
                    direct you to start your contact.
                </p>
                
            </div>
        </div>
        <div class="div40 divR divRB">
            <br><br>
                <p class="p1">
                    <br>
                    <i class="fa fa-envelope-o hyperlink" ><a href="mailto:siraj.almabsout@outlook.com"class = "hlink"> siraj.almabsout@outlook.com</a></i>
                    <br><br><br>
                    <i class="fa fa-phone hyperlink" ></i><a href="tel:(+961) 78811997  "class = "hlink">(+961)78811997</a></i>
                    <br><br><br>
                    <i class="bi bi-github hyperlink" ><a href="https://github.com/SirajMabsout"class = "hlink"> github.com/SirajMabsout</a></i>
                    <br><br><br>
                    <i class="bi bi-linkedin hyperlink" ></i><a href="https://linkedin.com/in/siraj-al-mabsout"class ="hlink">linkedin.com/in/siraj-al-mabsout</a></i>
                    <br><br><br>
                </p>
            </div>
        </div>
        <div class="div100 divL bck">
            <div class="div50 divL">
                <p class="yellow marL">Copyright Ⓒ 2024 Siraj Mabsout. All rights Reserved</p>
            </div>

        </div>  