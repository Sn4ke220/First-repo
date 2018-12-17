<!doctype html>
<html lang="fr">

<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>MON PROFIL</title>

  <link href="profil.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
  <?php include('connexion.php') ?>
</head>

<body>
  <div class="container">

    <div class="header">
        <a href="recherche.php"><div class="logo"><h1>Mini Facebook</h1></div></a>
      <div class="barrederechercheheader">
         <input type="text" name="search" placeholder="Chercher un contact...">
      </div>
      <div class="btncreerunprofil">
         <a href="formulaire.php"><div class="button">+ Créer un profil</div></a>
      </div>
    </div>

    <div class="title">
      <div class="titleprofil"><p>PROFIL: Nom + Prénom</p></div>
      <div class="titlelistcontact"><p>Liste de personne en relation</p></div>
    </div>

    <div class="contenu">
      <div class="contenuprofil">
          <img src="image/profil.png" alt="photo profil">
          <table>
            <tr>
              <th>Nom</th>
              <td>Van Doornik</td>
            </tr>
            <tr>
              <th>Prénom</th>
              <td>Adrien</td>
            </tr>
            <tr>
              <th>Statut</th>
              <td>Inconnu</td>
            </tr>
            <tr>
              <th>Style musciaux</th>
              <td>Rock, Rap Fr, Electro, Classical, Metal</td>
            </tr>
            <tr>
              <th>Hobbies</th>
              <td>Trading, Art, Photographie</td>
            </tr>
          </table>
          </div>
    <div class="contenulistcontact">
      <a href="profil.php"><table>
         <tr>
          <td><img src="image/profil.png" height="70" width="70" alt="photo profil"></td>
          <td>Nom Prenom<br>
              Type de relation (Famille,Ami,Collegue)
          </td>
        </tr>
      </table></a>
      <a href="profil.php"><table>
         <tr>
          <td><img src="image/profil.png" height="70" width="70" alt="photo profil"></td>
          <td>Nom Prenom<br>
              Type de relation (Famille,Ami,Collegue)
          </td>
        </tr>
      </table></a>
      <a href="profil.php"><table>
         <tr>
          <td><img src="image/profil.png" height="70" width="70" alt="photo profil"></td>
          <td>Nom Prenom<br>
              Type de relation (Famille,Ami,Collegue)
          </td>
        </tr>
      </table></a>
      <a href="profil.php"><table>
         <tr>
          <td><img src="image/profil.png" height="70" width="70" alt="photo profil"></td>
          <td>Nom Prenom<br>
              Type de relation (Famille,Ami,Collegue)
          </td>
        </tr>
      </table></a>
      <a href="profil.php"><table>
         <tr>
          <td><img src="image/profil.png" height="70" width="70" alt="photo profil"></td>
          <td>Nom Prenom<br>
              Type de relation (Famille,Ami,Collegue)
          </td>
        </tr>
      </table></a>
      <a href="profil.php"><table>
         <tr>
          <td><img src="image/profil.png" height="70" width="70" alt="photo profil"></td>
          <td>Nom Prenom<br>
              Type de relation (Famille,Ami,Collegue)
          </td>
        </tr>
      </table></a>
      <a href="profil.php"><table>
         <tr>
          <td><img src="image/profil.png" height="70" width="70" alt="photo profil"></td>
          <td>Nom Prenom<br>
              Type de relation (Famille,Ami,Collegue)
          </td>
        </tr>
      </table></a>
      <a href="profil.php"><table>
         <tr>
          <td><img src="image/profil.png" height="70" width="70" alt="photo profil"></td>
          <td>Nom Prenom<br>
              Type de relation (Famille,Ami,Collegue)
          </td>
        </tr>
      </table></a>
    </div>

    <div class="footer">
      <p>Formation digitale - Mini Facebook by Adrien & Jonathan</p>
    </div>
  </div>
  </div>
</body>
</html>
