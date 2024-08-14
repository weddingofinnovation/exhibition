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

    // public function generateArticle($prompt)
    // {
    //     $response = Http::withHeaders([
    //         'Authorization' => 'Bearer ' . $this->apiKey,
    //         'Content-Type' => 'application/json',
    //     ])->post('https://api.openai.com/v1/completions', [
    //         'model' => 'text-davinci-003', // or the model you are using
    //         'prompt' => $prompt,
    //         'max_tokens' => 500, // Adjust as needed
    //         'temperature' => 0.7, // Adjust as needed
    //     ]);

    //     dd($response->json());
        
    //     return $response->json()['choices'][0]['text'];
    // }

    public function generateArticle($eventDetails)
    {
        $prompt = $this->createPrompt($eventDetails);
        $response = Http::withHeaders([
            'Authorization' => 'Bearer ' . $this->apiKey,
            'Content-Type' => 'application/json',
        ])->post('https://api.openai.com/v1/chat/completions', [
            'model' => 'gpt-3.5-turbo', // Use gpt-4 if preferred and available
            'messages' => [
                ['role' => 'user', 'content' => $prompt],
            ],
            'max_tokens' => 1000, // Adjust as needed
            'temperature' => 0.7, // Adjust creativity
        ]);

        $responseArray = $response->json();

        // Check if the expected keys are present
        return isset($responseArray['choices'][0]['message']['content']) 
            ? $responseArray['choices'][0]['message']['content'] 
            : 'Failed to generate blog post.';
    }

    private function createPrompt($eventDetails)
    {
        return "Write a detailed blog post about the following event: " . $eventDetails;
    }
}
