<?php
try{

$bdd = new PDO('mysql:host=localhost;dbname=mysql;charset=UTF8','root', '',/*array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION)*/);

}catch (PDOException $e) {
    echo 'Échec lors de la connexion : ' . $e->getMessage();
}

if (isset($_POST['Noms'])&&
    isset($_POST['Types'])&&
    isset($_POST['Themes'])&&
    isset($_POST['Notes'])&&
    isset($_POST['Annees'])&&
    isset($_POST['Groupes'])&&
    isset($_POST['Entreprises'])){
        $insertion=$bdd->prepare('INSERT INTO archives_rapports (Noms, Types, Themes, Notes, Annees, Groupes, Entreprises) VALUES(:Noms,:Types,:Themes,:Notes,:Annees,:Groupes,:Entreprises)');

        $insertion->bindValue(':Noms',$_POST['Noms']);
        $insertion->bindValue(':Types',$_POST['Types']);
        $insertion->bindValue(':Themes',$_POST['Themes']);
        $insertion->bindValue(':Notes',$_POST['Notes']);
        $insertion->bindValue(':Annees',$_POST['Annees']);
        $insertion->bindValue(':Groupes',$_POST['Groupes']);
        $insertion->bindValue(':Entreprises',$_POST['Entreprises']);
        $verification=$insertion->execute();
              if ($verification) {
                echo "Enregistrement réussi";

              } else {
                echo "Echec de l'enregistrement";
              }
        } else {
        }
?>

<?php

if (isset($_POST['submit'])){

    $folder_path = 'Rapports/';

    $filename = basename($_FILES['fichier']['name']);
    $newname = $folder_path . $filename;

    if ($_FILES['fichier']['type'] == "application/pdf"){
        if (move_uploaded_file($_FILES['fichier']['tmp_name'], $newname)){
            echo "Upload effectué ";
        } else{
            echo "<p>Upload Failed.</p>";
        }
      }
    }
?>

<html>
  <head>
    <title>Archives BUT Métiers du Multimédia et de l'Internet</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" />
    <link rel="stylesheet" href="css/style2.css" />
  </head>
  <body>
    <div class="container">
      <h1>Uploadez un rapport</h1>
      <form action="donnees.php" method="post" enctype="multipart/form-data">
        <label>Séléctionner un nouveau rapport, fichier PDF uniquement !</label><br><br>
          <span class="btn btn-default btn-file">
            <input name="fichier" type="file">
          </span>
          <br/><br/>
          <input type="submit" name="submit" class="btn btn-primary" value="Envoyer" style="background-color: #ea943e;">
      </form>
      </div>
    </body>
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/script.js"></script>
</html>
