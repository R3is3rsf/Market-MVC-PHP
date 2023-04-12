<div class="container">
    <h1 class="text-primary">Register products</h1>
    <form action="<?=base_url?>product/save" method="post">
        <label class="text-secondary form-label" for="name">Name</label>
        <input class="form-control" type="text" name="name" id="name" placeholder="Name of product">
        <labe class="text-secondary form-label" for="description">Description</labe>
        <input class="form-control" type="text" name="description" id="description" placeholder="Description of the product">
        <label class="text-secondary form-label" for="price">Price</label>
        <input class="form-control" type="numeric" name="price" id="price" placeholder="Example: 100 (Only numbers)">
        <label class="text-secondary form-label" for="stock">Stock</label>
        <input class="form-control" type="numeric" name="stock" id="stock" placeholder="Example: 10 (Only numbers)">
        <label class="text-secondary form-label" for="offter">Offter</label>
        <select class="form-select" name="offter" id="offter">
            <option value="1">Yes</option>
            <option value="0">No</option>
        </select>
        <label class="text-secondary form-label" for="date">Date</label>
        <input class="form-control" type="date" name="date" id="date" placeholder>
        <label class="text-secondary form-label" for="image">Image</label>
        <input class="form-control" type="file" name="image" id="image" placeholder>
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
    </form>
</div>