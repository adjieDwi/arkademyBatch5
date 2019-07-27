<?php 

include_once("dbConfig.php");



$query = "SELECT name.name, name.id, work.name, kategori.salary
        FROM ((name
        JOIN work ON name.id_work = work.id)
        JOIN kategori ON name.id_salary = kategori.id)";
$stmt = $connect->prepare($query);
$stmt->execute();

$result = $stmt->fetchAll();


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/all.css">
    <title>SOAL6C</title>
</head>
<body>
<div class="container">
<nav class="navbar ">
  <a href="#" class="navbar-brand mb-0 h1">
    <img src="logo.svg" width="120" height="120">
    ARKADEMY BOOTCAMP
  </a>
</nav>

<button type="button" class="btn btn-warning text-white float-right mr-2 mb-2" data-toggle="modal" data-target="#ModalAdd">ADD</button>

<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Work</th>
      <th scope="col">Salary</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <tr>
        <?php foreach($result as $data) : ?>
      <td><?= $data[0]; ?></td>
      <td><?= $data[2]; ?></td>
      <td><?= "RP." . $data[3]; ?></td>
      
      <td>
        <a href=<?= "delData.php?id=" . $data[1]; ?> class="fa fa-trash-alt mr-3"></a>
        <a href="" class="fa fa-edit" data-toggle="modal" data-target="#ModalEdit"></a>
      </td>
    </tr>
        <?php endforeach; ?>
  </tbody>
</table>
</div>


<!-- Modal Box Add Data-->
<div class="modal fade" id="ModalAdd" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="card">

        <div class="d-flex justify-content-between p-2">
          <h5 class="card-title">ADD DATA</h5>
            <button type="button" class="btn position-relative float-right fa fa-times" data-dismiss="modal" data-toggle="modal"></button>
        </div>

        <div class="card-body">
        <form action="addData.php" method="post">

            <input class="form-control mb-4" type="text" name="name" placeholder="Name ...">
            <select class="form-control mb-4" name="work">
              <option>Work ...</option>
              <option value="1">Frontend Dev</option>
              <option value="2">Backend Dev</option>
            </select>

            <select class="form-control mb-4" name="salary">
              <option>Salary ...</option>
              <option value="1">RP.10.000.000</option>
              <option value="2">RP.12.000.000</option>
            </select>
            <button type="submit" class="btn btn-warning text-white float-right mr-2 mb-2" >ADD</button>
            <!-- <a href="addData.php?add">Add</a> -->

        </form>
        </div>

      </div>
    </div>
  </div>
</div>
<!-- Modal Box Edit Data -->
<div class="modal fade" id="ModalEdit" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="card">
        
        <div class="d-flex justify-content-between p-2">
            <h5 class="card-title">EDIT DATA</h5>
            <button type="button" class="btn position-relative float-right fa fa-times" data-dismiss="modal" data-toggle="modal2"></button>
        </div>

        <div class="card-body">
            <input class="form-control mb-4" type="text" placeholder="Rebecca">
            <input class="form-control mb-4" type="text" placeholder="Frontend Dev">
            <input class="form-control mb-4" type="text" placeholder="Rp.10.000.000">
            <button type="button" class="btn btn-warning text-white float-right mr-2 mb-2" data-dismiss="modal">EDIT</button>
        </div>

      </div>
    </div>
  </div>
</div>

<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>