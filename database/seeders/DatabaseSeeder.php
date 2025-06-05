<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        AddAdminUserSeeder::run();

        // Seeder data dummy Master Kartu Keluarga
        if (DB::table('kartu_keluargas')->count() == 0) {
            DB::table('kartu_keluargas')->insert([
                [
                    'no_kk' => '3174091234567890',
                    'kepala_keluarga' => 'Budi Santoso',
                    'alamat' => 'Jl. Melati No. 10',
                    'rt_rw' => '01/02',
                    'kelurahan' => 'Sukamaju',
                    'kecamatan' => 'Cempaka Putih',
                    'kabupaten_kota' => 'Jakarta Pusat',
                    'provinsi' => 'DKI Jakarta',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'no_kk' => '3174090987654321',
                    'kepala_keluarga' => 'Siti Aminah',
                    'alamat' => 'Jl. Kenanga No. 5',
                    'rt_rw' => '03/04',
                    'kelurahan' => 'Sukamaju',
                    'kecamatan' => 'Cempaka Putih',
                    'kabupaten_kota' => 'Jakarta Pusat',
                    'provinsi' => 'DKI Jakarta',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'no_kk' => '3174091122334455',
                    'kepala_keluarga' => 'Andi Wijaya',
                    'alamat' => 'Jl. Mawar No. 7',
                    'rt_rw' => '05/06',
                    'kelurahan' => 'Sukamaju',
                    'kecamatan' => 'Cempaka Putih',
                    'kabupaten_kota' => 'Jakarta Pusat',
                    'provinsi' => 'DKI Jakarta',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'no_kk' => '3174095566778899',
                    'kepala_keluarga' => 'Dewi Lestari',
                    'alamat' => 'Jl. Anggrek No. 12',
                    'rt_rw' => '07/08',
                    'kelurahan' => 'Sukamaju',
                    'kecamatan' => 'Cempaka Putih',
                    'kabupaten_kota' => 'Jakarta Pusat',
                    'provinsi' => 'DKI Jakarta',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'no_kk' => '3174096677889900',
                    'kepala_keluarga' => 'Eko Prasetyo',
                    'alamat' => 'Jl. Dahlia No. 3',
                    'rt_rw' => '09/10',
                    'kelurahan' => 'Sukamaju',
                    'kecamatan' => 'Cempaka Putih',
                    'kabupaten_kota' => 'Jakarta Pusat',
                    'provinsi' => 'DKI Jakarta',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'no_kk' => '3174097788990011',
                    'kepala_keluarga' => 'Fajar Hidayat',
                    'alamat' => 'Jl. Flamboyan No. 8',
                    'rt_rw' => '11/12',
                    'kelurahan' => 'Sukamaju',
                    'kecamatan' => 'Cempaka Putih',
                    'kabupaten_kota' => 'Jakarta Pusat',
                    'provinsi' => 'DKI Jakarta',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'no_kk' => '3174098899001122',
                    'kepala_keluarga' => 'Gita Permata',
                    'alamat' => 'Jl. Cempaka No. 15',
                    'rt_rw' => '13/14',
                    'kelurahan' => 'Sukamaju',
                    'kecamatan' => 'Cempaka Putih',
                    'kabupaten_kota' => 'Jakarta Pusat',
                    'provinsi' => 'DKI Jakarta',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'no_kk' => '3174099900112233',
                    'kepala_keluarga' => 'Hendra Saputra',
                    'alamat' => 'Jl. Teratai No. 20',
                    'rt_rw' => '15/16',
                    'kelurahan' => 'Sukamaju',
                    'kecamatan' => 'Cempaka Putih',
                    'kabupaten_kota' => 'Jakarta Pusat',
                    'provinsi' => 'DKI Jakarta',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'no_kk' => '3174090011223344',
                    'kepala_keluarga' => 'Ika Sari',
                    'alamat' => 'Jl. Kenanga No. 22',
                    'rt_rw' => '17/18',
                    'kelurahan' => 'Sukamaju',
                    'kecamatan' => 'Cempaka Putih',
                    'kabupaten_kota' => 'Jakarta Pusat',
                    'provinsi' => 'DKI Jakarta',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'no_kk' => '3174092233445566',
                    'kepala_keluarga' => 'Joko Susilo',
                    'alamat' => 'Jl. Mawar No. 30',
                    'rt_rw' => '19/20',
                    'kelurahan' => 'Sukamaju',
                    'kecamatan' => 'Cempaka Putih',
                    'kabupaten_kota' => 'Jakarta Pusat',
                    'provinsi' => 'DKI Jakarta',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
            ]);
        }

        // Seeder data dummy Master Data Penduduk
        if (DB::table('penduduks')->count() == 0) {
            DB::table('penduduks')->insert([
                [
                    'nik' => '3174091234560001',
                    'nama' => 'Budi Santoso',
                    'jenis_kelamin' => 'L',
                    'tempat_lahir' => 'Jakarta',
                    'tanggal_lahir' => '1980-01-01',
                    'agama' => 'Islam',
                    'pendidikan' => 'SMA',
                    'pekerjaan' => 'Karyawan Swasta',
                    'alamat' => 'Jl. Melati No. 10',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'nik' => '3174091234560002',
                    'nama' => 'Siti Aminah',
                    'jenis_kelamin' => 'P',
                    'tempat_lahir' => 'Jakarta',
                    'tanggal_lahir' => '1982-02-02',
                    'agama' => 'Islam',
                    'pendidikan' => 'S1',
                    'pekerjaan' => 'Guru',
                    'alamat' => 'Jl. Kenanga No. 5',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'nik' => '3174091234560003',
                    'nama' => 'Andi Wijaya',
                    'jenis_kelamin' => 'L',
                    'tempat_lahir' => 'Bandung',
                    'tanggal_lahir' => '1990-03-03',
                    'agama' => 'Kristen',
                    'pendidikan' => 'SMP',
                    'pekerjaan' => 'Pelajar',
                    'alamat' => 'Jl. Mawar No. 7',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'nik' => '3174091234560004',
                    'nama' => 'Dewi Lestari',
                    'jenis_kelamin' => 'P',
                    'tempat_lahir' => 'Surabaya',
                    'tanggal_lahir' => '1985-04-04',
                    'agama' => 'Katolik',
                    'pendidikan' => 'S2',
                    'pekerjaan' => 'Dosen',
                    'alamat' => 'Jl. Anggrek No. 12',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'nik' => '3174091234560005',
                    'nama' => 'Eko Prasetyo',
                    'jenis_kelamin' => 'L',
                    'tempat_lahir' => 'Jakarta',
                    'tanggal_lahir' => '1978-05-05',
                    'agama' => 'Islam',
                    'pendidikan' => 'SD',
                    'pekerjaan' => 'Wiraswasta',
                    'alamat' => 'Jl. Dahlia No. 3',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'nik' => '3174091234560006',
                    'nama' => 'Fajar Hidayat',
                    'jenis_kelamin' => 'L',
                    'tempat_lahir' => 'Bekasi',
                    'tanggal_lahir' => '1995-06-06',
                    'agama' => 'Islam',
                    'pendidikan' => 'SMA',
                    'pekerjaan' => 'Mahasiswa',
                    'alamat' => 'Jl. Flamboyan No. 8',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'nik' => '3174091234560007',
                    'nama' => 'Gita Permata',
                    'jenis_kelamin' => 'P',
                    'tempat_lahir' => 'Depok',
                    'tanggal_lahir' => '1992-07-07',
                    'agama' => 'Budha',
                    'pendidikan' => 'D3',
                    'pekerjaan' => 'Perawat',
                    'alamat' => 'Jl. Cempaka No. 15',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'nik' => '3174091234560008',
                    'nama' => 'Hendra Saputra',
                    'jenis_kelamin' => 'L',
                    'tempat_lahir' => 'Bogor',
                    'tanggal_lahir' => '1988-08-08',
                    'agama' => 'Islam',
                    'pendidikan' => 'S1',
                    'pekerjaan' => 'PNS',
                    'alamat' => 'Jl. Teratai No. 20',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'nik' => '3174091234560009',
                    'nama' => 'Ika Sari',
                    'jenis_kelamin' => 'P',
                    'tempat_lahir' => 'Tangerang',
                    'tanggal_lahir' => '1993-09-09',
                    'agama' => 'Hindu',
                    'pendidikan' => 'SMA',
                    'pekerjaan' => 'Ibu Rumah Tangga',
                    'alamat' => 'Jl. Kenanga No. 22',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'nik' => '3174091234560010',
                    'nama' => 'Joko Susilo',
                    'jenis_kelamin' => 'L',
                    'tempat_lahir' => 'Jakarta',
                    'tanggal_lahir' => '1975-10-10',
                    'agama' => 'Islam',
                    'pendidikan' => 'S3',
                    'pekerjaan' => 'Peneliti',
                    'alamat' => 'Jl. Mawar No. 30',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
            ]);
        }

        // Seeder data dummy Master Data Pegawai
        if (DB::table('pegawais')->count() == 0) {
            DB::table('pegawais')->insert([
                [
                    'nip' => '1987654321',
                    'nama' => 'Rina Sari',
                    'jabatan' => 'Sekretaris',
                    'alamat' => 'Jl. Anggrek No. 5',
                    'no_telepon' => '08123456789',
                    'email' => 'rina@kelurahan.local',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'nip' => '1987654322',
                    'nama' => 'Budi Santoso',
                    'jabatan' => 'Staf Umum',
                    'alamat' => 'Jl. Mawar No. 7',
                    'no_telepon' => '08129876543',
                    'email' => 'budi@kelurahan.local',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'nip' => '1987654323',
                    'nama' => 'Siti Aminah',
                    'jabatan' => 'Bendahara',
                    'alamat' => 'Jl. Kenanga No. 2',
                    'no_telepon' => '08123456780',
                    'email' => 'siti@kelurahan.local',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'nip' => '1987654324',
                    'nama' => 'Andi Wijaya',
                    'jabatan' => 'Kasi Pelayanan',
                    'alamat' => 'Jl. Melati No. 10',
                    'no_telepon' => '08123456781',
                    'email' => 'andi@kelurahan.local',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'nip' => '1987654325',
                    'nama' => 'Dewi Lestari',
                    'jabatan' => 'Kasi Pemerintahan',
                    'alamat' => 'Jl. Dahlia No. 3',
                    'no_telepon' => '08123456782',
                    'email' => 'dewi@kelurahan.local',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'nip' => '1987654326',
                    'nama' => 'Eko Prasetyo',
                    'jabatan' => 'Kasi Kesejahteraan',
                    'alamat' => 'Jl. Flamboyan No. 8',
                    'no_telepon' => '08123456783',
                    'email' => 'eko@kelurahan.local',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'nip' => '1987654327',
                    'nama' => 'Fajar Hidayat',
                    'jabatan' => 'Staf Pelayanan',
                    'alamat' => 'Jl. Cempaka No. 15',
                    'no_telepon' => '08123456784',
                    'email' => 'fajar@kelurahan.local',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'nip' => '1987654328',
                    'nama' => 'Gita Permata',
                    'jabatan' => 'Staf Umum',
                    'alamat' => 'Jl. Teratai No. 20',
                    'no_telepon' => '08123456785',
                    'email' => 'gita@kelurahan.local',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'nip' => '1987654329',
                    'nama' => 'Hendra Saputra',
                    'jabatan' => 'Staf Pemerintahan',
                    'alamat' => 'Jl. Kenanga No. 22',
                    'no_telepon' => '08123456786',
                    'email' => 'hendra@kelurahan.local',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'nip' => '1987654330',
                    'nama' => 'Ika Sari',
                    'jabatan' => 'Staf Kesejahteraan',
                    'alamat' => 'Jl. Mawar No. 30',
                    'no_telepon' => '08123456787',
                    'email' => 'ika@kelurahan.local',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
            ]);
        }
    }
}

class AddAdminUserSeeder
{
    public static function run()
    {
        if (!DB::table('users')->where('email', 'admin@kelurahan.local')->exists()) {
            DB::table('users')->insert([
                'name' => 'Admin',
                'email' => 'admin@kelurahan.local',
                'password' => Hash::make('admin123'),
                'role' => 'admin',
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
