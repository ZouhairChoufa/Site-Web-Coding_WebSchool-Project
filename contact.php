<?php
    include('connexion.php');
    if(isset($_POST['FullName']) && isset($_POST['Email']) && isset($_POST['message']))
    {
    if(!empty($_POST['FullName'] && !empty($_POST['Email'] && !empty($_POST['message'])))){
        connexion();
        $req="INSERT INTO contactus(FullName,Email,Mesag) VALUES('{$_POST['FullName']}','{$_POST['Email']}','{$_POST['message']}')";
        $bdd->exec($req);
        echo '<center class="message">"'.$_POST['FullName'].'", Votre message a été envoyé avec succes.</center>';
        echo '<center> <button class= "botton"><a href="Article_selection.php" class="link active"><strong> Back to Article </strong></a></button></center>';
    }else {
        echo '<center class="messag"> Veuillez remplir les champs !!</center>';}}
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
    .message{
        font-family: "Poppins", sans-serif;
        margin-top: 50px;
        font-size: 60px;
        font-weight: 500;
        color: #fff;
    }
    .messag{
        width: 30%;
        margin: auto;
        padding: 2% ;
        border: 2px solid #ccc;
        text-align: center;
        display: table;
        float: none;
        color: rgb(29, 39, 32);
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
