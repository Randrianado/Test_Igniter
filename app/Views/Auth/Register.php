<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../assets/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/index.css">
    <style>
        div.form-group{
            margin-top: 5%;
                margin-left: 35%;
                padding-top: 52px;
                background-color:#fff;
                height: 80%;
                border-radius: 20px 0px 20px 0px;
                width: 400px;
                padding: 20px;
        }
            form input{
                height: 55px;
                border: 2px solid #0E0E10;
                width: 350px;
                padding: 5px;
                border-radius:10px;
                margin: 10px;
                font-weight: bold;
            }
            form button.bb{
                width: 350px;
            }
            form h1{
                text-align: center;
                color:#0E0E10;
            }
    </style>
</head>
<body>
    <?php if(isset($error)):?>
        <p style="color: red;"><?= $error?></p>
    <?php endif?>
    <div class="form-group">
        <form class="form-group" action="<?php echo site_url('auth/register');?>" method="post"> 
                <h1>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" className="size-6 clas1">
                        <path fillRule="evenodd" d="M7.5 6a4.5 4.5 0 1 1 9 0 4.5 4.5 0 0 1-9 0ZM3.751 20.105a8.25 8.25 0 0 1 16.498 0 .75.75 0 0 1-.437.695A18.683 18.683 0 0 1 12 22.5c-2.786 0-5.433-.608-7.812-1.7a.75.75 0 0 1-.437-.695Z" clipRule="evenodd" />
                    </svg>
                </h1>
                <input type="text" name="name" placeholder="Nom">
                <input type="text" name="email" placeholder="Email">
                <input type="password" name="password" placeholder="Mot de passe">
                <input type="password" name="confpassword" placeholder="Confirmer le Mot de passe">
                <button class="btn btn-success my-3 bb">Inscription</button>
        </form>
                <?php if(isset($carte)):?>
                    <p>Votre numero de carte est:<?=$carte?></p>
                <?php endif ?>
                <p>Déja Inscrit?<a href="<?=site_url('auth/login');?>">Connecter-vous</a></p>
    </div>
</body>
</html>