<?php 


$img = $_POST['image_data'];
// clean up
$img = str_replace('data:image/png;base64,', '', $img);
$img = str_replace(' ', '+', $img);
$fileData = base64_decode($img);

// saving
$fileName = 'photo.png';
file_put_contents($fileName, $fileData);

echo $fileName;