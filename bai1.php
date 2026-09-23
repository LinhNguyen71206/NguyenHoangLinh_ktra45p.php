<?php
/* 
 * BÀI 1: HIỂN THỊ DÃY SỐ FIBONACCI
 */

function generateFibonacci(int $soLuongPhanTu): array
{
    if ($soLuongPhanTu < 1) {
        return [];
    }

    $daySoFibonacci = [];

    for ($viTri = 0; $viTri < $soLuongPhanTu; $viTri++) {
        if ($viTri === 0) {
            $giaTriHienTai = 0;
        } elseif ($viTri === 1) {
            $giaTriHienTai = 1;
        } else {
            $giaTriHienTai = $daySoFibonacci[$viTri - 1] + $daySoFibonacci[$viTri - 2];
        }

        $daySoFibonacci[] = $giaTriHienTai;
    }

    return $daySoFibonacci;
}

$soPhanTuCanHienThi = 10;
$ketQuaFibonacci = generateFibonacci($soPhanTuCanHienThi);

echo " BÀI 1: DÃY SỐ FIBONACCI (10 PHẦN TỬ ĐẦU TIÊN) <br>";
echo implode(', ', $ketQuaFibonacci);
echo "<br>";
?> 

