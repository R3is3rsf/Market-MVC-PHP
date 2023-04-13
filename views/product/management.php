<h1>Gestion de productos</h1>
<a class="btn btn-primary my-2" href="<?=base_url?>product/create">Crear producto</a>

<?php if(isset($_SESSION['delete']) && $_SESSION['delete']=='complete'):?>
  <p class="text-success">Delete complete</p>
<?php elseif(isset($_SESSION['delete']) && $_SESSION['delete']=='Error'):?>
  <p class="text-danger">Delete ERROR</p>
<?php endif;  ?>  
<?php Utils::deleteSesion('delete');  ?>
<table class="table table-hover table-bordered">
    <thead class="table-dark">
        <th>ID</th>
        <th>Categoria</th>
        <th>Nombre</th>
        <th>Descripcion</th>
        <th>Price</th>
        <th>Stock</th>
        <th>Actions</th>

    </thead>
    <tbody>
        <?php foreach($products as $value): ?>
        <tr> 
           <td>
             <?=$value['id'];?>
           </td>
           <td>
             <?=$value['categoria'];?>
           </td>
           <td>
             <?=$value['name'];?>
           </td>
           <td>
             <?=$value['description'];?>
           </td>
           <td>
             <?=$value['price'];?>
           </td>
           <td>
             <?=$value['stock'];?>
           </td>
           <td>
             <a href="<?=base_url?>product/update/<?=$value['id'];?>" class="btn btn-sm btn-success py-0 mb-1 button">Update</a>
             <a href="<?=base_url?>product/delete/<?=$value['id'];?>" class="btn btn-sm btn-danger py-0 button">Delete</a>
           </td>
        </tr>  
         <?php endforeach ;?>
   </tbody>
</table>