<html>
    <head>
        <meta charset="utf-8"/>
        <script
            src="https://code.jquery.com/jquery-3.7.1.js"
            integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
            crossorigin="anonymous"> // jQuery CDN library
        </script> 
        <style>
            @keyframes imgSwitch {
                0%{ opacity: 0; }
                20%{ opacity: 1; }
                80%{ opacity: 1;}
                100%{ opacity: 0; }
            }
            body{
                margin: 0px; padding: 0px;
                background-color: lightseagreen;
                background-image: linear-gradient(to bottom, lightseagreen, lightgreen);
            }
            #main_logo{
                display: flex;

            }
            #logo{
                width: 100%;

            }
            #top{
                display: flex;
                z-index: 10;
                width: 100%;
                align-items: center;
                justify-content: space-around;
                background-color: white;
                position: fixed;
            }
            #inner{
                display: flex;
                justify-content: space-between;
                width: 1200px;
                height: 90px;
            }
            #menu{
                width: 30%;
                display: flex;
                justify-content: space-around;
                flex: 3;
                margin: 0;
            }
            #login{
                width: 10%;
                display: flex;
                flex: 0.5;
                align-items: center;
                justify-content: space-around;
            }
            #ad{
                width: 50%; height: 70%;
                padding-top: 150px;
                padding-left: 50px;
            }
            #images{
                width: 100%;
                border-radius: 10px;
                background-color: white;
                text-align  : center;
            }
            #imgList{
                animation: imgSwitch 8000ms infinite;
            }
            
            a{
                text-decoration: none;
                color: black;    
            }
            .menu_main{
                font-size: 23px;
                width: 30%;
                height: 50%;
            }
            #menu ul{
                margin: 0px;
                padding: 0px;
                width: 60%;
                display: flex;
                align-items: center;
                justify-content: space-between;
            }
            #menu ul li{
                
                display: inline-block;
                list-style: none;

            }
            #top #inner #menu a{
                text-align: center;
            }
        </style>
        <script type="text/javascript">
            // let imgArray=["pic1.png","pic2.png","pic3.png"];
            // var objImg=document.getElementById("imgList");

            function showImage(){
                
                let imgArray = ["pic1.png", "pic2.png", "pic3.png"];
                let objImg = document.getElementById("imgList");
                objImg.src = imgArray[0];
                let index = 1;

                setInterval(() => {
                    objImg.src = imgArray[index];
                    // console.log(`${imgArray[index]} : ${index}`);
                    index = (index + 1) % imgArray.length; // 다음 인덱스로 이동, 마지막 인덱스 이후에는 0으로 돌아감
                }, 8000); // 3초마다 실행

            }
        </script>
    </head>
    <body onload="showImage();">
        <div id="top">
            <div id="inner"> 
                <a href="index.php" id="main_logo">
                    <img id="logo" src="logo.png"/>
                </a>
                <div id="menu">
                    <!-- <a href="" class="menu_main">예약</a>
                    <a href="" class="menu_main">예약 조회</a>
                    <a href="" class="menu_main">이용 안내</a> -->
                    <ul>
                        <li><a href="" class="menu_main">예약</a></li>
                        <li><a href="" class="menu_main">예약 조회</a></li>
                        <li><a href="" class="menu_main">이용 안내</a></li>
                    </ul>
                </div>
                <div id="login">
                    <a href="">로그인</a>
                    <a href="">회원가입</a>
                </div>   
            </div>
            
        </div>

        <div id="ad">
            <div id="images">
                <img id="imgList" width="90%" height="70%">
            </div>
        </div>
        <p>
            <br>1
            <br>1<br>1<br>1<br>1<br>1<br>1<br>1<br>1<br>1<br>1<br>1<br>1<br>1<br>1
            <br>1<br>1<br>1<br>1<br>1<br>1<br>1<br>1<br>1<br>1<br>1<br>1<br>1<br>1
            <br>1<br>1<br>1<br>1<br>1<br>1<br>1<br>1<br>1<br>1<br>1<br>1<br>1<br>1<br>1
            <br>1<br>1<br>1<br>1<br>1<br>1<br>1<br>1<br>1<br>1<br>1<br>1<br>1<br>1
            <br>1
            <br>1<br>1<br>1<br>1<br>1<br>1<br>1<br>1<br>1<br>1<br>1<br>1<br>1<br>1
            <br>1<br>1<br>1<br>1<br>1<br>1<br>1<br>1<br>1<br>1<br>1<br>1<br>1<br>1
            <br>1<br>1<br>1<br>1<br>1<br>1<br>1<br>1<br>1<br>1<br>1<br>1<br>1<br>1<br>1
            <br>1<br>1<br>1<br>1<br>1<br>1<br>1<br>1<br>1<br>1<br>1<br>1<br>1<br>1<br>1
            <br>1<br>1<br>1<br>1<br>1<br>1<br>1<br>1<br>1<br>1<br>1<br>1<br>1<br>1
            <br>1<br>1<br>1<br>1<br>1<br>1<br>1<br>1<br>1<br>1<br>1<br>1<br>1<br>1
            <br>1<br>1<br>1<br>1<br>1<br>1<br>1<br>1<br>1<br>1<br>1<br>1<br>1<br>1<br>1
            <br>1<br>1<br>1<br>1<br>1<br>1<br>1<br>1<br>1<br>1<br>1<br>1<br>1<br>1
        </p>
    </body>
</html>