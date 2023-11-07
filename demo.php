<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">

    <script src="js/jquery.js"></script>

    <title>Claver Project</title>
  </head>
<body>

<div class="container d-flex justify-content-center align-items-center" style="height: 100vh;">
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" id="modalBtn" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Launch demo modal
</button>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
          <div class="cotainer-fluid">
          <form id="saveUser">
            <div class="mb-3">
              <label class="form-label">Username</label>
              <input type="text" name="username" id="username" class="form-control" required>
            </div>
            <div class="mb-3">
              <label class="form-label">Password</label>
              <input type="password" name="password" id="password" class="form-control" required>
            </div>
            <div class="mb-3">
            <label class="form-label">Sex</label>
            <select class="form-select" name="gender" required>
              <option selected disabled value="">Choose...</option>
              <option value="Male">Male</option>
              <option value="Female">Female</option>
            </select>
          </div>
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" name="submit" class="btn btn-primary">Add User</button>
      </div>
      </form>
    </div>
  </div>
</div>  

<script src="bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="js/main.js"></script>
<script src="ajax.js"></script>
</body>
</html>