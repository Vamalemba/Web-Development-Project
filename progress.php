<?php
    session_start();
    $uname = $_SESSION['uname'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Monitor progress</title>
</head>
<body>
    <div class="info">
        <form action="progress.php" method="post">
            <h3> <?php echo"$uname";?> </h3>
            <select name="progress" id="">
                <option value="assigned">Assigned land</option>
                <option value="planted">Planted seedling</option>
                <option value="withdraw">Withdraw from the project</option>
            </select>

            <button type="submit">Submit</button>
        </form>
    </div>
</body>
</html>
<?php
if(isset($_POST['submit'])){
    $progress = $_POST['progress'];
    if($progress == 'assigned'){
        ?>

        <?php
    }
    else if($progress == 'planted'){
        ?>

        <?php
    }
    else if($progress == 'withdraw'){
        ?>

        <?php
    }
    else{
        ?>

        <?php
    }
}