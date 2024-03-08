<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maxinum-scale=1.0">
    <link rel="stylesheet" href="<?=$base;?>/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?=$base;?>/assets/css/login.css">
    <link href='<?=$base;?>https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Login PDV Fiscal Ale</title>
</head>
<body>
    <nav class="navbar navbar-default " id="navbar" >
        <div class="container-fluid" id="navbar-container">
            <div class="navbar-header pull-left">
                <a href="#" class="navbar-brand" >
                    <img src="<?=$base;?>/assets/images/pdv-logo.png" alt="">
                </a>
            </div>
        </div>
    </nav>

    <div class="corpo">
        <form action="<?=$base;?>/login" method="post" class="login-form">

            <h1 class="login-title">Acessar</h1>
            <?php if(!empty($flash)): ?>
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <?php echo $flash; ?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>

                
                
            <?php endif; ?>

            <div class="input-box">
                <i class='bx bxs-user'></i>
                <input type="text" name="usuairo" placeholder="Digita seu login">
            </div>
    
            <div class="input-box">
                <i class='bx bxs-lock-alt'></i>
                <input type="password" name="senha"  placeholder="Digita sua senha" >
            </div>
    
            <div class="remember-forgot-box">
                <label for="remember">
                    <input type="checkbox" name="" id="remember">
                    Lembra-me
                </label>
            </div>
    
            <input type="submit" class="login-btn" value="Entrar">
        </form>
    </div>
    <script src="<?=$base;?>/assets/js/jquery-3.7.1.min.js"></script>
    <script src="<?=$base;?>/assets/js/bootstrap.min.js"></script>
</body>
</html>