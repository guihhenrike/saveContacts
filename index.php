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
            <div id="displayDataTable"></div>
    </div>




    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdnjs.clouflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

    <script>
      function displayData(){
        var displayData = "true";
        $.ajax({
          url: 'display.php',
          type: 'POST',
          data: {
            displaySend:displayData
          },
          success:function(data, status) {
            $('#displayDataTable').html(data);)
          }
        })
      }

      function adduser(){
          var nameAdd = $("#completeName").val();
          var emailAdd = $('#completeEmail').val();
          var mobileAdd = $('#completeMobile').val();
          var placeAdd = $('#completePlace').val();
        
          $.ajax({
            url: 'insert.php',
            method: 'POST',
            data: {
               nameSend: nameAdd,
               emailSend: emailAdd,
               mobileSend: mobileAdd,
               placeSend: placeAdd
              },
            success: function(response){
              // handle success response
              //console.log(response);
                displayData();
            },
            error: function(xhr, status, error){
              // handle error response
            }
          });
      }
    </script>

  </body>
</html>