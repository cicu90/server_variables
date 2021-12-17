<!doctype html>
<html lang="en">
  <head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <title>Formulario!</title>
</head>

<body>
  <h1>Hello, world!</h1>
  <form method="post" action="validate.php">
    <label for="Email">username</label>
    <input type="text" name="username" placeholder="example@gmail.com"><br>
    <label for="pass">Password</label>
    <input type="password" name="password" placeholder="password here"><br><br>
    <input type="submit" value="Save">
  </form>
</body>
</html>