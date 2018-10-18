<?php
/**
 * Created by PhpStorm.
 * User: dagry
 * Date: 18.10.2018
 * Time: 10:26
 */
require_once __DIR__ . '/vendor/autoload.php';
require_once __DIR__ . '/pdf.php';

class generatePDF{
    private $arrayParametrs =  array (
        'amountWord'    => 1, //только 1, 2, 4
        'arrayWord'     => [
            'one',
            'two',
            'theree',
            'four'
        ]
    );

    public function __construct( $parametrs = false ){
        if( $parametrs !== false)
            $this->arrayParametrs = array_replace($this->arrayParametrs, $parametrs );
    }

    private function createHTML($words /*Передается в pdf.php*/){
        ob_start();
            include __DIR__ . '/pdf.php';
        $string = ob_get_clean();
        return $string;
    }
    public function createPDF(){
        $mpdf = new \Mpdf\Mpdf([
            'format' => 'A4-L',
            'margin_top' => 0,
            'margin_right' => 0,
            'margin_left' => 0,
            'margin_bottom' => 0,
            'default_font' => 'Lato'
        ]);
        $mpdf->SetDisplayMode('fullpage');

        $arrayWord = [];
        if( $this->arrayParametrs['arrayWord'] != 1) {
            $arrayWord = array_chunk($this->arrayParametrs['arrayWord'], $this->arrayParametrs['amountWord']);
        }else $arrayWord[] = $this->arrayParametrs['arrayWord'];

        foreach ( $arrayWord as $key => $value){
            if( count($value) == 1 || count($value) == 4){
                $mpdf->AddPage("L");
            }else $mpdf->AddPage("p");
            $mpdf->WriteHTML($this->createHTML($value));
        }

        $mpdf->Output();
    }
}