<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Intervention\Image\ImageManagerStatic as Image;
// use kornrunner\Blurhash\Blurhash;
use Bepsvpt\Blurhash\BlurHash;

class FaqsResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */

    public function toArray($request)
    {
        $file  = 'upload/D-bay-newmobile.jpg';
        BlurHash::encode($file);
    }
}

