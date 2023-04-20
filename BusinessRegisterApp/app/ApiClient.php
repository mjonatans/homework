<?php declare(strict_types=1);

use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;

class ApiClient
{
    private Client $client;
    public function __construct()
    {
        $this->client = new Client(['verify' => false ]);
    }

    public function getRecords(string $parameter): array
    {
        $resourceID = "&resource_id=25e80bf3-f107-4ab4-89ef-251b5b9374e9";
        $query = "q=$parameter";
        $url = "https://data.gov.lv/dati/lv/api/3/action/datastore_search?" . $query . $resourceID;

        try {
            $response = $this->client->request('GET', $url);
        } catch (GuzzleException $e) {
            echo $e . PHP_EOL;
        }

        $companyData = json_decode($response->getBody()->getContents());

        $foundedRecords = [];
        foreach ($companyData->result->records as $record) {
            if ($record->regcode == $parameter)
                $foundedRecords[] = new BusinessData(
                    $record->name,
                    $record->regcode,
                    $record->address,
                    $record->registered
                );

        }
        return $foundedRecords;
    }
}