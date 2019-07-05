<?php

namespace App\Http\Controllers;

use Google_Client;
use Google_Service_Sheets;
use function GuzzleHttp\Promise\all;
use Revolution\Google\Sheets\Sheets;

trait FormTrait
{
    function sheet($sheet, $columns = false)
    {
        $id = '10bk0rUf_WfkvnzKjmQtwm31u38Ngc70zfZAg3N1FiHw';
        $client = new Google_Client();
        $client->setApplicationName('Google Sheets ');
        $client->setScopes(Google_Service_Sheets::SPREADSHEETS_READONLY);
        $file = storage_path('credentials.json');
        $client->setAuthConfig($file);
        $service = new Google_Service_Sheets($client);
        $sheets = new Sheets();
        $sheets->setService($service);
        $values = $sheets->spreadsheet($id)->sheet($sheet);

        if ($columns)
            $values->majorDimension('columns');

        $rows = $values->get();
        $newRows = [];
        foreach ($rows as $row) {
            $key = array_slice($row, 0,1) ;
            $newRows[$key[0]] =  array_slice($row, 1);
        }
        return $newRows;
    }
}
