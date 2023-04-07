<div class="container">
    <h1>Register user</h1>
    <form action="<?=base_url?>user/save" method="POST">
        <label class="form-label" for="name">Name</label>
        <input class="form-control" type="text" name="name" id="name" placeholder="Write your"  required>
        <label class="form-label" for="lastname">Lastname</label>
        <input class="form-control" type="text" name="lastname" id="lastname" placeholder="Write your lastname" required>
        <label class="form-label" for="email">Email</label>
        <input class="form-control" type="email" name="email" id="email" placeholder="example@gmail.com" required>
        <label for="password">Password</label>
        <input class="form-control" type="password" name="password" id="password" placeholder="Your password here" required>
        <label class="form-label" for="repassword">Repeat your password</label>
        <input class="form-control" type="password" name="repassword" id="repassword" placeholder="Repeat your password" required>

        <button class="btn btn-primary mt-2">Register</button>
       </form>
</div>