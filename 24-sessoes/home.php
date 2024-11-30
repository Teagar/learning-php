<?php
session_start();

echo $_SESSION['color']."<br>".$_SESSION['car'].session_id();
