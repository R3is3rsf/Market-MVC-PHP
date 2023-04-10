<aside class="col-3  border-end border-3">
                    <?php if(!isset($_SESSION['login'])):   ?>
                    <h3>Entrar en la web</h3>
                    <form action="<?=base_url?>user/login"  method="POST">
                        <label for="usuario">Email:</label>
                        <div class="input-group">
                            <input class="form-control" name="email" id="email" type="email" placeholder="example@gmail.com" required>
                        </div>
                        <label for="password">Password:</label>
                        <div class="input-group">
                            <input class="form-control" name="password" id="password" type="password" placeholder="yourSecredPassword" required>
                        </div>
                        <button type="submit" class="btn btn-primary mt-2">Entrar</button>
                    </form>
                    <?php else: ?>
                        <p class="text-success">Bienvenido <?php echo $_SESSION['login']->name.' '.$_SESSION['login']->lastname;?></p>

                    <?php endif; ?>
                    <div class="d-flex flex-column mt-4">
                        <a class="text-decoration-none" href="">Mis pedidos</a>
                        <a class="text-decoration-none" href="">Gestionar categorias</a>
                        <a class="text-decoration-none" href="">Gestionar productos</a>
                        <?php if(isset($_SESSION['login'])): ?>
                        <a href="<?=base_url?>user/logout">Salir</a>    
                        <?php endif; ?>    
                    </div>
</aside>
<div class="col-8">
