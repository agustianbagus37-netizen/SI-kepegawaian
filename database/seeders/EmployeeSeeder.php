<?php

namespace Database\Seeders;

use App\Models\Department;
use App\Models\Employee;
use Illuminate\Database\Seeder;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $dept = Department::pluck('id', 'name');

        $data = [
            ['Andi Saputra',  'Teknologi Informasi', 'Backend Developer',  8000000, '2022-03-01'],
            ['Budi Santoso',  'Teknologi Informasi', 'Frontend Developer', 7500000, '2023-01-15'],
            ['Citra Lestari', 'Sumber Daya Manusia', 'HR Specialist',      6500000, '2021-07-10'],
            ['Dian Permata',  'Keuangan',            'Akuntan',            7000000, '2020-11-20'],
            ['Eko Prasetyo',  'Sumber Daya Manusia', 'Recruiter',          6000000, '2024-02-05'],
        ];

        foreach ($data as [$name, $department, $position, $salary, $joined]) {
            Employee::create([
                'department_id' => $dept[$department],
                'name'          => $name,
                'position'      => $position,
                'salary'        => $salary,
                'joined_at'     => $joined,
            ]);
        }
    }
}
