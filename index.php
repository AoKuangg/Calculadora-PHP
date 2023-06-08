<!DOCTYPE html>
<html>
<head>
  <title>Calculadora</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f4f4f4;
      text-align: center;
    }

    .container {
      max-width: 300px;
      margin: 0 auto;
      background-color: #fff;
      border-radius: 5px;
      padding: 20px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    h2 {
      color: #333;
    }

    form {
      margin-top: 20px;
    }

    input[type="text"] {
      width: 100%;
      height: 40px;
      font-size: 18px;
      text-align: right;
      margin-bottom: 10px;
      border: 1px solid #ccc;
      border-radius: 5px;
      padding: 5px;
    }

    input[type="submit"] {
      width: 50px;
      height: 50px;
      font-size: 18px;
      margin: 5px;
      border: none;
      border-radius: 50%;
      background-color: #4caf50;
      color: #fff;
      cursor: pointer;
    }
    input[type="reset"] {
      width: 50px;
      height: 50px;
      font-size: 18px;
      margin: 5px;
      border: none;
      border-radius: 50%;
      background-color: #4caf50;
      color: #fff;
      cursor: pointer;
    }

    input[type="submit"]:hover {
      background-color: #45a049;
    }
  </style>
</head>
<body>
  <div class="container">
    <h2>Calculadora</h2>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
      <input type="text" name="display" id="display" readonly>
      <br>
      <input type="submit" name="button" value="7">
      <input type="submit" name="button" value="8">
      <input type="submit" name="button" value="9">
      <input type="submit" name="button" value="/">
      <br>
      <input type="submit" name="button" value="4">
      <input type="submit" name="button" value="5">
      <input type="submit" name="button" value="6">
      <input type="submit" name="button" value="*">
      <br>
      <input type="submit" name="button" value="1">
      <input type="submit" name="button" value="2">
      <input type="submit" name="button" value="3">
      <input type="submit" name="button" value="-">
      <br>
      <input type="submit" name="button" value="0">
      <input type="submit" name="button" value=".">
      <input type="submit" name="button" value="+">
      <input type="submit" name="button" value="=">
      <br>
      <input type="reset" name="button" value="C">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $button = $_POST["button"];
      $display = $_POST["display"];

      if ($button == "=") {
        $result = eval('return ' . $display . ';');
        echo '<script>document.getElementById("display").value = "' . $result . '";</script>';
      } else {
        $display .= $button;
        echo '<script>document.getElementById("display").value = "' . $display . '";</script>';
      }
    }
    ?>
  </div>
</body>
</html>