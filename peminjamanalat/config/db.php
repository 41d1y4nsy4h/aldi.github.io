<?php

try {
  $conn = new mysqli('localhost', 'root', '', 'peminjamanalat');
} catch (Exception $e) {
  echo $e->getMessage();
}

?>