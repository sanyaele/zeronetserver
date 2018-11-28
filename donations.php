<?php
if (!empty($_POST['inputEmail']) && !empty($_POST['inputAmount'])){
    session_start();
    $_SESSION['email'] = addslashes($_POST['inputEmail']);
    $_SESSION['amount'] = addslashes($_POST['inputAmount']);
} else {
    header("Location: donations.html");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Make a Donation</title>
</head>
<body>
    <div class="container">
        <div class="row col-md-6 offset-3">
            <h1>You are about to make a <?php echo $_SESSION['amount'];?> Donation</h1>
            <div class="h3 text-center">
                <button class="submit">Donate</button>
            </div>
        </div>
    </div>
</body>
</html>