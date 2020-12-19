@extends('Master.master')
@section('title', 'way declare var')
@section('exercise_2')
    {{--
    Bài tập 1:
    Tạo biến fullName có giá trị là tên của bạn
    Sử dụng hàm alert để hiển thị giá trị của biến fullName
    Tạo thêm các biến sau:
    message có giá trị 'Học về built-in functions trong JS'
    warnMessage có giá trị 'Đây là message cảnh báo'
    errorMessage có giá trị 'Đây là message lỗi'
    Sử dụng console.log để in giá trị biến message ra tab console
    Sử dụng console.warn để in giá trị biến warnMessage ra tab console
    Sử dụng console.error để in giá trị biến errorMessage ra tab console
    Các hàm built-in khác các bạn tự tạo file trên máy tính cá nhân để thử nghiệm. Vì lý do bảo mật nên công cụ làm bài tập
    tại F8 chưa tích hợp những hàm built-in đó.

    Giới thiệu
    Built-in function nghĩa là hàm cài sẵn, chức năng lập sẵn. Hiểu đơn giản là những hàm được tích hợp sẵn trong ngôn ngữ
    lập trình.

    Ví dụ các về các built-in functions mình đã giới thiệu và làm ví dụ trong video rồi nên giờ chúng ta cùng làm bài tập
    nhé.

    // Làm bài tập tại đây
    var fullName='chu van huy';
    alert(fullName);
    var message ='Học về built-in functions trong JS';
    var warnMessage ='Đây là message cảnh báo';
    var errorMessage='Đây là message lỗi';
    console.log(message);
    console.warn(warnMessage);
    console.error(errorMessage);

    --}}
    <script src="bai3/exercise3.js"></script>
@endsection
