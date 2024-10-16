<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>CONTACTEZ NOUS</h1>

    <form action="traitement.php" method="post">
     <label for="name">Nom:</label>&ensp;&emsp;
     <input type="text" name="name" id="name" required>
     <br>
     <label for="name">Email:</label>&ensp;&emsp;
     <input type="email" name="email" id="email" required>
     <br>
     <label for="name">message</label>
     <textarea name="message" id="message" required></textarea>
     <br><br>
     <button>Envoyer</button>
    </form>
</body>
</html>