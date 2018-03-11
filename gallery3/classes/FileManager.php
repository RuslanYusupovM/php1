<?php

class FileManager
{

    public function getFilesFromFolder($path)
    {
        $files = scandir($path);

        foreach ($files as $file) {
            if ('.' !== $file && '..' !== $file) {
                $images[] = [
                    'name' => $this->getFileName($file),
                    'source' => $file
                ];
            }
        }

        return isset($images) ? $images : null;
    }


    public function getFileName($file)
    {
        return mb_strimwidth($file, 0, -4);
    }

}