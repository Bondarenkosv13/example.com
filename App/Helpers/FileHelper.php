<?php
namespace App\Helpers;

include_once dirname(__DIR__) . '/../Config/constant.php';
class FileHelper
{
    /**
     * @param $file - $_FILES['image']
     */
    public function upload($file)
    {
//        $id=SessionHelper::getUserId();
//        $pathImage = "/{$id}/" . time() . '_' . $file['name'];
//        $absolutePathImage = PATH_IMAGE . $pathImage;
//        $this->createFolder($id);
//
//        if(move_uploaded_file($file['tmp_name'], $absolutePathImage))
//        {
//            return $absolutePathImage;
//        }
//
//        return "";
    }

    public function remove($path)
    {
        if(file_exists($path))
        {
            unlink($path);
        }
    }

    protected function createFolder($id)
    {
        if(!file_exists(PATH_IMAGE . "/{$id}"))
        {
            mkdir(PATH_IMAGE . "/$id", 0755, true);
        }
    }
}