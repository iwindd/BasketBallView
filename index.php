<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Basketball</title>
    <link rel="icon" type="image/x-icon" href="resources/favicon.ico">
    <link rel="stylesheet" href="resources/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="resources/css/aos.css"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Athiti&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Sarabun:wght@200&display=swap" rel="stylesheet">
    <style>
        .athiti{
            font-family: 'Athiti', sans-serif !important;
        }

        header{
            margin-top: 12em;
            margin-bottom: 12em;
        }

        footer{
            background-color: rgb(221, 221, 221);
            padding-top: 2em;
            padding-bottom: 3em;
        }

        footer strong{
            font-weight: bold;
    
        }

        footer b{
            font-family: 'Sarabun';
            font-weight: bold;
            font-size: large;
        }

        footer ul{
            font-family: 'Athiti';
            list-style-type: none;
            color: rgb(78, 78, 78);
        }

        footer a{
            text-decoration: none;
        }

        header h1{
            font-size: 5em;
        }


        header p{
            font-family: 'Athiti', sans-serif;
        }

        header .btn.btn-basketball{
            font-family: 'Athiti', sans-serif;
            border: 2px rgb(228, 139, 80) solid;
            padding: 0.5em 3em;
            transition: all 0.2s ease !important;
 
        }

        header .btn.btn.btn-basketball:hover{
            border: 2px rgb(224, 127, 62) solid;
            background-color: rgb(233, 159, 111);
            color: white;
        }

        section{
            margin-top: 3em;
            margin-bottom: 15em;
        }

        section h1{
            text-align: center;
            font-family: 'Athiti', sans-serif;
            margin-bottom: 1em;
        }

        section p{
            text-indent: 3em;
            font-family: 'Sarabun', sans-serif;
            font-size: 18px;
        }

        section b{
            font-family: 'Sarabun', sans-serif;
        }

        section ul{
            list-style-type: decimal;
            font-family: 'Sarabun', sans-serif;
            font-size: 18px;
        }

        section ul li{
            margin-top: 0.3em;
        }
    </style>
</head>

<body>

    <nav class="navbar sticky-top navbar-expand-lg bg-body-tertiary border-bottom">
        <div class="container">
            <a class="navbar-brand ms-1" href="#header">
                <img src="resources/logo.png" alt="" width="32" height="32">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link  athiti " aria-current="page" href="#basketball">Basketball </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link  athiti" aria-current="page" href="#history">ประวัติ </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link  athiti" aria-current="page" href="#position">ตําแหน่ง </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link athiti" aria-current="page" href="#example">ตัวอย่างการเล่น </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link athiti dropdown-toggle" href="#rules" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            กฎและกติกาของ
                        </a>
                        <ul class="dropdown-menu">
                          <li><a class="dropdown-item athiti" href="#rules0">วิธีการเล่น</a></li>
                          <li><a class="dropdown-item athiti" href="#rules1">อุปกรณ์การเล่น</a></li>
                          <li><a class="dropdown-item athiti" href="#rules2">ข้อบังคับ</a></li>
                          <li><a class="dropdown-item athiti" href="#rules3">ฟาวล์</a></li>
                          <li><a class="dropdown-item athiti" href="#rules4">กติกาบาสเกตบอล 13 ข้อ</a></li>
                        </ul>
                    </li>
            
 

                </ul>

            </div>
        </div>
    </nav>

    <header id="header">
        <div class="container mt-5">
            <div class="row flex-row-reverse">
                <div class="col-lg-6 d-flex justify-content-center">
                    <img  data-aos="fade-up" src="resources/images/1.png" class="" alt="" srcset="">
                </div>

                <div class="col-lg-6 d-flex  justify-content-center align-items-center gap-3  mt-5">
                    <div class="mb-5 pb-5 ">
                        <h1 data-aos="fade-up" class="mb-2">Basketball</h1>
                        <p data-aos="fade-up" class="text-center my-2">Basketball คืออะไร ?</p>
                  
                    </div>
                </div>
       
            </div>
        </div>
    </header>

    <section id="basketball">
        <div class="container">
            <h1  data-aos="fade-up" ><b>Basketball</b> คืออะไร ?</h1>
            <article  data-aos="fade-up">
                <p>
                    บาสเกตบอล <b>( Basketball )</b> เป็นกีฬาชนิดหนึ่งซึ่งแบ่งผู้เล่นเป็น 2 ทีม แต่ละทีมประกอบด้วยผู้เล่น 5 คนพยายามทำคะแนนโดยการโยนลูกเข้าห่วงหรือตะกร้า ภายใต้กติกาการเล่นมาตรฐาน
                    ตั้งแต่ที่คิดค้นขึ้นในปี พ.ศ. 2434 (ค.ศ. 1891) <b>โดยเจมส์ ไนสมิท</b> บาสเกตบอลได้ถูกพัฒนาขึ้นเป็นกีฬาสากลโลก กีฬานี้มีจุดเริ่มต้นจากใน<b>วายเอ็มซีเอ</b> ลีกที่เกิดขึ้นในสมัยแรก ๆ เป็นระดับมหาวิทยาลัย ต่อมากลายเป็นกีฬาอาชีพ[ต้องการอ้างอิง] มีการจัดตั้งลีก<b>เอ็นบีเอ (National Basketball Association, NBA)</b> และเริ่มมีการแข่งขันใน<b>กีฬาโอลิมปิก</b> เมื่อ พ.ศ. 2479 (ค.ศ. 1936) ถึงแม้ว่าในระยะแรกยังเป็นกีฬาที่เล่นเฉพาะใน<b>สหรัฐอเมริกา</b> กีฬาชนิดนี้แพร่ขยายไปสู่ระดับสากลด้วยความรวดเร็ว ปัจจุบันมีนักกีฬาและทีมที่มีชื่อเสียงตามที่ต่าง ๆ ทั่วโลก
                    บาสเกตบอลเป็นกีฬาที่เล่นในร่มเป็นหลัก สนามที่ใช้เล่นมีขนาดค่อนข้างเล็ก คะแนนจะได้จากการโยนลูกเข้าห่วงจากด้านบน (ชูต, shoot) ทีมที่มีคะแนนมากกว่าในตอนจบเกมจะเป็นฝ่ายชนะ สามารถนำพาลูกโดยการกระเด้งกับพื้น (เลี้ยงลูก, dribble) หรือส่งลูกกันระหว่างเพื่อนร่วมทีม เกมจะห้ามการกระทบกระแทกที่ทำให้เป็นฝ่ายได้เปรียบ (ฟาวล์, foul) และมีกฎข้อบังคับเกี่ยวกับการครองบอล
                    เกมบาสเกตบอลมีการพัฒนาเทคนิคการเล่นต่าง ๆ เช่น การชูต การส่ง และการเลี้ยงลูก รวมไปถึงตำแหน่งผู้เล่น (ซึ่งตามกฎแล้วไม่จำเป็นต้องมี) และตำแหน่งการยืนในเกมรุกและเกมรับ ผู้เล่นที่ตัวสูงถือเป็นข้อได้เปรียบ ถึงแม้ว่าในการเล่นแข่งขันจะควบคุมโดยกฎกติกา การเล่นรูปแบบอื่น ๆ สำหรับเล่นผ่อนคลายก็มีการคิดขึ้น บาสเกตบอลก็ยังเป็นกีฬาที่คนนิยมดูอีกด้วย
                </p>
            </article>
        </div>
    </section>

    <section id="history">
        <div class="container">
            <h1  data-aos="fade-up" >ประวัติของ <b>Basketball</b></h1>
            <article  data-aos="fade-up" >
                <p>
                    อีบีความพิเศษอย่างหนึ่งของบาสเกตบอล คือถูกคิดขึ้นโดยคนเพียงคนเดียว ต่างจากกีฬาส่วนใหญ่ที่วิวัฒนาการมาจากกีฬาอีกชนิด ช่วงต้นเดือนธันวาคม พ.ศ. 2434 <b>ดร. เจมส์ ไนสมิท</b> ครูสอนพละศึกษาชาวอเมริกันที่เกิดในแคนาดา และเป็นผู้ดูแลสถานที่ของวิทยาลัยแห่งหนึ่งของสมาคมวายเอ็มซีเอ (ปัจจุบันคือ วิทยาลัยสปริงฟีลด์) ในเมืองสปริงฟีลด์ รัฐแมสซาชูเซตส์ ค้นหาเกมในร่มที่ช่วยให้คนมีกิจกรรมทำระหว่างฤดูหนาวในแถบนิวอิงแลนด์ ว่ากันว่า หลังจากเขาไตร่ตรองหากิจกรรมที่ไม่รุนแรงเกินไปและเหมาะสมกับโรงยิม เขาเขียนกฎพื้นฐานและตอกตะปูติดตะกร้าใส่ลูกพีชเข้ากับผนังในโรงยิม เกมแรกที่เล่นเป็นทางการเล่นในโรงยิมวายเอ็มซีเอในเดือนถัดมา คือเมื่อ 20 มกราคม พ.ศ. 2435 (ค.ศ. 1892) ในสมัยนั้น เล่นโดยใช้ผู้เล่นเก้าคน สนามที่ใช้ก็มีขนาดประมาณครึ่งหนึ่งของสนามเอ็นบีเอในปัจจุบัน ชื่อ บาสเกตบอล เป็นชื่อที่เสนอโดยนักเรียนคนหนึ่ง และก็เป็นชื่อที่นิยมมาตั้งแต่ตอนต้น เกมแพร่ขยายไปยังวายเอ็มซีเอที่อื่นทั่วสหรัฐอเมริกา ไม่นานนักก็มีเล่นกันทั่วประเทศ

                    แต่ที่น่าสนใจคือ ถึงแม้ว่าวายเอ็มซีเอจะเป็นผู้ที่พัฒนาและเผยแพร่เกมในตอนแรก ภายในหนึ่งทศวรรษสมาคมก็ไม่สนับสนุนกีฬานี้อีก เนื่องจากการเล่นที่ทำให้รุนแรงและผู้ชมที่ไม่สุภาพ สมาคมกีฬาสมัครเล่นอื่น ๆ มหาวิทยาลัย และทีมอาชีพก็เข้ามาแทนที่ ก่อนช่วงสงครามโลกครั้งที่หนึ่ง สหภาพการกีฬาสมัครเล่น <b>(Amateur Athletic Union)</b> และ สมาคมการแข่งขันกีฬาระหว่างวิทยาลัย <b>(Intercollegiate Athletic Association)</b> (ซึ่งปัจจุบันคือเอ็นซีดับเบิลเอ, NCAA) ได้แข่งกันเพื่อจะเป็นผู้กำหนดกติกาของเกม
                    
                    เดิมนั้นการเล่นบาสเกตบอลจะใช้ลูกฟุตบอล ลูกบอลที่ทำขึ้นสำหรับบาสเกตบอลโดยเฉพาะในตอนแรกมีสีน้ำตาล ช่วงปลายคริสต์ทศวรรษ 1950 จึงเปลี่ยนมาใช้ลูกสีส้มเพื่อให้ผู้เล่นและผู้ชมมองเห็นลูกได้ง่ายขึ้น และก็ใช้ต่อเนื่องจนถึงปัจจุบัน ผู้ที่ริเริ่มใช้ลูกบาสเกตบอลสีส้มคือนาย โทนี ฮิงเคิล <b>(Tony Hinkle)</b> โค้ชมหาวิทยาลัยบัตเลอร์ <b></b>
                </p>
            </article>
        </div>
    </section>

    <section id="position">
        <div class="container">
            <h1  data-aos="fade-up" >ตําแหน่ง <b>Basketball</b></h1>
            <div class="row d-flex justify-content-center">
                <div class="col-lg-4 mt-5">
                    <div class="card h-100" data-aos="fade-up">
                        <img src="resources/images/2.png" class="card-img-top" alt="..." width="32px">
                        <div class="card-body">
                            <h5 class="card-title text-center">Point Guard</h5>
                            <p class="card-text">
                                พอยต์การ์ด หรือ การ์ดจ่าย (point guard)(PG) เป็นผู้เล่นตำแหน่งหนึ่งในบาสเกตบอล พอยต์การ์ดมักเป็นผู้เล่นที่มีรูปร่างเล็กที่สุดในทีมและมีหน้าที่เฉพาะ คือดูแลการบุกของทีมโดยควบคุมลูกและส่งลูกไปยังผู้เล่นที่เหมาะสมในเวลาที่ เหมาะสม พอยต์การ์ดมักเป็นผู้ที่นำลูกไปยังสนามฝั่งตรงข้ามเพื่อเริ่มเกมบุก ดังนั้นทักษะการส่งลูกและสายตาที่ดีเป็นสิ่งสำคัญมาก การประเมินพอยต์การ์ดมักดูจากจำนวนแอสซิสต์มากกว่าคะแนนที่ทำได้ อย่างไรก็ตามพอยต์การ์ดชั้นนำควรชู้ตลูกจากระยะไกลได้ดี
                            </p>
       
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mt-5">
                    <div class="card h-100" data-aos="fade-up">
                        <img src="resources/images/3.png" class="card-img-top" alt="..." width="32px">
                        <div class="card-body">
                            <h5 class="card-title text-center">Shooting Guard</h5>
                            <p class="card-text">
                                ชู้ตติ้งการ์ด (shooting guard)(SG) เป็นหนึ่งในตำแหน่งผู้เล่นในทีมบาสเกตบอล มักจะตัวเตี้ยกว่า ผอมกว่า และเร็วกว่าฟอร์เวิร์ด และมักรับหน้าที่ทำคะแนนและคุมผู้เล่นวงนอกที่เก่งที่สุดของของฝ่ายตรงข้าม ชื่อเรียกอื่นชู้ตติ้งการ์ดได้แก่ ทูการ์ด (2-guard) , บิ๊กการ์ด (big guard) และ ออฟการ์ด (off guard) แต่บางทีมก็มอบหมายหน้าที่ในการนำลูกเข้าแดนฝ่ายตรงข้ามด้วย เรียกผู้เล่นเหล่านี้ว่า คอมโบการ์ด (combo guard) ชู้ตติ้งการ์ดหลายคนที่มีรูปร่างใหญ่สามารถเล่นตำแหน่งสมอลฟอร์เวิร์ดได้ ด้วย ผู้เล่นที่สามารถเล่นสลับระหว่างชู้ตติ้งการ์ดกับสมอลฟอร์เวิร์ดเรียกว่า สวิงแมน (swingman)
                            </p>
       
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mt-5">
                    <div class="card h-100" data-aos="fade-up">
                        <img src="resources/images/4.png" class="card-img-top" alt="..." width="32px">
                        <div class="card-body">
                            <h5 class="card-title text-center">Small Forward</h5>
                            <p class="card-text">
                                สมอลฟอร์เวิร์ด (small forward)(SF) เป็นผู้เล่นตำแหน่งหนึ่งในบาสเกตบอล สมอลฟอร์เวิร์ดมักผอมเรียวกว่า เตี้ยกว่า แต่เร็วกว่า ผู้เล่นตำแหน่งเพาเวอร์ฟอร์เวิร์ดและเซ็นเตอร์ แต่หลายครั้งก็อาจสูงเท่ากัน ชื่อสมอลฟอร์เวิร์ดอาจบ่งบอกว่าตัวเล็กแต่นักบาสเกตบอลระดับอาชีพในเอ็นบีเอ ไม่เป็นเช่นนั้น สมอลฟอร์เวิร์ดมักมีส่วนสูงระหว่าง 6 ฟุต 5 นิ้ว ถึง 6 ฟุต 11 นิ้ว (1.96 ถึง 2.13 เมตร)  หน้าที่หลักของสมอลฟอร์เวิร์ดคือการทำคะแนน แต่บางคนมีหน้าที่เป็นพอยท์ฟอร์เวิร์ดและ รับผิดชอบการส่งบอลด้วย แต่อย่างไรก็ตามสมอลฟอร์เวิร์ดส่วนใหญ่ก็เป็นตัวทำคะแนนให้ทีม 
                            </p>
       
                        </div>
                    </div>
                </div>
            </div>

          <div class="row d-flex justify-content-center">
                <div class="col-lg-4 mt-5">
                    <div class="card h-100" data-aos="fade-up">
                        <img src="resources/images/5.png" class="card-img-top" alt="..." width="32px">
                        <div class="card-body">
                            <h5 class="card-title text-center">Power Forward</h5>
                            <p class="card-text">
                                เป็นผู้เล่นตำแหน่งหนึ่งในบาสเกตบอล สมอลฟอร์เวิร์ดมักผอมเรียวกว่า เตี้ยกว่า แต่เร็วกว่า ผู้เล่นตำแหน่งเพาเวอร์ฟอร์เวิร์ดและเซ็นเตอร์ แต่หลายครั้งก็อาจสูงเท่ากัน ชื่อสมอลฟอร์เวิร์ดอาจบ่งบอกว่าตัวเล็กแต่นักบาสเกตบอลระดับอาชีพในเอ็นบีเอ ไม่เป็นเช่นนั้น สมอลฟอร์เวิร์ดมักมีส่วนสูงระหว่าง 6 ฟุต 5 นิ้ว ถึง 6 ฟุต 11 นิ้ว (1.96 ถึง 2.13 เมตร)  หน้าที่หลักของสมอลฟอร์เวิร์ดคือการทำคะแนน แต่บางคนมีหน้าที่เป็นพอยท์ฟอร์เวิร์ดและ รับผิดชอบการส่งบอลด้วย แต่อย่างไรก็ตามสมอลฟอร์เวิร์ดส่วนใหญ่ก็เป็นตัวทำคะแนนให้ทีม 
                            </p>
    
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mt-5">
                    <div class="card h-100" data-aos="fade-up">
                        <img src="resources/images/6.png" class="card-img-top" alt="..." width="32px">
                        <div class="card-body">
                            <h5 class="card-title text-center">Center</h5>
                            <p class="card-text">
                                เซ็นเตอร์ (center)(C) เป็นผู้เล่นตำแหน่งหนึ่งในบาสเกตบอล เซ็นเตอร์มักจะเป็นผู้เล่นที่ตัวสูงที่สุดในทีม และถ้าให้ดีต้องมีกล้ามเนื้อเป็นมัดและมีน้ำหนักตัวมากอีกด้วย เซ็นเตอร์ในเอ็นบีเอโดยทั่วไปสูง 6 ฟุต 10 นิ้ว (2.08 เมตร) หรือมากกว่า
                                ในหลาย ๆ กรณี บทบาทหลักของเซ็นเตอร์ คือการเป็นตัวผู้เล่นที่ใหญ่มาก และใช้ข้อได้เปรียบเรื่องขนาดมาทำคะแนนหรือป้องกันในจุดที่ใกล้ห่วง 
                            </p>
    
                        </div>
                    </div>
                </div>
            </div> 

            
        </div>
    </section>

    <section id="rules">
        <div class="container">
            <h1  data-aos="fade-up" >กฎและกติกาของ <b>Basketball</b></h1>
            <article  data-aos="fade-up" >
                <article  data-aos="fade-up">
                    <p>
                        กฎเกี่ยวกับขนาดและเวลาที่ใช้แข่ง อาจแตกต่างกันขึ้นกับทัวร์นาเมนต์หรือองค์กรที่จัดการแข่งขัน รายละเอียดในส่วนนี้จะใช้ของสากลและเอ็นบีเอเป็นหลัก
    
                        <p>จุดมุ่งหมายของเกมคือ การทำคะแนนให้ได้มากกว่าคู่แข่งโดยการโยนลูกเข้าห่วงของคู่ต่อสู้จากด้านบน ในขณะที่ป้องกันไม่ให้คู่ต่อสู้โยนลูกลงห่วงของฝ่ายตน การโยนลูกในลักษณะนี้เรียกว่าการชูต (หรือช็อต shot) การชูตที่เข้าห่วงจะได้สองคะแนน แต่ถ้าผู้ชูตอยู่เลยเส้นสามคะแนนออกไปในขณะชูตลูกก็จะได้สามคะแนน เส้นสามคะแนนจะอยู่ห่างจากห่วงเป็นระยะ 6.75 เมตร (22 ฟุต 1 3/4 นิ้ว) ในกติกาสากล และ 23 ฟุต 9 นิ้ว (7.24 เมตร) ในกติกาเอ็นบีเอ การชูตลูกโทษหรือที่เรียกว่า ฟรีโทรว์ (free throw) เมื่อฟาวล์มีค่าหนึ่งคะแนน</p>
                    </p>
                </article>
                <article data-aos="fade-up" id="rules0">
                    <b>วิธีการเล่น</b>
                    <p>
                        <p>เกมจะแบ่งการเล่นเป็น 4 ควอเตอร์ (quarter) แต่ละควอเตอร์มี 10 นาที (สากล) หรือ 12 นาที (เอ็นบีเอ) ช่วงพักครึ่งนาน 15 นาที ส่วนพักอื่น ๆ ยาว 2 นาที ช่วงต่อเวลา (overtime) ยาว 5 นาที ทีมจะสลับด้านสนามเมื่อเริ่มครึ่งหลัง เวลาจะเดินเฉพาะระหว่างที่เล่น และนาฬิกาจะหยุดเดินเมื่อเกมหยุด เช่น เมื่อเกิดการฟาวล์ หรือระหว่างการชูตลูกโทษ เป็นต้น ดังนั้นเวลาทั้งหมดที่ใช้แข่งมักยาวกว่านี้มาก (ประมาณสองชั่วโมง)</p>
                        
                        <p>ในขณะใดขณะหนึ่งจะมีผู้เล่นในสนามฝ่ายละห้าคน และจะมีผู้เล่นสำรองสูงสุดทีมละเจ็ดคน สามารถเปลี่ยนตัวได้ไม่จำกัดและเปลี่ยนได้เฉพาะเมื่อเกมหยุด ทีมยังมีโค้ชที่ดูแลทีมและวางกลยุทธ์ในการเล่น รวมถึงผู้ช่วยโค้ช ผู้จัดการทีม นักสถิติ แพทย์ และเทรนเนอร์</p>
                        
                        <p>เครื่องแบบนักกีฬาสำหรับทีมชายและหญิงตามมาตรฐานได้แก่ กางเกงขาสั้นและเสื้อกล้ามที่มีหมายเลขผู้เล่นชัดเจนพิมพ์ทั้งด้านหน้าและด้านหลัง รองเท้าเป็นรองเท้ากีฬาหุ้มข้อเท้า อาจมีชื่อทีม ชื่อนักกีฬา และสปอนเซอร์ ปรากฏบนชุดด้วยก็ได้</p>
                        
                        <p>แต่ละทีมจะได้เวลานอกจำนวนหนึ่งสำหรับให้โค้ชและผู้เล่นปรึกษากัน มักยาวไม่เกินหนึ่งนาที ยกเว้นเมื่อต้องการโฆษณาระหว่างการถ่ายทอดสด</p>
                        
                    <p> เกมควบคุมโดยกรรมการและหัวหน้ากรรมการผู้ตัดสินในสนาม และกรรมการโต๊ะ กรรมการโต๊ะมีหน้าที่บันทึกคะแนน ควบคุมเวลา บันทึกจำนวนฟาล์วผู้เล่นและฟาล์วทีม ดูเรื่องการเปลี่ยนตัว โพเซสซันแอร์โรว์ และช็อตคล็อก</p>
                    </p>
                </article>
                <article data-aos="fade-up" id="rules1">
                    <b>อุปกรณ์การเล่น</b>
                    <p>
                        <p>อุปกรณ์ที่จำเป็นจริง ๆ ในกีฬาบาสเกตบอลมีเพียงลูกบอลและสนามที่มีห่วงติดอยู่ที่ปลายทั้งสองด้าน แต่ในการแข่งขันต้องมีอุปกรณ์อื่นเพิ่ม เช่น นาฬิกา กระดาษบันทึกคะแนน สกอร์บอร์ด โพเซสซันแอร์โรว์ ระบบหยุดนาฬิกาด้วยนกหวีด เป็นต้น</p>
                        
                        <p>ลูกบาสและหนักประมาณ 1 ปอนด์ 5 ออนส์ (600 กรัม) ลูกบาสเกตบอลหญิงมีเส้นรอบวงประมาณ 29 นิ้ว (73 ซม.) และหนักประมาณ 1 ปอนด์ 3 ออนส์ (540 กรัม) สนามบาสเกตบอลมาตรฐานในเกมสากลมีขนาด 28 คูณ 15 เมตร (ประมาณ 84 คูณ 50 ฟุต) ส่วนในเอ็นบีเอมีขนาด 87 คูณ 50 ฟุต (29 คูณ 15 เมตร) พื้นสนามส่วนใหญ่ทำด้วยไม้</p>
                    </p>
                </article>
                <article data-aos="fade-up" id="rules2">
                    <b>ข้อบังคับ</b>
                    <p>ผู้เล่นห้ามขยับขาทั้งสองพร้อมกันในขณะเลี้ยงลูกพร้อมกันทั้งสองมือ หรือเลื้ยงลูกแล้วจับลูกแล้วเลี้ยงลูกต่อ เวลาเลี้ยงมือของผู้เล่นต้องอยู่ด้านบนของลูก มิฉะนั้นจะนับว่า ถือลูก ถ้าทีมพาลูกไปยังแดนของฝ่ายตรงข้ามของสนาม แล้ว ห้ามนำลูกกลับเข้าแดนตนเอง อีก ห้ามเตะหรือชกลูก ถ้าทำผิดกฎข้อห้ามเหล่านี้จะเสียการครองบอล อีกฝ่ายจะเป็นฝ่ายได้ลูกไปเล่น แต่ถ้าฝ่ายรับทำผิดกฎฝ่ายที่ครองบอลจะได้เริ่มช็อตคล็อกใหม่</p>
                </article>          
                <article data-aos="fade-up" id="rules3">
                    <b>ฟาวล์</b>
                    <p>กรรมการแสดงสัญญาณฟาวล์โดยการเป่านกหวีดแล้วชูกำปั้นข้างซ้ายขึ้น การเล่นที่กระทบกระทั่งผู้เล่นฝ่ายตรงข้ามให้อีกฝ่ายเสียเปรียบและไม่เป็นธรรม ถือเป็นข้อห้ามที่ถ้าฝ่าฝืนจะนับเป็น ผู้เล่นตั้งรับมักจะเป็นคนทำฟาวล์แต่ผู้เล่นฝ่ายรุกก็สามารถทำฟาวล์ได้เช่นเดียวกัน คนที่ถูกฟาวล์จะได้ส่งลูกจากข้างสนาม เพื่อเล่นต่อ หรือได้ชูตลูกโทษ หรือ ถ้าการฟาวล์เกิดขึ้นขณะกำลังชูตลูก การชูตลูกโทษลงห่วงครั้งหนึ่งจะได้หนึ่งคะแนน ผู้เล่นจะได้ชูตลูกโทษหนึ่งกี่ครั้งขึ้นกับว่าลูกที่ผู้เล่นชูตตอนถูกฟาวล์นั้นได้แต้มหรือไม่ เวลาชูตลูกโทษผู้เล่นต้องยืนหลังเส้นลูกโทษซึ่งห่างจากห่วง 4.5 เมตร</p>
                </article>
                <article data-aos="fade-up" id="rules4">
                    <b>กติกาบาสเกตบอล 13 ข้อ</b>
                    <p>
                        <ul>
                            <li>สามารถโยนลูกบอลด้วยมือข้างเดียวหรือสองมือ</li>
                            <li>สามารถตีลูกบอลด้วยมือข้างเดียวหรือสองมือ แต่ต้องไม่ใช้กำปั้น</li>
                            <li>ห้ามถือลูกบอลวิ่งต้องโยนลูกบอลจากจุดที่ถือลูกบอล ผู้เล่นสามารถวิ่งเพื่อคว้าบอล</li>
                            <li>ต้องถือลูกบอลด้วยมือ แขนหรือลำตัว ห้ามดึงลูกบอล</li>
                            <li>ห้ามใช้ไหล่ดัน ผลัก ดึง ตบหรือตี ฝ่ายตรงข้าม หากเกิดการละเมิดให้ถือเป็น ฟาล์ว หาก กระทำซ้ำอีก ถือเป็น ฟาล์วเสียสิทธิ์ จนกว่าจะเกิดการยิงประตูเป็นผลในคราวต่อไป หรือเกิดผู้เล่นบาดเจ็บของผู้เล่นตลอดการแข่งขัน ห้ามเปลี่ยนตัวผู้เล่น</li>
                            <li>การฟาล์วเป็นการกระแทกลูกบอลด้วยกำปั้นและการผิดระเบียบของกติกาข้อ 3,4 และตาม รายละเอียดตามกติกาข้อ 5</li>
                            <li>หากผู้เล่นฝ่ายเดียวกันกระทำฟาล์วติดต่อกัน 3 ครั้ง ให้นับคะแนน (การฟาล์วติดต่อกัน หมายถึง เป็นการฟาล์วที่ไม่มีการฟาล์วของฝ่ายตรงข้ามคั่นระหว่างการฟาล์วติดต่อนั้น)</li>
                            <li>เมื่อลูกบอลถูกตี หรือโยนจากพื้นเสข้าประตู ให้นับคะแนน หากลูกบอลค้างก้านห่วงโดยผู้ เล่นฝ่ายป้องกันสัมผัสหรือกระทบประตู ให้นับคะแนน</li>
                            <li>เมื่อลูกบอลออกนอกสนามให้ส่งบอลเข้าเล่นที่สัมผัสลูกบอลครั้งแรกในกรณี ที่มีผู้คัดค้าน กรรมการผู้ร่วมตัดสิน (Umpire) จะโยนบอลเข้าไปในสนาม ผู้เล่น ที่ส่งบอลสามารถใช้เวลาได้ 5 วินาที หากเกินกว่านั้นฝ่ายตรงข้ามได้ส่งบอลแทน หากมีการคัดค้านและทำให้การแข่งขัน ล่าช้า กรรมการผู้ร่วมตัดสิน (Umpire) สามารถขานฟาล์วเทคนิค</li>
                            <li>กรรมการผู้ร่วมตัดสิน (Umpire) มีหน้าที่ตัดสินและจดบันทึดการฟาล์ว เกิดฟาล์วต่อกัน ครบ 3 ครั้ง ให้แจ้งต่อผู้ตัดสิน (Referee) และสามารถให้ฟาล์วเสียสิทธิ์ ตามกติกาข้อ 5</li>
                            <li>ผู้ตัดสิน (Referee) มีหน้าที่ตัดสินชี้ขาด เมื่อลูกบอลเข้าสู่การเล่นในพื้นที่ของเขาและเป็นผู้ จับเวลา ,ให้คะแนนเมื่อเกิดการยิงประตูเป็นผล ,จดบันทึกคะแนนและรับผิดชองตามพื้นที่</li>
                            <li>เวลาการแข่งขัน แบ่งเป็น 2 ครึ่ง ๆละ 15 นาที พัก 5 นาที</li>
                            <li>
                                เมื่อหมดเวลาการแข่งขัน ฝ่ายที่ทำคะแนนมากกว่าเป็นผู้ชนะ กรณีมีคะแนนเท่ากันให้ หัวหน้าทีมตกลงกันเพื่อแข่งขันต่อจนกว่ามีฝ่ายใดทำคะแนนได้

                                พ.ศ. 2435 เริ่มมีการแข่งขันบาสเกตบอลครั้งแรก ระหว่างนักศึกษากับคณะครู ของวิทยาลัย สปริงฟิล (Springfield College) ผลการแข่งขัน นักศึกษาชนะ 5:1 

                                พ.ศ. 2435 เริ่มมีการเผยแพร่เข้าไปเล่นในประเทศเม็กซิโก (Mexico) ในปีเดียวกัน Lew Allen of Hartford ได้ประดิษฐ์ประตูทรงกระบอกที่ทำจากเส้นลวดลักษณะคล้ายกับของ Dr.James Naismith ห่วงประตูยังตงติดตั้งไว้ตำแหน่งเดิม
                                มีตะแกรงป้องกันลูกบอลสำหรับผู้ชมทำให้มีความสนุกสนานเพลิดเพลิน มีการจัดทำกระดานหลังแผ่นแรกขึ้น มีขนาด 3.6 เมตร * 1.8 เมตร 
                            </li>
                        </ul>

                    </p>
                </article>
            </article>
        </div>
    </section>

    <section id="example">
        <div class="container">
            <h1  data-aos="fade-up" >ตัวอย่างการเล่น <b>Basketball</b></h1>
            
            <div class="row gap-3 d-flex justify-content-center">
                <div class="col-lg-5 col-sm-12 mt-3" data-aos="fade-up" style="height: 500px;">
                    <video width="100%" height="100%" controls>
                        <source src="resources/videos/4.mp4" type="video/mp4">
                      Your browser does not support the video tag.
                    </video>
    
                </div>
                <div class="col-lg-5 col-sm-12 mt-3" data-aos="fade-up" style="height: 500px;">
                    <video width="100%" height="100%" controls>
                        <source src="resources/videos/5.mp4" type="video/mp4">
                      Your browser does not support the video tag.
                    </video>
                </div>
            </div>

   
        </div>
    </section>

    <footer>
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-lg-4">
                    <b>อื่นๆ</b>
                    <ul>
                        <li><strong>วิชา : </strong> <span>การพัฒนาเว็บไซต์ด้วยภาษาเฮชทีเอ็มแอล</span></li>
                        <li><strong>รหัสวิชา : </strong> <span>20901-2004</span></li>
                        <li><strong>เรื่อง : </strong> <span>ข้อสอบปลายภาค</span></li>
                        <li><strong>อาจารย์ที่ปรึกษา : </strong> <span>นาย นายกฤษฎา  อำนาจเจริญ</span></li>
                    </ul>
                </div>
                <div class="col-lg-4">
                    <b>อ้างอิง</b>
                    <ul>
                        <li><a href="https://th.wikipedia.org/wiki/%E0%B8%9A%E0%B8%B2%E0%B8%AA%E0%B9%80%E0%B8%81%E0%B8%95%E0%B8%9A%E0%B8%AD%E0%B8%A5" target="_blank">Wikipedia</a></li>
                        <li><a href="https://sites.google.com/site/primarybasketball/thaksa-phun-than/tahaenng-phu-len-khorngsrang" target="_blank">Primary Basketball</a></li>
                        <li><a href="https://sites.google.com/site/websitbasketbxl1/kd-ktika-basketbxl" target="_blank">Websitbasketbxl1</a></li>
                        <li><a href="https://th.wikipedia.org/wiki/%E0%B8%AA%E0%B9%81%E0%B8%A5%E0%B8%A1%E0%B8%94%E0%B8%B1%E0%B8%87%E0%B8%81%E0%B9%8C" target="_blank">Slam Dunk</a></li>
                    </ul>
                </div>
                <div class="col-lg-4">
                    <b>ติดต่อ</b>
                    <ul>
                        <li><strong>Facebook: </strong> <a href="https://www.facebook.com/AchirawitKaewkhong/" target="_blank">Achirawit Kaewkhong</a></li>
                    </ul>
                </div>
                
            </div>
        </div>
    </footer>
    
    <script src="resources/js/bootstrap.bundle.js"></script>
    <script src="resources/js/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>