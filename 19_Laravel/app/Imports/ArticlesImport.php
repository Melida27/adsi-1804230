<?php

namespace App\Imports;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToModel;

use App\Article;

class ArticlesImport implements ToModel
{
    /**
    * @param Collection $collection
    */
    public function model(array $row)
    {
        return new Article([
        	'title'   => $row[0],
        	'content' => $row[1],
            'user_id' => $row[2],
            'category_id' => $row[3],
            'slider' => $row[4],
            'price' => $row[5]
        ]);
    }
}
