<?php

namespace App\Models;

use App\Http\Resources\MediaResource;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Spatie\MediaLibrary\HasMedia;
use AhmedAliraqi\LaravelMediaUploader\Entities\Concerns\HasUploader;

use Astrotomic\Translatable\Translatable;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;

class Slider extends Model implements HasMedia ,TranslatableContract
{
    use InteractsWithMedia, HasUploader;

    use Translatable;

    protected $table = "sliders";

    protected $guarded = [];
    public $translatedAttributes = [
        'title',
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
