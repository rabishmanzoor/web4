<?php
session_start();
if (!isset($_SESSION['count'])) {
echo  $_SESSION['count'] = 0;
} else {
echo  $_SESSION['count']++;
}
?>