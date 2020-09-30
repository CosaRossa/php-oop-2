<?php

  // REPO: php-oop-2
  // GOAL: nell'ottica di quanto visto a lezione definire classe Square e classe Cube (2 e 3 dimensioni);
  // definire, oltre a variabili d'istanza, costruttore, e toString,
  // i metodi per il calcolo dell'area/volume e del perimetro/superficie
  // cercando di sfruttare al meglio ereditarieta' e polimorfismo;
  // testare le classi definite con alcune istanze per verificare che sia tutto corretto
  //
  // area quadrato: lato * lato
  // perimetro quadrato: 4 * lato
  // volume cubo: lato * lato * lato
  // superficie cubo: 6 * lato * lato
  // N.B.: definire ogni variabile e metodo pubblico come detto in classe

  class Square {
    public $lato;

    public function __construct($lato = 1) {
      $this -> lato = $lato;
    }

    public function getArea() {
      return $this -> lato * $this -> lato;
    }

    public function getPer() {
      return 4 * $this -> lato;
    }

    public function __toString() {
      return 'Square:<br>'
           . 'Lato: ' . $this -> lato . '<br>'
           . 'Area: ' . $this -> getArea() . '<br>'
           . 'Perimetro: ' . $this -> getPer() . '<br>';
    }
  }

  class Cube extends Square {
    public function getVol() {
      return $this -> lato * $this -> lato * $this -> lato;
    }

    public function getSup() {
      return 6 * $this -> lato * $this -> lato;
    }

    public function __toString() {
      return 'Cube:<br>'
           . 'Lato: ' . $this -> lato . '<br>'
           . 'Volume: ' . $this -> getVol() . '<br>'
           . 'Superficie: ' . $this -> getSup() . '<br>';
    }
  }

  $s1 = new Square();
  $s2 = new Square(2);

  $c1 = new Cube();
  $c2 = new Cube(3);

  echo $s1 . '<br>' . $s2 . '<br>';
  echo $c1 . '<br>' . $c2 . '<br>';

?>
