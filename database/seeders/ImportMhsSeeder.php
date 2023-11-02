<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\LazyCollection;

class ImportMhsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        DB::disableQueryLog();

        LazyCollection::make(function(){
            $handle = fopen(public_path('storage/ImportDataMhs/data.csv'), 'r');
            while(($line = fgetcsv($handle, 4096)) !== false){
                $dataString = implode('; ', $line);
                $row =  explode(';', $dataString);
                yield $row;
            }

            fclose($handle);
        })

        ->skip(1)
        ->chunk(1000)
        ->each(function(LazyCollection $chunk){
            $records = $chunk->map(function($row){
                return [
                    'email'=>$row[1],
                    'password'=>Hash::make($row[2]),
                    'role'=>$row[3],
                    'nim'=>$row[4],
                    'nama'=>$row[5],
                    'status'=>$row[6],
                    'departemen'=>$row[7],
                    'fakultas'=>$row[8],
                    'angkatan'=>$row[9],
                    'jalur_masuk'=>$row[10],
                    'provinsi'=>$row[11],
                    'kabupaten'=>$row[12],
                    'alamat'=>$row[13],
                    'foto'=>$row[14],
                    'dsn_id'=>$row[15],
                ];
            })->toArray();

            DB::table('mahasiswas')->insert($records);
        });
    }
}
