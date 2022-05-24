<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contact_nour</title>
    <link rel="stylesheet" href="contact.css">
    
</head>
<body>
<form action="upload.php" method="POST">

        <div class="bloc2">
            Réservation  par téléphone:   (+223) 74 00 4747
          </div>
             <div class="img"> <li><img src="nour.jpg" width="99px" height="98px" alt=""></li></div>
           <div class="plane">
             <li> A PROPOS</li>
             <li> SERVICES</li>
             <li> AXES ROUTIERS</li>
             <li> CONTACT</li> 
            </div>
            <div class="formulaire">
              <div class="groupe">
                  <label>Nom:</label>
                  <input type="text" class="input" name="Nom" id="nom" placeholder="Votre nom ici..." >
              </div>
              <div class="groupe">
                  <label>Email:</label>
                  <input type="email" class="input" name="Email" id="mail"placeholder="Votre email ici..." >
              </div>
              <div class="groupe">
                  <label>Objet:</label>
                  <input type="text" class="input" name="Objet" id="objet"placeholder="Votre objet ici..." >
              </div>
              <div class="msg">
                  <label>Message:</label>
                  <textarea name="Meesage" id="Messages" placeholder="Votre message..."></textarea>
              </div>
              <div class="btn"align="right">
                  <button type="submit">Envoyer</button>
              </div>  
        </div>
        <div class="cont"><img src="contact.webp" alt=""> </div>
        <div class="cap"> <img src="peidpage.jpg" alt="" width="100%" height="100%"></div>
    </form>
    
</body>
</html>


