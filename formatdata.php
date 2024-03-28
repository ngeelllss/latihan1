<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form Biodata</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f4f4f4;
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }
    .container {
      max-width: 600px;
      margin: 50px auto;
      background-color: #F6D6D6;
      padding: 20px;
      border-radius: 8px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      border: 2px solid #ccc;
    }
    h2 {
      text-align: center;
      color: #67C6E3;
    }
    form {
      text-align: center;
    }
    label {
      font-weight: bold;
    }
    input[type="text"], input[type="email"] {
      padding: 8px;
      margin: 5px 0;
      background-color: #E9F6FF;
      width: 100%;
      box-sizing: border-box;
      border: 1px solid #ccc;
      border-radius: 4px;
    }
    input[type="submit"] {
      padding: 10px 20px;
      margin-top: 10px;
      background-color: #67C6E3;
      color: white;
      border: none;
      cursor: pointer;
      border-radius: 4px;
    }
    input[type="submit"]:hover {
      background-color: #40679E;
    }
    .result {
      margin-top: 20px;
      text-align: center;
      border: 2px solid #ccc;
      padding: 10px;
      border-radius: 8px;
    }
    .result p {
      margin: 5px 0;
    }
    .result p:first-child {
      color: #40679E;
    }
    .result p:nth-child(2) {
      color: #40679E;
    }
    .result p:last-child {
      color: #40679E;
    }
  </style>
</head>
<body>
  <div class="container">
    <h2>Form Biodata</h2>
    <form action="#" onsubmit="showBiodata(); return false;">
      <label for="nama">Nama:</label><br>
      <input type="text" id="nama" required><br>
      <label for="email">Email:</label><br>
      <input type="email" id="email" required><br>
      <label for="alamat">Alamat:</label><br>
      <input type="text" id="alamat" required><br>
      <input type="submit" value="Submit">
    </form>

    <?php
    if(isset($_POST['submit'])) {
      $nama = $_POST['nama'];
      $email = $_POST['email'];
      $alamat = $_POST['alamat'];
    ?>

    <div class="result" id="result">
      <h2>Data Biodata</h2>
      <table>
        <tr>
          <th>Nama</th>
          <th>Email</th>
          <th>Alamat</th>
        </tr>
        <tr>
          <td><?php echo $nama; ?></td>
          <td><?php echo $email; ?></td>
          <td><?php echo $alamat; ?></td>
        </tr>
      </table>
    </div>
    <?php } ?>
</body>
</html>
