<?php
$inputData = [
        "Фамилия" => "",
        "Имя" => "",
        "Отчество" => ""
];
$fio = "";

foreach ($inputData as $key => $value)
{
    fwrite(STDOUT, "Введите " . $key . ":");
    $inputData[$key] = mb_convert_case(rtrim(fgets(STDIN)), MB_CASE_TITLE, "UTF-8"  );
    $fio .= mb_substr($inputData[$key], 0, 1, "UTF-8");
}

$fullName = implode(" ", $inputData);
$surnameAndInitials = $inputData["Фамилия"] . " "
    . mb_substr($fio, 1, 1, "UTF-8") . "."
    . mb_substr($fio, 2, 1, "UTF-8") . ".";

fwrite(STDOUT, "Полное имя: " . $fullName . "\n");
fwrite(STDOUT, "Фамилия и инициалы: " . $surnameAndInitials . "\n");
fwrite(STDOUT, "Аббревиатура: " . $fio . "\n");