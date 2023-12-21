<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>User Information</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <style>
    /* Custom Styles */
    .user-info {
      margin-bottom: 20px;
    }
    .user-detail {
      background-color: #f9f9f9;
      padding: 10px;
      border-radius: 5px;
    }
  </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
    <a class="navbar-brand" href="#">Rechercher un contact</a>
    <!-- You can add additional links or content here -->
  </div>
</nav>

<main class="container mt-4">
  <div class="row">
    <?php 
      for ($i = 0; $i < sizeof($userList); $i++) {
    ?>
      <div class="col-lg-6">
    <div class="user-info">
        <div class="row">
            <div class="col-md-6">
                <h2><?php echo $userList[$i]->Name; ?></h2>
            </div>
            <div class="col-md-6">
                <a href="?edit=<?php echo $userList[$i]->Name; ?>" class="btn btn-primary">Editer</a>
            </div>
        </div>
        <h4>Information</h4>
        <div class="user-detail">
            <div class="row">
                <div class="col-md-6">
                    <p><strong>Prénom & NOM:</strong> <?php echo $userList[$i]->Name; ?></p>
                    <p><strong>Téléphone:</strong> <?php echo $userList[$i]->Phone; ?></p>
                </div>
                <div class="col-md-6">
                    <p><strong>Email:</strong> <?php echo $userList[$i]->Email; ?></p>
                    <p><strong>Adresse:</strong> <?php echo $userList[$i]->Adress.' '.$userList[$i]->Code.' '.$userList[$i]->City; ?></p>
                </div>
            </div>
        </div>
    </div>
</div>

    <?php 
      }
    ?>
  </div>
</main>

</body>
</html>
