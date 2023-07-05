  <?php require("script.php") ?> <!-- asscess to the php file where we write our code -->

  <!DOCTYPE html>
<html lang="en">
<head>
  <title>Customer</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">  <!-- Bootstrap Css Link -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>        <!-- Bootstrap ajax Link -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://unpkg.com/bootstrap-table@1.21.4/dist/bootstrap-table.min.css">   <!-- Bootstrap js Link -->
  <script src="https://unpkg.com/bootstrap-table@1.21.4/dist/bootstrap-table.min.js"></script>
  <script src="app.js"></script>
</head>
<body>
<br><br>
<div class="container">
  <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#home">Customer</a></li>
    <li><a data-toggle="tab" href="#menu1">Region</a></li>
    <li><a data-toggle="tab" href="#menu2">Other</a></li>
  </ul>

  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
      <h3>Customer</h3>
      <form action="" method="post">  <!-- Data Insert Form -->
      <div class="row">
      <div class="col-sm-3">
      <label for="">Customer Name</label>
        <input type="text" class="form-control" placeholder="Enter Name" name="Name" required>
      </div>
      <div class="col-sm-3">
      <label for="">Color Code</label>
        <input type="text" class="form-control" placeholder="Enter Color Code" name="Color_Code" required>
      </div>
      <div class="col-sm-2">
      <label for="">Icon</label>
        <input type="file" class="form-control" name="Circle_Icon">
      </div>
      <div class="col-sm-2">
      <label for="">Icon</label>
        <input type="file" class="form-control" name="Triangle_Icon">
      </div>
      <div class="col-sm-2">
        <br>
    <input type="submit" class="btn btn-primary" name="submit" value="Add" style="width: 100%; height: 100;">
    </div>
</div>
      </form>   <!-- Form End -->
      <br>
      <div class="container"> <!-- Show Data Table Header -->
<div class="table_responsive">
<table class="table table-bordered table-striped" id="message_table">
<tr>
  <th>Name</th>
  <th>Color_Code</th>
  <th>Circle_Icon</th>
  <th>Triangle_Icon</th>
  <th>Update</th>
</tr>
</table>
</div>
</div>
    </div>
    <div id="menu1" class="tab-pane fade">
      <h3>Region</h3>
      <form action="" method="post">  <!-- Data Insert Form -->
      <div class="row">
      <div class="col-sm-3">
      <label for="">Region ID</label>
        <input type="text" class="form-control" placeholder="Enter ID" name="ID" required>
      </div>
      <div class="col-sm-3">
      <label for="">Color Code</label>
        <input type="text" class="form-control" placeholder="Enter Color Code" name="RColor_Code" required>
      </div>
      <div class="col-sm-4">
      <label for="">Geocodes</label>
        <input type="text" class="form-control" placeholder="Enter Geocode" name="Geocode" required>
      </div>
      <div class="col-sm-2">
        <br>
    <input type="submit" class="btn btn-primary" name="submit1" value="Add" style="width: 100%; height: 100;">
    </div>
</div>
      </form>   <!-- Form End -->
      <br>
      <div class="container"> <!-- Show Data Table Header -->
<div class="table_responsive">
<table class="table table-bordered table-striped" id="region_table">
<tr>
  <th>Region ID</th>
  <th>Color_Code</th>
  <th>Update</th>
</tr>
</table>
    </div>
    <div id="menu2" class="tab-pane fade">
      <h3>Other</h3>
      <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
    </div>
  </div>
</div>
<hr>
    <p class="act"><b>Active Tab</b>: <span></span></p>
    <p class="prev"><b>Previous Tab</b>: <span></span></p>
    <script src="https://cdn.jsdelivr.net/npm/jquery/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/bootstrap-table@1.21.4/dist/bootstrap-table.min.js"></script>
</body>
</html>

