<?php 

class Movie
{

  public string $nome;
  public string $nomeRegista;
  //public string $genere;
  public string $linguaOriginale;
  public int $uscita;
  public array $genere;

  public function __construct(string $nomeFilm, string $nomeRegista) {
      $this->nome = $nomeFilm;
      $this->nomeRegista = $nomeRegista;
    }

   public function setUscita(int $data) {
       try {
       $this-> uscita = $data;

   }
       catch (Exception $error){
            echo $error;
        }
   }
   public function setLingua(string $data) {
    $this-> linguaOriginale = $data;
   }
   public function setMultiGenere(string $data1, string $data2, string $data3) {
    $prova = [];
    $prova[] = $data1;
    $prova[] = $data2;
    $prova[] = $data3;
    
    $this-> genere = $prova;
   
   }
   public function setGenere(string $data) {
    $prova = [];
    $prova[] = $data;
    
    $this-> genere = $data;
   
   }
};

$fightClub = new Movie('Fight Club', 'David Fincher');
$fightClub-> setUscita(1999);
$fightClub-> setLingua('EN');
$fightClub-> setMultiGenere('drammatico', 'thriller', 'psicologico');
var_dump($fightClub);

$ladri = new Movie('Ladri di biciclette', 'Vittorio De Sica');
$ladri-> setUscita(1948);
$ladri-> setLingua('IT');
$ladri-> setGenere('Drammatico');
var_dump($ladri);