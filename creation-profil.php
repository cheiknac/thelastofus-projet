<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;900&display=swap" rel="stylesheet">



</head>
<body>

<div id="left">

    <img src="images/Lucioles_logo.png" width="120px" alt="logo-les lucioles">





</div>

<div id="right">

<nav>
  <ul>
   <li><a href="#">The last of us part II</a></li>
   <li><a href="#">Les lucioles</a></li>
   <li><a href="#">Shop</a></li>
   <li><a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
   <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
   </svg></a></li>
  </ul>
</nav>

<div id="small-right">  

   <h1>CREER TON PROFIL</h1>
   <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
   Lorem Ipsum has been the industry's standard</p>


 <form action="profil.php" method="GET">

<div id="firs-block-spec">   
   <div id="form-block-spec">
       <label>Avatar</label><br>
       <input type="file" name="fileToUpload" id="fileToUpload"><br>
       <input type="submit"><br>
   </div>

   <div id="form-block">
       <img style="border-radius: 50%;" src="images/the-last-of-us-part-2.jpeg" width="150px" height="150px" alt="photo de profil">
   </div>
</div>



<div id="firs-block">
   <div id="form-block">
         <label>Nom</label><br>
         <input type="text" name="nom"><br>
    </div>

    <div id="form-block">
         <label>Prénom</label><br>
         <input type="text" name="prenom"><br> 
   </div>
</div>



<div id="firs-block">
    <div id="form-block">
         <label>Nom d'utilisateur</label><br>
         <input type="text" name="nomdutilisateur"><br>
    </div>

    <div id="form-block">
         <label>Date de naissance</label><br>
         <input type="text" name="datedenaissance" placeholder="XX/XX/XXXX"><br>
    </div>
</div>


    <input id="validerprofil" type="submit" name="btOK" value="Valider">



</form>

 


    
  </div>

  </div>

</body>
</html>