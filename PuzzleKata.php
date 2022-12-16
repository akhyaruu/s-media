<?php

// YANG INI BELUM SELESAI

class PuzzleKata
{
   private $papan = [
      ['J', 'Y', 'B', 'Y', 'Q', 'V', 'W', 'G', 'B', 'Q', 'F', 'D', 'D', 'U', 'L', 'H', 'M'],
      ['D', 'G', 'O', 'C', 'G', 'V', 'N', 'K', 'Z', 'C', 'R', 'U', 'B', 'A', 'O', 'I', 'K'],
      ['U', 'G', 'E', 'U', 'H', 'E', 'W', 'J', 'W', 'T', 'O', 'Y', 'N', 'U', 'M', 'N', 'V'],
      ['N', 'H', 'U', 'R', 'D', 'B', 'R', 'J', 'I', 'V', 'U', 'I', 'T', 'P', 'G', 'H', 'W'],
      ['I', 'H', 'H', 'O', 'O', 'I', 'E', 'M', 'Z', 'W', 'T', 'J', 'M', 'D', 'T', 'S', 'V'],
      ['T', 'M', 'V', 'O', 'I', 'P', 'O', 'U', 'A', 'N', 'B', 'E', 'D', 'X', 'T', 'W', 'X'],
      ['E', 'Z', 'H', 'B', 'B', 'Q', 'A', 'U', 'E', 'N', 'W', 'C', 'W', 'C', 'B', 'O', 'N'],
      ['D', 'L', 'U', 'S', 'A', 'D', 'F', 'G', 'N', 'R', 'Y', 'Y', 'G', 'W', 'W', 'S', 'R'],
      ['K', 'H', 'Y', 'I', 'I', 'R', 'R', 'M', 'N', 'I', 'P', 'H', 'A', 'B', 'R', 'W', 'P'],
      ['I', 'T', 'Q', 'M', 'S', 'A', 'H', 'I', 'M', 'I', 'R', 'U', 'N', 'Z', 'Y', 'H', 'S'],
      ['N', 'E', 'T', 'H', 'E', 'R', 'L', 'A', 'N', 'D', 'S', 'H', 'U', 'N', 'K', 'E', 'Z'],
      ['G', 'F', 'K', 'L', 'N', 'L', 'A', 'G', 'U', 'T', 'R', 'O', 'P', 'B', 'I', 'U', 'E'],
      ['D', 'C', 'P', 'G', 'O', 'G', 'G', 'A', 'R', 'U', 'P', 'U', 'E', 'O', 'P', 'K', 'M'],
      ['O', 'J', 'B', 'T', 'D', 'N', 'T', 'A', 'X', 'O', 'B', 'X', 'Z', 'M', 'J', 'C', 'C'],
      ['M', 'J', 'F', 'P', 'N', 'S', 'L', 'L', 'X', 'B', 'V', 'C', 'Y', 'W', 'T', 'K', 'E'],
      ['R', 'X', 'I', 'S', 'I', 'I', 'Z', 'W', 'A', 'M', 'K', 'S', 'L', 'N', 'H', 'V', 'S'],
      ['A', 'O', 'J', 'O', 'A', 'E', 'G', 'T', 'X', 'M', 'C', 'Z', 'P', 'C', 'I', 'O', 'U']
   ];

   public function cariKata($kata)
   {
      $arrKata = str_split(strtoupper($kata));

      $idxSatu = [];

      foreach ($arrKata as $key1 => $value1) {
         foreach ($this->papan as $key2 => $value2) {
            foreach ($this->papan[$key2] as $key3 => $value3) {
               if ($value1 == $value3) {
                  array_push($idxSatu, [$key2, $key3]);
               }
            }
         }

         if (empty($idxSatu)) {
            break;
         }
      }

      $sementara = $this->plusMove($idxSatu, $arrKata, $kata);


      return $sementara;
   }



   private function plusMove($idxSatu, $arrKata, $kata)
   {
      // $kataBawah = $this->papan[$idxValue[0]][$idxValue[1]];

      $indexHasil = [];

      foreach ($idxSatu as $key => $idxValue) {

         // $moveBawah = $idxValue[0] + 1;
         // $moveAtas = $idxValue[0] - 1;
         // $moveKiri = $idxValue[1] - 1;
         // $moveKanan = $idxValue[1] + 1;

         // $cekBawah = $this->papan[$moveBawah][$idxValue[1]] ?? false;
         // if ($cekBawah) {
         //    for ($i=0; $i < count($arrKata); $i++) { 
         //       $sentence = $this->papan[$idxValue[0]][$idxValue[1]] . $cekBawah;
         //       if (str_contains($kata, $sentence)) {
         //          $kataBawah = $kataBawah . $cekBawah;
         //       }
         //    }
         // }



         // -- baru

         $indexKata = [[$idxValue[1], $idxValue[0]]];

         for ($i = 1; $i <= count($arrKata); $i++) {

            $moveBawah = $idxValue[0] + $i;
            $moveAtas = $idxValue[0] - $i;
            $moveKiri = $idxValue[1] - $i;
            $moveKanan = $idxValue[1] + $i;

            $cekBawah = $this->papan[$moveBawah][$idxValue[1]] ?? false;
            if ($cekBawah) {
               $sentence = $this->papan[$idxValue[0]][$idxValue[1]] . $cekBawah;
               if (strpos($kata, $sentence) !== false) {
                  array_push($indexKata, [$idxValue[1], $moveBawah]);
                  if ($kata == $sentence) {
                     break;
                  }
               }
            }
         }

         $indexHasil = $indexKata;
      }

      return $indexHasil;
   }
}

$puzzle = new PuzzleKata();
// mengembalikan column, row [[4,1], [5,2], [6,3], [7,4], [8,5], [9,6], [10,7], [11,8], [12,9]]
$hasil = $puzzle->cariKata('king');
// echo $hasil;
// print_r($hasil[12][0]);
print_r($hasil);