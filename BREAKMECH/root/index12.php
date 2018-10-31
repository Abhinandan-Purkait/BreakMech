<html>
<head>
<title>
SQL QUERY SEARCH
</title>
<style>
.button{
    background-color:blue;
    border-color:black;
    border-style:solid;
    border-radius:5px;
    color:white;
}
.button:hover{
    transform:scale(1.1);
}
h1{
    color:blue;
}
#box{
    border-color:black;
    border-style:solid;
    border-radius:5px;
}
#box:hover{
    transform:scale(1.005);
}
</style>
</head>
<body>
<center>
<h1 style="margin-top:15%;">Enter Your Query Here</h1>
<form action="query_execute.php" target="myframe">
<input id="box"  style="width: 804px;" type="text" name="querytracker" oninput="call()">
<input class="button" type="submit" name="submit">
</center>
</form>
<br>
<center>
<iframe name="myframe" width="70%" height="40%"></iframe>
</center>
<script>
function call(){
    var x=document.getElementById("box").value;
    var y=x.substring(0,6);
    if((y.localeCompare("DELETE"))==0){
    location.reload();
    alert("CANNOT DELETE SORRY");
    }
}
</script>
</body>
</html>




