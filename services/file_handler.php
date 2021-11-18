<?php
class Files
{

    /**
     * @return boolean which represents whether the file has been saved correctly.
     */
    static function save($depth, $filename, $file)
    {
        $dir = Files::getUploadLink($depth);

        if (!Files::exists($depth, $filename)) {
            return false; // File already exists with same name, try to save with another name
        }
    }

    static function load($depth, $filename)
    {

        $dir = Files::getUploadLink($depth);

        if (!Files::exists($depth, $filename)) {
            return null;
        }

        // load file then return
    }

    static function exists($depth, $filename)
    {
        $dir = Files::getUploadLink($depth);

        return file_exists($dir . "/uploads/" . $filename);
    }

    static function getUploadLink($depth)
    {
        $dir = ".";

        for ($i = 0; $i < $depth; $i++) {
            $dir = str_replace(".", "..", $dir);
        }

        return $dir . "/uploads/";
    }
}
