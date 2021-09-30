<?php if ($page_active=="moi") { ?>
	<a href="modifier.php?k=<?= $row[5]; ?>&h=<?= $row[3]; ?>&i=<?= $row[13]; ?>&j=<?= $row[0]; ?>">
<?php } ?>
	<img id="output" src="<?= $row[13]; ?>" style="width:550px;"/>
<?php if ($page_active=="moi") { ?>
	</a>
<?php } ?>