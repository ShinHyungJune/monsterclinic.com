<?php

namespace App\Http\Resources;

use Carbon\Carbon;
use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            "id" => $this->id,
            "admin" => $this->admin,

            "img" => $this->img ? $this->img : "",
            "name" => $this->name,
            "contact" => $this->contact,

            "agree_ad" => $this->agree_ad,
            "point" => $this->point,

            "owner" => $this->owner,
            "bank" => $this->bank,
            "account" => $this->account,

            "recommend_contact" => $this->recommend_contact,
            "birth" => $this->birth,
            "marriage" => $this->marriage,
            "men" => $this->men,
            "location" => $this->location,

            "created_at" => Carbon::make($this->created_at)->format("Y-m-d H:i"),
            "updated_at" => Carbon::make($this->updated_at)->format("Y-m-d H:i")
        ];
    }
}
