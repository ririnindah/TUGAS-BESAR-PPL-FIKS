<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
// use Illuminate\Database\Seeder;
use Illuminate\Support\LazyCollection;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        \App\Models\operator::factory(20)->create();
        \App\Models\mahasiswa::factory(20)->create();
        \App\Models\dosenwali::factory(20)->create();
        \App\Models\departemen::factory(20)->create();
        \App\Models\semester::factory(10)->create();
        \App\Models\Irs::factory(10)->create();
        \App\Models\Skripsi::factory(10)->create();
        \App\Models\Pkl::factory(10)->create();
        \App\Models\Khs::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        DB::disableQueryLog();

        LazyCollection::make(function(){
            $handle = fopen(public_path('storage/ImportDataMhs/data.csv'), 'r');
            while(($line = fgetcsv($handle, 4096)) !== false){
                $dataString = implode('; ', $line);
                $row =  explode(';', $dataString);
                yield $row;
            }

            // $fp = fopen(public_path('storage/ImportDataMhs/7FnUE9YCbsf5WVJLElhqHoyepGHPt4rYbDCwBAOr.txt'), 'r');
            // while (($line = fgets($fp, 4096)) !== false) {
            //     list($email, $password, $role, $nim, $nama, $status, $departemen, $fakultas, $angkatan, $jalur_masuk, $provinsi, $kabupaten, $alamat, $foto, $dsn_id) = explode("\t", trim($line));
            //     $mhs[] = [$email, $password, $role, $nim, $nama, $status, $departemen, $fakultas, $angkatan, $jalur_masuk, $provinsi, $kabupaten, $alamat, $foto, $dsn_id];
            // }

            // dd($mhs);

            fclose($handle);
            // fclose($fp);
        })

        ->skip(1)
        ->chunk(1000)
        ->each(function(LazyCollection $chunk){
            $records = $chunk->map(function($row){
                return [
                    'email'=>$row[1],
                    'password'=>$row[2],
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
