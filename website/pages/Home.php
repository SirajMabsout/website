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
            <div class="div50 divl">
                <div class="marL">
                    <h2>Whom Am I <i class="fa fa-question-circle yellow" aria-hidden="true"></i></h2>
                    <p class="font">I'm Siraj Mabsout a 19 years old male.I am currently enrolled in LAU seeking BS in computer science.<br>
                        Trying my best to earn the degree with high benefits from what i learned. <br>
                        Always trying to improve myself and work on my soft skills.
                    </p>
                    <h2>Why i created this website <i class="fa fa-question-circle yellow" aria-hidden="true"></i></h2>
                    <p class="font">The main reason why i created this website is it because an Assignment<br>
                    other reason is for it to be an introduction for anyone who wants to know me<br>
                    this website might show the professional side of me and <br>
                    also what i do else than my career path spending time in extracurrircular activities</p>
            
                    </ul>
                    <p class="font">Regardless what type you are, I pleasantly wellcome you in my website, and I
                        have put my contact information in case you would like to contact me. Please read the bellow
                        instructuons
                        if you would like to continue. Thank you!
                    </p>
                </div>
            </div>
            <div class="div50 divL marT">
                <div class="img-box2"style="width: 60%;" >
                    <img class="img" src="../images/me.jpeg">
                </div>
            </div>

        </div>
            <div class="div100 divl">
                <div class="div50 divl">
                    <div class="marL">
                        <h2>What does the website contains <i class="fa fa-question-circle yellow" aria-hidden="true"></i></h2>
                        <h3><i class="fa fa-file-text-o yellow" aria-hidden="true"></i> CV Page:</h3>
                        <p class="h2">
                                    This page have the resume of mine that is needed from HR of companies,it shows:
                        </p>
                        <ul>
                            <li class="h5">SMALL BIO</li>
                            <li class="h5">CONTACT LINKS</li>
                            <li class="h5" >PROJECT DESCRIPTION</li>
                            <li class="h5">EXTRACURRICULAR ACTIVITIES</li>
                            <li class="h5" >EDUCTION</li>
                            <li class="h5">SOFT SKILLS</li>
                        </ul>

    
                        <h3><i class="fa fa-map yellow" aria-hidden="true"></i> Extra Curriculum Page:</h3>
                        <p class="h2">
                                    In this page i will be talking about the extra things i do other than career focused activities
                                    I have been involved in many different activites such as Ibad,Nald,Basketball.
                                    All of those will be detailed in that page</p>

    
                        <h3><i class="fa fa-briefcase yellow" aria-hidden="true"></i> Portfolio Page:</h3>
                        <p class="h2">   
                           
                                    In this page i will show case the projects i did throught my journey in computer science field
                                    gallery for each project will be provided to visual what the project is about</p> 

    
                        <p class="h2">
                            if you have reached this level,it means you want to know more about me,use the menu dropdown
                             to travel between the different realms the website offers</p>
                    </div>
                </div>
                <div class="div50 divL marT">
                    <br><br><br><br><br><br><br><br>
                    <div class="img-box2"style="width:60%;" >
                        <img class="img" src="../images/me2.jpeg">
                    </div>
                </div>
 
    
            </div>
            
        </div>
    
        <?php include 'copyright.php'; ?>

    
    </div>

    </body>