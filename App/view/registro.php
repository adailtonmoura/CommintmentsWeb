    
    <div id="reg-form" class="shadow p-3 mb-5">
        <form method="POST"action="App/Controller/Registro.php">
            <h1>REGISTRO</h1>
            <div class="form-group">
                <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Username">
            </div>
            <div class="form-group">
                <input type="password" name="senha" class="form-control" id="exampleInputPassword1" placeholder="Senha">
            </div> 
            <div class="form-group">
                <input type="password" name="senha" class="form-control" id="exampleInputPassword1" placeholder="Confirmar senha">
            </div> 
                    
                <button type="submit" class="btn btn-primary">Enviar</button>

                <?php if(isset($_GET['erro'])){?>
                        <span id="error"><?= $_GET['erro'] ?></span>
                <?php } ?>
        </form>
    </div>