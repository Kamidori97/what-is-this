<?php

namespace App\Adapters\ViewModels;

use Illuminate\Http\Resources\Json\JsonResource;
use Src\Domains\User\ViewModels\ViewModel;

class JsonResourceViewModel implements ViewModel
{
    private JsonResource $resource;

    public function __construct(JsonResource $resource)
    {
        $this->resource = $resource;
    }

    public function getResource(): JsonResource
    {
        return $this->resource;
    }
}
