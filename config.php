<?php

$db = new PDO('mysql:host=DB;dbname=shapeDB','root','password');
$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_ASSOC);


