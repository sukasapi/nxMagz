<?php
$edis=$_GET['eds'];
$urlpdf="http://ptpn10.co.id/uploads/emag/emagz".$edis.".pdf";

?>
<iframe src="<?php echo $urlpdf;  ?>" width="100%" height="100%">
This browser does not support PDFs. Please download the PDF to view it: <a href="/pdf/sample-3pp.pdf">Download PDF</a>
</iframe>