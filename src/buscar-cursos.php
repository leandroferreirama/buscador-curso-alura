<?php

require_once 'vendor/autoload.php';
//require_once 'src/Buscador.php';


use GuzzleHttp\Client;
use Leandroferreirama\BuscadorCursoAlura\Buscador;
use Symfony\Component\DomCrawler\Crawler;

$client = new Client(['base_uri' => 'https://www.alura.com.br/', 'verify'=>false]);
$crawler = new Crawler();

$buscador = new Buscador($client, $crawler);
$cursos = $buscador->buscar('/cursos-online-programacao/php');

foreach($cursos as $curso){
    echo $curso.PHP_EOL;
}