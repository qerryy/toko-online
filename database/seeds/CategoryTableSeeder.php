<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoryTableSeeder extends Seeder
{

    public function run()
    {

        DB::table('categories')->insert([
        	[
        		'category_name'=>'Fantasy',
        		'description'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore totam autem, debitis asperiores fuga impedit voluptatum perferendis maxime molestiae non. Aliquid dolore nam suscipit rem, fuga iure repudiandae odit quia.'
        	],
        	[
            	'categories_name'=>'Action',
            	'description'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore totam autem, debitis asperiores fuga impedit voluptatum perferendis maxime molestiae non. Aliquid dolore nam suscipit rem, fuga iure repudiandae odit quia.'
	        ],
	        [
	            'categories_name'=>'Drama',
	            'description'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore totam autem, debitis asperiores fuga impedit voluptatum perferendis maxime molestiae non. Aliquid dolore nam suscipit rem, fuga iure repudiandae odit quia.'
	        ],
	        [
	            'categories_name'=>'Horror',
	            'description'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore totam autem, debitis asperiores fuga impedit voluptatum perferendis maxime molestiae non. Aliquid dolore nam suscipit rem, fuga iure repudiandae odit quia.'
	        ],
	        [
	            'categories_name'=>'Adventure',
	            'description'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore totam autem, debitis asperiores fuga impedit voluptatum perferendis maxime molestiae non. Aliquid dolore nam suscipit rem, fuga iure repudiandae odit quia.'
	        ],
	        [
	            'categories_name'=>'Comedy',
	            'description'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore totam autem, debitis asperiores fuga impedit voluptatum perferendis maxime molestiae non. Aliquid dolore nam suscipit rem, fuga iure repudiandae odit quia.'
	        ],
	        [
	            'categories_name'=>'Romance',
	            'description'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore totam autem, debitis asperiores fuga impedit voluptatum perferendis maxime molestiae non. Aliquid dolore nam suscipit rem, fuga iure repudiandae odit quia.'
	        ],
	        [
	            'categories_name'=>'Slice of Life',
	            'description'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore totam autem, debitis asperiores fuga impedit voluptatum perferendis maxime molestiae non. Aliquid dolore nam suscipit rem, fuga iure repudiandae odit quia.'
	        ],
	        [
	            'categories_name'=>'School',
	            'description'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore totam autem, debitis asperiores fuga impedit voluptatum perferendis maxime molestiae non. Aliquid dolore nam suscipit rem, fuga iure repudiandae odit quia.'
	        ],
	        [
	            'categories_name'=>'Sport',
	            'description'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore totam autem, debitis asperiores fuga impedit voluptatum perferendis maxime molestiae non. Aliquid dolore nam suscipit rem, fuga iure repudiandae odit quia.'
	        ],
	        [
	            'categories_name'=>'Family',
	            'description'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore totam autem, debitis asperiores fuga impedit voluptatum perferendis maxime molestiae non. Aliquid dolore nam suscipit rem, fuga iure repudiandae odit quia.'
	        ],
	        [
	            'categories_name'=>'Gore',
	            'description'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore totam autem, debitis asperiores fuga impedit voluptatum perferendis maxime molestiae non. Aliquid dolore nam suscipit rem, fuga iure repudiandae odit quia.'
	        ],
	        [
	            'categories_name'=>'Music',
	            'description'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore totam autem, debitis asperiores fuga impedit voluptatum perferendis maxime molestiae non. Aliquid dolore nam suscipit rem, fuga iure repudiandae odit quia.'
	        ],
	        [
	            'categories_name'=>'Mystery',
	            'description'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore totam autem, debitis asperiores fuga impedit voluptatum perferendis maxime molestiae non. Aliquid dolore nam suscipit rem, fuga iure repudiandae odit quia.'
	        ],
	        [
	            'categories_name'=>'Sci-Fi',
	            'description'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore totam autem, debitis asperiores fuga impedit voluptatum perferendis maxime molestiae non. Aliquid dolore nam suscipit rem, fuga iure repudiandae odit quia.'
	        ],
	        [
	            'categories_name'=>'War',
	            'description'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore totam autem, debitis asperiores fuga impedit voluptatum perferendis maxime molestiae non. Aliquid dolore nam suscipit rem, fuga iure repudiandae odit quia.'
	        ],
        ]);
    }
}
