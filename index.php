<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">

    <title>Document</title>
</head>

<body>
    <nav>
        <section class="login-container">
            <form action="admin/adminpanel.php" method="post" class="login-form">
                <Label>Administrator Panel</Label>
                <input type="text" name="user" placeholder="Username" required>
                <input type="password" name="pass" placeholder="Password" required>
                <button type="submit" id:>Login</button>
            </form>
        </section>
    </nav>



    <section style="margin-top  100px">
        <form action="include/formhandler.inc.php" method="post">
            <label for="name">Name</label>
            <input type="text" name="name" id="name" required>
            <label for="email">Email</label>
            <input type="email" name="email" id="email">
            <label for="message">Message</label>
            <input type="text" name="message" id="message" required>

            <button>Send message</button>
        </form>
    </section>

    <section>
        <?php if (isset($_GET['status']) == 'success' && $_GET['status'] == 'success') {
            echo "Thank you for submitting your message";
        } else if (isset($_GET['status']) == 'failure' && $_GET['status'] == 'failure') {
            echo "There was an issue with your submission";
        } ?>
    </section>

</body>

</html>