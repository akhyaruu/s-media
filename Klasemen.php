<?php

class Klasemen
{
   var $klasemen = [];

   function __construct(array $klasemen)
   {
      foreach ($klasemen as $value) {
         $this->klasemen[strtolower($value)] = 0;
      }
   }

   public function catatPermainan(string $klubKandang, string $klubTandang, string $skor): void
   {
      $skor = explode(":", $skor);
      if ($skor[0] > $skor[1]) {
         $this->klasemen[strtolower($klubKandang)] += 3;
      } elseif ($skor[0] < $skor[1]) {
         $this->klasemen[strtolower($klubTandang)] += 3;
      } else {
         $this->klasemen[strtolower($klubKandang)] += 1;
         $this->klasemen[strtolower($klubTandang)] += 1;
      }
   }

   public function cetakKlasemen(): array
   {
      $temp = $this->klasemen;
      $oldKeyKlasemen = array_keys($this->klasemen);
      $oldValueKlasemen = array_values($this->klasemen);
      $sortedKlasemen = [];

      usort($temp, function ($a, $b) {
         return ($a < $b) ? 1 : -1;
      });

      foreach ($temp as $key1 => $value1) {
         foreach ($oldValueKlasemen as $key2 => $value2) {
            if ($value1 == $value2) {
               $atr = $oldKeyKlasemen[$key2];
               $sortedKlasemen[$atr] = $value1;
               break;
            }
         }
      }

      $this->klasemen = $sortedKlasemen;
      return $this->klasemen;
   }

   public function ambilPeringkat(int $nomorPeringkat): string
   {
      $klasemen = array_keys($this->klasemen);
      return $klasemen[$nomorPeringkat - 1];
   }
}

$klasemen = new Klasemen(['Liverpool', 'Chelsea', 'Arsenal']);

$klasemen->catatPermainan('Arsenal', 'Liverpool', '2:1');
$klasemen->catatPermainan('Arsenal', 'Chelsea', '1:1');
$klasemen->catatPermainan('Chelsea', 'Arsenal', '0:3');
$klasemen->catatPermainan('Chelsea', 'Liverpool', '3:2');
$klasemen->catatPermainan('Liverpool', 'Arsenal', '2:2');
$klasemen->catatPermainan('Liverpool', 'Chelsea', '0:0');

print_r($klasemen->cetakKlasemen());
echo $klasemen->ambilPeringkat(3);