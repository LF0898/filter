<?php
namespace app\models;

use yii\base\Model;

class UploadForm extends Model
{
    public $image;
    public function rules()
    {
        return [
            [['image'], 'file', 'skipOnEmpty' => false, 'extensions' => 'jpg, png, gif'],
        ];
    }
    public function upload()
    {
        if ($this->validate()) {
            $this->image->saveAs('../static/images/' . $this->image->baseName . '.' .
                $this->image->extension);
            return true;
        } else {
            return false;
        }
    }
}
