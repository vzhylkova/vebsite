<?php
session_start();

require './src/auth.php';

logout();

header('Location: ./login.php');