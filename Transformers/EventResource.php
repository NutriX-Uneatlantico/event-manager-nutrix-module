<?php

namespace Modules\EventManager\Transformers;

use Illuminate\Http\Resources\Json\JsonResource;

class EventResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'document_id' => $this->document_id,
            'document_type' => $this->document_type,
            'event_type' => $this->event_type,
            'username' => $this->username,
            'data' => $this->data,
            'date' => $this->created_at->format("d-m-Y H:i")
        ];
    }
}
