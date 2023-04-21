<?php declare(strict_types=1);

use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
class ApiClient {
    private Client $client;
    private const API_KEY = "7ee06dee-e79f-4d48-9401-661530a733b4";

    public function __construct() {
        $this->client = new Client(['verify' => false]);
    }
    public function getData(): array {
        $url = "https://pro-api.coinmarketcap.com/v1/cryptocurrency/listings/latest";

        $headers = [
            "Accepts" => " application/json",
            "X-CMC_PRO_API_KEY" => " " . self::API_KEY
        ];

        $parameters = [
            'start' => '1',
            'limit' => '10',
            'convert' => 'USD'
        ];

        $qs = http_build_query($parameters);
        $request = "{$url}?{$qs}";

        try {
            $response = $this->client->request('GET', $request, ['headers' => $headers]);
        } catch (GuzzleException $e) {
            echo "Something went wrong" . PHP_EOL;
            echo $e;
        }

        $cryptoData = json_decode($response->getBody()->getContents());
        $coinList = [];
        foreach ($cryptoData->data as $coin) {
            $coinList[] = new CryptoCoin(
                $coin->name,
                $coin->symbol,
                $coin->cmc_rank,
                $coin->id,
                $coin->quote->USD->price,
                $coin->quote->USD->volume_24h,
                $coin->circulating_supply
            );
        }
        return $coinList;
    }
}