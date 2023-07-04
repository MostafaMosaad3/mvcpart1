<?php

require 'C:\laragon\www\Database.php';

$config = require('C:\laragon\www\config.php');
$db = new Database($config['database']);

$heading = 'My Notes';

$notes = $db->query('select * from notes where user_id = 1')->fetchAll();


require "C:\laragon\www\\views\\notes.view.php";