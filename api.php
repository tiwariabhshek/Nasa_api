<?php
class API{
    
    public $url;
    public function __construct($string) {
        $apiKey = 'KLIPrRY9fEme8s9Z5AIBlswCMhRUgg5w3IeYR0gr';
        $this->url = 'https://api.nasa.gov/planetary/apod?api_key='.$apiKey.$string ;
    }

   function fetchImage()
{
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $this->url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
    $head = curl_exec($ch);
    curl_close($ch);
    return $head;
}

   function multiImages()
{
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $this->url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
    $head = curl_exec($ch);
    curl_close($ch);
    return $head;
    
}
}
?>