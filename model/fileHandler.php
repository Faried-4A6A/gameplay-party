<?php

/**
 * Class FileHandler behandeld de bestanden
 */
class FileHandler
{
    /**
     * @param string $file is het creeren van een bestand
     * @param string $path is de path van waar het bestand wordt gecreeerd
     */
    public function CreateFile($file, $path)
    {
        move_uploaded_file($file, $path);
    }

    /**
     * @param string $file is een bestand om te checken als het bestand
     * @return bool geeft het bestand terug
     */
    public function CheckFileExistence($file)
    {
        return file_exists($file);

    }

    /**
     * @param string $file is een bestand
     * @return bool it geeft de extensie van een afbeelding
     */
    public function CheckImageType($file)
    {
        return ($file !== "jpg" || $file !== "png" || $file !== "jpeg");
    }

    /**
     * @param string $file is een bestand
     * @param string $size is de grootte van een bestand
     * @return bool geeft een bestand terug met een vereiste grootte
     */
    public function CheckFileSize($file, $size)
    {
        return ($file > $size);
    }

    /**
     * @param string $file verwijderd het bestand
     */
    public function DeleteFile($file)
    {
        unlink($file);
    }

}
