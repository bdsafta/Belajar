<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Website Belajar Backend PHP</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <main class="login-container">
        <h2>Form Login</h2>
        <form action="login_process.php" method="POST" class="login-form">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>

            <button type="submit">Login</button>
        </form>
    </main>
</body>

</html>