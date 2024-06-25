<?php 

class Movie
{

  public string $nome;
  public string $nomeRegista;
  //public string $genere;
  public string $linguaOriginale;
  public int $uscita;
  public array $genere;
  public ?Genre $genre = null;
  public ?Actors $actors = null;
  public int $id;
  public static int $lastId = 1;

  
  
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
//   public function getGenre(): ?Genre {
//      return $this->genere;
//   }
//   public function getActors(): ?Actors {
//      return $this->genere;
//   }

  public function __construct(string $nomeFilm, string $nomeRegista) {
      $this->nome = $nomeFilm;
      $this->nomeRegista = $nomeRegista;
      $this->id = self::$lastId++;
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
   public function setActor(Actors $data) : void {
    $this->actors = $data;
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
class Actors {
  public string $act1;
  public string $act2;
  public string $act3;

  public function __construct($act1, $act2) {
    $this-> act1 =$act1;
    $this-> act2 =$act2;
  }
};
$fc_act = new Actors("Brad Pitt", "Gigi D'alessio");
$fc_genre = new Genre('drammatico', 'thriller', 'psicologico');
$list = [$fightClub, $ladri];

try {
    $fightClub = new Movie('Fight Club', 'David Fincher');
    $fightClub-> setUscita(1999);
    $fightClub-> setLingua('EN');
    $fightClub-> setGenre($fc_genre);
    $fightClub-> setActor($fc_act);
    //$fightClub-> setMultiGenere('drammatico', 'thriller', 'psicologico');
    $ladri = new Movie('Ladri di biciclette', 'Vittorio De Sica');
    $ladri-> setMultiGenere('drammatico');
    $ladri-> setUscita(1948);
    $ladri-> setLingua('IT');
    
} catch (Exception $e) {
  echo $e;
}
$nullSafe = $fightClub ->genre?->gen1 ?? 'Generi non trovati';
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
                <p> genere: <?php  echo $nullSafe ?> <?php  echo $fightClub -> genre -> gen2 ?> <?php  echo $fightClub -> genre -> gen3 ?></p>
                <p> attori: <?php  echo $fightClub -> actors -> act1 ?>, <?php  echo $fightClub -> actors -> act2 ?>.</p>
                 
            </div>
        </li>
        <?php endforeach; ?>
    </ul>
    
</head>
<body>
    
</body>
</html>