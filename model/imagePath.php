<?php require_once 'DataHandler.php';
require_once 'FileHandler.php';
require_once 'ProductsLogic.php';

/*
 * Created by PhpStorm.
 * User: kaani
 * Date: 10-6-2018
 * Time: 23:10
 */

class ImageLogic
{
    public function __construct()
    {
        $this->fileHandler = new FileHandler();
        $this->DataHandler = new DataHandler("mysql", "localhost", "multiversum", "multiversum", "Wachtwoord1");
    }

    /**
     * @param string $image it gives the value from an image
     * @param string $directory it gives the location
     * @return array it returns the path
     */
    public function CreateImage($image, $directory)
    {
        $path = [];
        if (gettype($image['name']) == "array") {
            for ($i = 0; $i < sizeof($image['name']); $i++) {
                array_push($path, $this->fileUpload($image['name'][$i], $image['tmp_name'][$i], $directory));
            }
        } else {
            array_push($path, $this->fileUpload($image['name'], $image['tmp_name'], $directory));
        }
        return $path;
    }

    /**
     * @param string $fileName it gives the name of a file
     * @param string $tmpName it gives a temporary file for upload
     * @param string $directory it gives a location where the file will be uploaded
     * @return string it returns the target file
     */
    public function fileUpload($fileName, $tmpName, $directory)
    {
        $target_dir = $directory;
        $target_file = $target_dir . "/" . basename($fileName);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

        $size = $this->fileHandler->CheckFileSize($tmpName, 60000);

        $size !== false ? $uploadOk = 1 : $uploadOk = 0;
        $type = $this->fileHandler->CheckImageType($imageFileType);
        $type !== false ? $uploadOk = 1 : $uploadOk = 0;

        if ($uploadOk = 1) {
            $this->fileHandler->CreateFile($tmpName, $target_file);
        }
        return $target_file;
    }

    /**
     * @param string $path it is the path from a file
     * @param string $ean it is the ean code from a product
     * @throws Exception
     */
    public function createProductImage($path, $ean)
    {
        try {
            $this->DataHandler->CreateData("INSERT INTO image (path, EAN_product) VALUES ('$path', '$ean')");
        } catch (Exeption $e) {
            throw $e;
        }
    }

    /**
     * @param string $file it deletes the file
     */
    public function deleteImage($file)
    {
       foreach ($file as $key => $path) {
           $this->fileHandler->DeleteFile($path['path']);
       }
    }
}
