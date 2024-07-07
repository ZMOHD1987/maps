<?php
// تحديد ملف البيانات
$file = 'data.json';
$points = [];

// قراءة البيانات من الملف إذا كانت موجودة
if (file_exists($file)) {
    $points = json_decode(file_get_contents($file), true);
}

// إرجاع البيانات كـ JSON
echo json_encode($points);
?>
