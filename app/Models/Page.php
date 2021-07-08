<?php

namespace App\Models;
use App\Http\Resources\MediaResource;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Spatie\MediaLibrary\HasMedia;
use AhmedAliraqi\LaravelMediaUploader\Entities\Concerns\HasUploader;
use Illuminate\Database\Eloquent\Model;

class Page extends Model implements HasMedia
{
    use InteractsWithMedia, HasUploader;
   protected $table="pages";

   protected $guarded=[];

    public function getTitleAttribute() {
        return ( app()->getLocale() === 'ar') ? $this->title_ar : $this->title_en;
    }


    public function getShortDescriptionAttribute() {
        return ( app()->getLocale() === 'ar') ? $this->short_description_ar : $this->short_description_en;
    }

    public function getMediaResource($collection = 'default')
    {
        return collect(
            MediaResource::collection(
                $this->getMedia($collection)
            )->jsonSerialize()
        );
    }

}
