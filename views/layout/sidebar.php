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
                        <a href="<?=base_url?>user/register">No esta registrado?</a>
                    </form>
                    <?php else: ?>
                        <p class="text-success">Bienvenido <?php echo $_SESSION['login']->name.' '.$_SESSION['login']->lastname;?></p>

                    <?php endif; ?>
                    <div class="d-flex flex-column mt-4">
                        <?php if(isset($_SESSION['login']->rol) && $_SESSION['login']->rol==1): ?>
                            <a class="text-decoration-none" href="<?=base_url?>category/index">Gestionar categorias</a>
                            <a class="text-decoration-none" href="<?=base_url?>product/management">Gestionar productos</a>
                            <a class="text-decoration-none" href="<?=base_url?>orders/index">Gestionar Pedidos</a>
                        <?php endif; ?>    

                        <?php if(isset($_SESSION['login'])): ?>
                            <a class="text-decoration-none" href="">Mis pedidos</a>
                            <a href="<?=base_url?>user/logout">Salir</a>    
                        <?php endif; ?>    
                    </div>
</aside>
<div class="col-8">
