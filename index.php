<?php 
session_start();
include 'configs/config.php';
include 'models/model.php';
include 'controllers/controller.php';
include 'views/layout.php';

$wordsArray = file(FILE_PATH);
