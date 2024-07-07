<?php
// الحصول على البيانات المرسلة من الجافاسكريبت
$data = json_decode(file_get_contents("php://input"), true);

// التحقق من أن البيانات غير فارغة
if ($data) {
    // تحديد ملف البيانات
    $file = 'data.json';
    $points = [];

    // قراءة البيانات الحالية من الملف إذا كانت موجودة
    if (file_exists($file)) {
        $points = json_decode(file_get_contents($file), true);
    }

    // إضافة البيانات الجديدة
    $points[] = $data;

    // حفظ البيانات في الملف
    file_put_contents($file, json_encode($points));

    // إرجاع استجابة بنجاح العملية
    echo json_encode(['success' => true]);
} else {
    // إرجاع استجابة بفشل العملية
    echo json_encode(['success' => false]);
}
?>
