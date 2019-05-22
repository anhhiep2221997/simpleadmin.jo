<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<h1> các hàm xử lý chuỗi trong php</h1>
<pre>
- srelen()đếm số ký tự trong 1 chuỗi
-str_word_count() đếm sớ chữ trong 1 chuỗi
-strpos("chuỗi mẹ", "chuỗi con") tìm kiếm sự có mặt của 1 chuỗi con trong 1 chuỗi mẹ
sẽ trả về false nếu tìm được trả về vị trí bắt đầu-
-sre-replace ()thay thế chuỗi 1 bằng chuỗi 2 trong 1 chuỗi mẹ

-var_dump($biến): hàm này được dùng để debug xem cấu trúc của biến thuộc kiểu dữ liệu gì và chứa giá trị nào

-


</pre>
<?php
$find1=strpos("thành phố hà nội chào muwngf quý khách", "hà nội");
 var_dump($find1);
 echo "<br>";
    $find1 = strpos("thanh pho ha noi chao mung quy khach", "da nang");
    var_dump($find1);

    ?>

</body>
</html>
