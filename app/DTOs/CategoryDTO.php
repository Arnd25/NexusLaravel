<?php

namespace App\DTOs;

use App\Http\Requests\Admin\CategoryStoreRequest;

readonly class CategoryDTO
{
    public function __construct(
        public string $name,
        public bool $is_active,
    )
    {}

    public static function fromRequest(CategoryStoreRequest $request)
    {
        return new self(
            name: $request->validated('name'),
            is_active: $request->boolean('is_active'),
        );
    }

    public function toArray()
    {
        return [
            'name' => $this->name,
            'is_active' => $this->is_active,
        ];
    }
}
