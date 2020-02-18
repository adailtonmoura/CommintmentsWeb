<div class="container">
	<div class="d-flex justify-content-center h-100">
		<div class="card">
			<div class="card-header">
				<h3>Sign Up</h3>
				<div class="d-flex justify-content-end social_icon">
					<span><i class="fab fa-facebook-square"></i></span>
					<span><i class="fab fa-google-plus-square"></i></span>
					<span><i class="fab fa-twitter-square"></i></span>
				</div>
			</div>
			<div class="card-body">
                <form action="App/Controller/Registro.php" method="POST">
                <div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user"></i></span>
						</div>
<input type="text" autocomplete="off" name="nome" class="form-control" <?php if(isset($_GET['name'])==false){?>placeholder="name"<?php }else{?>value="<?php echo $_GET['name']; }?>" >
					</div>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user"></i></span>
						</div>
						<input type="text" autocomplete="off" name="login" class="form-control" <?php if(isset($_GET['login'])==false){?>placeholder="login"<?php }else{?>value="<?php echo $_GET['login']; }?>">
					</div>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-key"></i></span>
						</div>
						<input type="password" name="senha" class="form-control" placeholder="password">
                    </div>  
                    <div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-key"></i></span>
						</div>
						<input type="password" name="confirmarsenha" class="form-control" placeholder="confirm password">
					</div>  
					<div class="form-group">
						<input type="submit" value="Cadastrar" id="btn-login" class="btn float-right btn-warning">
                    </div>
                    <?php if(isset($_GET['erro'])){?>
                        <span id="error"><?= $_GET['erro'] ?></span>
                    <?php } ?>
				</form>
			</div>
			<div class="card-footer">
				<div class="d-flex justify-content-center links">
					Já tem uma conta?<a href="?pagina=login">Faça login</a>
				</div>
				<!-- <div class="d-flex justify-content-center">
					<a href="#">Forgot your password?</a>
				</div> -->
			</div>
		</div>
	</div>
</div>