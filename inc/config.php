<?php
/** @file
 * Configuration file for viewgit.
 *
 * @note DO NOT EDIT THIS FILE. Create localconfig.php instead and override the settings in it.
 */
$conf['projects'] = array(
	// 'name' => array('repo' => '/path/to/repo'),
);

// If set, contains an array of globs/wildcards where to include projects.
// Use this if you have a lot of projects under a directory.
//$conf['projects_globs'] = array('/path/to/*/.git', '/var/git/*.git');

$conf['datetime'] = '%Y-%m-%d %H:%M:%S';

// Maximum length of commit message's first line to show 
$conf['commit_message_maxlen'] = 50;

// Maximum number of shortlog entries to show on the summary page
$conf['summary_shortlog'] = 30;

// Maximum number of tags to show on the summary page
$conf['summary_tags'] = 10;

// Allow checking out projects via "git clone"
$conf['allow_checkout'] = true;

// If set, this function is used to obfuscate e-mail addresses of authors/committers
// The 'obfuscate_mail' function simply replaces @ with ' at ' and . with ' dot '
//$conf['mail_filter'] = 'obfuscate_mail';
//$conf['mail_filter'] = create_function('$mail', 'return str_rot13(strtoupper($mail));');

// Whether to use GeSHi for source highlighting
$conf['geshi'] = false;

// Path to geshi.php
//$conf['geshi_path'] = 'inc/geshi/geshi.php';
//$conf['geshi_path'] = '/usr/share/php-geshi/geshi.php'; // Path on Debian

// RSS time to live (how often clients should update the feed), in minutes.
$conf['rss_ttl'] = 10;

// RSS: Maximum number of items in feed
$conf['rss_max_items'] = 30;

// RSS item format. Allowed formatting:
// {AUTHOR}, {AUTHOR_MAIL}, {SHORTLOG}, {LOG}, {COMMITTER}, {COMMITTER_MAIL}, {DIFFSTAT}
$conf['rss_item_title'] = '{SHORTLOG} ({AUTHOR})';
$conf['rss_item_description'] = '<pre>{LOG}</pre><b>{AUTHOR}</b> &lt;{AUTHOR_MAIL}&gt;<br /><pre>{DIFFSTAT}</pre>';

$conf['debug'] = false;

if (!@include_once('localconfig.php')) {
	die('ViewGit has not been configured yet, please read doc/README.');
}
