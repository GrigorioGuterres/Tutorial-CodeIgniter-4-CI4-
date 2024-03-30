<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>

<h2>Login</h2>

<?php if (isset($validation)): ?>
    <div class="alert alert-danger"><?= $validation->listErrors() ?></div>
<?php endif; ?>

<?php if (isset($error)): ?>
    <div class="alert alert-danger"><?= $error ?></div>
<?php endif; ?>

<form action="/auth/login" method="post">
    <div class="form-group">
        <label>Username</label>
        <input type="text" name="username" class="form-control" required>
    </div>
    <div class="form-group">
        <label>Password</label>
        <input type="password" name="password" class="form-control" required>
    </div>
    <button type="submit" class="btn btn-primary">Login</button>
</form>

</body>
</html>
