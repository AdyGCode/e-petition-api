<?php

namespace Database\Seeders;

use App\Models\User;
use DateTimeZone;
use Exception;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Symfony\Component\Console\Helper\ProgressBar;
use Symfony\Component\Console\Output\ConsoleOutput;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     * @throws Exception
     */
    public function run(): void
    {

        $seedUsers = [
            [
                'id' => 1,
                'name' => "Ad Ministrator",
                'email' => "ad.ministrator@example.com",
                'email_verified_at' => "1970-01-01T00:00:01",
                'password' => "Password1",
                'created_at' => "1970-01-01T00:00:01",
                'timezone' => "Australia/Perth"
            ],
            [
                'id' => 10,
                'name' => "YOUR NAME",
                'email' => "GIVEN@example.com",
                'email_verified_at' => "1970-01-01T00:01:01",
                'password' => "Password1",
                'created_at' => "1970-01-01T00:00:01",
                'timezone' => "Australia/Perth"
            ],
            [
                'id' => 11,
                'name' => "Andy Manager",
                'email' => "andy.manager@example.com",
                'email_verified_at' => now(),
                'password' => "Password1",
                'created_at' => now(),
                'timezone' => "Australia/Perth"
            ],
            [
                'id' => 12,
                'name' => "Eileen Dover",
                'email' => "eileen@example.com",
                'email_verified_at' => now(),
                'password' => "Password1",
                'created_at' => now(),
                'timezone' => "Australia/Perth"
            ],
            [
                'name' => "Jacques d\'Carre",
                'email' => "jacques@example.com",
                'email_verified_at' => now(),
                'password' => "Password1",
                'created_at' => now(),
                'timezone' => "Europe/Paris"
            ],
            [
                'name' => "Russell Leaves",
                'email' => "russell@example.com",
                'email_verified_at' => now(),
                'password' => "Password1",
                'created_at' => now(),
                'timezone' => "Pacific/Pitcairn"
            ],
            [
                'name' => "Ivana Vinn",
                'email' => "ivanna@example.com",
                'email_verified_at' => now(),
                'password' => "Password1",
                'created_at' => now(),
                'timezone' => "Europe/Moscow"
            ],
            [
                'name' => "Win Doh",
                'email' => "win@example.com",
                'email_verified_at' => now(),
                'password' => "Password1",
                'created_at' => now(),
                'timezone' => "Europe/Sofia"
            ],
            [
                'name' => "Rusty Nails",
                'email' => "Rusty.Nails@example.com",
                'email_verified_at' => now(),
                'password' => "Password1",
                'created_at' => now(),
                'timezone' => ""
            ],
            [
                'name' => "Preston Cleaned",
                'email' => "Preston.Cleaned@example.com",
                'email_verified_at' => now(),
                'password' => "Password1",
                'created_at' => now(),
                'timezone' => ""
            ],
            [
                "name" => "Evan Keel",
                "email" => "Evan.Keel@example.com",
                'email_verified_at' => now(),
                'password' => "Password1",
                'created_at' => now(),
                'timezone' => "",
            ],
            [
                "name" => "Jo Kerr",
                "email" => "Jo.Kerr@example.com",
                'email_verified_at' => now(),
                'password' => "Password1",
                'created_at' => now(),
                'timezone' => "",
            ],
            [
                "name" => "Izzy Kidding",
                "email" => "Izzy.Kidding@example.com",
                'email_verified_at' => now(),
                'password' => "Password1",
                'created_at' => now(),
                'timezone' => "",
            ],
            [
                "name" => "Fay King",
                "email" => "Fay.King@example.com",
                'email_verified_at' => now(),
                'password' => "Password1",
                'created_at' => now(),
                'timezone' => "",
            ],
            [
                "name" => "Joe King",
                "email" => "Joe.King@example.com",
                'email_verified_at' => now(),
                'password' => "Password1",
                'created_at' => now(),
                'timezone' => "",
            ],
            [
                "name" => "Raney Schauer",
                "email" => "Raney.Schauer@example.com",
                'email_verified_at' => now(),
                'password' => "Password1",
                'created_at' => now(),
                'timezone' => "",
            ],
            [
                "name" => "June Schauer",
                "email" => "June.Schauer@example.com",
                'email_verified_at' => now(),
                'password' => "Password1",
                'created_at' => now(),
                'timezone' => "",
            ],
            [
                "name" => "April Schauer",
                "email" => "April.Schauer@example.com",
                'email_verified_at' => now(),
                'password' => "Password1",
                'created_at' => now(),
                'timezone' => "",
            ],
            [
                "name" => "Al K. Seltzer",
                "email" => "Al.K.Seltzer@example.com",
                'email_verified_at' => now(),
                'password' => "Password1",
                'created_at' => now(),
                'timezone' => "",
            ],
            [
                "name" => "Dee Sember",
                "email" => "Dee.Sember@example.com",
                'email_verified_at' => now(),
                'password' => "Password1",
                'created_at' => now(),
                'timezone' => "",
            ],
            [
                "name" => "Justin Tune",
                "email" => "Justin.Tune@example.com",
                'email_verified_at' => now(),
                'password' => "Password1",
                'created_at' => now(),
                'timezone' => "",
            ],
            [
                "name" => "Carrie A. Tune",
                "email" => "Carrie.A.Tune@example.com",
                'email_verified_at' => now(),
                'password' => "Password1",
                'created_at' => now(),
                'timezone' => "",
            ],
            [
                "name" => "Quinn Tuplets",
                "email" => "Quinn.Tuplets@example.com",
                'email_verified_at' => now(),
                'password' => "Password1",
                'created_at' => now(),
                'timezone' => "",
            ],
            [
                "name" => "Colin Allcars",
                "email" => "Colin.Allcars@example.com",
                'email_verified_at' => now(),
                'password' => "Password1",
                'created_at' => now(),
                'timezone' => "",
            ],
            [
                "name" => "Cary Baggs",
                "email" => "Cary.Baggs@example.com",
                'email_verified_at' => now(),
                'password' => "Password1",
                'created_at' => now(),
                'timezone' => "",
            ],
            [
                "name" => "Winnie Bago",
                "email" => "Winnie.Bago@example.com",
                'email_verified_at' => now(),
                'password' => "Password1",
                'created_at' => now(),
                'timezone' => "",
            ],
            [
                "name" => "Frank N. Beans",
                "email" => "Frank.N.Beans@example.com",
                'email_verified_at' => now(),
                'password' => "Password1",
                'created_at' => now(),
                'timezone' => "",
            ],
            [
                "name" => "Harry Beard",
                "email" => "Harry.Beard@example.com",
                'email_verified_at' => now(),
                'password' => "Password1",
                'created_at' => now(),
                'timezone' => "",
            ],
            [
                "name" => "Al B. Zienya",
                "email" => "Al.B.Zienya@example.com",
                'email_verified_at' => now(),
                'password' => "Password1",
                'created_at' => now(),
                'timezone' => "",
            ],
            [
                "name" => "Cy Yonarra",
                "email" => "Cy.Yonarra@example.com",
                'email_verified_at' => now(),
                'password' => "Password1",
                'created_at' => now(),
                'timezone' => "",
            ],
            [
                "name" => "Pearl E. White",
                "email" => "Pearl.E.White@example.com",
                'email_verified_at' => now(),
                'password' => "Password1",
                'created_at' => now(),
                'timezone' => "",
            ],
            [
                "name" => "Sno White",
                "email" => "Sno.White@example.com",
                'email_verified_at' => now(),
                'password' => "Password1",
                'created_at' => now(),
                'timezone' => "",
            ],
            [
                "name" => "Chuck Wagon",
                "email" => "Chuck.Wagon@example.com",
                'email_verified_at' => now(),
                'password' => "Password1",
                'created_at' => now(),
                'timezone' => "",
            ],
            [
                "name" => "Patty Wagon",
                "email" => "Patty.Wagon@example.com",
                'email_verified_at' => now(),
                'password' => "Password1",
                'created_at' => now(),
                'timezone' => "",
            ],
            [
                "name" => "Cara Van",
                "email" => "Cara.Van@example.com",
                'email_verified_at' => now(),
                'password' => "Password1",
                'created_at' => now(),
                'timezone' => ""
            ],


        ];


        $countItems = count($seedUsers);

        $output = new ConsoleOutput();
        $progressBar = new ProgressBar($output, $countItems);

        $timezoneList = DateTimeZone::listIdentifiers();
        $numZones = count($timezoneList);

        $this->command->getOutput()->writeln("<info>Seeding with {{ $countItems }} Users.");

        /* Set a seed ID of 1000 as teh start of the general users */
        $id = 1000;

        foreach ($seedUsers as $seed) {
            $seed['password'] = Hash::make($seed['password']);
            if (isset($seed['id'])) {
                $id = $seed['id'] + 1;
            } else {
                $seed['id'] = $id++;
            }

            if (isset($seed['timezone']) && $seed['timezone'] === "") {
                $seed['timezone'] = $timezoneList[random_int(0, $numZones)];
            }

            User::create($seed);
            $progressBar->advance();
        }

        $progressBar->finish();
        $this->command->getOutput()->writeln("");

    }

}
