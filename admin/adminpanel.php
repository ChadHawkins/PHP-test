<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/styles.css">

    <title>Document</title>
</head>

<body>
    <a href="logout.php" class="logout-btn">Logout</a>



    <?php
    require_once "../include/dbh.inc.php";

    echo "<table style='border: solid 1px black;'>";
    echo "<tr><th>Name</th><th>E-mail</th><th>Message</th><th>Date submitted</th></tr>";

    class TableRows extends RecursiveIteratorIterator
    {
        function __construct($it)
        {
            parent::__construct($it, self::LEAVES_ONLY);
        }

        function current()
        {
            $value = parent::current();

            if (filter_var($value, FILTER_VALIDATE_EMAIL)) {
                $value = $this->hideEmailAddress($value);
            }
            return "<td style='width:150px;border:1px solid black;'>" . htmlspecialchars($value) . "</td>";
        }

        function beginChildren()
        {
            echo "<tr>";
        }

        function endChildren()
        {
            echo "</tr>" . "\n";
        }
        function hideEmailAddress($email)
        {

            $em = explode("@", $email);
            $name = $em[0];
            $length = floor(strlen($name) / 2);
            return substr($name, 0, $length) . str_repeat('*', $length) . "@" . end($em);
        }

    }


    try {

        $stmt = $pdo->prepare("SELECT name, email, message, date_submitted FROM customermessage ORDER BY date_submitted DESC");
        $stmt->execute();

        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        foreach (new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k => $v) {
            echo $v;
        }
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
    $pdo = null;
    echo "</table>";
    ?>
</body>

</html>