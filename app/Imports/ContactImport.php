<?php

namespace App\Imports;

use App\Models\Contact;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
class ContactImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row): Contact
    {
        return new Contact([
          'first_name' => $row['first_name'],
          'last_name' => $row['last_name'],
          'grade' => $row['grade'],
          'guardian' => $row['parentguardian'],
          'phone_number' => $row['phone']
          ]);
    }

    public function headingRow(): int
    {
        return 2;
    }
}
