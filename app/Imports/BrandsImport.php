// app/Imports/ExhibitorsImport.php

namespace App\Imports;

use App\Models\Brand;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class ExhibitorsImport implements ToModel, WithHeadingRow
{
    public function model(array $row)
    {
        return Brand::updateOrCreate(
            ['brand_name' => $row['exhibitor']],  // Assuming 'name' is a column in your CSV
            [
                'industry' => $row['industry'],  // Add other fields here
                'location' => $row['location'],
                // Add other fields as needed
            ]
        );
    }
}
