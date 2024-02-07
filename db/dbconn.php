<?php
$conn = new mysqli('localhost', 'root', '', 'shoe');
if (!$conn) {
	die("Fatal Error: Connection Error!");
}
