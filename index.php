<?php

include_once('bubble.php');

if (isset($_POST['bubbletext'])){
    print Bubble($_POST['bubbletext']);
} else {
    ?>
    <form action="" method="POST">
    <div style="height: 100%; width: 100%">
	<div style="width:75%; float: left;">
		<textarea name="bubbletext" style="width:100%; height:95%"></textarea>
	</div>
	<div style="width:5%; float: left;">&nbsp</div>
	<div style="width:20%; float: left;">
	    <strong>Bubble Maker</strong>
	    <input type="submit" value="Convert to HTML"><br>
        </diV>
    </div>
    </form>
    <?php
}



?>
