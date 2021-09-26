<?php
// function to delete all files and subfolders from folder
function deleteAll($dir, $remove = false) {
 $structure = glob(rtrim($dir, "/").'/*');
 if (is_array($structure)) {
 foreach($structure as $file) {
 if (is_dir($file))
 deleteAll($file,true);
 else if(is_file($file))
 unlink($file);
 }
 }
 if($remove)
 rmdir($dir);
}
 
// folder path that contains files and subfolders
$path = "./Videos";
 
// call the function
deleteAll($path);
echo '<a href="./index.php">Etusivulle</a>';
exit;

# Credit: https://www.cluemediator.com/remove-all-files-and-subfolders-from-a-folder-in-php

?>
