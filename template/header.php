<!DOCTYPE HTML>
<html lang="en-US">
    <head>
        <meta charset="UTF-8">
        <?php if(isset($title)){ ?>
        <title><?php echo $title; ?></title>
        <link rel="stylesheet" href="css/style.css" />
    </head>
    <body>
        <h1>User Information</h1>
        <div id="container">
            <h3><?php echo $title; ?></h3>
        <?php } ?>
            <form action="" method="post">
                <table align="center"> 