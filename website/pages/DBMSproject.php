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
<?php include 'menu.php'; ?>
    <div class="content">
        <div class="div100 divL p1">
            <br>
            <h3>Fly Haraty Database Management  System Project</h3>
        </div>
        <div class="div100 divL marL">
            <h2>Small summary about the project</h2>
            <p>
                The project was given to us during our Database Managment System Course,
                we  were asked to create a database that would store information<br> about a functioning airplane company.
                a team of four,one of them is me,managed to develop a full functioning database for the company with many entities.
            </p>

        </div>
        <div class="div50 divL marL">
            <h12>What were the steps to complete the project ?</h12>
            <ul2>
                <li>Implementing ER model</li>
                <li>Transform ER model to Relational Model</li>
                <li>Converting Models we have to SQL  code</li>
                <li>Normalization of database and creating tables with appropriate attributes.</li>
            </ul2>
        </div>
        <div class="div40 divL">
            <h12>What are technology used in the project ?</h12>
            <ul2>
                <li>Latex for  documentation purposes</li>
                <li>software ideas modeler to draw Models</li>
                <li>MySQL as database code language</li>
                <li>Oracle as SQL</li>
                
            </ul2>

        </div>
        <div class="div100 divL marL">
            <h11>What have i learned from this project?</h11>
            <p class="marR">This was a project of its kind because it taught me how to apply what i have learned in lectures into
                real life situations were we brainstormed about how can  we use databases in an airport company.
                It has also enhanced my leadership skills and project managment as for every step of the project their was different leader 
                among the team of 4,so when my turn  came up I had to do the effort to ensure that the project is being completed well.
                I have also gained the skills and knowledge to deal with sql codes.</p>

        </div>

        <div class="div100 divL">
        <?php 
            $images = file("Flyimage.txt");

            foreach ($images as $nb => $image){
                $thumb = "../database project/{$image}T.png";
            ?>
            <div class="thumbnail">
                <a href="#image<?= $nb+1?>" class="click1">
                    <img src="<?=$thumb?>">
                </a>
            </div>

            <?php } ?>


            <?php
            $images = file("Flyimage.txt");

            foreach ($images as $nb => $image){
                $main = "../database project/{$image}.png";
            ?>

        <div id="image<?= $nb+1 ?>" class="background">
            <a href="">
                <div class="button">Back to Gallery</div>
            </a>
            <div class="background2">
                <img src="<?=$main ?>">
            </div>
        </div>

        <?php } ?>
        </div>
    </div>
    <div class = "div100 divL">
        
        <h11 class="marL">You can find below the full documentation for the project,click on the box</h11>
        <a href="../database project/DBMS_Project.pdf" class="link-display ">
            <div class="listing-info  marT"><i class="fa fa-plane"></i> Fly Haraty</div>
            
        </a>
        <br>
    </div>
        <?php include 'copyright.php'; ?>
        
        </div>  
    </div>
    

    </div>

