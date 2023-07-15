
    <!-- ข้อ 1.1
        for ($i = 1; $i <= 5; $i++) {
            for ($j = 1; $j <= 5 - $i; $j++) {
                echo "&nbsp;&nbsp;";
            }
            for ($k = 1; $k <= $i; $k++) {
                echo "o";
            }
            echo "<br>";
        }
    ข้อ 1.2
        for ($i = 1; $i <= 5; $i++) {
            for ($j = 1; $j <= 5 - $i; $j++) {
                echo "&nbsp;&nbsp;";
            }
            for ($k = 1; $k <= (2 * $i) - 1; $k++) {
                echo "o";
            }
            echo "<br>";
        }
    ข้อ 2.1
        มีเงินเดือน 10,000 บาท เดือนนี้จะได้เงินเท่าไหร่ หากมีเงื่อนไขดังนี้
        ตอบ 10200
    ข้อ 2.2.1
        ตอบ 200
    ข้อ 2.2.2
        ตอบ Average
    ข้อ 3.1
        ตอบ 15000,20000,30000
    ข้อ 3.2.1
        ตอบ echo $marks["mohammad"]["physics"];
        
        ตอบ foreach ($marks as $student) {
                foreach ($student as $subject => $mark) {
                    if ($mark == 35) {
                        echo $mark;
                        break;
                    }
            }
    ข้อ 3.2.2
        foreach ($marks as $student) {
                foreach ($student as $subject => $mark) {
                            echo $mark ."<br>";     
                }
        }
    ข้อ 4 
        <!DOCTYPE html>
            <html>
                <head>
                <style>
                    .flex-container {
                    display: flex;
                    flex-wrap: nowrap;
                    
                    }
                    .box {
                    border: 1px solid black;
                    height : 200px;
                    width : 240px;
                    text-align: center;
                    margin-left : 10px;
                    }
                </style>
                </head>
                <body>
                    <h1>Flexible Boxes</h1>
                    <div class="flex-container">
                        <div class="box"></div>
                        <div class="box"></div>
                        <div class="box"></div>  
                    </div>
                </body>
            </html>
    ข้อ 5.2
        INSERT INTO branch (name) VALUES ('เชียงใหม่');
        INSERT INTO branch (name) VALUES ('เชียงราย');
        INSERT INTO branch (name) VALUES ('ภูเก็ต');      
    ข้อ 5.3
        DELETE FROM position WHERE name='sale';   
    ข้อ 5.4
        UPDATE branch
        SET name = 'นาโกย่า'
        WHERE name = 'สาขาญี่ปุ่น';
    ข้อ 5.5
        SELECT * FROM employess;
    ข้อ 5.6
        SELECT * FROM employess;
        LEFT JOIN branch ON employess.branch_id = branch.branch_id
        WHERE branch.name = 'สนามบินสุวรรณภูมิ' AND branch.name = 'กรุงเทพ';
    ข้อ 5.7
        SELECT * FROM employess;
        LEFT JOIN branch ON employess.branch_id = branch.branch_id
        LEFT JOIN position ON employess.position_id = branch.position_id
        WHERE position.name = 'programmer' AND branch.name = 'กรุงเทพ';
    ข้อ 5.8
        SELECT * FROM employess;
        LEFT JOIN branch ON employess.branch_id = branch.branch_id
        LEFT JOIN position ON employess.position_id = branch.position_id
    ข้อ 6
        เรียงลำดับความสำคัญ ณ ปัจจุบัน
        1. ChatGpt 2.stack overflow 3.google(เว็บไซต์ที่ไม่ใช่ข้อ1กับ2) 4.ถามคนรู้จักที่เป็นโปรแกรมเมอร์
    ข้อ 7
        1.user ส่ง Request ไปยัง Controller
        2.Controller รับRequestและทำการประมวลผลและเรียกใช้ Model
        3.Model จะรับRequestจาก Controller และดำเนินการตามคำขอนั้นและส่งผลลัพธ์ที่ได้กลับไปยัง Controller
        4.Controller จะอัปเดตสถานะหรือข้อมูลตามผลลัพธ์ที่ได้จากModel
        5.View จะรับข้อมูลที่ถูกส่งมาจาก Controller เพื่อแสดงผลให้กับผู้ใช้
        6.แสดงข้อมูลในรูปแบบที่ผู้ใช้สามารถมองเห็นและจัดการได้
    ข้อ 8 
        Version Control ตัวหนึ่ง ซึ่งเป็นระบบที่มีหน้าที่ในการจัดเก็บการเปลี่ยนแปลงของไฟล์ในโปรเจ็คเรา 
        มีการ backup code ให้เรา สามารถที่จะเรียกดูหรือย้อนกลับไปดูเวอร์ชั่นต่างๆของโปรเจ็คที่ใด เวลาใดก็ได้ หรือแม้แต่ดูว่าไฟล์นั้นๆใครเป็นคนเพิ่มหรือแก้ไข 
        หรือว่าจะดูว่าไฟล์นั้นๆถูกเขียนโดยใครบ้างก็สามารถทำได้ ฉะนั้น Version Control ก็เหมาะอย่างยิ่งสำหรับนักพัฒนาไม่ว่าจะเป็นคนเดียวโดยเฉพาะ
        อย่างยิ่งจะมีประสิทธิภาพมากหากเป็นการพัฒนาเป็นทีม    
    ข้อ 9 
        ไม่เคย 
    ข้อ 10
        Laravel,Vue.js,React,Node.js    
}         -->