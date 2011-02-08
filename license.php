<?php
$title = 'License';
require('inc/header.php');
?>

<h2>License</h2>

<p>
ViewGit is licensed under <a href="http://www.fsf.org/licensing/licenses/agpl-3.0.html">GNU Affero General Public License version 3</a> (AGPLv3). This license applies for both ViewGit and this website. Also see doc/LICENSE.</p>

<p>Contributions should be sent under "AGPLv3 or later" to allow me to upgrade the license later on.</p>

<pre class="license">
<?php
$data = file_get_contents('agpl-3.0.txt');
echo htmlentities($data);
?>
</pre>

<?php
require('inc/footer.php');
?>
