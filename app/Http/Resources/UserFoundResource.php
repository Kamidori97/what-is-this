<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Src\Domains\User\Entities\User;

class UserFoundResource extends JsonResource
{
    protected User $user;

    public function __construct($user)
    {
        $this->user = $user;
    }

    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'name' => $this->user->getName(),
            'email' => $this->user->getEmail()
        ];
    }
}
