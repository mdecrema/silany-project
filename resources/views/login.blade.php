<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Web Dev</title>
    <link rel="stylesheet" type="text/css" href="css/loginForm.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  </head>
  <body>
    <div class="page">
      <div class="form-box">
        <input class="passValue" type="password" placeholder="Inserisci password" />
        <button class="login">Login</button>
      </div>
    </div>
    <script>
      $(document).ready(function() {



    $(".login").click(function() {
    var text = $(".passValue").val();
    var secretNum = "#6131996";
    if ( text == secretNum) {
      $(location).attr('href', '/home');  
    } else {
      alert("errore");
    }
  })

})
    </script>
  </body>
</html>