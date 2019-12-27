<html>
    <head>
        <title>
            Login Page
        </title>
        <!-- Menggunakan style dari bootstrap -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    </head>
    <body>
    <div class="container" style="margin-top: 100px;">
        <div class="row">
            <div class="col-sm"></div>
            <div class="col-sm">
                <h1>Login </h1>
                <?php echo form_open_multipart('login/login_process'); ?>
                    <div class="form-group">
                        <label for="email">Email address</label>
                        <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp">
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" name="password" class="form-control" id="password">
                    </div>
                    <button type="submit" class="btn btn-primary">Login</button>
                <?php echo form_close() ?>
            </div>
            <div class="col-sm"></div>
        </div>
    </div>        
    </body>
</html>