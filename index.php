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
   public function setGenere(string $data1, string $data2, string $data3) {
    $prova = [];
    $prova[] = $data1;
    $prova[] = $data2;
    $prova[] = $data3;
    
    $this-> genere = $prova;
   
   }
};

$fightClub = new Movie('Fight Club', 'David Fincher');
$fightClub-> setUscita('no');
$fightClub-> setLingua('EN');
$fightClub-> setGenere('drammatico', 'thriller', 'psicologico');
var_dump($fightClub);