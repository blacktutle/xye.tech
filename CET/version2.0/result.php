<?php
require("query.php");
$name=$_POST["name"];
$id=$_POST["id"];
$data=cet($name,$id);
if($data==false){ 
    header("Location:./notfound.php"); 
	exit;
}
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width,initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no">
		<title>CET四六级成绩查询</title>
		<style type="text/css">
            p{
            	margin: 0;
            }
            #div1{
                background-image: url("./img/index_bg.png");
                height: 100%;
                width: 100%;
                background-size: cover;
                position:fixed;
                top:0;
                left:0;
                bottom:0;
                right:0;
                z-index:-1;
            }
            .label{
                font-size: 15px;
            	color: #00A2E9;
            }
            .result_div{
            	margin-left: 8%;
            }
            .first_title{
                text-align: center;
                font-size: 20px;
            	margin-top: 24%;
            	color: #00A2E9;
            }
            .title{
                text-align: center;
                font-size: 20px;
                margin-top: 5px;
                font-size: 20px;
            	color: #00A2E9;
            }
            .result{
            	color: white;
            }
            hr{
                margin-top: 20px;
                border: none;
                border-top: 1px solid #00A2E9;
            	width: 90%;
            }
            .pass_img{
            	position: absolute;
                right: 30px;
                width: 60px;
                bottom: 40px;
            }
            .button{
                outline: none;
                margin-top: 10px;
                background-color: transparent;
              	border-radius: 14px;
    			border: 2px solid #00A2E9;
               	width: 100px;
    			padding: 5px 10px;
                font-size: 19px;
                color: #00A2E9;
    			text-align: center;
    			text-decoration: none;
    			display: inline-block;
                position: relative;
                left: 50%;
                margin-left: -50px;
            }
            .bottom{
            	margin-top: 40px;
                color: #00A2E9;
                text-align: center;
                font-size: 13px;
            }
		</style>
	</head>
	<body>
        <div id="div1"></div>
        <p class="first_title">查询结果</p>
        <div class="result_div">
            <label class="label">姓名</label>
            <span class="result" id="name"><?php echo $data[7]?></span>
        </div>
        <div class="result_div">
            <label class="label">学校</label>
            <span class="result" id="school"><?php echo $data[6]?></span>
        </div>
        <hr/>
        <p class="title">笔试成绩</p>
        <div class="result_div">
            <label class="label">准考证号</label>
            <span class="result" id="number1"><?php echo $data[1]?></span>
        </div>
        <div class="result_div">
            <label class="label">听力</label>
            <span class="result" id="listen"><?php echo $data[2]?></span>
        </div>
        <div class="result_div">
            <label class="label">阅读</label>
            <span class="result" id="read"><?php echo $data[3]?></span>
        </div>
        <div class="result_div">
            <label class="label">写作翻译</label>
            <span class="result" id="write"><?php echo $data[4]?></span>
        </div>
        <div class="result_div">
            <label class="label">成绩总分</label>
            <strong class="result" id="all"><?php echo $data[5]?></strong>
        </div>
        <hr/>
        <p class="title">口试成绩</p>
        <div class="result_div">
	        <label class="label">准考证号</label>
    	    <span class="result" id="number2"><?php echo $data[9]?></span>
        </div>
		<div class="result_div">
            <label class="label">等级</label>
            <span class="result" id="state"><?php echo $data[10]?></span>
        </div>
        <button class="button" onclick="window.location.href='./index.php'">继 续</button>
        <img id="img" class="pass_img">
		<div class="bottom">Powered by 小耶科技</div>
	</body>
</html>
<script type="text/javascript">
    document.body.style.height=window.screen.width;
    var w = document.documentElement.clientWidth || document.body.clientWidth;
    document.getElementById("name").style.marginLeft=0.84*w/2-80+"px";
    document.getElementById("school").style.marginLeft=0.84*w/2-80+"px";
    document.getElementById("number1").style.marginLeft=0.84*w/2-110+"px";
    document.getElementById("listen").style.marginLeft=0.84*w/2-80+"px";
	document.getElementById("read").style.marginLeft=0.84*w/2-80+"px";
    document.getElementById("write").style.marginLeft=0.84*w/2-110+"px";
    var result=document.getElementById("all");
    result.style.marginLeft=0.84*w/2-110+"px";
    result.style.color="#1AEC19";
    if(result.innerText<425){
    	var img=document.getElementById("img");
        img.src="./img/fail.png";
        img.alt="不通过";
        result.style.color="#EC1A1B";
    }
    else{
    	var img=document.getElementById("img");
        img.src="./img/pass.png";
        img.alt="通过";
    }
    document.getElementById("number2").style.marginLeft=0.84*w/2-110+"px";
    document.getElementById("state").style.marginLeft=0.84*w/2-80+"px";
</script>
