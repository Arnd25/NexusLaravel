<?php

namespace App\DTOs;

use App\Http\Requests\Admin\CategoryStoreRequest;
use App\Http\Requests\Admin\CategoryUpdateRequest;

readonly class CategoryDTO
{
    public function __construct(
        public string $name,
        public bool $is_active,
    ) {}

    public static function fromRequest(CategoryStoreRequest|CategoryUpdateRequest $request) {
        return new self(
            name: $request->validated('name'),
            is_active: $request->boolean('is_active'),
        );
    }

    public function toArray() {
        return [
            'name' => $this->name,
            'is_active' => $this->is_active,
        ];
    }
}
