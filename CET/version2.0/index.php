<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width,initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no">
		<title>CET四六级成绩查询</title>
		<style type="text/css">
            input{
            	background-color: transparent;
                border: none;
                outline: none;
                font-size: 19px;
                color: white;
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
			.form{
				margin-top: 35%;
			}
            .name,.number{
                color: #00A2E9;
                font-size: 19px;
                text-align: center;
            }
            .number{
            	margin-top: 20px;
            }
            .name>input{
            	width: 210px;
            }
            .number>input{
            	width: 172px;
            }
            hr{
                margin-top: 20px;
                border: none;
                border-top: 1px solid #00A2E9;
            	width: 90%;
            }
            .submit{
                outline: none;
                margin-top: 40px;
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
            .QR{
                margin-top: 40px;
                width: 100px;
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
		<form class="form" method="post" action="result.php">
			<div class="name">
	      		<label>姓名:</label>
  	    		<input type="text" name="name" placeholder="请输入姓名"/>
    		</div>
    		<div class="number">
	      		<label>准考证号:</label>
  	    		<input type="number" name="id" placeholder="请输入15位准考证号"/>
    		</div>
        	<hr/>
      		<input class="submit" type="submit" value="查 询" onclick="return check(this.form)">
        </form>
		<img class="QR" src="./img/QRcode.png" alt="二维码">
		<div class="bottom">Powered by 小耶科技</div>
	</body>
</html>
<!--简单验证-->
<script type="text/javascript">
    function check(form){
        if(form.name.value=="") {
            alert("请输入姓名!");
            form.name.focus();
            return false;
        }
        if(form.id.value==""){
            alert("请输入准考证号!");
            form.id.focus();
            return false;
        }
        else if(form.id.value.length!=15){
         	alert("请输入正确的准考证号");
            form.id.focus();
            return false;
        }
        return true;
    }
</script>
