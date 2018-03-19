<?php
$bdd = new PDO("mysql:host=localhost;dbname=ecrits", "root", "fatimata16");
$bdd -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$bdd -> setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);