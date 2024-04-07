<?php

// Define the folder you want to browse
$folder = 'uploads/';

// Get the list of files in the folder
$files = scandir($folder);

// Remove . and .. from the list
$files = array_diff($files, array('.', '..'));

// Display the files as links
echo "<h2>Files in $folder:</h2>";
echo "<ul>";
foreach ($files as $file) {
    echo "<li><a href='$folder$file'>$file</a></li>";
}
echo "</ul>";

?>
