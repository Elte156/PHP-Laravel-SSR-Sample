<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    /**
     * Store a new user.
     *
     * @param  Request  $request
     * @return Response
     */
    public function getNews(Request $request)
    {
        $articles = [];
        $newsQuery = $request->input('search') ?? '';


        // Make the request to the API
        $client = new Client();
        $response = $client->request('GET', 'https://newsapi.org/v2/top-headlines', [
            'query' => [
                'q' => $newsQuery,
                'country' => 'us',
                'apiKey' => 'fb1bd64055aa49ac8fbd38a466e2b9b7',
                ]
        ]);
        $strResp = (string) $response->getBody();
        $jsonResp = json_decode($strResp, true);
        foreach ($jsonResp['articles'] as $key => $value) {
            $articles[] = [
                'title' => $value['title'],
                'publishedAt' => $value['publishedAt'],
            ];
        }

        return view('news', ['articles' => $articles]);
    }
}
