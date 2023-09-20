<?php
// Criterion A: Use of more than 1 data type
$userName = "Sahara Matubbar";
$userBalance = 100;

// Criterion B: Use of expressions
$welcome = "Hello, " . $userName;

// Criterion C: Use of operators
$afterShopping = $userBalance - 10;

// Criterion D: Built-in Function. Used below.

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab1 | My PHP Code</title>
</head>

<body>
    <header>
        <h1>
            <?php echo $welcome . "<br>"; ?>
        </h1>
    </header>
    <main>
        <section>
            <h2>My Current Balance: <?php echo $userBalance . "<br>"; ?></h2>
            <p>Balance After Shopping: <?php echo $afterShopping . "<br>"; ?></p>
        </section>
    </main>

    <!-- Below Built-in function -->
    <?php include('footer.html') ?>
</body>

</html>
