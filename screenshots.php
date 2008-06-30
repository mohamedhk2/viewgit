<?php
require('inc/header.php');

$images = array('index.png', 'summary.png', 'commit.png', 'commitdiff.png', 'tree.png');

foreach ($images as $i) {
	$name = array_shift(explode('.', $i));
	echo "<h2>$name</h2>\n";
	echo "<a href=\"images/$i\"><img src=\"images/th-$i\" width=\"320\" alt=\"$name\" /></a>\n";
}
?>

<?php
require('inc/footer.php');
?>
