<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use League\Csv\Reader;

class CsvController extends Controller
{
    public function index(Request $request)
    {
        $csv = $request->file('csv');

        if ($csv->isValid()) {

            // Process CSV file
            $reader = Reader::createFromPath($csv->getRealPath());
            $reader->setDelimiter(',');

            $data = [];
            foreach ($reader as $row) {
                $data[] = $row;
            }

            // Print data
            //dd($data);

            // Return view
            return view('csv.index', [
                'data' => $data,
            ]);
        } else {

            // Handle error
            echo "O arquivo CSV não é válido.";
        }
    }
}
