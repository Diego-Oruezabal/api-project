<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\Storage;

class PostResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this-> id,
            'title' => $this-> title,
            'slug' => $this-> slug,
            'excerpt' => $this-> excerpt,
            'body' => $this-> body,
            'image' => $this->image_path ? Storage::url($this->image_path) : 'https://thumbs.dreamstime.com/b/no-image-available-icon-flat-vector-no-image-available-icon-flat-vector-illustration-132482953.jpg',
            'is_published' => $this-> is_published,
            'published_at' => $this-> published_at,
            'user' => UserResource::make($this->whenLoaded('user')),
            'category' => CategoryResource::make($this-> whenLoaded('category')),
            'created_at' => $this-> created_at,
            'updated_at' => $this-> updated_at,
        ];
    }
}
