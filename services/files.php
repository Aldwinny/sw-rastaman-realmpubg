<?php
class Files
{

    static function load($depth, $filename)
    {
        $dir = Files::getUploadLink($depth);

        if (!Files::exists($depth, $filename)) {
            return null;
        } else {
            if (str_starts_with("$filename", "/uploads/")) {
                return $dir . $filename;
            } else if (str_starts_with("$filename", "/assets/items/")) {
                return $dir . $filename;
            } else {
                return $dir . '/uploads/' . $filename;
            }
        }

        // Prepares the link and then checks the file if it exists.
    }

    static function exists($depth, $filename)
    {
        $dir = Files::getUploadLink($depth);

        if (str_starts_with("$filename", "/uploads/")) {
            return file_exists($dir . $filename);
        } else if (str_starts_with("$filename", "/assets/items/")) {
            return $dir . $filename;
        } else {
            return file_exists($dir . '/uploads/' . $filename);
        }
    }

    static function getUploadLink($depth)
    {
        $dir = ".";

        for ($i = 0; $i < $depth; $i++) {
            $dir = $dir . ".";
        }

        return $dir;
    }
}