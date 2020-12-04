<?php
      // Загрузка содержимого из файла html 
require_once  'dompdf / autoload.inc.php' ; 
$ html  =  file_get_contents ( "pdf-content.html" ); 
$ dompdf -> loadHtml ( $ html ); 
 
// (Необязательно) Настройка формата и ориентации бумаги 
$ dompdf -> setPaper ( 'A4' ,  'landscape' ); 
 
// Визуализировать HTML как PDF 
$ dompdf -> render (); 
 
// Вывод сгенерированного PDF (1 = загрузка и 0 = предварительный просмотр)
 $ dompdf -> stream ( "#" , array ( "Attachment"  =>  0 ));
 ?>