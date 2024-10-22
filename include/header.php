<?php
            $birthDay = "28-08-1986";
            $today = date("Y-m-d");
            $diff = date_diff(date_create($birthDay), date_create($today));
?>

<div class="photo">
    &nbsp;
    <br />
    <img class="portrait" alt="photo portrait" src="images/header/photo.jpg" />
    <br />
    &nbsp;
</div>
<div class="resume">
    <div class="personne">
        <span class="nom">
            Julien SILBERSTEIN
        </span>
        <br>
        <div class="titre">
            Etudiant en Web-Development
        </div>
        <br /><br />
    </div>
    <div class="about">
        <div class="adresse">
           <img class="home" alt="logo maison" src="images/header/home2.png" />
            94800 Villejuif 
        </div>
        <div class="age">
            <img class="man" alt="logo bonhomme" src="images/header/man2.png" />
        <?=$diff->format('%y')?> ans
        </div>
    </div>
    
</div>
<div class="contact">
    <img class="email" alt="logo mail" src="images/header/email.png" />Jujusilb@gmail.com<br />
    <img class="phone" alt="logo phone" src="images/header/phone2.png" alt="logo phone" />06.14.24.47.29<br />
    <a href="https://www.linkedin.com/in/julien-silberstein-304b9773/?originalSubdomain=fr">
        <img class="linkedin" alt="logo linkedin" src="images/header/linkedin2.png" />
    </a>
</div>