<?php

include("./auth.php");
include("../config/db.php");

include('./comp/header.php');

?>

<table class="striped responsive-table " style="width: 100%;">
    <thead>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Message</th>
            <th>Time</th>
        </tr>
    </thead>
    <tbody>

        <?php
        $stmt = $pdo->prepare("SELECT * FROM contactus");
        $stmt->execute();
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            echo "<tr><td>" . $row['name'] . "</td><td>" . $row['email'] . "</td><td>" . $row['message'] . "</td><td>" . $row['insertDate'] . "</td></tr>";
        }
        ?>

    </tbody>
</table>

<div class="mb-5"></div>




<?php


include('./comp/footer.php');
