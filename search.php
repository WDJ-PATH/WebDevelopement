


<!DOCTYPE html>
<html>
<style>
.searchbox_1{
background-color: #fffbf8;
padding:13px;
width:335px;
margin: 100px auto;
-webkit-box-sizing:border-box;
-moz-box-sizing:border-box;
box-sizing:border-box;
border-radius:6px;
-webkit-box-shadow:
0 2px 4px 0 rgba(72, 72, 72, 0.83),
0 10px 15px 0 rgba(126, 126, 126, 0.12),
0 -2px 6px 1px rgba(199, 199, 199, 0.55) inset,
0 2px 4px 2px rgba(255, 255, 255, 0.83) inset;
-moz-box-shadow:
0 2px 4px 0 rgba(72, 72, 72, 0.83),
0 10px 15px 0 rgba(126, 126, 126, 0.12),
0 -2px 6px 1px rgba(199, 199, 199, 0.55) inset,
0 2px 4px 2px rgba(255, 255, 255, 0.83) inset;
box-shadow:
0 2px 4px 0 rgba(72, 72, 72, 0.83),
0 10px 15px 0 rgba(126, 126, 126, 0.12),
0 -2px 6px 1px rgba(199, 199, 199, 0.55) inset,
0 2px 4px 2px rgba(255, 255, 255, 0.83) inset;
}
.search_1{
width:250px;
height:30px;
padding-left:15px;
border-radius:6px;
border:none;
color:#0F0D0D;;
font-weight:500;
background-color:#E2EFF7;;
-webkit-box-shadow:
0 -2px 2px 0 rgba(199, 199, 199, 0.55),
0 1px 1px 0 #fff,
0 2px 2px 1px #fafafa,
0 2px 4px 0 #b2b2b2 inset,
0 -1px 1px 0 #f2f2f2 inset,
0 15px 15px 0 rgba(41, 41, 41, 0.09) inset;
-moz-box-shadow:
0 -2px 2px 0 rgba(199, 199, 199, 0.55),
0 1px 1px 0 #fff,
0 2px 2px 1px #fafafa,
0 2px 4px 0 #b2b2b2 inset,
0 -1px 1px 0 #f2f2f2 inset,
0 15px 15px 0 rgba(41, 41, 41, 0.09) inset;
box-shadow:
0 -2px 2px 0 rgba(199, 199, 199, 0.55),
0 1px 1px 0 #fff,
0 2px 2px 1px #fafafa,
0 2px 4px 0 #b2b2b2 inset,
0 -1px 1px 0 #f2f2f2 inset,
0 15px 15px 0 rgba(41, 41, 41, 0.09) inset;
}
.submit_1{
width:100px;
height:30px;
padding-left:15px;
border-radius:6px;
background-image:url(img/formbutton.jpg);
background-repeat: no-repeat;
background-position: 17px 2px;
background-color:transparent;
-webkit-background-size:75px 100px;
background-size:75px 100px;
border:none;
cursor:pointer;
}
.search_1:focus{
outline:0;
}
</style>
<head>
    <script>
    function yourFunction(){

    var urlLink = "http://localhost/result.php";

    var urlLink1 = "https://cve.circl.lu/api/search/";
    var action_src = document.getElementsByName("Vendor")[0].value;
    urlLink1 = urlLink1 +action_src+"/";
    var action_src = document.getElementsByName("Product")[0].value;
    urlLink1 = urlLink1 + action_src;
    
    var your_form = document.getElementById("your_form");

    your_form.action = urlLink;
}
    </script>
</head>
<body style="background-image:url('img/bluebg1.jpg'); height:100%;background-position: center ; background-size:all;background-repeat:no-repeat;">
    <h1><center>TAILORED CVE REPORT</center></h1>
    <marquee><h2>Enter product to search for the report</h2></marquee>
<!-- search form 1 -->
<form id="your_form" method="POST" class="searchbox_1" action="result.php" onsubmit="yourFunction(); ">
<input type="vendor" class="search_1" name="Vendor" placeholder="Vendor" required />
<input type="product" class="search_1" name="Product" placeholder="Product" required />
<button type="submit" class="submit_1" value="search" > Search</button>
</form>
</body>
</html>