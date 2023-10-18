<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\ResourceCollection;

class v1InvoiceCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @return array<int|string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id'=>$this->id,
            'customerId'=>$this->customer_id,
            'amount'=>$this->amount,
            'status'=>$this->status,
            'billedDate'=>$this->billed_date,
            'paidDate'=>$this->paid_date,
        ];
    }
}
