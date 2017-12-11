<?php

namespace App\Travesuras\Entities;

use Illuminate\Database\Eloquent\Model;

class ImageGallery extends Model
{

    protected $table = 'fotos';

    protected $fillable = [
        'id_usuario',
        'title',
        'image',
        'id_usuario'];
}
//http://itsolutionstuff.com/post/laravel-5-image-gallery-crud-example-from-scratchexample.html