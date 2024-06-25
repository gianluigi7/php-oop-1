<?php 

class Movie
{

  public string $nome;
  public string $nomeRegista;
  //public string $genere;
  public string $linguaOriginale;
  public int $uscita;
  public array $genere;
  public $genre;

  
  
//   public function getNome(): string {
//      return $this->nome;
//   }
  
//   public function getNomeRegista(): string {
//     return $this->nomeRegista;
//   }
//   public function getLingua(): string {
//     return $this-> linguaOriginale;
//   }
//   public function getUscita(): int {
//       return $this->uscita;
//   }
//   public function getGenere(): array {
//      return $this->genere;
//   }

  public function __construct(string $nomeFilm, string $nomeRegista) {
      $this->nome = $nomeFilm;
      $this->nomeRegista = $nomeRegista;
    }

   public function setUscita(int $data) 
   {
       if ($data > 2024) {
        throw new Exception('non ancora uscito');
       }

       $this-> uscita = $data;

   }
   public function setLingua(string $data) : void{
    $this-> linguaOriginale = $data;
   }
   public function setMultiGenere(string ...$data): void {
    $this-> genere = $data;
   }
   public function setGenre(Genre $data) : void {
    $this->genre = $data;
   }

};
class Genre {
    public string $gen1;
    public string $gen2;
    public string $gen3;

    public function __construct($gen1, $gen2, $gen3)
    {
        $this-> gen1 = $gen1;
        $this-> gen2 = $gen2;
        $this-> gen3 = $gen3;
    }

};
$fc_genre = new Genre('drammatico', 'thriller', 'psicologico');
$list = [$fightClub, $ladri];

try {
    $fightClub = new Movie('Fight Club', 'David Fincher');
    $fightClub-> setUscita(1999);
    $fightClub-> setLingua('EN');
    $fightClub-> setGenre($fc_genre);
    //$fightClub-> setMultiGenere('drammatico', 'thriller', 'psicologico');
    $ladri = new Movie('Ladri di biciclette', 'Vittorio De Sica');
    $ladri-> setMultiGenere('drammatico');
    $ladri-> setUscita(1948);
    $ladri-> setLingua('IT');
    
} catch (Exception $e) {
  echo $e;
}
var_dump($fightClub);

var_dump($ladri);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <h1>Movies</h1>
    <ul>
        <?php foreach ($list as $movie) : ?>
        <li>
            <div>
                <h3> <?php echo $fightClub -> nome ?> </h3>
                <p> regia di:<?php  echo $fightClub -> nomeRegista ?> </p>
                <p> lingua origianle:<?php  echo $fightClub -> linguaOriginale ?> </p>
                <p> <?php  echo $fightClub -> uscita ?> </p>
                <p> genere: <?php  echo $fightClub -> genre -> gen1 ?>, <?php  echo $fightClub -> genre -> gen2 ?>, <?php  echo $fightClub -> genre -> gen3 ?>.</p>
                 
            </div>
        </li>
        <?php endforeach; ?>
    </ul>
    
</head>
<body>
    
</body>
</html>