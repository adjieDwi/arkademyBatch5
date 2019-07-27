<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/all.css">
    <title>SOAL7B</title>
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
      <td>Rebecca</td>
      <td>Frontend Dev</td>
      <td>Rp.10.000.000</td>
      <td>
      <a href="#" class="fa fa-trash-alt mr-3" data-toggle="modal" data-target="#ModalDel"></a>
        <a href="" class="fa fa-edit" data-toggle="modal" data-target="#ModalEdit"></a>
      </td>
    </tr>
    <tr>
      <td>Vita</td>
      <td>Backend Dev</td>
      <td>Rp.12.000.000</td>
      <td>
        <a href="#" class="fa fa-trash-alt mr-3" data-toggle="modal" data-target="#ModalDel"></a>
        <a href="" class="fa fa-edit" data-toggle="modal" data-target="#ModalEdit"></a>
      </td>
    </tr>
    <tr>
      <td>Huda</td>
      <td>Backend Dev</td>
      <td>Rp.12.000.000</td>
      <td>
        <a href="#" class="fa fa-trash-alt mr-3" data-toggle="modal" data-target="#ModalDel"></a>
        <a href="" class="fa fa-edit" data-toggle="modal" data-target="#ModalEdit"></a>
      </td>
    </tr>
    <tr>
      <td>Kiky</td>
      <td>Frontend Dev</td>
      <td>Rp.10.000.000</td>
      <td>
        <a href="#" class="fa fa-trash-alt mr-3" data-toggle="modal" data-target="#ModalDel"></a>
        <a href="" class="fa fa-edit" data-toggle="modal" data-target="#ModalEdit"></a>
      </td>
    </tr>
  </tbody>
</table>
</div>

<!-- Modal Box Delete -->
<div class="modal fade" id="ModalDel" tabindex="-1" role="dialog">
<div class="modal-dialog">
    <div class="modal-content">
      <div class="card">

        <div class="d-flex justify-content-between p-2">
          <h5 class="card-title text-center">DATA BERHASIL DIHAPUS</h5>
            <button type="button" class="btn position-relative float-right fa fa-times" data-dismiss="modal" data-toggle="modal"></button>
        </div>

        <div class="card-body text-center">
            <img src="centang-biru.png" class="align-middle">
        </div>

      </div>
    </div>
  </div>
</div>

<!-- Modal Box Add Data-->
<div class="modal fade" id="ModalAdd" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="card">

        <div class="d-flex justify-content-between p-2">
          <h5 class="card-title">ADD DATA</h5>
            <button type="button" class="btn position-relative float-right fa fa-times" data-dismiss="modal"></button>
        </div>

        <div class="card-body">
            <input class="form-control mb-4" type="text" placeholder="Name ...">
            <select class="form-control mb-4">
              <option>Work ...</option>
            </select>
            <select class="form-control mb-4">
              <option>Salary ...</option>
            </select>
            <button type="button" class="btn btn-warning text-white float-right mr-2 mb-2" data-dismiss="modal">ADD</button>
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
            <button type="button" class="btn position-relative float-right fa fa-times" data-dismiss="modal"></button>
        </div>

        <div class="card-body">
            <input class="form-control mb-4" type="text" placeholder="Rebecca">
            <input class="form-control mb-4" type="text" placeholder="Frontend Dev">
            <input class="form-control mb-4" type="text" placeholder="10.000.000">
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