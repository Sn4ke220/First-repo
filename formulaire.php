<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Creer un profil</title>

  <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
  <link href="formulaire.css" rel="stylesheet">
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
    <div class="divNPPB">
      <form action="action.php" method="post">
        <table>
          <tr>
            <th>CREER UN PROFIL</th>
            <td></td>
          </tr>
          <tr>
            <th>Nom</th>
            <td><input type="text" name="nom" placeholder="Insérer votre Nom" required></td>
          </tr>
          <tr>
            <th>Prénom</th>
            <td><input type="text" name="prenom" placeholder="Insérer votre Prénom" required></td>
          </tr>
          <tr>
            <th>Statut</th>
            <td><input type="text" name="statut" placeholder="Insérer votre Statut" required></td>
          </tr>
          <tr>
            <th>Insérer une photo</th>
            <td><input type="url" name="url" placeholder="Insérer l'url d'une photo ou image"></td>
          </tr>
          <tr>
            <th>Date de naissance</th>
            <td><input type="date" name="datedenaisssance" required></td>
          </tr>
          <tr>
            <th>Préférence muscial</th>
            <td><input type="checkbox" name="genreMusical[]" value="Jazz" id="Jazz"><label for="Jazz">Jazz</label>
              <input type="checkbox" name="genreMusical[]" value="Rock" id="Rock"><label for="Rock">Rock</label>
              <input type="checkbox" name="genreMusical[]" value="Reggeae" id="Reggeae"><label for="Reggeae">Reggeae</label>
              <input type="checkbox" name="genreMusical[]" value="Rap" id="Rap"><label for="Rap">Rap</label>
              <input type="checkbox" name="genreMusical[]" value="Metal"id="Metal"><label for="Metal">Metal</label>
              <input type="checkbox" name="genreMusical[]" value="RnB" id="Rnb"><label for="Rnb">RnB</td>
              </tr>
              <tr>
                <th>Hobbies</th>
                <td><input type="checkbox" name="Hobbies[]" value="Trading" id="Trading"><label for="Trading"> Trading</label>
                  <input type="checkbox" name="Hobbies[]" value="Sports" id="Sports"><label for="Sports"> Sports</label>
                  <input type="checkbox" name="Hobbies[]" value="Dessin" id="Dessin"><label for="Dessin"> Dessin</label>
                  <input type="checkbox" name="Hobbies[]" value="Cinéma" id="Cinéma"><label for="Cinéma"> Cinéma</label>
                  <input type="checkbox" name="Hobbies[]" value="Lecture" id="Lecture"><label for="Lecture"> Lecture</label>
                  <input type="checkbox" name="Hobbies[]" value="Photo"id="Photo"><label for="Photo"> Photo</label>
                </td>
              </tr>
              <tr>
                <th>Ajouter des contacts</th>
                <td>
                  <input type="checkbox" name="personnes[]" id="friend1" value="profil1">
                  <label for="friend1">My friend 1</label>
                  <select id="relation" name="relation[]">
                    <option label="famille" value="famille">Famille</option>
                    <option label="ami" value="ami">Ami</option>
                    <option label="collègue" value="collègue">Collègue</option>
                  </select><br>
                  <input type="checkbox" name="personnes[]" id="friend2" value="profil2">
                  <label for="friend2">My friend 2</label>
                  <select id="relation" name="relation[]">
                    <option label="famille" value="famille">Famille</option>
                    <option label="ami" value="ami">Ami</option>
                    <option label="collègue" value="collègue">Collègue</option>
                  </select><br>
                  <input type="checkbox" name="personnes[]" id="friend3" value="profil3">
                  <label for="friend3">My friend 3</label>
                  <select id="relation" name="relation[]">
                    <option label="famille" value="famille">Famille</option>
                    <option label="ami" value="ami">Ami</option>
                    <option label="collègue" value="collègue">Collègue</option>
                  </select><br>
                  <input type="checkbox" name="personnes[]" id="friend4" value="profil4">
                  <label for="friend4">My friend 4</label>
                  <select id="relation" name="relation[]">
                    <option label="famille" value="famille">Famille</option>
                    <option label="ami" value="ami">Ami</option>
                    <option label="collègue" value="collègue">Collègue</option>
                  </select><br>
                  <input type="checkbox" name="personnes[]" id="friend5" value="profil5">
                  <label for="friend5">My friend 5</label>
                  <select id="relation" name="relation[]">
                    <option label="famille" value="famille">Famille</option>
                    <option label="ami" value="ami">Ami</option>
                    <option label="collègue" value="collègue">Collègue</option>
                  </select>
                </td>
              </tr>
              <tr>
                <th>Valider</th>
                <td><input class="Submit" type="submit" value="Enregistrer mon profil"></td>
              </tr>
            </table>
          </form>
        </div> <!-- divNPPB -->
        <div class="footer">
          <p>Formation digitale - Mini Facebook by Adrien & Jonathan</p>
        </div>
      </div> <!-- container -->
</body>
</html>
