<?php Utils::exist();?>

<div class="container mb-4 pb-4">
    <h1>Update date</h1>

    <form action="<?=base_url?>user/update" method="POST"  enctype="multipart/form-data">
        <input  type="hidden" name="id" id="id" value="<?=$value['id']?>">
 
        <label class="form-label" for="name">Name</label>
        <input class="form-control" type="text" name="name" id="name" value="<?=$value['name']?>" placeholder="Write your name"  >
  
        <label class="form-label" for="lastname">Lastname</label>
        <input class="form-control" type="text" name="lastname" id="lastname" value="<?=$value['lastname']?>" placeholder="Write your lastname" required>
      
        <label class="form-label" for="email">Email</label>
        <input class="form-control" type="email" name="email" id="email" value="<?=$value['email']?>" placeholder="example@gmail.com" required>
       
   
        <button type="" class="btn btn-success mt-2">Update</button>
        <?php  Utils::deleteSesion('error');  ?>
       </form>
</div>