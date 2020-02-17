    <form id="form" method="POST"action="App/Controller/Login.php">
        <h1>LOGIN</h1>
        <div class="form-group">
            <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Login">
        </div>
        <div class="form-group">
            <input type="password" name="senha" class="form-control" id="exampleInputPassword1" placeholder="Senha">
        </div>
                
            <button type="submit" class="btn btn-primary">Enviar</button>
            <?php if(isset($_GET['erro'])){?>
                    <span id="error"><?= $_GET['erro'] ?></span>
                <?php } ?>
    </form>