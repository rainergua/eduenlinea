<?php
use \setasign\Fpdi\PdfParser\StreamReader;
$pdf = new Pdf();
$fileContent = file_get_contents(base_url().'assets/img/alesp/forms/compro.pdf','rb');
$pdf->setSourceFile(StreamReader::createByString($fileContent));
$tplIdx = $pdf->importPage(1);
$pdf->addPage('P', 'LETTER');
$pdf->useTemplate($tplIdx);

//$fontname = TCPDF_FONTS::addTTFfont(base_url().'assets/font/uni-sans-semibold.ttf', 'UniSansSemiBold', '', 96);
$pdf->SetFont('Helvetica', 'B', 12);
//$pdf->SetFont($fontname, 'B', 20);
$pdf->SetAuthor('Author');
$pdf->SetDisplayMode('real', 'default');
$pdf->SetTextColor(0, 0, 0);
$pdf->SetXY(54, 40);
$pdf->Write(65, $codigo);
$pdf->SetXY(54, 56);
$pdf->Write(65, $rude);
$pdf->SetXY(134, 56);
$pdf->Write(65, $nombre);
$pdf->SetXY(54, 68);
$pdf->Write(65, $ue);
$pdf->SetXY(134, 68);
$pdf->Write(65, $distrito);
$pdf->SetXY(54, 81);
$pdf->Write(65, $munic);
$pdf->SetXY(134, 81);
$pdf->Write(65, $depto);

//$html = '<p style="text-align: center">'.$nombre.'</p>';
//$pdf->writeHTMLCell($w = 0, $h = 0, $x = '10', $y = '10', $html, $border = 0, $ln = 1, $fill = 0, $reseth = true, $align = '', $autopadding = true);
//$pdf->Write(15, $pdf->getPageWidth());

$pdf->SetAutoPageBreak(TRUE, 0);
$style = array(
      'border' => 1,
      'vpadding' => 'auto',
      'hpadding' => 'auto',
      'fgcolor' => array(0,0,0),
      'bgcolor' => false, //array(255,255,255)
      'module_width' => 1, // width of a single module in points
      'module_height' => 1 // height of a single module in points
  );
$codigo = base_url().'verifica/'.$codigo.'/'.$carnet;
$pdf->write2DBarcode($codigo, 'QRCODE,H', 15, 170, 30, 30, $style, 'N');//Derecha
//$pdf->write2DBarcode($codigo, 'QRCODE,H', 14, 110, 30, 30, $style, 'N');//Izquierda
$html = '<p style="text-align: rigth"><a href="'.base_url().'">Volver al Formulario</a></p>';
$pdf->writeHTMLCell($w = 0, $h = 0, $x = '80', $y = '180', $html, $border = 0, $ln = 1, $fill = 0, $reseth = true, $align = '', $autopadding = true);
ob_end_clean();
$pdf->Output('micert.pdf', 'I');
?>

