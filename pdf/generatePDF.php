<?php
/**
 * Created by PhpStorm.
 * User: dagry
 * Date: 18.10.2018
 * Time: 10:26
 */
require_once '../mPDF/vendor/autoload.php';

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

    private function createHTML($words /*Передается в pdf.php*/, $amount){
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
            'fontdata' => [
                'comicsans'=>
                    [ 'R' => 'comic.ttf' ]
            ],
            'default_font' => 'comicsans'
        ]);
        $mpdf->SetDisplayMode('fullpage');

        $arrayWord = [];
        if( $this->arrayParametrs['arrayWord'] != 1) {
            $arrayWord = array_chunk($this->arrayParametrs['arrayWord'], $this->arrayParametrs['amountWord']);
        }else $arrayWord[] = $this->arrayParametrs['arrayWord'];

        foreach ( $arrayWord as $key => $value){
            if( $this->arrayParametrs['amountWord'] == 1 || $this->arrayParametrs['amountWord'] == 4){
                $mpdf->AddPage("L");
            }else $mpdf->AddPage("p");
            $mpdf->WriteHTML($this->createHTML($value, $this->arrayParametrs['amountWord']));
        }

        $mpdf->Output();
    }

    private function createHTML_ListWordsPDF($words /*Передается в pdf.php*/){
        ob_start();
        include __DIR__ . '/ListWordsPDF.php';
        $string = ob_get_clean();
        return $string;
    }

    public function createListWordsPDF(){

        $mpdf = new \Mpdf\Mpdf([
            'format' => 'A4-P',
            'margin_top' => 0,
            'margin_right' => 0,
            'margin_left' => 0,
            'margin_bottom' => 0,
            'fontdata' => [
                    'comicsans'=>
                        [ 'R' => 'comic.ttf' ]
            ],
            'default_font' => 'comicsans'
        ]);
        $mpdf->SetDisplayMode('fullpage');
        $mpdf->AddPage("p");
        $mpdf->WriteHTML($this->createHTML_ListWordsPDF($this->arrayParametrs['arrayWord']));
        $mpdf->Output();

    }
}