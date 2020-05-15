# BCPHP1-Display-Draw

[*Bài tập] Hiển thị các loại hình
Mục tiêu
Luyện tập sử dụng cấu trúc lặp lồng nhau.

Mô tả
Trong phần này, chúng ta sẽ phát triển một ứng dụng hiển thị một menu cho phép người dùng lựa chọn hiển thị các hình. Menu gồm các lựa chọn như sau

Menu:

Print the rectangle

Print the square triangle (The corner is square at 4 different angles: top-left, top-right, botton-left, botton-right)

Print isosceles triangle

Exit

Lưu ý: biểu diễn các hình có thể sử dụng ký hiệu * hoặc một ký hiệu khác.

Gợi ý các bước thực hiện
Bước 1: Sử dụng bài hướng dẫn in menu để in menu như trong phần mô tả.

Bước 2: In các loại hình

In hình chữ nhật

* * * * * * *
* * * * * * *
* * * * * * *
Biết chiều dài, chiều rộng. Sử dụng 2 vòng lặp lồng nhau. Vòng lặp ngoài hiển thị số dòng (chiều dài), vòng lặp trong hiển thị số cột (chiều rộng) 

In hình tam giác vuông, có cạnh góc vuông ở botton-left

*
* *
* * *
* * * *
* * * * *
Sử dụng 2 vòng lặp. Vòng lặp ngoài hiển thị số dòng (chiều dài), vòng lặp trong hiển thị số lượng * có trong mỗi dòng.

 for(int i=1; i<=5; i++)
for(int j=1; j<i; j++)
In hình tam giác vuông, có cạnh góc vuông ở top-left             

* * * * *                             
* * * *                                   
* * *                                         
* *                                               
*                                                            
Sử dụng 2 vòng lặp. Vòng lặp ngoài hiển thị số dòng (chiều dài), vòng lặp trong hiển thị số lượng * có trong mỗi dòng. 

for(int i=7;i>=1;i--)
for(int j=1;j<=i;j++)
In hình tam giác cân.

Sử dụng 2 vòng lặp bên trong 1 vòng lặp. Vòng lặp ngoài hiểu thị số dòng (chiều dài), 2 vòng lặp bên trong in ra dấu * 
