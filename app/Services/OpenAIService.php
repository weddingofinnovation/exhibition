<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class OpenAIService
{
    protected $apiKey;

    public function __construct()
    {
        $this->apiKey = env('OPENAI_API_KEY');
    }

    public function generateArticle($prompt)
    {
        $response = Http::withHeaders([
            'Authorization' => 'Bearer ' . $this->apiKey,
            'Content-Type' => 'application/json',
        ])->post('https://api.openai.com/v1/completions', [
            'model' => 'text-davinci-003', // or the model you are using
            'prompt' => $prompt,
            'max_tokens' => 500, // Adjust as needed
            'temperature' => 0.7, // Adjust as needed
        ]);

        dd($response->json());
        
        return $response->json()['choices'][0]['text'];
    }
}
