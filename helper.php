<h1>Database Settings</h1>
<pre>
<?= htmlspecialchars(getenv("VCAP_SERVICES")) ?>
</pre>

<hr />

<h1>openvbx.php</h1>
<pre>
<?= htmlspecialchars(file_get_contents("OpenVBX/config/openvbx.php")) ?>
</pre>

<hr />

<h1>database.php</h1>
<pre>
<?= htmlspecialchars(file_get_contents("OpenVBX/config/database.php")) ?>
</pre>
