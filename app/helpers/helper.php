<?php

function uploadImage($input)
{
    $targetDir = "../public/uploads/";
    $fileName = time() . "_" . $_FILES[$input]["name"];
    $targetFile = $targetDir . $fileName;

    move_uploaded_file($_FILES[$input]["tmp_name"], $targetFile);

    return $fileName;
}
