<!DOCTYPE html>
<html lang="en">
    <head>

        <meta charset="UTF-8">
        <title>Dashboard</title>

        <link rel="stylesheet" href="style.css">    
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.min.css" crossorigin="anonymous" />

    </head>
    <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Waste Management system</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link " aria-current="page" href="/">Dashboard
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="/Submit">Submit Items</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

    <h1>Please Select Your Item Here</h1>
    <div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
    Dropdown button
  </button>
  <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
    <li><a class="dropdown-item" href="#">Paper</a></li>
    <li><a class="dropdown-item" href="#">Plastic</a></li>
    <li><a class="dropdown-item" href="#">Metal</a></li>
  </ul>
</div>

<div class="input-group mb-3">
  <input type="number" min="1" class="form-control" placeholder="item weight" aria-label="item weight" aria-describedby="basic-addon2">
  <span class="input-group-text" id="basic-addon2">Kg</span>
</div>

<button type="button" class="btn btn-secondary btn-sm">Large button</button>

    </body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    
</html>