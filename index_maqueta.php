<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clothes Store</title>
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/css/custom.css">
</head>
<body>
    <header>
         <div class="jumbotron d-flex bg-light">
           <a href="#"> <img class="rounded pt-2 ps-2 pb-2 img-header" src="./assets/img/camiseta.png" alt="pig"></a>
           <h1 class="display-5 text-primary align-self-center ps-4 fw-bold">Pets Store</h1>
         </div>
         <nav class="p-0 navbar navbar-expand-lg navbar-dark bg-dark">
           <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link " href="#">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Categoria 1</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Categoria 2</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Categoria 3</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Categoria 4</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Carrito</a>
                    </li>
                </ul>
            </div>
           </div>
         </nav>  
         <hr class="border border-primary border-3 opacity-75 mt-0"/> 
    </header>
    <main class="container mt-0 mb-4 h-100">
        <div class="row">
            <aside class="col-3  border-end border-3">
                    <h3>Entrar en la web</h3>
                    <form action="#" method="post">
                        <label for="usuario">Email:</label>
                        <div class="input-group">
                            <input class="form-control" id="email" type="email" placeholder="example@gmail.com" required>
                        </div>
                        <label for="password">Password:</label>
                        <div class="input-group">
                            <input class="form-control" id="password" type="password" placeholder="yourSecredPassword" required>
                        </div>
                        <button class="btn btn-primary mt-2">Entrar</button>
                    </form>
                    <div class="d-flex flex-column mt-4">
                        <a class="text-decoration-none" href="">Mis pedidos</a>
                        <a class="text-decoration-none" href="">Gestionar categorias</a>
                        <a class="text-decoration-none" href="">Gestionar productos</a>
                    </div>
            </aside>

            <div class="col-8">
                <h1>Productos destacados</h1>
                <hr/>
                <div class="row p-4">

                    <article class="col-4 card">
                        <img class="card-img-top" src="./assets/img/camiseta.png" alt="camisa">
                        <div class="card-body">
                            <h5 class="card-title">Product</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet.</p>
                            <a class="btn btn-success py-2 px-4" href="#">Comprar</a>
                        </div>
                    </article>

                    <article class="col-4 card">
                        <img class="card-img-top" src="./assets/img/camiseta.png" alt="camisa">
                        <div class="card-body">
                            <h5 class="card-title">Product</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet.</p>
                            <a class="btn btn-success py-2 px-4" href="#">Comprar</a>
                        </div>
                    </article>

                    <article class="col-4 card">
                        <img class="card-img-top" src="./assets/img/camiseta.png" alt="camisa">
                        <div class="card-body">
                            <h5 class="card-title">Product</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet.</p>
                            <a class="btn btn-success py-2 px-4" href="#">Comprar</a>
                        </div>
                    </article>  
                    
                    <article class="col-4 card">
                        <img class="card-img-top" src="./assets/img/camiseta.png" alt="camisa">
                        <div class="card-body">
                            <h5 class="card-title">Product</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet.</p>
                            <a class="btn btn-success py-2 px-4" href="#">Comprar</a>
                        </div>
                    </article>
                    <article class="col-4 card">
                        <img class="card-img-top" src="./assets/img/camiseta.png" alt="camisa">
                        <div class="card-body">
                            <h5 class="card-title">Product</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet.</p>
                            <a class="btn btn-success py-2 px-4" href="#">Comprar</a>
                        </div>
                    </article>
                    <article class="col-4 card">
                        <img class="card-img-top" src="./assets/img/camiseta.png" alt="camisa">
                        <div class="card-body">
                            <h5 class="card-title">Product</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet.</p>
                            <a class="btn btn-success py-2 px-4" href="#">Comprar</a>
                        </div>
                    </article>                    
                </div>
            </div>
        </div>
    </main>
    <footer
          class="text-center text-lg-start text-white"
          style="background-color: #3e4551"
          >
    <div
         class="text-center p-3"
         style="background-color: rgba(0, 0, 0, 0.2)"
         >
      © 2023 Copyright:
      <a class="text-white" href="https:/robertoperezcuevas.com/"
         >rperezc297</a
        >
    </div>
  </footer>

   <script src="./assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>