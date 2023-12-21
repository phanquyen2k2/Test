<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
<div class="text-center">
  <h2>Edition</h2>
</div>

  <form action="../Controller/C_User.php" method="post">
    <div class="container mt-4">
      <?php for ($i = 0; $i < sizeof($userList); $i++) { ?>
        <div class="user-info mb-4 border p-3">
          <div class="row mb-3">
            <div class="col-md-6">
              <label for="name_<?php echo $i; ?>" class="form-label">Nome</label>
              <input type='text' class='form-control' id='name_<?php echo $i; ?>' name='name' value='<?php echo $userList[$i]->Name; ?>'>
            </div>
            <div class="col-md-6">
              <label for="add_<?php echo $i; ?>" class="form-label">Adresse</label>
              <input type='text' class='form-control' id='add_<?php echo $i; ?>' name='add' value="<?php echo $userList[$i]->Adress ?>">
            </div>
          </div>
          <div class="row mb-3">
            <div class="col-md-4">
              <label for="city_<?php echo $i; ?>" class="form-label">Ville</label>
              <input type='text' class='form-control' id='city_<?php echo $i; ?>' name='city' value='<?php echo $userList[$i]->City; ?>'>
            </div>
            <div class="col-md-4">
              <label for="phone_<?php echo $i; ?>" class="form-label">Téléphone</label>
              <input type='text' class='form-control' id='phone_<?php echo $i; ?>' name='phone' value='<?php echo $userList[$i]->Phone; ?>'>
            </div>
            <div class="col-md-4">
              <label for="code_<?php echo $i; ?>" class="form-label">Code postal</label>
              <input type='text' class='form-control' id='code_<?php echo $i; ?>' name='code' value='<?php echo $userList[$i]->Code; ?>'>
            </div>
          </div>
          <div class="row mb-3">
            <div class="col-md-6">
              <label for="email_<?php echo $i; ?>" class="form-label">Email</label>
              <input type='text' class='form-control' id='email_<?php echo $i; ?>' name='email' value='<?php echo $userList[$i]->Email; ?>'>
            </div>
            
          </div>
          <div class="col-md-6">
              <input type='submit' class='btn btn-primary mt-3' value='Enregister' name='update'>
            </div>
        </div>
      <?php } ?>
    </div>
  </form>

</body>
</html>
