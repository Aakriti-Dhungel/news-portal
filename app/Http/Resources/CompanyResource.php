<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CompanyResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        // return parent::toArray($request);
        return [
            "id"=> $this->id,
            "company_name"=> $this->name,
            "phone"=> $this->phone,
            "tel"=> $this->tel,
            "email"=> $this->email,
            "logo"=> asset($this->logo),
            "facebook"=> $this->facebook,
            "instagram"=> $this->instagram,
        ];
    }
}
