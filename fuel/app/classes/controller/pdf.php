<?php

require_once( APPPATH . 'vendor/tcpdf/config/tcpdf_config.php' );
require_once( APPPATH . 'vendor/tcpdf/tcpdf.php' );
require_once( APPPATH . 'vendor/fpdi/fpdi.php' );

class Controller_Pdf extends Controller{
    public function action_index(){
        $pdf = new FPDI();
        $pdf->setPrintHeader( false );
        $pdf->setPrintFooter( false );
        $pdf->AddPage();
        $pdf->setSourceFile( DOCROOT . 'test.pdf' );
        
        $index = $pdf->importPage( 1 );
        $pdf->useTemplate( $index );
         
        // ここのあたりから動的に出力される処理を書きます。
        $pdf->Write( 0, 'TEST' );
 
        $pdf->Output( 'pdf.pdf', 'I' );
    }
}