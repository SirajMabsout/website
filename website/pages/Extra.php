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
    <div class="content">
        <br><br>
        <div class="div50 divl">
            <div class="marL">
                <h11>Basketball Coach at IBAD </h11>
                <p class="font">Starting as a basketball player in this local Association,i have admired the game and what the association do 
                    attending basketball practices was not the only thing i did, i got enrolled in programs where we dedicate our work to help who needs
                    i have learned to help others,volunteer my time for the sake of others,and it enhanced my soft skills.
                    after spending time in the association they noticed my abilities and started training me to not only be <br>a basketball coach but also a leader
                    for the upcoming generation after me who will be enrolled in same volunteering activities.
                    Now i am basketball coach for Under 10 team,responsible for their basketball practices,monitiring their state with their parents,setting extra activities
        
                    
                </p>
            </div>
        </div>

        <div class="div50 divl">
            <div class="marL">
                <h11>Volunteering in NALD </h11>
                    <p class="font">National Association for Local Develpoment (NALD) is a non-profit organization
                        that provides opportunties for who want to volunteer in social activies to be part of it.
                        My sister being a Leader in this Association,she encourged me to enroll in the activities they do.
                        from then i start attend various activities such as going to orphanage and spend time with orphans helping them
                        and playing with them to cheer them up,also attended sports activities and beach cleaning days.
                        and also attended marathon setting activity where we organize the packages for runners and guide them through zones.
                        All these activies have enhanced my personality and my social skills and made me a better person and communicator.
                    </p>
             </div>
        </div>
    </div>
    
    <div class="div100 divL">

    <?php 
            $images = file("Extraimage.txt");

            foreach ($images as $nb => $image){
                $thumb = "../extraC/{$image}T.png";
            ?>
            <div class="thumbnail">
                <a href="#image<?= $nb+1?>" class="click">
                    <img src="<?=$thumb?>">
                </a>
            </div>

            <?php } ?>


            <?php
            $images = file("Extraimage.txt");

            foreach ($images as $nb => $image){
                $main = "../extraC/{$image}.jpeg";
            ?>

        <div id="image<?= $nb+1 ?>" class="background">
            <a href="">
                <div class="button">Back to Gallery</div>
            </a>
            <div class="background2">
                <img src="<?=$main?>">
            </div>
        </div>

        <?php } ?>
        </div>
    </div>
    </div>

    <?php include 'copyright.php'; ?>


                        


</body>


</html>