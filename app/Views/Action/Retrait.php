<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../assets/bootstrap.min.css">
    <link rel="stylesheet" href="../../assets/index.css">
    <style>
        div.form-group{
                margin-top: 1%;
                margin-left: 35%;
                padding-top: 52px;
                background-color:#fff;
                height: 80%;
                border-radius: 0px 20px 20px 0px;
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
            }
            form button.bb{
                width: 350px;
            }
            form h1{
                text-align: center;
                color:#0E0E10;
            }
            .b0{
                font-weight: bold;
                font-style: italic;     
                color:brown;
                text-decoration: underline;
            }
            h1.ll{
            margin-right: 10%;
        }
        a.kk{
            width: 250px;
        }
</style>
</head>
<body>  
    <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3">
        <h1 class="bb mr-md-auto font-weight-normal ll">E-Banques</h1>
        <nav class="my-2 my-md-0 mr-md-3">
            <a class="btn btn-primary" href="Utils/dec.php kk">Transaction</a>
            <a class="btn btn-danger" href="Utils/dec.php kk">Deconnexion</a>
        </nav>
    </div>
    <div class="form-group">
        <form class="form-group" action="<?=site_url('bank/Retrait/'.$user['id'])?>" method="post"> 
                <h1 class="b0">Retrait d'argent</h1>
                <input type="number" name="numero" placeholder="Numero de carte">
                <input type="number" name="numero" placeholder="Montant à Retirer">
                <input type="password" name="password" placeholder="Mot de passe">
                <button class="btn btn-danger my-3 bb">Retirer</button>
        </form>
        <p><a href="<?=site_url('bank/index/'.$user['id'])?>">Retour au tableau de bord</a></p>
    </div>
</body>
</html>