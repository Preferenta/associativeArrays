<?php
function getFileInfo($filepath) 
{
    $pathParts = explode('/', $filepath);
    $fileName = $pathParts[array_key_last($pathParts)];

    $nameParts = explode('.', $fileName);
    $extension = $nameParts[array_key_last($nameParts)];

    $info = [
        'filename' = $fileName,
        'extension' = $extension
    ];

    return $info;

   if ($extension) {
    $info['extension'] = $extension;
}
}
