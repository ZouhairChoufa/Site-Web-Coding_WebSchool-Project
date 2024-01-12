
<?php
function verifyRegistration($firstName, $secondName, $email, $password) {
    if (empty($firstName) || empty($secondName)) {
        echo "Veuillez taper votre nom!";
        return false;
    }

    if (empty($email)) {
        echo "Veuillez entrer votre adresse e-mail de register !";
        return false;
    }

    if (strpos($email, '@') === false) {
        echo "Adresse e-mail de register est incorrecte !";
        return false;
    }

    if (empty($password)) {
        echo "Veuillez taper un Password SVP!";
        return false;
    }
    return true;
}

$firstName = $_POST['FirstName'];
$secondName = $_POST['SecondName'];
$emailRegistration = $_POST['Email'];
$passwordRegistration = $_POST['Password'];
verifyRegistration($firstName, $secondName, $emailRegistration, $passwordRegistration);
?>

<?php
session_start();
include("connexion.php");
if(isset($_POST['FirstName']) and isset($_POST['SecondName']) and isset($_POST['Email']) and isset($_POST['Password'])){
    if(!empty($_POST['FirstName']) and !empty($_POST['SecondName']) and !empty($_POST['Email']) and !empty($_POST['Password'])){
    connexion();
    $sql1="select * from singup where Email = '".$_POST['Email']."'";
    $reponse = $bdd->query($sql1);
    $donnees = $reponse->fetch();
    $_SESSION['FirstName'] = $_POST['FirstName'];
    $_SESSION['SecondName'] = $_POST['SecondName'];
        if(empty($donnees)){
            $sql="insert into singup(FirstName, SecondName, Email, Password) values('".$_POST['FirstName']."','".$_POST['SecondName']."','".$_POST['Email']."','".$_POST['Password']."')";
            $bdd->exec($sql);
            header("Location: Article_selection.php");
            exit();
        }
        else{
            echo "<center><h1> Votre Compte Existe Déja. </h1> </center><br>";
            echo "<strong class = loginError> Veullez Just Login In ,Let's Go ...  <a href = Sing_Up.php>Login </a> !!</strong>";
        }
        }
    }
    else{
    echo "<center><h2> Attention !! Remplir tous les champs avec des valeur non nulles </h1></center>"; 
} 

?>