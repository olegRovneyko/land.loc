<?php

use Illuminate\Database\Seeder;

class PortfoliosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('portfolios')->insert(

        	[
        		[
        		'name'=>'Finance App',
        		'image'=>'portfolio_pic2.jpg',
        		'filter'=>'GPS',
        		],
        		[
        		'name'=>'Concept',
        		'image'=>'portfolio_pic3.jpg',
        		'filter'=>'design',
        		],
        		[
        		'name'=>'Shopping',
        		'image'=>'portfolio_pic4.jpg',
        		'filter'=>'android',
        		],
        		[
        		'name'=>'Managment',
        		'image'=>'portfolio_pic5.jpg',
        		'filter'=>'desig',
        		],
        		[
        		'name'=>'iPhone',
        		'image'=>'portfolio_pic6.jpg',
        		'filter'=>'web',
        		],
        		[
        		'name'=>'Nexus Phone',
        		'image'=>'portfolio_pic7.jpg',
        		'filter'=>'web',
        		],
        		[
        		'name'=>'Android',
        		'image'=>'portfolio_pic8.jpg',
        		'filter'=>'android',
        		],
        	]
        );
    }
}
