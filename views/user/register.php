<div class="container">
    <h1>Register user</h1>
    <?php if(isset($_SESSION['register'])):?>    
     <?php if($_SESSION['register']=='FAIL'):
              $color="text-danger";
           else: 
              $color="text-success";  
           endif;
     ?>
        
        <h2 class="<?=$color?>"><?=$_SESSION['register'];?></h2>
   
   <?php
        endif; 
        Utils::deleteSesion('register');  
    ?>
    <form action="<?=base_url?>user/save" method="POST">
        <?php if(isset($_SESSION['error']['name'])):  ?>
           <h4 class="text-danger"><?= $_SESSION['error']['name'];?></h4> 
           
        <?php 
           endif;
         ?>    
        <label class="form-label" for="name">Name</label>
        <input class="form-control" type="text" name="name" id="name" placeholder="Write your name"  >
        <?php if(isset($_SESSION['error']['lastname'])):  ?>
           <h4 class="text-danger"><?= $_SESSION['error']['lastname'];?></h4> 
        <?php endif; ?>   
        <label class="form-label" for="lastname">Lastname</label>
        <input class="form-control" type="text" name="lastname" id="lastname" placeholder="Write your lastname" required>
        <?php if(isset($_SESSION['error']['email'])):  ?>
           <h4 class="text-danger"><?= $_SESSION['error']['email'];?></h4> 
        <?php endif; ?>       
        <label class="form-label" for="email">Email</label>
        <input class="form-control" type="email" name="email" id="email" placeholder="example@gmail.com" required>
        <?php if(isset($_SESSION['error']['password'])):  ?>
           <h4 class="text-danger"><?= $_SESSION['error']['password'];?></h4> 
        <?php endif; ?>       
        <label for="password">Password</label>
        <input class="form-control" type="password" name="password" id="password" placeholder="Your password here" required>
        <label class="form-label" for="repassword">Repeat your password</label>
        <input class="form-control" type="password" name="repassword" id="repassword" placeholder="Repeat your password" required>

        <button type="" class="btn btn-primary mt-2">Register</button>
        <?php  Utils::deleteSesion('error');  ?>
       </form>
</div>