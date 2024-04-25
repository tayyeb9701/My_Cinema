<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Cinema</title>    
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <h1>My Cinema</h1>
    <form action="" method="GET">

    <div id="film">
        <p><b>Recherche de Films :</b></p>
        <label for="nom">Nom :</label>
        <input target="_blank" type="text" name="nom" id="nom" placeholder="Nom">
        <label for="genre">Genre :</label>
        <select  name="genre" id="genre"Genre :>
            <option value=""></option>
            <option value="1">Action</option>
            <option value="2">Animation</option>
            <option value="3">Adventure</option>
            <option value="4">Drama</option>
            <option value="5">Comedy</option>
            <option value="6">Mystery</option>
            <option value="7">Biography</option>
            <option value="8">Crime</option>
            <option value="9">Fantasy</option>
            <option value="10">Horror</option>
            <option value="11">Sci-Fi</option>
            <option value="12">Romance</option>
            <option value="13">Family</option>
            <option value="14">Thriller</option>
        </select>
        <label for="distributeur">Distributeur :</label>
        <input type="text" name="distributeur" id="distributeur" placeholder="Distributeur">
        <br>
        <br>
        <label for="date">Date de projection :</label>
        <input type="date" id="date" name="date" value="" min="2017-01-01" max="2030-12-31" />
    </div>

    <div id="ajoutpardate">
        <p><b>Ajout de film par date : </b></p>
        <label for="dat">Ajout :</label>
        <input type="date" name="dat" id="dat" value="" min="2017-01-01" max="2030-12-31"/>
        <input type="time" name="heure" id="heure" pattern="[0-9]{2}:[0-9]{2}" >
        <label for="aidf">ID du film :</label>
        <input type="text" name="aidf" id="aidf" placeholder="ID du film">
        <br>
        <br>
        <label for="salle">Numero de la Salle : </label>
        <select  name="salle" id="salle">
            <option value=""></option>
            <option value="1">Salle 1</option>
            <option value="2">Salle 2</option>
            <option value="3">Salle 3</option>
            <option value="4">Salle 10</option>
            <option value="5">Salle 11</option>
            <option value="6">Salle 12</option>
            <option value="7">Salle 13</option>
            <option value="8">Salle 14</option>
            <option value="9">Salle 15</option>
            <option value="10">Salle 16</option>
            <option value="11">Salle 20</option>
            <option value="12">Salle 21</option>
            <option value="13">Salle 22</option>
            <option value="14">Salle 23</option>
            <option value="15">Salle 30</option>
            <option value="16">Salle 31</option>
            <option value="17">Salle 32</option>
        </select>
    </div>

    <div id="recherchemembre">
        <p><b>Recherche de Membre :</b></p>
        <label for="firstname">Firstname :</label>
        <input type="text" name="firstname" id="firstname" placeholder="Firstname">
        <label for="lastname">Lastname :</label>
        <input type="text" name="lastname" id="lastname" placeholder="Lastname">
        <br>
        <br>
        <label for="rid">ID :</label>
        <input type="text" name="rid" id="rid" placeholder="ID de la personne">

    </div>

    <div id="check">
        <p><b>Check de l'abonnement et Historique :</b></p>
        <label for="abonnement">Nom de l'abonné :</label>
        <input type="text" name="abonnement" id="abonnement" placeholder="Check Abonnement">
        <label for="abonné">Email de l'abonné :</label>
        <input type="text"  name="historique" id="historique" placeholder="Check Historique">
    </div>

 
    <div id="ajouthisto">
        <p><b>Ajout de Films dans l'histo :</b></p>
        <label for="id">ID  :</label>
        <input type="text" name="id" id="id" placeholder="ID du membre">
        <label for="idf">ID Film a ajouté:</label>
        <input type="text" name="idf" id="idf" placeholder="ID du Film a ajouté">
    </div>

    <div id="supphisto">
        <p><b>Suppression de Film dans l'histo : </b></p>
        <label for="ids">ID  :</label>
        <input type="text" name="ids" id="ids" placeholder="ID du membre">
        <label for="idfs">ID Film a supprimé :</label>
        <input type="text" name="idfs" id="idfs" placeholder="ID du Film a supprimé">
    </div>

    <div id="ajoutabo">
        <p><b>Ajouter abonnement a un membre :</b></p>
        <label for="addid">ID :</label>
        <input type="text" name="addid" id="addid" placeholder="ID du membre">
        <label for="sub">Abonnement :</label>
        <select  name="sub" id="sub"subscription :>
            <option value=""></option>
            <option value="1">VIP</option>
            <option value="2">GOLD</option>
            <option value="3">Classic</option>
            <option value="4">Pass Day</option>
        </select>
        <br>
        <br>
        <label for="date">Debut de l'abonnement</label>
        <input type="date" name="debut" id="debut" value="" min="2017-01-01" max="2030-12-31">
        <input type="time" name="debuth" id="debuth" pattern="[0-9]{2}:[0-9]{2}" >
    </div>

    <div id="suppabo">
        <p><b>Supprimer l'abonnement d'un membre</b></p>
        <label for="suppabo">ID : </label>
        <input type="text" name="suppabo" id="suppabo" placeholder="ID du membre">
    </div>

    <div id="modabo">
        <p><b>Modifié l'abonnement :</b></p>
        <label for="modif">ID :</label>
        <input type="texte" name="modif" id="modif" placeholder="ID du membre">
        <label for="subm">Abonnement :</label>
        <select  name="subm" id="subm"subscription :>
            <option value=""></option>
            <option value="1">VIP</option>
            <option value="2">GOLD</option>
            <option value="3">Classic</option>
            <option value="4">Pass Day</option>
        </select>
    </div>

    <div id="buton">
        <p>  </p>
        <input type="submit" value="OK"  />
        <br><br>
    </div>
    </form>


    <?php
    define('USER', "tayyeb");
    define('PASSWD', "Nerod");
    define('SERVER', "localhost");
    define('BASE', "cinema");

    $nom = $_GET['nom'];
    $genre = $_GET['genre'];
    $distributeur = $_GET['distributeur'];
    $firstname = $_GET['firstname'];
    $lastname = $_GET['lastname'];
    $rid = $_GET['rid'];
    $date = $_GET['date'];
    $dat = $_GET['dat'];
    $heure = $_GET['heure'];
    $aidf = $_GET['aidf'];
    $salle = $_GET['salle'];
    $historique = $_GET['historique'];
    $abo = $_GET['abonnement'];
    $id = $_GET['id'];
    $idf = $_GET['idf'];
    $ids = $_GET['ids'];
    $idfs = $_GET['idfs'];
    $addid = $_GET['addid'];
    $sub = $_GET['sub'];
    $debut = $_GET['debut'];
    $debuth = $_GET['debuth'];
    $suppabo = $_GET['suppabo'];
    $modif = $_GET['modif'];
    $subm = $_GET['subm'];


    $dsn = "mysql:dbname=" . BASE . ";host=" . SERVER;
    try {
        $connexion = new PDO($dsn, USER, PASSWD);
    } catch (PDOException $e) {
        printf("Échec de la connexion : %s\n", $e->getMessage());
        exit();
    }



    if ($nom != NULL && $genre != NULL)
    {
        $sql1 = "SELECT *  FROM movie_genre INNER JOIN genre INNER JOIN movie  ON movie.id = movie_genre.id_movie AND movie_genre.id_genre = genre.id WHERE genre.id LIKE '%$genre%' AND title LIKE '%$nom%' ";
        foreach ($connexion->query($sql1) as $row)


            echo $row ['title'] . " " . "<br>" . "ID du Film : ". $row['id'] . "<br>" . "<br>";
    }
    else if($nom != NULL && $distributeur != NULL)
    {
        $sql2 ="SELECT * FROM movie INNER JOIN distributor ON movie.id_distributor=distributor.id WHERE name LIKE '$distributeur%' AND title LIKE '%$nom%'";
        foreach ($connexion->query($sql2) as $row)
            echo $row ['title'] . " " . "<br>" . "ID du Film : ". $row['id'] . "<br>" . "<br>";
    }
    else if ($genre != NULL)
    {
        $sql1 = "SELECT * FROM movie_genre INNER JOIN genre INNER JOIN movie  ON movie.id = movie_genre.id_movie AND movie_genre.id_genre = genre.id WHERE genre.id LIKE '%$genre%' ";
        foreach ($connexion->query($sql1) as $row)
            echo $row ['title'] . " " . "<br>" . "ID du Film : ".  $row['id'] . "<br>" . "<br>";
    }
    else if($nom != NULL)
    {
        $sql = "SELECT * FROM movie WHERE title LIKE '%$nom%' ";
        foreach ($connexion->query($sql) as $row)
            echo $row ['title'] . " " . "<br>" . "ID du Film : ". $row['id'] . "<br>" . "<br>";
    }  
    else if($distributeur != NULL)
    {
        $sql2 ="SELECT * FROM movie INNER JOIN distributor ON movie.id_distributor=distributor.id WHERE name LIKE '$distributeur%' AND title LIKE '%$nom%'";
        foreach ($connexion->query($sql2) as $row)
            echo $row ['title'] . " " . "<br>" . "ID du Film : ". $row['id'] . "<br>" . "<br>";
    }



    if($date != NULL)
    {
        $sql4 = "SELECT *  FROM movie_schedule INNER JOIN movie ON movie_schedule.id_movie=movie.id WHERE date_begin LIKE '%$date%' ";
        foreach ($connexion->query($sql4) as $row)
            echo $row ['title'] . " " . "<br>" . "Date de projection : " . $row['date_begin'] . "<br>" . "Numero de salle : " . $row['id_room'] . "<br>" . "<br>" ;
    }
    if($dat !=NULL && $aidf != NULL && $heure !=NULL)
    {
        $sql10 = "INSERT INTO movie_schedule (id_movie, id_room, date_begin) VALUES ($aidf, $salle, '$dat $heure')";
        foreach ($connexion->query($sql10) as $row)
        echo "OK";
    }


    if ($firstname != NULL && $lastname != NULL)
    {
        $sql7 = "SELECT * FROM user WHERE firstname LIKE '%$firstname%' AND lastname LIKE '%$lastname%' ";
    foreach ($connexion->query($sql7) as $row)
        echo $row ['firstname'] . " " . $row ['lastname'] . " " . "<br>" . $row['email'] . "<br>" . "ID de " . $row ['firstname'] . " " . $row ['lastname'] . " : " . $row['id']  . "<br>" . "<br>";
    }
    else if($firstname != NULL)
    {
    $sql3 = "SELECT * FROM user WHERE firstname LIKE '%$firstname%'";
    foreach ($connexion->query($sql3) as $row)
    echo $row ['firstname'] . " " . $row ['lastname'] . " " . "<br>" . $row['email'] . "<br>" . "ID de " . $row ['firstname'] . " " . $row ['lastname'] . " : " . $row['id']  . "<br>" . "<br>";
    }
    elseif($lastname != NULL)
    {
    $sql6 = "SELECT * FROM user WHERE lastname LIKE '%$lastname%'";
    foreach ($connexion->query($sql6) as $row)
    echo $row ['firstname'] . " " . $row ['lastname'] . " " . "<br>" . $row['email'] . "<br>" . "ID de " . $row ['firstname'] . " " . $row ['lastname'] . " : " . $row['id']  . "<br>" . "<br>";
    }
    elseif($rid != NULL)
    {
        $sql09 = "SELECT * FROM user WHERE id ='$rid' ";
        foreach ($connexion->query($sql09) as $row)
        echo $row ['firstname'] . " " . $row ['lastname'] . " " . "<br>" . $row['email'] . "<br>" . "ID de " . $row ['firstname'] . " " . $row ['lastname'] . " : " . $row['id']  . "<br>" . "<br>";    
    }


   
    if($abo != NULL)
    {
        $sql7 = "SELECT * FROM user INNER JOIN subscription INNER JOIN membership ON membership.id_user = user.id AND membership.id_subscription = subscription.id WHERE firstname LIKE '%$abo%'";
        foreach ($connexion->query($sql7) as $row)
              echo $row ['firstname'] . " " . $row ['lastname'] . "  : " . $row ['name'] . "<br>" . "Date d'inscription : " . $row['date_begin'] . "<br>" . "Email : " . $row['email'] . "<br>" . "ID de l'abonné : " .  $row['id_user'] .  "<br>" .  "<br>";
    }


    if($historique != NULL)
    {   
        $sql5 = "SELECT * FROM user INNER JOIN  membership INNER JOIN membership_log INNER JOIN movie ON membership.id_user = membership_log.id_membership  AND membership_log.id_membership = user.id AND membership_log.id_session = movie.id WHERE email LIKE '%$historique%'";
        $sql55 = "SELECT * FROM user WHERE email LIKE '%$historique%'";
        foreach ($connexion->query($sql55) as $r)
            echo "Historique de " . $r ['firstname']. " " . $r ['lastname'] . " : " . "<br>" . "ID du membre : " . $r['id'] . "<br>" . "<br>";

        foreach ($connexion->query($sql5) as $row)
            echo $row ['title'] . "<br>";
    }


    if($idf != NULL)
    {
        $sql8 = "INSERT INTO membership_log (id_membership, id_session) VALUES ($id, $idf)";
        foreach ($connexion->query($sql8) as $row)
        echo "OK";
    }

    if($ids != NULL)
    {
        $sql9 = " DELETE FROM membership_log WHERE id_membership = $ids AND id_session = $idfs";
        foreach ($connexion->query($sql9) as $row)
        echo "OK";
        
    }

    if($addid != NULL && $sub != NULL && $debut != NULL)
    {
        $sql12 = "INSERT INTO membership (id_user, id_subscription, date_begin) VALUES ($addid, $sub, '$debut $debuth')";
        foreach ($connexion->query($sql12) as $row)
        echo "OK";
        
    }

    if($suppabo != NULL)
    {
        $sql44 = "DELETE FROM membership WHERE id_user = $suppabo";
        foreach ($connexion->query($sql44) as $row)
        echo "OK";
    }

    if($modif != NULL && $subm != NULL )
    {
        $sql66 = "UPDATE membership SET id_subscription = '$subm' WHERE id_user = '$modif' ";
        foreach ($connexion->query($sql66) as $row)
        echo "OK";
    }


    ?> 
    <script src="index.js"></script>
</body>
</html>