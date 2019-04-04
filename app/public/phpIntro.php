<h1>PHP Mode</h1>

<?php echo 2+2 ?>

<p>if we inspect this page, we'll just see '4' and not the php code. This is because php runs on the server and only the result of that code (not the code, itself) gets sent to client/visitor; summary, the server is calculating 2+2, not the browser</p>

<p>we can jump in and out of php mode</p>

<?php echo 5*5 ?>

<hr>

<?php $activity = 'Thanos'; ?>

<h3>This page is all about <?php echo $activity ?></h3>
<h4>All about <?php echo $activity ?></h4>
