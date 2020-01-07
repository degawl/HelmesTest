<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SectorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sectors')->insert([
            'sector_id' => 1,
            'sector_name' => 'Manufacturing',
        ]);

    // ----- Manufacturing Children -----

        DB::table('sectors')->insert([
            'sector_id' => 19,
            'sector_name' => 'Construction Materials',
            'parent_id' => 1,
        ]);

        DB::table('sectors')->insert([
            'sector_id' => 18,
            'sector_name' => 'Construction Materials',
            'parent_id' => 1,
        ]);

        DB::table('sectors')->insert([
            'sector_id' => 6,
            'sector_name' => 'Food and Beverage',
            'parent_id' => 1,
        ]);

    // -----Food and Beverage Children -----

        DB::table('sectors')->insert([
            'sector_id' => 342,
            'sector_name' => 'Bakery & confectionery products',
            'parent_id' => 6,
        ]);
        
        DB::table('sectors')->insert([
            'sector_id' => 43,
            'sector_name' => 'Beverages',
            'parent_id' => 6,
        ]);

        DB::table('sectors')->insert([
            'sector_id' => 42,
            'sector_name' => 'Fish & fish products',
            'parent_id' => 6,
        ]);

        DB::table('sectors')->insert([
            'sector_id' => 40,
            'sector_name' => 'Meat & meat products',
            'parent_id' => 6,
        ]);

        DB::table('sectors')->insert([
            'sector_id' => 39,
            'sector_name' => 'Milk & dairy products',
            'parent_id' => 1,
        ]);

        DB::table('sectors')->insert([
            'sector_id' => 378,
            'sector_name' => 'Sweets & snack food',
            'parent_id' => 6,
        ]);

        DB::table('sectors')->insert([
            'sector_id' => 437,
            'sector_name' => 'Other (Food & Beverage)',
            'parent_id' => 6,
        ]);

    // ----- Manufacturing Children -----

        DB::table('sectors')->insert([
            'sector_id' => 13,
            'sector_name' => 'Furniture',
            'parent_id' => 1,
        ]);

    // ----- Funiture Children -----

        DB::table('sectors')->insert([
            'sector_id' => 389,
            'sector_name' => 'Bathroom/Sauna',
            'parent_id' => 13,
        ]);

        DB::table('sectors')->insert([
            'sector_id' => 385,
            'sector_name' => 'Bedroom',
            'parent_id' => 13,
        ]);

        DB::table('sectors')->insert([
            'sector_id' => 390,
            'sector_name' => 'Children\'s room',
            'parent_id' => 13,
        ]);

        DB::table('sectors')->insert([
            'sector_id' => 98,
            'sector_name' => 'Kitchen',
            'parent_id' => 13,
        ]);

        DB::table('sectors')->insert([
            'sector_id' => 101,
            'sector_name' => 'Living room',
            'parent_id' => 13,
        ]);

        DB::table('sectors')->insert([
            'sector_id' => 392,
            'sector_name' => 'Office',
            'parent_id' => 13,
        ]);

        DB::table('sectors')->insert([
            'sector_id' => 341,
            'sector_name' => 'Outdoor',
            'parent_id' => 13,
        ]);

        DB::table('sectors')->insert([
            'sector_id' => 99,
            'sector_name' => 'Project furniture',
            'parent_id' => 13,
        ]);

        DB::table('sectors')->insert([
            'sector_id' => 394,
            'sector_name' => 'Other (Furniture)',
            'parent_id' => 13,
        ]);

    // ----- Manufacturing Children -----

        DB::table('sectors')->insert([
            'sector_id' => 12,
            'sector_name' => 'Machinery',
            'parent_id' => 1,
        ]);

    // ----- Machinery Children -----

        DB::table('sectors')->insert([
            'sector_id' => 94,
            'sector_name' => 'Machinery components',
            'parent_id' => 12,
        ]);

        DB::table('sectors')->insert([
            'sector_id' => 91,
            'sector_name' => 'Machinery equipment/tools',
            'parent_id' => 12,
        ]);

        DB::table('sectors')->insert([
            'sector_id' => 224,
            'sector_name' => 'Manufacture of machinery',
            'parent_id' => 12,
        ]);

        DB::table('sectors')->insert([
            'sector_id' => 97,
            'sector_name' => 'Maritime',
            'parent_id' => 12,
        ]);
         
    // ----- Maritime Children -----

        DB::table('sectors')->insert([
            'sector_id' => 271,
            'sector_name' => 'Aluminium & steel workboats',
            'parent_id' => 97,
        ]);

        DB::table('sectors')->insert([
            'sector_id' => 269,
            'sector_name' => 'Boat/Yacht building',
            'parent_id' => 97,
        ]);

        DB::table('sectors')->insert([
            'sector_id' => 230,
            'sector_name' => 'Ship repair and conversion',
            'parent_id' => 97,
        ]);
        
    // ----- Machinery Children -----

            DB::table('sectors')->insert([
            'sector_id' => 93,
            'sector_name' => 'Metal Structures',
            'parent_id' => 12,
        ]);

        DB::table('sectors')->insert([
            'sector_id' => 227,
            'sector_name' => 'Repair and maintenance service',
            'parent_id' => 12,
        ]);

        DB::table('sectors')->insert([
            'sector_id' => 508,
            'sector_name' => 'Other (Machinery)',
            'parent_id' => 12,
        ]);

    // ----- Manufacturing Children -----        
        
        DB::table('sectors')->insert([
            'sector_id' => 11,
            'sector_name' => 'Metalworking',
            'parent_id' => 1,
        ]);

        DB::table('sectors')->insert([
            'sector_id' => 67,
            'sector_name' => 'Construction of metal structures',
            'parent_id' => 11,
        ]);

        DB::table('sectors')->insert([
            'sector_id' => 263,
            'sector_name' => 'Houses and buildings',
            'parent_id' => 11,
        ]);

        DB::table('sectors')->insert([
            'sector_id' => 267,
            'sector_name' => 'Metal products',
            'parent_id' => 11,
        ]);

        DB::table('sectors')->insert([
            'sector_id' => 542,
            'sector_name' => 'Metal works',
            'parent_id' => 11,
        ]);

    // ----- Metal works Children -----    

        DB::table('sectors')->insert([
            'sector_id' => 75,
            'sector_name' => 'CNC-machining',
            'parent_id' => 542,
        ]);

        DB::table('sectors')->insert([
            'sector_id' => 62,
            'sector_name' => 'Forgings, Fasteners',
            'parent_id' => 542,
        ]);

        DB::table('sectors')->insert([
            'sector_id' => 69,
            'sector_name' => 'Gas, Plasma, Laser cutting',
            'parent_id' => 542,
        ]);

        DB::table('sectors')->insert([
            'sector_id' => 66,
            'sector_name' => 'MIG, TIG, Aluminum welding',
            'parent_id' => 542,
        ]);

    // ----- Manufacturing Children -----      

        DB::table('sectors')->insert([
            'sector_id' => 9,
            'sector_name' => 'Plastic and Rubber',
            'parent_id' => 1,
        ]);

        DB::table('sectors')->insert([
            'sector_id' => 54,
            'sector_name' => 'Packaging',
            'parent_id' => 9,
        ]);

        DB::table('sectors')->insert([
            'sector_id' => 556,
            'sector_name' => 'Plastic goods',
            'parent_id' => 9,
        ]);

        DB::table('sectors')->insert([
            'sector_id' => 560,
            'sector_name' => 'Plastic profiles',
            'parent_id' => 9,
        ]);

        DB::table('sectors')->insert([
            'sector_id' => 559,
            'sector_name' => 'Plastic processing technology',
            'parent_id' => 9,
        ]);

    // ----- Plastic processing technology Children -----   

        DB::table('sectors')->insert([
            'sector_id' => 55,
            'sector_name' => 'Blowing',
            'parent_id' => 559,
        ]);

        DB::table('sectors')->insert([
            'sector_id' => 57,
            'sector_name' => 'Moulding',
            'parent_id' => 559,
        ]);

        DB::table('sectors')->insert([
            'sector_id' => 53,
            'sector_name' => 'Plastics welding and processing',
            'parent_id' => 559,
        ]);

    // ----- Manufacturing Children -----       
    
        DB::table('sectors')->insert([
            'sector_id' => 5,
            'sector_name' => 'Printing',
            'parent_id' => 1,
        ]);
        
    // ----- Printing Children -----      
        
        DB::table('sectors')->insert([
            'sector_id' => 148,
            'sector_name' => 'Advertising',
            'parent_id' => 5,
        ]);

        DB::table('sectors')->insert([
            'sector_id' => 150,
            'sector_name' => 'Advertising',
            'parent_id' => 5,
        ]);

        DB::table('sectors')->insert([
            'sector_id' => 145,
            'sector_name' => 'Labelling and packaging printing',
            'parent_id' => 5,
        ]);

    // ----- Manufacturing Children -----  

        DB::table('sectors')->insert([
            'sector_id' => 7,
            'sector_name' => 'Textile and Clothing',
            'parent_id' => 1,
        ]);

    // ----- Textile and Clothing Children -----  

        DB::table('sectors')->insert([
            'sector_id' => 44,
            'sector_name' => 'Clothing',
            'parent_id' => 7,
        ]);

        DB::table('sectors')->insert([
            'sector_id' => 45,
            'sector_name' => 'Textile',
            'parent_id' => 7,
        ]);

    // ----- Manufacturing Children -----  

        DB::table('sectors')->insert([
            'sector_id' => 8,
            'sector_name' => 'Wood',
            'parent_id' => 1,
        ]);

    // ----- Wood Children -----  

        DB::table('sectors')->insert([
            'sector_id' => 51,
            'sector_name' => 'Wooden building materials',
            'parent_id' => 8,
        ]);

        DB::table('sectors')->insert([
            'sector_id' => 47,
            'sector_name' => 'Wooden Houses',
            'parent_id' => 8,
        ]);

        DB::table('sectors')->insert([
            'sector_id' => 337,
            'sector_name' => 'Other (Wood)',
            'parent_id' => 8,
        ]);

    // ----- End of Manufacturing Children ----- 

        DB::table('sectors')->insert([
            'sector_id' => 2,
            'sector_name' => 'Service',
        ]);

    // ----- Service Children ----- 

        DB::table('sectors')->insert([
            'sector_id' => 24,
            'sector_name' => 'Business Services',
            'parent_id' => 2,
        ]);

        DB::table('sectors')->insert([
            'sector_id' => 35,
            'sector_name' => 'Engineering',
            'parent_id' => 2,
        ]);

        DB::table('sectors')->insert([
            'sector_id' => 28,
            'sector_name' => 'Information Technology and Telecommunications',
            'parent_id' => 2,
        ]);

    // ----- Information Technology and Telecommunications Children ----- 

        DB::table('sectors')->insert([
            'sector_id' => 581,
            'sector_name' => 'Data processing, Web portals, E-marketing',
            'parent_id' => 28,
        ]);

        DB::table('sectors')->insert([
            'sector_id' => 576,
            'sector_name' => 'Programming, Consultancy',
            'parent_id' => 28,
        ]);

        DB::table('sectors')->insert([
            'sector_id' => 121,
            'sector_name' => 'Software, Hardware',
            'parent_id' => 28,
        ]);

        DB::table('sectors')->insert([
            'sector_id' => 122,
            'sector_name' => 'Telecommunications',
            'parent_id' => 28,
        ]);

    // ----- Service Children -----
    
        DB::table('sectors')->insert([
            'sector_id' => 22,
            'sector_name' => 'Tourism',
            'parent_id' => 2,
        ]);

        DB::table('sectors')->insert([
            'sector_id' => 141,
            'sector_name' => 'Translation Services',
            'parent_id' => 2,
        ]);

        DB::table('sectors')->insert([
            'sector_id' => 21,
            'sector_name' => 'Transport and Logistics',
            'parent_id' => 2,
        ]);

    // ----- Transport and Logistics Children -----     

        DB::table('sectors')->insert([
            'sector_id' => 111,
            'sector_name' => 'Air',
            'parent_id' => 21,
        ]);

        DB::table('sectors')->insert([
            'sector_id' => 114,
            'sector_name' => 'Rail',
            'parent_id' => 21,
        ]);

        DB::table('sectors')->insert([
            'sector_id' => 112,
            'sector_name' => 'Road',
            'parent_id' => 21,
        ]);

        DB::table('sectors')->insert([
            'sector_id' => 113,
            'sector_name' => 'Water',
            'parent_id' => 21,
        ]);

    // ----- End of Service Children ----- 

        DB::table('sectors')->insert([
            'sector_id' => 3,
            'sector_name' => 'Other',
        ]);

    // ----- Other Children ----- 

        DB::table('sectors')->insert([
            'sector_id' => 37,
            'sector_name' => 'Creative industries',
            'parent_id' => 3,
        ]);

        DB::table('sectors')->insert([
            'sector_id' => 29,
            'sector_name' => 'Energy Technologies',
            'parent_id' => 3,
        ]);

        DB::table('sectors')->insert([
            'sector_id' => 33,
            'sector_name' => 'Environment',
            'parent_id' => 3,
        ]);
    }
}
