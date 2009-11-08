<?php
require('inc/header.php');
?>

<h2>About</h2>

<div style="float: right"><script type="text/javascript" src="http://www.ohloh.net/p/318153/widgets/project_users.js?style=green"></script></div>
<p>ViewGit is a <a href="http://git.or.cz/">git</a> web repository viewer that aims to be easy to set up and upgrade, light on <a href="requirements">dependencies</a>, and comfortable to use.</p>

<h2>Features</h2>

<p>Some of the current features are:</p>

<ul>
	<li>Project index with description, last change, tree browsing, and download links</li>
	<li>Project summary page with shortlog snippet and list of tags and heads (branches)</li>
	<li>Shortlog: date of change, author, short message, tag/head/remote labels, and links to commit/commitdiff/tree/download</li>
	<li>Commit: details of the commit</li>
	<li>Commitdiff: colored diff of the changes in a commit</li>
	<li>Tree (directory) browsing with downloadable trees (as tar/gz and zip), and downloadable files</li>
	<li>RSS feeds of changes with configurable item title/description content - see the <strong><a href="viewgit-rss.xml">example feed</a></strong></li>
	<li>(Optional) Checkouts using mod_rewrite and git-update-server-info in .git/hooks/post-update</li>
	<li>Alternative project list configuration using globs/wildcards (useful for mass hosting of projects)</li>
	<li>Optional e-mail address obfuscator</li>
	<li>Optional <a href="http://qbnz.com/highlighter/">GeSHi</a> support (not bundled)</li>
</ul>

<?php
require('inc/footer.php');
?>
