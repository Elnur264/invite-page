<!DOCTYPE html>
<html lang="kk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Хабарлама жіберу</title>
</head>
<body>
    <h2>Хабарлама жіберу</h2>
    <form action="send_email.php" method="POST">
        <label for="name">Аты-жөніңіз:</label>
        <input type="text" name="name" id="name" required><br><br>
        
        <label for="email">Электронды поштаңыз:</label>
        <input type="email" name="email" id="email" required><br><br>
        
        <label for="message">Хабарламаңыз:</label><br>
        <textarea name="message" id="message" rows="4" required></textarea><br><br>
        
        <button type="submit">Жіберу</button>
    </form>
</body>
</html>