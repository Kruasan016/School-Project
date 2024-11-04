<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/register.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Rejestracja</title>
</head>
<body>
    <div class="container" style="max-width: 500px;">
        <div class="card p-3">
            <form action="reg.php" method="post">
            <div class=" form-group row text-center mx-auto" style="max-width: 400px;">
                <h1 class="form-title">Rejectracja</h1>
                <div class="form-fields">
                    <div class="form-field mb-3">
                        <input type="text" class="form-control" placeholder="Login" name="login" required>
                    </div>
                    <div class="form-field mb-3">
                        <input type="email" class="form-control" placeholder="E-maila" name="email" required>
                    </div>
                    <div class="form-field mb-3">
                        <input type="password" class="form-control" placeholder="Hasło" name="password" required>
                    </div>
                </div>
                <div class="form-buttons">
                    <button class="button btn btn-primary">Zarejestruj się!</button>
                </div>
            </div>
            </form>
            <p class="text-center pt-5">Już masz konto ? <a href="log.php">Załoguj się!</a></p>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>