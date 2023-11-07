<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SaveContacts</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>
<body>


<!-- Modal -->
<div class="modal fade" id="completeModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">New User</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="form-group">
            <label for="completeName"">Name</label>
            <input type="text" class="form-control" id="completeName" placeholder="Enter your name" autocomplete="off" required>
        </div>
        <div class="form-group">
            <label for="completeEmail"">Email</label>
            <input type="email" class="form-control" id="completeEmail" placeholder="Enter your email" autocomplete="off" required>
        </div>
        <div class="form-group">
            <label for="completeMobile"">Mobile</label>
            <input type="text" class="form-control" id="completeMobile" placeholder="Enter your mobile number" autocomplete="off" required>
        </div>
        <div class="form-group">
            <label for="completePlace"">Place</label>
            <input type="text" class="form-control" id="completePlace" placeholder="Enter your Place" autocomplete="off" required>
        </div>
      </div>
      <div class="modal-footer">
           <button type="button" class="btn btn-dark" onclick="adduser()">Submit</button>     
           <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>

      </div>
    </div>
  </div>
</div>
    <div class="container my-3">
        <h1 class="text-center">Save Contacts here!</h1>
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#completeModal">
                Add new users
            </button>
    </div>




    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>