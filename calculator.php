<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>


  No1: <input type="text" id="no1" name="" value=""><br>
  No2: <input type="text" id="no2" name="" value=""><br>
  <button type="button" onclick="calc('add')" name="button">+</button>
  <button type="button" onclick="calc('sub')" name="button">-</button>
  <button type="button" onclick="calc('mult')" name="button">*</button>
  <button type="button" onclick="calc('div')" name="button">/</button><br><br>
  Result: <span id="result"></span>

  <script>
      function calc(reqType) {
          var xhr = new XMLHttpRequest();
          var no1 = document.getElementById("no1").value;
          var no2 = document.getElementById("no2").value;
          xhr.onreadystatechange = function () {
              if (xhr.readyState == 4 && xhr.status == 200) {
                  document.getElementById("result").innerHTML = xhr.responseText;
              }
          };
          xhr.open("POST", "print.php");
          xhr.setRequestHeader("Content-type","application/x-www-form-urlencoded");
          xhr.send("req="+reqType+"&n1="+no1+"&n2="+no2);
      };
  </script>

</body>
</html>
