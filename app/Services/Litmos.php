<?php
/**
 * Created by PhpStorm.
 * User: vkalappagari
 * Date: 7/27/2018
 * Time: 12:36 PM
 */
namespace App\Services;

class Litmos
{
    /*
     * Litmos API Key
     */
    private $api_key;

    /*
     * Litmos API Source
     */

    private $api_source = 'API';

    private $base_uri = 'https://api.litmos.com/v1.svc/';

    private $client;

    /*
     * Initialize Litmos configuration
     */
    public function __construct()
    {
        $this->api_key = env('LITMOS_KEY');
        $this->api_source = env('LITMOS_SOURCE');
        $this->client = new \GuzzleHttp\Client(['base_uri'=> $this->base_uri]);
    }

    public function getCourses()
    {
        $client = new \GuzzleHttp\Client(['base_uri'=>$this->base_uri]);
        $postURI = 'courses';
        $courseRequest =  $client->request('GET',$postURI,
            [
                'query'   =>
                    [
                        'apikey' => $this->api_key,
                        'source'=> $this->api_source
                    ],
                'body' => '',
                'headers' => ['Content-Type' => 'application/json'],
                'http_errors' => true
            ]);

        $createJson =  json_decode($courseRequest->getBody());
        return $createJson;
    }

    public function getLearningPaths()
    {
        $client = new \GuzzleHttp\Client(['base_uri'=>$this->base_uri]);
        $postURI = 'learningpaths';
        $courseRequest =  $client->request('GET',$postURI,
            [
                'query'   =>
                    [
                        'apikey' => $this->api_key,
                        'source'=> $this->api_source
                    ],
                'body' => '',
                'headers' => ['Content-Type' => 'application/json'],
                'http_errors' => true
            ]);

        $createJson =  json_decode($courseRequest->getBody());
        return $createJson;
    }

}