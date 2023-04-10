<h1>Gestionar categorias</h1>
<a class="btn btn-primary my-2" href="<?=base_url?>category/create">Crear categoria</a>
<table class="table table-hover table-bordered">
    <thead class="table-dark">
        <th>ID</th>
        <th>Categorias</th>
    </thead>
    <tbody>
        <?php foreach($allCategories as $value): ?>
        <tr> 
           <td>
             <?=$value[0];?>
           </td>
           <td>
             <?=$value[1];?>
           </td>
        </tr>  
         <?php endforeach ;?>
   </tbody>
</table>
