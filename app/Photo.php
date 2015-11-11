<?php

namespace App;

use Image;
use Illuminate\Database\Eloquent\Model;
use Symfony\Component\HttpFoundation\File\UploadedFile;

class Photo extends Model
{
    protected $table = "flyer_photos";
    
    protected $fillable = ['path', 'name', 'thumbnail_path'];
    
    protected $baseDir = 'images/flyers';

    protected $file;

    public function flyer()
    {
        return $this->belongsTo('App\Flyer');
    }

    protected function setNameAttribute($name)
    {
        $this->attributes['name'] = $name;
        $this->path = $this->baseDir() . '/' . $name;
        $this->thumbnail_path = $this->baseDir() . '/tn-' . $name;
    }

    public function baseDir()
    {
        return 'images/photos';
    }
  
}
