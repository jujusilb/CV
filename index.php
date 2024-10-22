<!DOCTYPE html>
<html lang="fr">
	<head>
		<?php require "include/head.html"; ?>
	</head>

	<body>
		<div class="header">
			<?php require_once "include/header.php"; ?>
		</div>
		<div class="corps">
			<div class="box">
				<div class="categorie">
					&nbsp;&nbsp;
					<img class="logobox" alt="logo etude" src="images/categorie/stud.png" />
    				<div class="bigtitle">
        				FORMATION
    				</div>
				</div>
				<br />
				<?php require_once "include/etudiant.html"; ?>
				<br />
			</div>
		<br />
			<div class="skilllogos">
				<div class="box">
					<div class="categorie">
						&nbsp;&nbsp;	
						<img class="logoBox" alt="logo skills" src="images/categorie/skills.png" />
    					<div class="bigtitle">
        					COMPÉTENCES
    					</div>
					</div>
					<br />
					<?php require "include/computer.html"; ?>
				</div>
		&nbsp;
				<div class="box">
					<div class="categorieb">
    					<div class="bigtitle">
        					LANGUES
						</div>
						<img class="logoBox" alt="logo competence" src="images/categorie/skills.png" />
						&nbsp;&nbsp;
					</div>
					<?php require_once "include/langue.html"; ?>
				</div>
			</div>
		<br />
			<div class="box">
				<div class="categorie">
					&nbsp;&nbsp;
					<img class="logoBox" alt="experience" src="images/categorie/XP.png" />
    				<div class="bigtitle">
        				EXPÉRIENCES PROFESSIONNELLES
    				</div>
				</div>
				<br />
				<?php require_once "include/experience.html"; ?>		
				<br />	
			</div>
		<br />
			<div class="box">
				<div class="categorie">
					&nbsp;&nbsp;
					<img class="logoBox" alt="logo hobbies" src="images/categorie/hobby.png" />
					<div class="bigtitle">
						LOISIRS
					</div>
				</div>
				<br />
				<?php require_once "include/loisir.html"; ?>			
				<br />
			</div>
		</div>
		
	</body>
</html>