<?php
function verifyRegistration($email, $nbrexo, $sol) {
    if (empty($email)) {
        echo "Veuillez entrer votre adresse e-mail de register !";
        return false;
    }
    if (empty($nbrexo)) {
        echo "Veuillez taper le nombre de l'exercice!";
        return false;
    }

    if (strpos($email, '@') === false) {
        echo "Adresse e-mail de register est incorrecte !";
        return false;
    }

    if (empty($sol)) {
        echo "Veuillez taper un Password SVP!";
        return false;
    }
    return true;
}

$emailRegistration = $_POST['Email'];
$nbrexo = $_POST['Exercice'];
$sol = $_POST['message'];

verifyRegistration($emailRegistration, $nbrexo, $sol);
?>
<?php
    include('connexion.php'); 
    connexion();

    $sql = "select * from singup where Email = '".$_POST['Email']."'";
    $reponse = $bdd->query($sql);
    $donnees = $reponse->fetch();

    if(isset($_POST['Email']) && isset($_POST['Exercice']) && isset($_POST['message'])){
        if(!empty($_POST['Email'] && !empty($_POST['Exercice'] && !empty($_POST['Solution'])))){
            $req="INSERT INTO solution(Email,NbrEx,Solution) VALUES('{$_POST['Email']}','{$_POST['Exercice']}','{$_POST['message']}')";
            $bdd->exec($req);
            echo '<center class="Solution">"'.$donnees['FirstName'].'", Votre Solution a été envoyé avec Succes.</center>';
            echo '<center> <button class= "botton"><a href="coding.html" class="link active"><strong> Back to Articles </strong></a></button></center>';
        }else {
            echo '<center class="messag"> Veuillez remplir tout les champs SVP !!</center>';
        }
    }
?>
<style>
    * {
        padding: 0;
        margin: 0;
        box-sizing: border-box;
        font-family: "Poppins", sans-serif;
    }
    body{
        background-color: rgb(21, 15, 46) ;
    }
    .Solution{
        margin-top: 50px;
        color: black;
        font-size: 60px;
        font-weight: 500;
        color: #fff;
    }
    .messag{
        margin: auto;
        padding: 2% ;
        text-align: center;
        display: table;
        float: none;
        font-weight: 400;
        font-size: 40px;
        color: #fff;
    }
    .active{
        text-decoration: none;
        background-color: #f4821e;
        padding: 7px;
        border-radius: 20px;
        color: #fff;
        font-weight: 600;
    }
    .active:hover{
        color: cyan;
    }
    .botton{
        display: table;
        max-width: 30%;
        margin-top: 50px;
        text-align: center;
        align-items: center;
        justify-content: center;
        height: 50px;
        line-height: 50px;
        background-color: #f4821e;
        color: white;
        font-family: Arial, sans-serif;
        font-size: 16px;
        border-radius: 20px;
        cursor: pointer;
        box-shadow: 0 -10px 10px rgba(0, 0, 0, 0.1)
    }
</style>
