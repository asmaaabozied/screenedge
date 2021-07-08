<?php

namespace App\Models;

use App\Http\Resources\MediaResource;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Spatie\MediaLibrary\HasMedia;
use AhmedAliraqi\LaravelMediaUploader\Entities\Concerns\HasUploader;
use Astrotomic\Translatable\Translatable;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;

class Company extends Model implements HasMedia
{
    use InteractsWithMedia, HasUploader;

    use Translatable;

    protected $table = "companies";

    protected $fillable = ['name_en','name_ar'];
    public $translatedAttributes = [
        'name',
        'description',

    ];


    public function getMediaResource($collection = 'default')
    {
        return collect(
            MediaResource::collection(
                $this->getMedia($collection)
            )->jsonSerialize()
        );
    }
}
