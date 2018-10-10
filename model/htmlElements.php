<?php require_once 'dataLogic.php';
class HtmlElements
{
    /**
     * @param bool $dataProduct is data from a product
     * @param string $data is array
     * @return string it returns a form for creating a product
     */
    public function createForm($dataProduct = FALSE, $data)
    {
        $form = "<form method='post' enctype='multipart/form-data'>";
        foreach ($data as $key => $value) {
            if ($value['Extra'] != "auto_increment") {

                $a = preg_split("/\W+/", $value['Type']);
                $number = "";
                $type = "text";

                switch ($a[0]) {
                    case "int":
                    case "float":
                    case "double":
                    case "decimal":
                        $type = "number";
                        if (isset($a[1]) && $a[0] !== "decimal") {
                            $number = $a[1];
                        }
                        break;
                    default:
                        if (isset($a[1])) {
                            $number = $a[1];
                        }
                        $type = "text";
                }
                $form .= "<label class='form-control-label mt-2'>" . ucfirst(str_replace("_", " ", $value['Field'])) . "</label>";
                $form .= "<input class='form-control' type='$type' required max='$number' name='$value[Field]' value='" . ($dataProduct ? $dataProduct[$value['Field']] : "") . "'>";
            }
        }
        $form .= "<label class='form-control-label'>Afbeelding</label><input  class='form-control-input col-md-12' multiple type='file'  name='upload[]' accept='image/png,image/gif,image/jpeg'>";
        $form .= "<input class='btn btn-primary my-4' type='submit' name='send'>";
        $form .= "</form>";

        return $form;
    }
}
?>
