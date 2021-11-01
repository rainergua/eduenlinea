<?php
      use \setasign\Fpdi\PdfParser\StreamReader;
      $pdf = new Pdf();
      $fileContent = file_get_contents(base_url().'assets/img/alesp/forms/compro.pdf','rb');
      $pdf->setSourceFile(StreamReader::createByString($fileContent));
      $tplIdx = $pdf->importPage(1);
      $pdf->addPage('P', 'LETTER');
      $pdf->useTemplate($tplIdx);
      //$fontname = TCPDF_FONTS::addTTFfont(base_url().'assets/font/uni-sans-semibold.ttf', 'UniSansSemiBold', '', 96);
      $pdf->SetFont('Helvetica', 'N', 7.8);
      //$pdf->SetFont($fontname, 'B', 20);
      $pdf->SetAuthor('Author');
      $pdf->SetDisplayMode('real', 'default');
      $pdf->SetTextColor(0, 0, 0);
      $pdf->SetFont('Helvetica', 'N', 10.8);
      //$pdf->SetXY(170, 2.4); $pdf->Write(65, 'Nro. ' . $n_doc);
      $pdf->SetFont('Helvetica', 'N', 7.8);
      $pdf->SetXY(90, 28.4); $pdf->Write(65, $codigo);
      $pdf->SetXY(43, 31.6); $pdf->Write(65, $rude);
      $pdf->SetXY(33, 34.8); $pdf->Write(65, $nombre);
      $pdf->SetXY(76, 34.8); $pdf->Write(65, $ue);
      $pdf->SetXY(50, 38.2); $pdf->Write(65, $distrito);
      $pdf->SetXY(90, 38.2); $pdf->Write(65, $munic);
      $pdf->SetXY(31, 41.4); $pdf->Write(65, $depto);
      $pdf->SetXY(120, 41.4); $pdf->Write(65, $areapot);
      $pdf->SetXY(158, 41.4); $pdf->Write(65, $desc_tal);
      /*$pdf->SetXY(31, 44.6); $pdf->Write(65, $tut_dom);
      $pdf->SetXY(171, 44.6); $pdf->Write(65, $tut_tipo);
      $pdf->SetXY(60, 47.8); $pdf->Write(65, $estudiante);
      $pdf->SetXY(31, 51.2); $pdf->Write(65, $rude);
      $pdf->SetXY(121, 51.2); $pdf->Write(65, $curso);
      $pdf->SetXY(51, 54.4); $pdf->Write(65, $ue);
      $pdf->SetXY(151, 54.4); $pdf->Write(65, $sie);
      $pdf->SetXY(76, 77); $pdf->Write(65, $gam);
      $pdf->SetXY(34, 80.2); $pdf->Write(65, $cant_txt);
      $pdf->SetXY(93, 80.2); $pdf->Write(65, '('.$cant.')');
      $pdf->SetXY(31, 87); $pdf->Write(65, $ue);
      $pdf->SetXY(141, 153.5); $pdf->Write(65, $serie);
      $pdf->SetXY(41, 160); $pdf->Write(65, $estudiante);
      $pdf->SetXY(78, 179.1); $pdf->Write(65, $rude);
      $pdf->SetXY(78, 182.8); $pdf->Write(65, $tut_ci);
      $pdf->SetXY(106, 182.8); $pdf->Write(65, $tut_exp);
      $pdf->SetXY(78, 186.1); $pdf->Write(65, $n_doc);
      $tplIdx = $pdf->importPage(2);
      $pdf->addPage('P', 'LETTER');
      $pdf->useTemplate($tplIdx);
      $pdf->SetXY(170, 2.4); $pdf->Write(65, 'Nro. ' . $n_doc);
      $pdf->SetXY(62, 123.6); $pdf->Write(65, $nomrep);
      $pdf->SetXY(26, 126.6); $pdf->Write(65, $tutor);
      $pdf->SetXY(75, 134); $pdf->Write(65, $lugar);
      $pdf->SetXY(95, 134); $pdf->Write(65, $dia);
      $pdf->SetXY(110, 134); $pdf->Write(65, $mes);
      $pdf->SetXY(40, 160); $pdf->Write(65, $nomrep);
      $pdf->SetXY(133, 162); $pdf->Write(65, $tutor);
      $pdf->SetXY(144, 165); $pdf->Write(65, $tut_ci);
      $pdf->SetXY(157, 165); $pdf->Write(65, $tut_exp);
      $tplIdx = $pdf->importPage(3);
      $pdf->addPage('P', 'LETTER');
      $pdf->useTemplate($tplIdx);
      $p = 1.5;
      $pdf->SetXY(170, 2.4); $pdf->Write(65, 'Nro. ' . $n_doc);
      $pdf->SetXY(48, 32-$p); $pdf->Write(65, $gam);
      $pdf->SetXY(103, 32-$p); $pdf->Write(65, $dia);
      $pdf->SetXY(138, 32-$p); $pdf->Write(65, $mes);
      $pdf->SetXY(78, 39-$p); $pdf->Write(65, $serie);
      $pdf->SetXY(68, 42.6-$p); $pdf->Write(65, $n_doc);
      $pdf->SetXY(123, 42.6-$p); $pdf->Write(65, $nomrep);
      $pdf->SetXY(30, 46.5-$p); $pdf->Write(65, $tutor);
      $pdf->SetXY(35, 142.5-$p); $pdf->Write(65, $tutor);
      $pdf->SetXY(60, 149.7-$p); $pdf->Write(65, $marca);
      $pdf->SetXY(40, 189.4-$p); $pdf->Write(65, $nomrep);
      $pdf->SetXY(133, 185-$p); $pdf->Write(65, $tutor);
      $pdf->SetXY(144, 188-$p); $pdf->Write(65, $tut_ci);
      $pdf->SetXY(157, 188-$p); $pdf->Write(65, $tut_exp);*/


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
      //$codigo = base_url().'verifica/'.$codigo.'/'.$carnet;
      //$pdf->write2DBarcode($codigo, 'QRCODE,H', 15, 170, 30, 30, $style, 'N');//Derecha
      //$pdf->write2DBarcode($codigo, 'QRCODE,H', 14, 110, 30, 30, $style, 'N');//Izquierda
      //$html = '<p style="text-align: rigth"><a href="'.base_url().'">Volver al Formulario</a></p>';
      //$pdf->writeHTMLCell($w = 0, $h = 0, $x = '100', $y = '120', $html, $border = 0, $ln = 1, $fill = 0, $reseth = true, $align = '', $autopadding = true);
      $pdf->Output('comprobante.pdf', 'I');
?>

