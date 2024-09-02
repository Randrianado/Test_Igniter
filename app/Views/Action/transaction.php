<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../assets/bootstrap.min.css">
    <link rel="stylesheet" href="../../assets/index.css">
    <title>Document</title>
</head>
<body>
    <main role="main" class="container text-center mt-5">
        <h1>Votre Transaction:</h1>
          <div class="table-responsive">
            <table class="table table-striped table-sm">
              <thead>
                <tr>
                  <th>Type</th>
                  <th>Montant</th>
                  <th>Date</th>
                </tr>
              </thead>
              <tbody>
                <?php foreach($transactions as $transaction):?>
                  <tr>
                    <td><?php echo $transaction["nom"]?></td>
                    <td><?php echo $transaction["amount"]?></td>
                    <td><?php echo $transaction["date"]?></td>
                    <td><button class="btn btn-primary" ><a href="modifier.php?id=<?=$results["id"]?>" class="al">Modifier</a></button></td>
                    <td>
                      <a onclick="confirmDeletion(event,'supp.php?id=<?=$results['id']?>')" class="al btn btn-danger">Supprimer</a>
                    </td>
                  </tr>
                <?php endforeach?>
              </tbody>
            </table>
          </div>
        </main>
</body>
</html>