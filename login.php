<?php
function verifyLogin($email, $password) {
    if (empty($email)) {
        echo "Veuillez entrer votre adresse e-mail de login !";
        return false;
    }
    
    if (strpos($email, '@') === false) {
        echo "Adresse e-mail de login est incorrecte !";
        return false;
    }

    if (empty($password)) {
        echo "Veuillez taper votre Password !";
        return false;
    }
    return true;
}

$emailLogin = $_POST['Email'];
$passwordLogin = $_POST['Password'];
verifyLogin($emailLogin, $passwordLogin);
?>


<?php
session_start();

include("connexion.php");
    if (isset($_POST["login"])) {
        connexion();
        if (!empty($_POST['Email'])) {
            if($_POST["Email"] == 'Zouhair.choufa3@gmail.com' and $_POST["Password"] == 'ZouhairAdmin123'){
                header('Location: adminpage.html');
                exit();
            }
        $requet = "SELECT * FROM singup WHERE  Email LIKE '".$_POST['Email']."'";    
        $stmt = $bdd->query($requet);
        
        while ($user = $stmt->fetch()) {
            if(!empty($_POST['Password'])){
                if ($_POST["Password"] == $user["Password"]) {
                    $_SESSION['FirstName'] = $user['FirstName'];
                    header("Location: Article_selection.php");
                    exit();
                }else{
                    echo "Invalid Email or Password Resaisire Votre Donnees S'il Vous Plait.";
                    exit();
                }
            }else{
                echo "Veuillez remplir le champ Mot de Passe SVP !!!";
            }
        }
    }
}
?>