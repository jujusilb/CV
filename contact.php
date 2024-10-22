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
            <form method="post" action="include/form.php">
                <div class="box">
                    <div class="bigtitle">Identité</div>
                    <br>
                    <div class="formu">
                        <div>
                            <label for="nom">Qui êtes vous ?</label>
                                <input type="text" name="nom" id="nom" placeholder="Maxime Martin">
                        </div>
                        <div>
                            <label for="entreprise">Votre Entrepriseou Organisme</label>
                                <input type="text" name="entreprise" id="entreprise" placeholder="monEntrepse Inc">
                        </div>
                    </div>
                    <br />
                </div>
                <br />
                <div class="box">
                    <div class="bigtitle">Contact</div>
                    <br>
                    <div class="formu">
                        <div>
                            <label for="telephone">telephone</label>
                                <input type="tel" name="telephone" id="telephone" placeholder="0123456789">
                        </div>
                        <div>
                            <label for="mail">Votre mail</label>
                                <input type="mail" name="mail" id="mail" placeholder="m.martin@provider.com">
                        </div>
                    </div>    
                    <br />
                </div>
                <br />
                <div class="box">
                    <div class="bigtitle">Message</div>
                    <br>
                    <div class="formu">
                        <label for="message">Votre Message</label><br>
                            <textarea id="message" name="message" rows="15" cols="40">
                                Écrivez ici
                            </textarea>
                    </div>
                    <br />
                </div>
                <input type="submit" name="btSubmit">
            
            </form>
		</div>
	</body>
</html>