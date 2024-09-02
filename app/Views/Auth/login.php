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
                margin-top: 10%;
                margin-left: 35%;
                padding-top: 52px;
                background-color:#fff;
                height: 80%;
                border-radius: 20px 0px 20px 0px;
                width: 400px;
                padding: 20px;
                display: grid;
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
            form label{
                font-weight: bold;
                margin: 7px;
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
    <div class="form-group">
        <?php if(session()->getFlashdata('error')):?>
            <p style="color: red;"><?=session()->getFlashdata('error')?></p>
        <?php endif?>
        <form action="<?php echo base_url('auth/loginProcess');?>" class="form-group"> 
                <h1>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" className="size-6 clas1">
                        <path fillRule="evenodd" d="M7.5 6a4.5 4.5 0 1 1 9 0 4.5 4.5 0 0 1-9 0ZM3.751 20.105a8.25 8.25 0 0 1 16.498 0 .75.75 0 0 1-.437.695A18.683 18.683 0 0 1 12 22.5c-2.786 0-5.433-.608-7.812-1.7a.75.75 0 0 1-.437-.695Z" clipRule="evenodd" />
                    </svg>
                </h1>
                <label class="text-dark">Votre numero de carte:*</label>
                <input type="text" name="pseudos">
                <label class="text-dark">Votre mot de passe:*</label>
                <input type="password" name="password">
                <button class="btn btn-primary my-3 bb">Connexion</button>
        </form>
    </div>
</body>
</html>