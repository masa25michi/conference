<?php

require_once( APPPATH . 'vendor/tcpdf/config/tcpdf_config.php' );
require_once( APPPATH . 'vendor/tcpdf/tcpdf.php' );
require_once( APPPATH . 'vendor/fpdi/fpdi.php' );

class Controller_Pdf extends Controller{
    public function action_index($filename){
        $pdf = new FPDI();
        $pdf->setPrintHeader( false );
        $pdf->setPrintFooter( false );
        $pageCount = $pdf->setSourceFile( DOCROOT .'abstracts/'.$filename.'.pdf' );

        for($i=1;$i<=$pageCount;$i++){//add viewer page until EOF
            $pdf->AddPage();
            $index = $pdf->importPage( $i );
            $pdf->useTemplate( $index );
        }

        //write contents in to pdf viewer before output
        $pdf->Write( 0, 'TEST' );

        $pdf->Output( $filename.'.pdf', 'I');
    }
}