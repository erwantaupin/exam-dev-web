<?php 
try {
  $db = new PDO('mysql:host=db5006773335.hosting-data.io;dbname=dbs5603922;charset=utf8mb4', 'dbu2228906', 'y93Vb7iW');
  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);  
} catch (PDOException $e) {
  echo "Connection failed : ". $e->getMessage();
}
?>