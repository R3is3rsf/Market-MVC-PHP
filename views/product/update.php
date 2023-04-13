<?php Utils::whoIs(); ?>

<?php
// var_dump($products);
// die();

?>
<div class="container">
    <h1 class="text-primary">Updated products</h1>


    <form action="<?=base_url?>product/updateSave" method="POST" enctype="multipart/form-data" >
        <input class="form-control" type="text" name="id" id="id" value="<?=$products->id;?>">

        <label class="text-secondary form-label" for="name">Name</label>
        <input class="form-control" type="text" name="name" id="name" value="<?=$products->name;?>">


        <labe class="text-secondary form-label" for="description">Description</labe>
        <input class="form-control" type="text" name="description" id="description" value="<?=$products->description;?>" placeholder="Description of the product">
       
  
        <label class="text-secondary form-label" for="price">Price</label>
        <input class="form-control" type="numeric" name="price" id="price" value="<?=$products->price;?>" placeholder="Example: 100 (Only numbers)">
       
  
        <label class="text-secondary form-label" for="stock">Stock</label>
        <input class="form-control" type="numeric" name="stock" id="stock" value="<?=$products->stock;?>" placeholder="Example: 10 (Only numbers)">
       
   
        <label class="text-secondary form-label" for="offter">Offter</label>
        <select class="form-select" name="offter" id="offter">
            <option selected value="<?=$products->offter;?>"><?php echo $value = $products->offter ? 'Yes' : 'No';?></option>
            <?php if($products->offter==1): ?>
                <option value="2">No</option>
            <?php else: ?>
                <option value="1">Yes</option>
            <?php endif;?>
        </select>
        
        <label class="text-secondary form-label" for="date">Date</label>
        <input class="form-control" type="date" name="date" id="date" value="<?=$products->date;?>">
        <label class="text-secondary form-label" for="image">Image</label>
        <input class="form-control" type="file" name="image" id="image">
        
        <label class="text-secondary form-label" for="category">Categoria</label>
        <select class="form-select" name="category" id="category">
            <option selected value="<?=$products->categoryId;?>"><?=$products->category;?></option>
         <?php
              $categories= new CategoryController;
              $list= $categories->categoryInstance(); 
              foreach($list as $value):  
                 if($value[0]<>$products->categoryId):
          ?>  
                  <option value="<?php echo $value[0]; ?>"><?=$value[1];?></option>
         <?php
                 endif;  
              endforeach;
           ?>   
        </select>

        <button class="btn btn-success mt-2" type="submit">Updated</button>

    </form>
</div>