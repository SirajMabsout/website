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
        <div class="div100 divL p1">
            <br>
            <h3>Barmajeh Bil Lebneneh Project</h3>
        </div>
        <div class="div100 divL marL">
            <h2>Small summary about the project</h2>
            <p>
                The project was given to us during our Computer Organization Course,
                we were ask to create an application that takes input of coding lines but written in
                lebanese syntax<br> (if = iza)(int = ra2m) and then translate these lines of codes to
                assembly arm v7 code that can be executed.
            </p>

        </div>
        <div class="div50 divL marL">
            <h12>What were the steps to complete the project ?</h12>
            <ul2>
                <li>Create Graphical user interface</li>
                <li>Applying matcher and pattern </li>
                <li>Applying the logic of translating</li>
                <li>testing and debugging the application</li>
            </ul2>
        </div>
        <div class="div40 divL">
            <h12>What are technology used in the project ?</h12>
            <ul2>
                <li>Java as coding language</li>
                <li>Graphical user interface</li>
                <li>Matcher and pattern</li>
                <li>Cpulator to test the assembly output</li>
                
            </ul2>

        </div>
        <div class="div100 divL marL">
            <h11>What have i learned from this project?</h11>
            <p class="marR">This project was so special to me because it was the first project i make in my major
                it was the first time i try to apply what i learned into a problem to solve it.and it was very challanging for 
                our team because we included technologies we didnt hear about before but we researched about what can be the solution
                for our problem and applied it perfectly through hours of hard work.I have learned how to distribute work among the team.
                Throughout  this project I've learn a lot of new features such as graphical user interface and Pattern Matcher technology.

            </p>

        </div>

        <div class="div100 divL">
            <div class="thumb">
                <a href="#Open_in_Same_page1" class="point_on1">
                    <img src="../CO project/testt.png">
                </a>
            </div>
    
            <div class="thumb">
                <a href="#Open_in_Same_page2" class="point_on1">
                    <img src="../CO project/result.jpg">
                </a>
            </div>
    
            <div class="thumb">
                <a href="#Open_in_Same_page3" class="point_on1">
                    <img src="../CO project/testt.png">
                </a>
            </div>
            <div class="thumb">
                <a href="#Open_in_Same_page4" class="point_on1">
                    <img src="../CO project/result.jpg">
                </a>
            </div>

            <div id="Open_in_Same_page1" class="background">
                <a href="">
                    <div class="Back-button">Back</div>
                </a>
                <div class="background2">
                    <img src="../CO project/test.PNG">
                </div>
            </div>
        
            <div id="Open_in_Same_page2" class="background">
                <a href="">
                    <div class="Back-button">Back</div>
                </a>
                <div class="background2">
                    <img src="../CO project/out.PNG">
                </div>
            </div>
        
            <div id="Open_in_Same_page3" class="background">
                <a href="">
                    <div class="Back-button">Back</div>
                </a>
                <div class="background2">
                    <img src="../CO project/test2.PNG">
                </div>
            </div>
        
            <div id="Open_in_Same_page4" class="background">
                <a href="">
                    <div class="Back-button">Back</div>
                </a>
                <div class="background2">
                    <img src="../CO project/out2.PNG">
                </div>
            </div>
        
        <h11 class="marL">You can find below a youtube video testing the project,click on the box</h11>
        <a href="https://www.youtube.com/watch?v=IMbEWYxZAkA" class="link-display ">
            <div class="listing-info marT"><i class="fa fa-microchip"></i> BBL</div>
            
        </a>
        <br>
        <?php include 'copyright.php'; ?>
        </div>
    </div>
    

    </div>

