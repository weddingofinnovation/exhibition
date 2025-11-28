<?php

namespace App\Imports;

use App\Models\Brand;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class BrandsImport implements ToModel, WithHeadingRow
{
    // public function model(array $row)
    // {
    //     // return new Brand([
    //     //     'brand_name' => $row['0'], 
    //     // ]);
        
    //     // return Brand::updateOrCreate(
    //     //     ['brand_name' => $row['exhibitor']],  // Assuming 'name' is a column in your CSV
    //     //     [
    //     //         'industry' => $row['industry'],  // Add other fields here
    //     //         'location' => $row['location'],
    //     //         // Add other fields as needed
    //     //     ]
    //     // );
    // }

    protected $event_id;

    public function __construct($event_id)
    {
        $this->event_id = $event_id;
    }

    public function model(array $row) 
    {
        $brand = Brand::firstOrCreate(
            ['brand' => $row['brand']],
            [
                'country'  => $row['country'] ?? null,
                'pavilion' => $row['pavilion'] ?? null
            ]
        );

        $exists = EventParticipant::where('event_id', $this->event_id)
            ->where('brand_id', $brand->id)->exists();

        if ($exists) return null; // Skip duplicate entry for this event

        return new EventParticipant([
            'event_id' => $this->event_id,
            'brand_id' => $brand->id,
            'stall_no' => $row['stall'] ?? null,
        ]);
    }
}
