/*
1.alert: cửa sổ hợp thoại
2.Console: hiển thị cảnh báo, lỗi, hiển thị dữ liệu trong F12 console
3.Conjirm: cửa sổ hợp thoại + nút ok
4.Prompt: cửa sổ hợp thoại + nút ok + ô input
5.Set timeout : chạy sau 1 khoảng thời gian, chỉ 1 lần
6.Set interval: Chạy sai 1 khoảng thời gian, lặp lại
*/

// 2: F12 -> console
// dua vao 1 chuoi
console.log('Day la log');
// dua vao 1 so
console.log(123);
// Dua bien vao
var fullName = 'chu van huy';
console.log(fullName);
// show error
console.error(fullName)


// 3
confirm('Xac nhan ban du tuoi!');
// 4
prompt('Xac nhan ban du tuoi!')
    // 5
setTimeout(function() {
        alert('thong bao sau 1 giay' + Math.random());
    }, 1000)
    // 6
    /**
     * Math.random() -> Tạo chuỗi random + xuống dòng, nesu không có dòng này console.log sẽ chỉ hiển thị trên 1 dòng vì giống nhau
     */
setInterval(function() {
    console.log('Day la log' + Math.random())
}, 1000);