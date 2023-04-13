<div class="container">
    <h1 class="text-primary">Register products</h1>

    <?php if(isset($_SESSION['complete'])):  ?>
        <p class="text-success"><?=$_SESSION['complete']?></p>
    <?php endif; ?>
    <form action="<?=base_url?>product/save" method="post" enctype="multipart/form-data">
         <?php if(isset($_SESSION['error']['name'])):  ?>
             <p class="text-danger"><?=$_SESSION['error']['name'] ?></p>
         <?php endif; ?>
        <label class="text-secondary form-label" for="name">Name</label>
        <input class="form-control" type="text" name="name" id="name" placeholder="Name of product">

        <?php if(isset($_SESSION['error']['description'])):  ?>
            <p class="text-danger"><?=$_SESSION['error']['description'] ?></p>
        <?php endif; ?>
        <labe class="text-secondary form-label" for="description">Description</labe>
        <input class="form-control" type="text" name="description" id="description" placeholder="Description of the product">
       
        <?php if(isset($_SESSION['error']['price'])):  ?>
            <p class="text-danger"><?=$_SESSION['error']['price'] ?></p>
        <?php endif; ?>    
        <label class="text-secondary form-label" for="price">Price</label>
        <input class="form-control" type="numeric" name="price" id="price" placeholder="Example: 100 (Only numbers)">
       
        <?php if(isset($_SESSION['error']['stock'])):  ?>
            <p class="text-danger"><?=$_SESSION['error']['stock'] ?></p>
        <?php endif; ?>    
        <label class="text-secondary form-label" for="stock">Stock</label>
        <input class="form-control" type="numeric" name="stock" id="stock" placeholder="Example: 10 (Only numbers)">
       
        <?php if(isset($_SESSION['error']['offter'])):  ?>
            <p class="text-danger"><?=$_SESSION['error']['offter'] ?></p>
        <?php endif; ?>    
        <label class="text-secondary form-label" for="offter">Offter</label>
        <select class="form-select" name="offter" id="offter">
            <option value="1">Yes</option>
            <option value="2">No</option>
        </select>
        
        <?php if(isset($_SESSION['error']['date'])):  ?>
            <p class="text-danger"><?=$_SESSION['error']['date'] ?></p>
        <?php endif; ?>
        <label class="text-secondary form-label" for="date">Date</label>
        <input class="form-control" type="date" name="date" id="date" placeholder>
        <label class="text-secondary form-label" for="image">Image</label>
        <input class="form-control" type="file" name="image" id="image" placeholder>
        
        <?php if(isset($_SESSION['error']['category'])):  ?>
            <p class="text-danger"><?=$_SESSION['error']['category'] ?></p>
        <?php endif; ?>
        <label class="text-secondary form-label" for="category">Categoria</label>
        <select class="form-select" name="category" id="category">
          <?php
              $categories= new CategoryController;
              $list= $categories->categoryInstance(); 
              foreach($list as $value):  
          ?>  
            <option value="<?php echo $value[0]; ?>"><?=$value[1];?></option>
         <?php endforeach;  ?>   
        </select>

        <button class="btn btn-primary mt-2">Guardar</button>
    <?php Utils::deleteSesion('complete'); ?>
    <?php Utils::deleteSesion('error'); ?>

    </form>
</div>