<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class WeatherService
{
    protected $apiKey;
    protected $baseUrl;

    public function __construct()
    {
        $this->apiKey = config('services.weather.api_key');
        $this->baseUrl = config('services.weather.api_url');
    }

    public function getWeatherByCity($city)
    {
        $response = Http::get($this->baseUrl, [
            'q' => $city,
            'appid' => $this->apiKey,
            'units' => 'metric' // Celsius
        ]);

        if ($response->failed()) {
            return null; // Handle error (misalnya jika kota tidak ditemukan)
        }

        return $response->json();
    }
}
