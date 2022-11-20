<html lang="sk">
<head>
  <link rel="stylesheet" href="styleSheet.css">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <style media="screen">


  </style>
  <title>Document</title>
</head>
<body>
  <div class="box">
    <h2>Kontaktny Formular</h2>
    <form action="config.php">

        <div class="gender">
            <h3>Pohlavie:</h3>
            <input type="radio" name="gender"
                   value="Zena">   Zena
            <br>

            <input type="radio" name="gender"
                   value="Muz">   Muz
            <br>
            <input type="radio" name="gender"
                   value="Ine">   Ine
            <br><br>
        </div>

        <div class="input-box">
        <input type="text" name="firstName"  autocomplete="off" required>
        <label for="">Meno</label>
      </div>

        <div class="input-box">
            <input type="text" name="lastName"  autocomplete="off" required>
            <label for="">Priezvisko</label>
        </div>

        <div class="input-box">
            <input type="text" name="phoneNumber"  autocomplete="off" required>
            <label for="">Phone Number</label>
        </div>

      <div class="input-box">
        <input type="email" name="email"  autocomplete="off" required>
        <label for="">Email</label>
      </div>

        <div class="input-box">
            <label for="">Sprava:</label><br><br>
            <textarea class="message" name="message" spellcheck="true" lang="sk" cols="30" rows="5"></textarea>
      </div>

        <input type="submit" value="Odoslat">
        <input type="reset" value="Resetovat">
    </form>
  </div>
</body>
</html>
