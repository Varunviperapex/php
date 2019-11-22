<?php
require("fpdf.php");
$pdf = new FPDF();
$name = ' '.$_GET['name'];
//First page
$pdf->addPage();
$Page1 = $pdf->addLink();
$Page2 = $pdf->addLink();
$Page3 = $pdf->addLink();
$Page4 = $pdf->addLink();
$Page5 = $pdf->addLink();
$pdf->setLink($Page1);
$pdf->setFont("Times",'B',36);
$pdf->write(5,"5 FESTIVAL");
$pdf->ln(20);
$pdf->setFont('Times','U',24);
$pdf->setTextColor(23,134,0);
$pdf->write(5,"Happy Diwali".$name);
$pdf->ln(20);
$pdf->image("diwali.jpeg",20,50,150,0,'',"https://www.google.com/search?rlz=1C1CHBF_enIN859IN859&sxsrf=ACYBGNQa1YxB3-r1c9kbReUtb2iQpHkz8g%3A1571989028704&ei=JKayXbLLKv_hz7sPw8CemAg&q=diwali&oq=diwali&gs_l=psy-ab.3..35i39j0i131i20i263j0i131j0i131i20i263j0i131l5j0.889.889..1267...0.2..0.155.155.0j1......0....1..gws-wiz.......0i71.STztJPxpoi8&ved=0ahUKEwiy7ZW987blAhX_8HMBHUOgB4MQ4dUDCAs&uact=5");
$pdf->ln(100);
$pdf->setFont('Times','B');
$pdf->setTextColor(111,0,111);
$pdf->write(5," 1 ",$Page1);
$pdf->write(5," 2 ",$Page2);
$pdf->write(5," 3 ",$Page3);
$pdf->write(5," 4 ",$Page4);
$pdf->write(5," 5 ",$Page5);
$pdf->setFont('');

// Second Page

$pdf->addPage();
$pdf->setLink($Page2);
$pdf->setFont('Times','U',24);
$pdf->setTextColor(23,134,0);
$pdf->write(5,"Happy Holi".$name);
$pdf->ln(20);
$pdf->image("holi.jpg",20,30,150,0,'',"https://www.google.com/search?rlz=1C1CHBF_enIN859IN859&sxsrf=ACYBGNTQe2yu_csSE6uqWeXcOGXzblrB_g%3A1571989031779&ei=J6ayXfCPL8Xiz7sPkfOc-Ao&q=holi&oq=holi&gs_l=psy-ab.3..0i67l10.28933.29845..30851...0.1..0.153.581.0j4......0....1..gws-wiz.......0i71j35i39j0i131.m_yvWA0XX54&ved=0ahUKEwiwv9G-87blAhVF8XMBHZE5B68Q4dUDCAs&uact=5");
$pdf->ln(110);
$pdf->setFont('Times','B');
$pdf->setTextColor(111,0,111);
$pdf->write(5," 1 ",$Page1);
$pdf->write(5," 2 ",$Page2);
$pdf->write(5," 3 ",$Page3);
$pdf->write(5," 4 ",$Page4);
$pdf->write(5," 5 ",$Page5);
$pdf->setFont('');


$pdf->addPage();
$pdf->setLink($Page3);
$pdf->setFont('Times','U',24);
$pdf->setTextColor(23,134,0);
$pdf->write(5,"Happy Chatt".$name);
$pdf->ln(20);
$pdf->image("chatt.jpg",20,30,150,0,'',"https://www.google.com/search?rlz=1C1CHBF_enIN859IN859&sxsrf=ACYBGNSoGGkfA4UCunBLADHWa4kWEE2D4g%3A1571989065775&ei=SaayXZTxLv_cz7sPpaqS2AQ&q=chhath+puja&oq=Chatt+puja&gs_l=psy-ab.3.0.0i67i70i257j0i10j0i67j0i10l7.17625.23139..24731...0.2..0.157.884.0j6......0....2j1..gws-wiz.......0i71j0.zNKoGanOvx8");
$pdf->ln(110);
$pdf->setFont('Times','B');
$pdf->setTextColor(111,0,111);
$pdf->write(5," 1 ",$Page1);
$pdf->write(5," 2 ",$Page2);
$pdf->write(5," 3 ",$Page3);
$pdf->write(5," 4 ",$Page4);
$pdf->write(5," 5 ",$Page5);
$pdf->setFont('');


$pdf->addPage();
$pdf->setLink($Page4);
$pdf->setFont('Times','U',24);
$pdf->setTextColor(23,134,0);
$pdf->write(5,"Happy Kali Puja".$name);
$pdf->ln(20);
$pdf->image("kali.jpg",20,30,150,0,'',"https://www.google.com/search?rlz=1C1CHBF_enIN859IN859&sxsrf=ACYBGNQxe9bhxnRPewIlf9aqR_VlEUGigA%3A1571989093401&ei=ZaayXbSEGPWLmgedzb-oBw&q=Kali+Puja&oq=Kali+Puja&gs_l=psy-ab.3..0i131i67l2j0i67j0i131i20i263j0i131l2j0i67j0j0i131l2.16361.16361..17832...0.1..0.163.163.0j1......0....2j1..gws-wiz.......0i71.dGXN90V-k_c&ved=0ahUKEwj0yoLc87blAhX1heYKHZ3mD3UQ4dUDCAs&uact=5");
$pdf->ln(110);
$pdf->setFont('Times','B');
$pdf->setTextColor(111,0,111);
$pdf->write(5," 1 ",$Page1);
$pdf->write(5," 2 ",$Page2);
$pdf->write(5," 3 ",$Page3);
$pdf->write(5," 4 ",$Page4);
$pdf->write(5," 5 ",$Page5);
$pdf->setFont('');


$pdf->addPage();
$pdf->setLink($Page5);
$pdf->setFont('Times','U',24);
$pdf->setTextColor(23,134,0);
$pdf->write(5,"Allahmudillah Eid".$name);
$pdf->ln(20);
$pdf->image("eid.jpg",20,30,150,0,'',"https://www.google.com/search?rlz=1C1CHBF_enIN859IN859&sxsrf=ACYBGNQI1yx__k8rIC6YhBigJjTnF5aoRg%3A1571989113804&ei=eaayXfLfMOHTz7sPh625gA8&q=eid&oq=eid&gs_l=psy-ab.3..0i67l10.13233.13512..13895...0.1..0.217.520.0j2j1......0....1..gws-wiz.......0i71j35i39j0i131j0j0i131i67.t_D1GmbEoTo&ved=0ahUKEwiygODl87blAhXh6XMBHYdWDvAQ4dUDCAs&uact=5");
$pdf->ln(110);
$pdf->setFont('Times','B');
$pdf->setTextColor(111,0,111);
$pdf->write(5," 1 ",$Page1);
$pdf->write(5," 2 ",$Page2);
$pdf->write(5," 3 ",$Page3);
$pdf->write(5," 4 ",$Page4);
$pdf->write(5," 5 ",$Page5);
$pdf->setFont('');
$pdf->output();
?>