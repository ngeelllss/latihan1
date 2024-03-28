<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hitung Luas Persegi Panjang</title>
    <style>
        body {
      font-family: Arial, sans-serif;
      background-color: #FFD28F;
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }
    .container {
      max-width: 600px;
      margin: 50px auto;
      background-color: #9BBEC8;
      padding: 20px;
      border-radius: 8px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }
    h2 {
      text-align: center;
    }
    form {
      text-align: center;
    }
    label {
      font-weight: bold;
    }
    input[type="number"] {
      padding: 8px;
      margin: 5px 0;
      width: 100%;
      box-sizing: border-box;
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
    }
    .result p {
      margin: 5px 0;
    }
    </style>
</head>
<body>
    <div class="container">
        <h2>Hitung Luas Persegi Panjang</h2>
        <form id="rectangleForm" method="post">
            <div class="form-group">
                <label for="length">Panjang : </label>
                <input type="number" id="length" name="length" required>
            </div>
            <div class="form-group">
                <label for="width">Lebar : </label>
                <input type="number" id="width" name="width" required>
            </div>
            <button type="submit">Hitung</button>
        </form>
        <div id="result">
            <?php
            // PHP Script for calculating area
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $length = $_POST['length'];
                $width = $_POST['width'];
                $area = $length * $width;
                echo "Hasil Luas Persegi Panjang adalah : " . $area;
            }
            ?>
        </div>
    </div>

    <script>
        // JavaScript logic
        document.getElementById("rectangleForm").addEventListener("submit", function(event) {
            event.preventDefault();
            calculateArea();
        });

        function calculateArea() {
            var length = document.getElementById('length').value;
            var width = document.getElementById('width').value;
            var area = length * width;
            document.getElementById('result').innerHTML = "Hasil Luas Persegi Panjang adalah : " + area;
        }
    </script>
</body>
</html>