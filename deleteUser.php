<?php include "connection.php"; ?>
<?php include "getFunction.php"; ?>
<?php DeleteData(); ?>

<?php include "includes/header.php"; ?>

<div class="container">
    <div class="col-sm-6">
        <h1 class="text-center">Delete User</h1>

        <form action="deleteUser.php" method="post">
            <!-- <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" name="username" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" class="form-control" required>
                </div> -->
            <div class="form-group">
                <select name="id" id="">
                    <?php
                    showAllId();
                    ?>
                </select>
            </div>
            <input class="btn btn-primary" type="submit" name="submit" value="Delete">


        </form>

    </div>
</div>

<?php include "includes/footer.php"; ?>