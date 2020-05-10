    <div class="container align-content-center  col-md-4">
        <h1 class="text-center">User registration</h1>
        <form method="POST" action="/user/store">
            <div class="form-group">
                <label for="first_name">First name</label>
                <input type="text"
                       class="form-control"
                       name="first_name"
                       id="first_name"
                       placeholder=""
                       value="<?php echo !empty($data['first_name']) ? $data['first_name'] : ''; ?>">
                <?php if(!empty($error['first_name_error'])) { ?>
                    <div class="alert alert-danger" role = "alert" ><?= $error['first_name_error'] ?></div >
                <?php }?>
            </div>
            <div class="form-group">
                <label for="last_name">Last name</label>
                <input type="text"
                       class="form-control"
                       name="last_name"
                       id="last_name"
                       placeholder=""
                       value="<?php echo !empty($data['last_name']) ? $data['last_name'] : '';?>">
                    <?php if(!empty($error['last_name_error'])) { ?>
                         <div class="alert alert-danger" role = "alert" ><?= $error['last_name_error'] ?></div >
                    <?php }?>
            </div>
            <div class="form-group">
                <label for="email">E-mail</label>
                <input type="email"
                       class="form-control"
                       name="email"
                       id="email"
                       placeholder=""
                       value="<?php echo !empty($data['email']) ? $data['email'] : '';?>">
                <?php if(!empty($error['email_error'])) { ?>
                    <div class="alert alert-danger" role = "alert" ><?= $error['email_error'] ?></div >
                <?php }?>
            </div>
            <div class="form-group">
                <label for="birthday">Birthday</label>
                <input type="date"
                       class="form-control"
                       name="birthday"
                       id="birthday"
                       placeholder=""
                       value="<?php echo !empty($data['birthday']) ? $data['birthday'] : '';?>">
                <?php if(!empty($error['birthday_error'])) { ?>
                    <div class="alert alert-danger" role = "alert" ><?= $error['birthday_error'] ?></div >
                <?php }?>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password"
                       class="form-control"
                       name="password"
                       id="password"
                       placeholder=""
                       value="<?php echo !empty($data['password']) ? $data['password'] : '';?>">
                <?php if(!empty($error['password_error'])) { ?>
                    <div class="alert alert-danger" role = "alert" ><?= $error['password_error'] ?></div >
                <?php }?>
            </div>
            <button type="submit" class="btn btn-primary">Registration</button>
        </form>
    </div>

