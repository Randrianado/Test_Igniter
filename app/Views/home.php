<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../assets/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/index.css">
    <style>
        h1{
            margin-right: 10%;
        }
        a.btn{
            width: 250px;
        }
        .ml{
            font-size: 30px;
            color:seagreen;<?php echo site_url('auth/login');?>
        }
        a.f{
            font-size: 20px;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3">
        <h1 class="bb mr-md-auto font-weight-normal">E-Banques</h1>
        <nav class="my-2 my-md-0 mr-md-3">
            <a class="btn btn-primary" href="<?=site_url('bank/transaction')?>">Transaction</a>
            <a class="btn btn-danger" href="<?=site_url('auth/logout')?>">Deconnexion</a>
        </nav>
    </div>
    <h5 class="text-light m-10">Votre Solde est de:<?=$user["solde"]?></h5>
    <div class="album py-5">
        <div class="container">
          <div class="row">
            <div class="col-md-6">
                <div class="card mb-4 box-shadow">
                  <div class="card-body">
                   <a href="<?=site_url('bank/Depot/'.$user['id'])?>" class="f">
                        <span aria-hidden="true" class="ml">&CirclePlus;</span>
                        Deposer de l' argent
                   </a>
                  </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card mb-4 box-shadow">
                  <div class="card-body">
                    <a href="<?=site_url('bank/Retrait/'.$user['id'])?>" class="f">
                        <span aria-hidden="true" class="text-danger ml">&dollar;</span>
                        Retirer de l' argent
                    </a>
                  </div>
                </div>
            </div>
            <div class="col-md-25">
                <div class="card mb-4 box-shadow">
                  <div class="card-body">
                    <a href="<?=site_url('bank/Emprunt/'.$user['id'])?>" class="f">
                        <span aria-hidden="true" class="ml">&RightUpTeeVector;</span>
                        demander de l'argent
                    </a>
                  </div>
                </div>
            </div>
          </div>
        </div>
    </div>
</body>
</html>