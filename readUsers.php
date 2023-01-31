<?php include "connection.php"; ?>
<?php include "getFunction.php"; ?>

<?php include "includes/header.php"; ?>

<div class="container">
    <div class="col-sm-6">
        <h1 class="text-center">Read Users</h1>
        <pre>
               <?php showAllData() ?>
            </pre>

        <!-- <form action="readUsers.php" method="post">
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" name="username" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" class="form-control" required>
                </div>
                <input class="btn btn-primary" type="submit" name="submit" value="Submit">


            </form> -->

    </div>
</div>

<?php include "includes/footer.php"; ?>