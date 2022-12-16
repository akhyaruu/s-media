<?php

function hitungNomorBit(int $angka, int $nomorBit): int
{
   $arrHasilBagi = [];

   $tempAngka = $angka;
   $desimal = [$tempAngka];

   for ($i = 0; $i <= $angka; $i++) {
      $hasilBagi = floor($angka / 2);

      if ($hasilBagi < 0) {
         break;
      } else {
         array_push($arrHasilBagi, $hasilBagi);
         $angka = $hasilBagi;
      }
   }

   $desimalAll = array_merge($desimal, $arrHasilBagi);
   array_push($arrHasilBagi, 0);

   $key = array_search($nomorBit, $arrHasilBagi);
   if (isset($key)) {
      return $desimalAll[$key];
   } else {
      return null;
   }
}

print_r(hitungNomorBit(13, 1));