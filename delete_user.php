<?php include 'Class/Databases.php'; ?>
<?php

if (isset($_GET["id"])) {
    //catching the $_GET[id] variable and passing through deleteRow()
    //function so that i can get rid it's spacific result set.
    $id = $_GET["id"];
    $db = new Databases();
    $db->deleteRow($param = ["$id"]);
} else {
    header("Location:view_user.php");
}