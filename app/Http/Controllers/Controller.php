<?php

namespace App\Http\Controllers;

use Faker\Factory;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function getNews($id = null): array
    {
        $news = [];
        $faker = Factory::create();

        if($id){
            return [
                'title'=> $faker->jobTitle(),
                'author' => $faker->userName(),
                'status' => 'draft',
                'description' => $faker->text(100),
                'created_at' => now('Europe/Moscow')
            ];
        }

        for ($i=1; $i<10; $i++){
            $news[$i] = [
                'title'=> $faker->jobTitle(),
                'author' => $faker->userName(),
                'status' => 'draft',
                'description' => $faker->text(100),
                'created_at' => now('Europe/Moscow')
            ];
        }
        return $news;
    }
}
