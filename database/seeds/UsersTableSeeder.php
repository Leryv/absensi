<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // ketua
        $ketua = factory(User::class)->create([
            'nisn'      => '199312102018081001',
            'name'     => 'Ketua',
            'email'    => 'ketua@albahri.sch.id',
            'email_verified_at' => now(),
            'password' => bcrypt('absensi'),
        ]);

        $ketua->assignRole('admin');

        $this->command->info('>_ Here is your admin details to login:');
        $this->command->warn($ketua->email);
        $this->command->warn('Password is "absensi"');

        // walikelas
        $walikelas = factory(User::class)->create([
            'nisn'      => '199312102018081002',
            'name'     => 'Wali Kelas',
            'email'    => 'walikelas@albahri.sch.id',
            'email_verified_at' => now(),
            'password' => bcrypt('absensi'),
        ]);

        $walikelas->assignRole('walikelas');

        $this->command->info('>_ Here is your wali kelas details to login:');
        $this->command->warn($walikelas->email);
        $this->command->warn('Password is "absensi"');

        // siswa
        $siswa = factory(User::class)->create([
            'nisn'      => '199312102018081004',
            'name'     => 'Siswa',
            'email'    => 'siswa@albahri.sch.id',
            'email_verified_at' => now(),
            'password' => bcrypt('absensi'),
        ]);

        $siswa->assignRole('siswa');

        $this->command->info('>_ Here is your siswa details to login:');
        $this->command->warn($siswa->email);
        $this->command->warn('Password is "absensi"');

        // bersihkan cache
        $this->command->call('cache:clear');
    }
}
