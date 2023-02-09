<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class DecodedVINResource extends JsonResource
{


    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {

        return  [
            'Value' => $this->Value,
            'ValueId' => $this->AttributeId,
            'Variable' => $this->Variable,
            'VariableId' => $this->ElementId,
        ];

    }

}
