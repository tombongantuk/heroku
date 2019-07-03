<?php

namespace App\Imports;

use App\User;
Use App\Role;
use Maatwebsite\Excel\Row;
use Maatwebsite\Excel\Concerns\OnEachRow;

class UsersImport implements onEachRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    // public function model(array $row)
    // {
    //     return new User([
    //         //
    //     ]);
    // }

    public function onRow(Row $row)
    {
        $rowIndex = $row->getIndex();
        $row      = $row->toArray();
        
        $user = User::Create([
            'name' => $row[0],
            'email'=> $row[1],
            'password'=>Hash::make('secret')
        ]);   
        $user->roles()->attach(Role::where('name','employee')->first());
    }
}
