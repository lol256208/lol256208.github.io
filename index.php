$url = "https://videogamesrating.p.mashape.com/get.php?count=5&game=World+of+Warcraft";

$headers = array(
    'X-Mashape-Key' => 'iQCpZr4YWLmsh8ZcjNiXFIJlhYc9p1gsXLFjsnx6zkgaLyLskF'
);

HttpResponse response = Unirest.get($url, $headers).asJson();