<?php

use App\Models\Team;
use Illuminate\Database\Seeder;

class TeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $teams = config('teams');

        foreach($teams as $team){
            $new_team = new Team;
            $new_team->fill($team);
            $new_team->save();
        }
    }
}
