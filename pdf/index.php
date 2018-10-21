<?php
error_reporting(E_ALL);
include './generatePDF.php';
ob_start();
include './words.json';
$str = ob_get_clean();
$arrayJSON = json_decode( $str, true );
if( $_GET['type'] == 'getListWords') {
    $list_number = ( (int) $_GET['id_list_number'] )  - 1;
    $class__generatePDF = new generatePDF(
        [
            'arrayWord' => $arrayJSON['lists'][$list_number]
        ]
    );

    $class__generatePDF->createListWordsPDF();
}elseif( $_GET['type'] == 'getWords' ){
    $list_number = $_POST['list_number'];
    $amount_word = $_POST['amount_word'] ? (int)($_POST['amount_word']) : 1;

    $array_list_number = [];
    foreach ($list_number as $key => $value) {
        $array_list_number = array_merge($array_list_number, $arrayJSON['lists'][(int)$value - 1]);
    }

    if ($amount_word != 1 && $amount_word != 2 && $amount_word != 4) die('{error: "Неверное число слов на странице. Допустимые значения: 1, 2, 4."}');
    $outputWords = [];

    if ($_POST['words'])
        $outputWords = array_merge($outputWords, $array_list_number, $_POST['words']);
    else $outputWords = $array_list_number;

    $outputWords = array_diff($outputWords, array(''));
    $class__generatePDF = new generatePDF(
        [
            'amountWord' => $amount_word,
            'arrayWord' => $outputWords
        ]
    );

    $class__generatePDF->createPDF();
}
