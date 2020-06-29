<?php 
session_start();

include('functions.php');

if (isset($_GET['list'])) {
    if(isAdmin()){
        $query = "SELECT * FROM users";
        $results = mysqli_query($conn, $query);
        
    }
}
?>

<html>
<head>
    <title>Register</title>
    <link rel="stylesheet" href="public/css/styles.css">
</head>
<body>
<div class="header">
	<h2>List User</h2>
</div>
<form >
    <?php echo display_error(); ?>	
    
    <?php foreach($results as $result): ?>
        <div class="input-group">
            <label>User: <?php echo $result['id']; ?></label>
            <label>Username: <?php echo $result['username']; ?></label>
            <label>Full Name: <?php echo $result['fullname']; ?></label>
            <label>Email: <?php echo $result['email']; ?></label>
        </div>
    <?php endforeach; ?>
    
</form>
<div class="back" style="text-align: center">
    <input type="button" value="Back" onClick="javascript:history.go(-1)" />
</div>
	


</body>
</html>