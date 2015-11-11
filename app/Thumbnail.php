<?php
namespace App;

use Image;

class Thumbnail
{
    public function make($src, $desintation)
    {
        Image::make($src)
            ->fit(200)
            ->save($desintation);
    }
}
