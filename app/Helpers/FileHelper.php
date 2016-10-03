<?php
namespace App\Helpers;
class FileHelper
{

	public static function getFiles($path, $recursive = false)
    {
        $out = [];
        $results = scandir($path);
        foreach ($results as $result) {
            if ($result === '.' or $result === '..') continue;
            $filename = $path . '/' . $result;
            if ($recursive && is_dir($filename)) {
                $out = array_merge($out, $this->getModels($filename));
            }else{
                $out[] = str_replace(rtrim($path, '/').'/', '', substr($filename, 0, -4));
            }
        }
        return $out;
    }

}