<?php

    namespace App\Models;

    class Listings{
        public static function all(){
            return[
                [
                    'id' => 1, 
                    'title' => 'Listing One',
                    'description' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Hic vero eaque accusamus similique aliquid fugiat, repellat ea laboriosam molestias. Nemo rerum inventore accusamus amet commodi aperiam provident id, exercitationem tempore?'
                ],
                [
                    'id' => 2, 
                    'title' => 'Listing Two',
                    'description' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Hic vero eaque accusamus similique aliquid fugiat, repellat ea laboriosam molestias. Nemo rerum inventore accusamus amet commodi aperiam provident id, exercitationem tempore?'
                ]
                ];
        }

        public static function find($id){
            $listings = self::all();

            foreach($listings as $listing){
                if($listing['id'] == $id){
                    return $listing;
                }
            }
        }
    }