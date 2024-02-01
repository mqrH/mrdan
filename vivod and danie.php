<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>dannie and vivod</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
            crossorigin="anonymous"></script>
</head>
<body>
<div class="container">
    <br><br><br>
    <?php
    var_dump($_POST);
    ?>
    <br><br><br>
    <?php if (
        !empty($_POST['email'])
    ) : ?>
        <div class="alert alert-success" role="alert">
            Ви вказали імейл <?= $_POST['email']; ?>
        </div>
    <?php endif; ?>

    <?php if (
        !empty($_POST['password'])
    ) : ?>
        <div class="alert alert-success" role="alert">
            Ви вказали пароль <?= $_POST['password']; ?>
        </div>
    <?php endif; ?>

    <br><br><br>
    <form method="post">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email</label>
            <input
                    type="email"
                    class="form-control"
                    name="email"
            >
        </div>
        <hr>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input
                type="password"
                class="form-control"
                name="password"
            >
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
</body>
</html>