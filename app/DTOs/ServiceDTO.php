<?php

namespace App\DTOs;

use App\Http\Requests\Admin\ServiceStoreRequest;

readonly class ServiceDTO
{
    public function __construct(
        public string $title,
        public string $description,
        public int $category_id,
        public array $tags,
        public array $images,
        public bool $is_active
    )
    {}


    public static function fromRequest(ServiceStoreRequest $request)
    {
        $images = [];
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $file) {
                $images[] = $file->store('services', 'public');
            }
        }
        $tags = $request->validated('tags')
            ? array_values(array_filter(
                array_map('trim', explode(',', $request->validated('tags')))
                )
            )
            : []
        ;
        return new self(
            title: $request->validated('title'),
            description: $request->validated('description'),
            category_id: (int) $request->validated('category_id'),
            tags: $tags,
            images: $images,
            is_active: $request->boolean('is_active'),
        );
    }
    public function toArray() {
        return [
            'title' => $this->title,
            'description' => $this->description,
            'category_id' => $this->category_id,
            'tags' => $this->tags,
            'images' => $this->images,
            'is_active' => $this->is_active,
        ];
    }
}
