<?php include 'Class/Databases.php'; ?>
<!--head html file into template/header.php file just include here-->
<?php $title = "View All User Information" ?>
<?php include 'template/header.php'; ?> 
<?php
$db = new Databases();
?>
<tr>
    <th>Username</th>
    <th>Firstname</th>
    <th>Lastname</th>
    <th>Email</th>
    <th>Action</th>
</tr>
<?php
    /*
     * Here you can see just gating all the rows from databases 
     * by the get_rows_from_databases() function, here i am not 
     * passing any paramiter because it's not need any paramiter
     * you can see databases syntex how it's done. you can also see 
     * here i am using result->fetch only because databeses class 
     * default fetch value (assoc) given please chack databases 
     * class __construct method . after that while loop just 
     * fetching all the desiger result.   
     */
$result = $db->get_rows_from_databases($param = []);
while ($row = $result->fetch()) {
    ?>
    <tr>
        <td><?php echo $row["username"]; ?></td>
        <td><?php echo $row["firstname"]; ?></td>
        <td><?php echo $row["lastname"]; ?></td>
        <td><?php echo $row["email"]; ?></td>
        <td>
            <a href="update_user.php?id=<?php echo $row['id']; ?>">Edit</a>|<a href="delete_user.php?id=<?php echo $row['id']; ?>">Delete</a>
        </td>
    </tr> 
<?php } ?>
    <tr>
        <td align="center" colspan="5">Go to Insert Page to Insert More Row <a href="index.php">click here</a></td>
    </tr>
<!--head html file into template/footer.php file just include here-->    
<?php include 'template/footer.php'; ?>
