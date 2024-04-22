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
    <div class="marg40">     
        <div class="div30 divL">
            <div class="img-box">
                <img class="img" src="../images/siraj.jpeg">
            </div>
        </div>

        <div class="div40 divL">
            <h1>Siraj Al Mabsout</h1>
            <h3>Computer Science Student</h3>
            <p class = "bio">As a computer science student, I find joy in crafting digital solutions and exploring the endless possibilities of technology.
                <br> My perspective is shaped by the excitement of creating software and the ever-evolving landscape of computer science.</p>
        </div>

        <div class="div30 divR">
            <div class="divRB">
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

        
        <div class="div100 divL">

            <div class="div70 divL" >

                <h2 class="marL"> <i class="fa fa-briefcase yellow" style="font-size:48px;;"></i> PROJECTS</h2>
                <h3 class="marL">Database Management System Project</h3>
                <h4 class="marL"> <i class="fa fa-plane yellow" style="font-size:36px;;"></i> Fly Haraty</h4>
                <br>
                <div class=" div70 divL marB"><h5 class="marL">September-December 2023</h5></div>
                <div class="div30 divR marB"><h5 class="divR marR">Beirut, Lebanon</h5></div>
                <ul>
                    <li><span> Analyzed the facilities needed to allow the airport to function efficiently.</span></li>
                    <li><span>Designed an ER model representing the facilities.</span></li>
                    <li><span>Created a database system of the airport.</span></li>
                    <li><span>Applied the full database for the airport functionality in Oracle SQL.</span></li>
                </ul>

                <h3 class="marL">Computer Organization Project</h3>
                <h4 class="marL"> <i class="fa fa-microchip yellow" style="font-size:36px;"></i> Lebanese To Assembly</h4>
                <br>
                <div class=" div70 divL marB"><h5 class="marL">April-May 2023</h5></div>
                <div class="div30 divR marB"><h5 class="divR marR">Beirut, Lebanon</h5></div>

                <ul>
                    <li><span> Developed a graphical user interface that takes lines of words.</span></li>
                    <li><span> saved the final output in txt file in a specific directory.</span></li>
                    <li><span> Translated the input from the graphical user interface from Lebanese words
                        <br> and numbers into assembly (ARM v7).</span></li>
                </ul>

                <h2 class="marL" > <i class="fa fa-map yellow" style="font-size:30px;"></i> EXTRACURRICULAR ACTIVITIES</h2>
                <div>
                    <div class="div70 divL"><h4 class="marL">National Association for Local Development (NALD), Beirut</h4></div>
                    <div class="div30 divR"><h5 class="divR date2">September 2021-Present</h5></div>
                </div>
                <div class="div100 divL">
                    <ul>
                        <li><span>Volunteered in activities such as visiting an orphanage, infirmary, beach cleaning, and marathon.</span></li>
                </div>

                <div>
                    <div class="div80 divL"><h4 class="marL">Basketball Coach, Ibad, Beirut</h4></div>
                    <div class="div20 divR"><h5 class="divR date2">July 2021-Present</h5></div>
                </div>
                <div class="div100 divL">
                    <ul>
                        <li><span>Set weekly trainings and communicated with parents to update them on the player’s state.</span></li>
                        <li><span>Prepared and managed the summer camps.</span></li>
                    </ul>
                </div>

                <h2 class="marL"><i class="fa fa-graduation-cap yellow" style="font-size:35px;"></i> EDUCATION</h2>
                <div>
                    <div class="div70 divL"><h4 class="marL">Lebanese American University, Beirut, Lebanon</h4></div>
                    <div class="div30 divR"><h5 class="divR date2">Expected Graduation June 2025</h5></div>
                </div>

                <div class="div100 divL">
                    <h4 class="marL">Bachelor in Computer Science</h4>
                    <p class="marL marT">CGPA: 3.96</p>
                </div>
            </div>

            <div class="div30 divR">
                <div class="divRB">
                    <br>


                    <h2 class="h25"><i class="bi bi-person-fill-gear yellow" style="font-size:48px;"></i> SOFT SKILLS</h2>
                    <br><br>
                    <div class="list">Analytical Thinking</div>
                    <br><br>
                    <div class="list">Problem Solving</div>
                    <br><br>
                    <div class="list">Adaptability</div>
                    <br><br>

                    <h2 class="h25"><i class="fa fa-book yellow" style="font-size:48px;"></i> COURSEWORK</h2>
                    <br><br>
                    <div class="list">Algorithms and Data Structures</div>
                    <br><br>
                    <div class="list">Computer Organization</div>
                    <br><br>
                    <div class="list">Operating Systems</div>
                    <br><br>
                    <div class="list">Database Management Systems</div>
                    <br><br>
                    <div class="list">Object-Oriented Programming</div>
                    <br><br>

                    <h2 class="h25"><i class="bi bi-code-slash yellow" style="font-size:40px;"></i> CODING LANGUAGE</h2>
                    <br><br>
                    <div class="div100">
                        <div class="div20 divL list">Java</div>
                        <div class="div20 divR list">Python</div>
                        <br><br>
                    </div>
                    <br><br>
                    <div class="div100">
                        <div class="div20 divL list">C</div>
                        <div class="div20 divR list">HTML</div>
                        <br><br>
                    </div>
                    <br><br>
                    <div class="div100">
                        <div class="div20 divL list">CSS</div>
                        <div class="div20 divR list">JavaScript</div>
                        <br><br>
                    </div>
                </div>
            </div>
        </div>
    </div>  
    <?php include 'copyright.php'; ?>

    </div>   
    </body>
</html>
