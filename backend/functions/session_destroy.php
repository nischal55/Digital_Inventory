<?php
session_start();
session_destroy();
header('location:../../frontend/pages/login.php');
