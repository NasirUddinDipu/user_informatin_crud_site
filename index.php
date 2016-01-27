<?php include 'Class/Databases.php'; ?>
<?php
$db = new Databases();
if (isset($_POST["btn"])) {
    /* 
     * Here inserting row as an array paramiter, you should check out databases 
     * insert function there you can see sql syntax. why i am doing this because it's secure 
     * and more efficient way, it's called prepare statement or you 
     * can call binding parameter so that you can prevent sql injection.and also 
     * getting all the $_POST parameter and assigning to a different variables and passing 
     * variables into insertRow() function to achieve desiger result.
     */
    $username = $_POST["username"];
    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $email = $_POST["email"];
    $db->insertRow($param = ["$username", "$firstname", "$lastname", "$email"]);
}
?>
<!--head html file into template/header.php file just include here-->
<?php $title = "Insert Information" ?>
<?php include 'template/header.php'; ?>
<p>
<tr>
    <th>
        <label for="username">Username:</label>
    </th>
</tr>
<tr>
    <td>
        <input type="text" name="username" id="username" />
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
        <input type="text" name="firstname" id="firstname" />
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
        <input type="text" name="lastname" id="lastname" />
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
        <input type="text" name="email" id="email" />
    </td>
</tr>
</p>
<p>
<tr>
    <td align="center">
        <input type="submit" name="btn" value="save" />
    </td>
</tr>
</p>
<!--setting up a link to view_user page link-->
<?php $user_info_link = "<span>Go to View User Page to See User Information <a href=\"view_user.php\">click here</a></span>" ?>
<!--head html file into template/footer.php file just include here-->
<?php include 'template/footer.php'; ?>
