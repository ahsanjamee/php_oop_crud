<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>PHP | CRUD | OOP</title>
    <style>
    body{
        background-image: url(https://bing.biturl.top/?resolution=1920&format=image&index=0&mkt=zh-CN);
        height: 100vh;
        background-position: center;
        background-repeat: no-repeat;
        /* background-image: url("img_girl.jpg"); */
        background-size: cover;
    }
    </style>
  </head>
  <body>

    <div class="container mt-5">
        <div class="row">
        <div class="col-md-6 mx-auto" >
        <h1 class="text-center">Crud Operations</h1>
        <div class="col-md-4 mx-auto">
            <hr style="height : 1px; color: black; background-color : black;">
        </div>
<?php
    include 'model.php';
    $model = new Model();
    $insert = $model->insert();
?>
    <form action="" method="post" class="mt-5" >
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="email">Email</label>
      <input type="email" class="form-control" id="email" placeholder="Email">
    </div>

    <div class="form-group col-md-6">
      <label for="password">Password</label>
      <input type="password" class="form-control" id="password" placeholder="Password">
    </div>
  </div>

  <div class="form-group">
    <label for="address">Address</label>
    <input type="text" class="form-control" id="address" placeholder="1234 Main St">
  </div>
 
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="city">City</label>
      <input type="text" class="form-control" id="city">
    </div>

    <div class="form-group col-md-4">
      <label for="state">State</label>
      <select id="state" class="form-control">
        <option selected>dhaka</option>
        <option>rajshahi</option>
      </select>

    </div>
    <div class="form-group col-md-2">
      <label for="zip">Zip</label>
      <input type="text" class="form-control" id="zip">
    </div>
  </div>

  

  <p style="text-align : center;"><button type="submit" name="submit" class="btn btn-primary ">Sign up</button></p>
</form>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>