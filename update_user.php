<?php include 'Class/Databases.php'; ?>        
<?php
if (isset($_GET['id'])) {
    $db = new Databases();
    //catching the $_GET[id] variable and passing through get_row_from_databases()
    //function so that i can get spacific result set for updating the result.
    $id = $_GET['id'];
    $result_array = $db->get_row_from_databases($param = ["$id"]);
}

if (isset($_POST["btn"])) {
    //gatting all the post value
    $username = $_POST["username"];
    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $email = $_POST["email"];
    $user_id = $_POST["user_id"];
    //assigned variable passing through the updateRow() function.
    //check out databases class updateRow() sql syntex WHERE 
    //id = hidden field user_id.it's for updating spacific user row. 
    $db->updateRow($param = ["$username", "$firstname", "$lastname", "$email", "$user_id"]);
}
?>
<!--head html file into template/header.php file just include here-->
<?php $title = "Update User Information" ?>
<?php include 'template/header.php'; ?> 
<p>
<tr>
    <th>
        <label for="username">Username:</label>
    </th>
</tr>
<tr>
    <td>
        <input type="text" name="username" value="<?php if (isset($result_array["username"])) {
    echo $result_array["username"];
} ?>" id="username" />
    </td>
</tr>
</p>
<p>
<tr>
    <th>
        <label for="firstname">Firstname:</label>
    </th>
</tr>
<tr>
    <td>
        <input type="text" name="firstname" value="<?php if (isset($result_array["firstname"])) {
    echo $result_array["firstname"];
} ?>" id="firstname" />
    </td>
</tr>
</p>
<p>
<tr>
    <th>
        <label for="lastname">Lastname:</label>
    </th>
</tr>
<tr>
    <td>
        <input type="text" name="lastname" value="<?php if (isset($result_array["lastname"])) {
    echo $result_array["lastname"];
} ?>" id="lastname" />
    </td>
</tr>
</p>
<p>
<tr>
    <th>
        <label for="email">Email:</label>
    </th>
</tr>
<tr>
    <td>
        <input type="text" name="email" value="<?php if (isset($result_array["email"])) {
    echo $result_array["email"];
} ?>" id="email" />
    </td>
</tr>
</p>
<p>
<tr>
    <td align="center">
        <input hidden type="text" value="<?php if (isset($result_array["id"])) {
    echo $result_array["id"];
} ?>" name="user_id" />
        <input type="submit" name="btn" value="update" />
    </td>
</tr>
</p>
<!--head html file into template/footer.php file just include here-->
<?php include 'template/footer.php'; ?>