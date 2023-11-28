<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter&family=Staatliches&display=swap" rel="stylesheet">
  <title>Tambah Barang</title>
</head>

<body>

  <div class="sidebar">
    <div class="profile">
      <div class="profile-info">
        <h2>Resto Gacor</h2>
      </div>
    </div>
    <a href="{{ route('barang.index') }}" class="menu-item active"><i class="fas fa-home"></i> Barang</a>
    <a href="" class="menu-item"><i class="fas fa-database"></i> Kasir</a>
    <a href="" class="menu-item"><i class="fas fa-users"></i> Tenan</a>
  </div>

  <div class="main-content">
    <div class="logo">
      <h3>Resto Gacor</h3>
    </div>
    <!-- Your content here -->
  </div>
  <div class="container">
    <div class="data-profile">
      <div class="data-item">
        <h1>Tambah Barang</h1>
        <form class="form-horizontal" method="POST" action="{{ route('barang.store') }}" enctype="multipart/form-data">
          @csrf
          <div class="form-group row">
            <label class="col-sm-2 col-form-label">
              Kode Barang
            </label>
            <div class="col-sm-10">
              <input type="text" name="KodeBarang" class="form-control" placeholder="Enter Kode Barang" value="{{ old('KodeBarang') }}">
            </div>
          </div>

          <div class="form-group row">
            <label class="col-sm-2 col-form-label">
              Nama Barang
            </label>
            <div class="col-sm-10">
              <input type="text" name="NamaBarang" class="form-control" placeholder="Enter Nama Barang" value="{{ old('NamaBarang') }}">
            </div>
          </div>

          <div class="form-group row">
            <label class="col-sm-2 col-form-label">
              Satuan
            </label>
            <div class="col-sm-10">
              <input type="text" name="Satuan" class="form-control" placeholder="Enter Satuan" value="{{ old('Satuan') }}">
            </div>
          </div>

          <div class="form-group row">
            <label class="col-sm-2 col-form-label">
              Harga Satuan
            </label>
            <div class="col-sm-10">
              <input type="text" name="HargaSatuan" class="form-control" placeholder="Enter Harga Satuan" value="{{ old('HargaSatuan') }}">
            </div>
          </div>

          <div class="form-group row">
            <label class="col-sm-2 col-form-label">
              Stok
            </label>
            <div class="col-sm-10">
              <input type="text" name="Stok" class="form-control" placeholder="Enter Stok" value="{{ old('Stok') }}">
            </div>
          </div>

          <div class="card-footer">
            <button type="submit" name="add" id="add" class="btn btn-info" value="Add">Add</button>
            <a href="{{ route('barang.index') }}" class="btn btn-info">Cancel</a>
          </div>
        </form>
      </div>
    </div>
  </div>
</body>
</html>

<style>
  body,
  html {
    height: 100%;
    margin: 0;
    font-family: 'Inter', sans-serif;
  }

  .sidebar {
    background-color: #FF4D4D;
    color: white;
    padding: 10px;
    width: 250px;
    height: 70vmax;
    float: left;
    display: flex;
    flex-direction: column;
  }

  .profile {
    display: flex;
    align-items: center;
    margin-bottom: 20px;
  }

  .profile img {
    width: 50px;
    height: 50px;
    border-radius: 50%;
    margin-right: 10px;
  }

  .profile-info {
    display: flex;
    flex-direction: column;
  }

  .profile-info h2 {
    font-size: 16px;
    text-transform: uppercase;
    margin: 0;
  }

  .profile-info p {
    font-size: 14px;
    margin: 0;
  }

  .menu-item {
    background-color: #FF4D4D;
    padding: 10px;
    margin-top: 10px;
    text-align: left;
    border: none;
    color: white;
    text-decoration: none;
    display: block;
    transition: 0.3s;
    border-radius: 8px;
  }

  .menu-item:hover {
    background-color: #DA0100;
  }

  .main-content {
    margin-left: 280px;
    margin-right: 50%50%;
    padding: 20px;
    color: #FEFAF3;
  }

  .main-content h1 {
    color: #FF4D4D;
    font-size: 24px;
  }

  .logo {
    display: flex;
    align-items: center;
    margin-bottom: 20px;
    /* Adjust as needed */
  }

  .logo h3 {
    color: #FF4D4D;
    font-size: 20px;
    /* Adjust font size as needed */
  }

  .logo img {
    max-width: 40px;
    /* Adjust size of logo */
    margin-right: 5px;
    /* Space between logo and text */
  }

  .container {
    /* margin-top: 20px; */
    margin-left: 280px;
    margin-right: 10px;
    padding: 2px;
    background-color: #FFEBD7;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
  }

  .container .data-profile .data-item h1 {
    color: #FF4D4D;
    font-size: 24px;
  }

  .data-profile {
    /* margin-top: 2px; */
    /* margin-left: 280px; */
    background-color: #FFEBD7;
    border-radius: 8px;
    padding-top: 10px;
    padding-right: 150px;
    padding-left: 50px;
    padding-bottom: 50px;
  }

  .top h1 {
    color: #FF4D4D;
    font-size: 24px;
    margin-bottom: 20px;
  }

  .data-item {
    margin-top: 20px;
  }

  .form-group {
    margin-bottom: 20px;
  }

  .form-group label {
    font-size: 16px;
    color: #FF4D4D;
  }

  .form-group input,
  .form-group textarea {
    width: 100%;
    padding: 10px;
    border: 1px solid #ddd;
    border-radius: 5px;
    margin-top: 5px;
    box-sizing: border-box;
  }

  .form-group img {
    margin-top: 10px;
  }

  .card-footer {
    margin-top: 20px;
  }

  .card-footer button,
  .card-footer a {
    margin-right: 10px;
  }

  button {
    padding: 10px 20px;
    background-color: #FF4D4D;
    /* Red background */
    color: white;
    border: none;
    border-radius: 5px;
    cursor: pointer;
  }

  button:hover {
    background-color: #DA0100;
    /* Darker red on hover */
  }
</style>

</html>