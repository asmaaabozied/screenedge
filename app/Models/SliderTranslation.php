<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Translations\SliderTranslation
 *
 * @property int $id
 * @property int $slider_id
 * @property string|null $name
 * @property string|null $description
 * @property string|null $meta_description
 * @property string|null $meta_keywords
 * @property string $locale
 * @method static \Illuminate\Database\Eloquent\Builder|SliderTranslation newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SliderTranslation newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SliderTranslation query()
 * @method static \Illuminate\Database\Eloquent\Builder|SliderTranslation whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SliderTranslation whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SliderTranslation whereLocale($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SliderTranslation whereMetaDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SliderTranslation whereMetaKeywords($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SliderTranslation whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SliderTranslation whereSliderId($value)
 * @mixin \Eloquent
 */
class SliderTranslation extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title',
        'description',

    ];

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;
}
