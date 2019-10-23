<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>PHP | CRUD | OOP</title>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <a class="navbar-brand" href="index.php">CRUD</a>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item ">
        <a class="nav-link" href="index.php">Home </a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="records.php">Records<span class="sr-only">(current)</span></a>
      </li>
      
    </ul>
    
  </div>
</nav>
  <div class="container mt-5">
        <div class="row">
        <div class="col-md-12 mx-auto" >
        <h1 class="text-center">Read </h1>
        
        <div class="col-md-4 mx-auto">
            <hr style="height : 1px; color: black; background-color : black;">
        </div>

    <table class="table mt-5">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Email</th>
      <th scope="col">Password</th>
      <th scope="col">Address</th>
      <th scope="col">City</th>
      <th scope="col">State</th>
      <th scope="col">zip</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <?php
        include 'model.php';
        $model = new Model();
        $rows = $model->fetch();
        $i = 1;
        if(!empty($rows)){
            foreach($rows as $ro){
    ?>
    <tr>
      
      <td><?php echo $i++; ?></td>
      <td><?php echo $ro['email']; ?></td>
      <td><?php echo $ro['pass']; ?></td>
      <td><?php echo $ro['address']; ?></td>
      <td><?php echo $ro['city']; ?></td>
      <td><?php echo $ro['state']; ?></td>
      <td><?php echo $ro['zip']; ?></td>
      <td>
                <a href = "read.php?id=<?php echo $ro['id']; ?>" class="badge badge-info">Read</a>
                <a href = "delete.php?id=<?php echo $ro['id']; ?>" class="badge badge-danger">Delete</a>
                <a href = "update.php?id=<?php echo $ro['id']; ?>" class="badge badge-success">Update</a>
      </td>
      
      
    </tr>
    <?php
            }
        }
    ?>
  </tbody>
</table>

</div>
</div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>