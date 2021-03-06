<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fira+Code:wght@400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./styles/dist/style.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <header>
            <div class="div">
                <img src="./image/logo-black-white.png" alt="" width="33px">
            </div>
        </header>
        <div class="main">
            <div class="hello flex block">
                <div class="hello-logo">
                    <img src="./image/logo.jpg" alt=""width="150px">
                </div>
                <div class="hello-title">
                    <p class="hello__title main__title">Welcome to my portfolio</p>
                </div>
                <div class="hello-subtitle">
                    <p class="hello__subtitle subtitle">Hello. This is my portifilio where I will post my design and programming projects  </p>
                </div>
            </div>
            <div class="aboutMe block flex">
                <div class="aboutMe-title title">
                    <p class="aboutMe__title">About Me</p>
                    <hr>
                </div>
                <div class="aboutMe-subtitle flex">
                    <p class="aboutMe__subtitle subtitle">My name is <span class="my_name">Rodion Tiunov</span>. I’m Junior Javascript developer. Lerning Web Design and Web Develop. I want will show my several projects include this portfolio. </p>
                    <p class="aboutMe__postsubtitle subtitle">Please leave a review of my portfolio at the end of the page. I want to know my mistakes.  </p>
                </div>
            </div>
            <div class="mySkills block flex">
                <div class="mySkills-title title">
                    <p>My Skills</p>
                    <hr>
                </div>
                <div class="mySkills-block flex">
                    <div class="mySkills-languages mySkill-item">
                        <div class="mySkills-languages__title mySkills_title preTitle">
                            <p>Languages</p>
                        </div>
                        <div class="mySkills-languages__subtitle subtitle">
                            <p>Javascript<br>•<br>HTML<br>•<br>CSS<br>•<br>PHP</p>
                        </div>
                    </div>
                    <div class="mySkills-programs mySkill-item">
                        <div class="mySkills-programs__title mySkills_title preTitle">
                            <p>Programs</p>
                        </div>
                        <div class="mySkills-programs__subtitle subtitle">
                            <p>VS Code<br>•<br>Webstorm<br>•<br>Photoshop<br>•<br>Figma<br>•<br>Illustrator</p>
                        </div>
                    </div>
                    <div class="mySkills-tech mySkill-item">
                        <div class="mySkills-tech__title mySkills_title preTitle">
                            <p>Technologies</p>
                        </div>
                        <div class="mySkills-tech__subtitle subtitle">
                            <p>React<br>•<br>JQuery<br>•<br>MySQL<br>•<br>Sass<br>•<br>Bootstrap<br>•<br>Webpack</p>
                        </div>
                    </div> 
                </div>
            </div>
            <div class="projects block flex">
                <div class="projects-title title">
                    <p>Projects</p>
                    <hr>
                </div>
                <div class="projects-block flex">
                    <div class="projects-work1 work flex">
                        <div class="projects-work1__title projects_title preTitle">
                            <p>Get rundom number</p>
                        </div>
                        <div class="projects-work1__img projects_img">
                            <img src="./image/five.png" alt="">
                        </div>
                        <div class="projects-work1__subtitle subtitle nexTitle">
                            <p>The program displays a random number in a certain range. </p>
                        </div>
                    </div>
                    <div class="projects-work2 work flex">
                        <div class="projects-work2__title projects_title preTitle">
                            <p>Anime search</p>
                        </div>
                        <div class="projects-work2__img projects_img">
                            <img src="./image/three.png" alt="">
                        </div>
                        <div class="projects-work2__subtitle nexTitle subtitle">
                            <p>This project displays information about cartoons by searching using API jikan.moe</p>
                        </div>
                    </div>
                    <div class="projects-work3 work flex">
                        <div class="projects-work3__title projects_title preTitle">
                            <p>Todo app</p>
                        </div>
                        <div class="projects-work3__img projects_img">
                            <img src="./image/four.png" alt="">
                        </div>
                        <div class="projects-work3__subtitle nexTitle subtitle">
                            <p>Todo app with set, delete and also clear all todos</p>
                        </div>
                    </div>
                    <div class="projects-work4 work flex">
                        <div class="projects-work4__title projects_title preTitle">
                            <p>Clock</p>
                        </div>
                        <div class="projects-work4__img projects_img">
                            <img src="./image/one.png" alt="">
                        </div>
                        <div class="projects-work4__subtitle nexTitle subtitle">
                            <p>The clock shows the time and day of the week. You can also start a timer.  </p>
                        </div>
                    </div>
                    <div class="projects-work5 work flex">
                        <div class="projects-work5__title projects_title preTitle">
                            <p>Slider</p>
                        </div>
                        <div class="projects-work5__img projects_img">
                            <img src="./image/two.png" alt="">
                        </div>
                        <div class="projects-work5__subtitle nexTitle subtitle">
                            <p>Simple slider with use Transition and shower list</p>
                        </div>
                    </div>
                </div>
            </div>          
            <div class="review block flex">
                <div class="review-title title">
                    <p>Review</p>
                    <hr>
                </div>
                <form action="check.php" method="">
                    <div class="review-email">
                        <input type="email" id="email" placeholder="Введите email">
                    </div>
                    <div class="review-input">
                        <textarea name="message" id="description" rows="1" cols="50" placeholder="Please tell what do you think about this portfolio"></textarea>
                    </div>
                    <div class="review-submit">
                        <button type="submit" name="button" id="submit">SEND</button>
                    </div>
                </form>
            </div>
        </div>
        <footer>
            <div class="contacts">
                <div class="contacts-title title">
                    <p>Contacts</p>
                    <hr>
                </div>
                <div class="contacts-block">
                    <a href="https://vk.com/amd_rodion">
                        <img src="./image/vk.svg" alt="">
                    </a>
                    <a href="https://github.com/Rrodya">
                        <img src="./image/github.svg" alt="">
                    </a>
                    <a href="https://t.me/TRodya">
                        <img src="./image/telegram.svg" alt="">
                    </a>
                    <a href="https://www.linkedin.com/in/rodiontiunov/">
                        <img src="./image/linkedin.svg" alt="">
                    </a>
                    <a href="https://www.instagram.com/amd_rodion/?utm_medium=copy_link">
                        <img src="./image/instagram.svg" alt="">
                    </a>
                </div>
            </div>
        </footer>        
    </div>
    <script src="script.js"></script>
    <script src="index.js"></script>
</body>
</html>