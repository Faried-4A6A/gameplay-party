<?php

/**
 * Class FileHandler handle the files
 */
class FileHandler
{
    /**
     * @param string $file is just an file for creating
     * @param string $path is the path from where the file is moving for creating
     */
    public function CreateFile($file, $path)
    {
        move_uploaded_file($file, $path);
    }

    /**
     * @param string $file is an file for checking if it exist
     * @return bool it returns the file
     */
    public function CheckFileExistence($file)
    {
        return file_exists($file);

    }

    /**
     * @param string $file is an file
     * @return bool it returns the extension from an image
     */
    public function CheckImageType($file)
    {
        return ($file !== "jpg" || $file !== "png" || $file !== "jpeg");
    }

    /**
     * @param string $file is an file
     * @param string $size is the size from a file
     * @return bool returns the file with a required size
     */
    public function CheckFileSize($file, $size)
    {
        return ($file > $size);
    }

    /**
     * @param string $file deletes the file
     */
    public function DeleteFile($file)
    {
        unlink($file);
    }

}
