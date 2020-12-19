// Toán tử +
var a = 1 + 2;
console.log(a);
// Toán tử gán
var fullName = 'Chu van huy';
// Toán tử so sánh
var a = 1;
var b = 2;
if (a == b) {
    alert('dung');
};
// toán tử logic
var a = 1;
var b = 3;
if (a > 0 && b > 0) {
    alert('a, b > 0');
}

/** Toán tử số học
 * +     ----> Cộng
 * -     ----> Trừ
 * *     ----> Nhân
 * **     ----> Lũy thừa
 * /     ----> Chia
 * %     ----> Chia lấy số dư
 * ++     ----> Tăng 1 giá trị số
 * --     ----> Giản 1 giá trị số
 * 
 */

var a = 1;
var b = 2;
// ** lũy thừa
// var c = a ** b;
// var c = ++a + ++b; // 5
var c = ++b * 2 - b-- * 2;


console.log(c);