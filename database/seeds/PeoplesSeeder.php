<?php

use Illuminate\Database\Seeder;

class PeoplesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('peoples')->insert(

        		[
        			[
	        			'name'=>'Tom Rensed',
	        			'position'=>'Chief Executive Officer',
	        			'image'=>'team_pic1.jpg',
	        			'text'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin consequat sollicitudin cursus. Dolor sit amet, consectetur adipiscing elit proin consequat.'
        			],
        			[
	        			'name'=>'Kathren Mory',
	        			'position'=>'Vice President',
	        			'image'=>'team_pic2.jpg',
	        			'text'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin consequat sollicitudin cursus. Dolor sit amet, consectetur adipiscing elit proin consequat.'
        			],
        			[
	        			'name'=>'Lancer Jack',
	        			'position'=>'Senior Manager',
	        			'image'=>'team_pic3.jpg',
	        			'text'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin consequat sollicitudin cursus. Dolor sit amet, consectetur adipiscing elit proin consequat.'
        			],
        		]

        	);
    }
}
