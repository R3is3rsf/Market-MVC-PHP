<h1>Gestion de productos</h1>
<a class="btn btn-primary my-2" href="<?=base_url?>product/create">Crear producto</a>
<table class="table table-hover table-bordered">
    <thead class="table-dark">
        <th>ID</th>
        <th>Categoria</th>
        <th>Nombre</th>
        <th>Descripcion</th>

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
        </tr>  
         <?php endforeach ;?>
   </tbody>
</table>