<?php include ('head.php')?>
<?php
if(isset($_SESSION['USERNAME']))
echo "Welcome - ".$_SESSION['USERNAME'];
?>
<div class="container">
    <h4><?php echo $title; ?></h4>
        <form method="POST" action="task.php" class="container-fluid">
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" class="form-control" name="name" value="<?php print htmlentities($name); ?>"/>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="text" class="form-control" name="email" value="<?php print htmlentities($email); ?>" />
            </div>
            <div class="form-group">
                <label for="text">Text:</label>
                <textarea class="form-control" name="task"><?php print htmlentities($task); ?></textarea>
            </div>
            <?php
                if ( isset($_SESSION['username']) ) { ?>
                 <div class="form-group">
                    <label for="done">Done:</label>
                    <input type="checkbox" name="done" value="<?php echo $done; ?>" <?php if ($done == 0) echo 'checked'; ?> />
                 </div>
                <?php }  ?>
                <input type="hidden" name="form-submitted" value="1" />
                <input type="submit" class="btn btn-success" value="Submit" /><br>
             
            </form>
            <br>
            <a href="logout.php">LogOut</a>
        
</div>
<?php include ('foot.php'); 