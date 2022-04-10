<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    
        <div class='w-100 h-100 flex-column d-flex align-items-center'>
            <div class="w-10 h-30 message"></div>
            <div class="h-25 w-25 m-5">
              <label for="nom" class="form-label">votre Nom</label>
              <input type="text" class="form-control" id="name" name='name' aria-describedby="nameHelp">
            </div>
            <div class="h-25 w-25 m-5">
              <label for="surname" class="form-label">votre Prénom</label>
              <input type="text" class="form-control" id="surname" name='surname' aria-describedby="surnameHelp">
            </div>
            <div class="h-25 w-25 m-5">
              <label for="exampleInputEmail" class="form-label">votre Mail</label>
              <input type="email" class="form-control" id="mail" name='mail' aria-describedby="emailHelp">
            </div>
            <div class="h-10 w-10">
                <button type="submit" class="btn btn-primary" onclick="validation(1)" name="submitBtnLogin">Submit</button>
            </div>
        </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="assets/js/traitement-connexion.js"></script>
</body>
</html>