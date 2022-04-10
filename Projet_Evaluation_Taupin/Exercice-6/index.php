<?php
      require("assets/php/accesbdd.php");
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs/jqc-1.12.4/jszip-2.5.0/dt-1.11.5/af-2.3.7/b-2.2.2/b-colvis-2.2.2/b-html5-2.2.2/b-print-2.2.2/cr-1.5.5/date-1.1.2/fc-4.0.2/fh-3.2.2/kt-2.6.4/r-2.2.9/rg-1.1.4/rr-1.2.8/sc-2.0.5/sb-1.3.2/sp-2.0.0/sl-1.3.4/sr-1.1.0/datatables.min.css"/>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/v/bs/jqc-1.12.4/jszip-2.5.0/dt-1.11.5/af-2.3.7/b-2.2.2/b-colvis-2.2.2/b-html5-2.2.2/b-print-2.2.2/cr-1.5.5/date-1.1.2/fc-4.0.2/fh-3.2.2/kt-2.6.4/r-2.2.9/rg-1.1.4/rr-1.2.8/sc-2.0.5/sb-1.3.2/sp-2.0.0/sl-1.3.4/sr-1.1.0/datatables.min.js"></script>
    <title>Document</title>
</head>
<body>
        <div class='w-100 h-100 flex-column d-flex align-items-center'>
            <div class="w-10 h-30 message"></div>
            <div class="h-25 w-25 m-1">
              <label for="nom" class="form-label">Nom du chien</label>
              <input type="text" class="form-control" id="name" name='name' aria-describedby="nameHelp">
            </div>
            <div class="h-25 w-25 m-1">
              <label for="surname" class="form-label">Age du chien</label>
              <input type="number" class="form-control" id="surname" name='surname' aria-describedby="surnameHelp">
            </div>
            <div class="h-25 w-25 m-1">
              <label for="exampleInputEmail" class="form-label">race du chien</label>
              <input type="text" class="form-control" id="mail" name='mail' aria-describedby="emailHelp">
            </div>
            <div class="h-10 w-10">
                <button type="submit" class="btn btn-primary" onclick="validation()" name="submitBtnLogin">Submit</button>
            </div>
            <!-- <div class="h-25 w-25 m-1">Chercher votre chien</div>
            <div class="h-25 w-25 m-1">
              <label for="exampleInputEmail" class="form-label">race du chien</label>
              <input type="text" class="form-control" id="race" name='mail' aria-describedby="emailHelp">
            </div>
            <div class="h-10 w-10">
                <button type="submit" class="btn btn-primary" onclick="chercher()" name="submitBtnLogin">Submit</button>
            </div>
            <div class="w-10 h-30 cherche"></div> -->
        </div>
        <div class='w-100 h-100 flex-column d-flex align-items-center'>
        <table id="table_chien" class="display stripe" style="width:100%">
    <thead>
        <tr>
            <th>ID Chien</th>
            <th>Nom du chien</th>
            <th>Age du chien</th>
            <th>Race du chien</th>
        </tr>
        <tbody>
        <?php foreach ($execute as $value){ ?>
        <tr>
            <td><?php echo $value["id_chien"] ?></td>
            <td><?php echo $value["nom_chien"] ?></td>
            <td><?php echo $value["age_chien"] ?></td>
            <td><?php echo $value["race_chien"] ?></td>
        </tr>
        <?php } ?>
    </tbody>
    </thread>

    <script type="text/javascript">
                $('#table_chien').DataTable({
                  paging: true,
                  searchable: true,
                  ordering:  true
                });
          </script>
        </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="assets/js/traitement-connexion.js"></script>
</body>
</html>