<?
require_once("docutil.php");
page_head("Participating in BOINC projects");
echo "
<ul>
<li> <a href=projects.php>Choosing project(s)</a>
<li> <a href=host_requirements.php>System requirements</a>
<li> <a href=account.php>Joining a project</a>
<li> <a href=client.php>Running the BOINC client</a>
<li> <a href=work_buffer.php>Work buffering</a>
<li> <a href=prefs.php>Preferences</a>
<li> <a href=startup.php>Participating in multiple projects</a>
<li> <a href=credit.php>Computation credit</a>
<li> <a href=teams.php>Teams</a>
<li> <a href=db_dump.php>Downloading statistics data</a>
</ul>
";
page_tail();
?>
