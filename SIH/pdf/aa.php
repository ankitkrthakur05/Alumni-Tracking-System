<?php
include "conn.php";
?>

<html>
<head>
    <link rel="stylesheet" type="text/css" href="css/registerstu.css">
</head>
<body>

<div class="wrap">
<h2>Sign in here</h2>
<form action="input.php" method ="POST">
<font face="Calibri" color="grey">
<input type="text" name="name" placeholder="Name">
<input type="text" name="fname" placeholder="Father's Name">
<input type="text" name="mname" placeholder="Mother's Name">
<input type="password" name="pwd" placeholder="Password"><br>
   Date Of Birth :<br>
<select name="date">
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
<option value="6">6</option>
<option value="7">7</option>
<option value="8">8</option>
<option value="9">9</option>
<option value="10">10</option>
<option value="11">11</option>
<option value="12">12</option>
<option value="13">13</option>
<option value="14">14</option>
<option value="15">15</option>
<option value="16">16</option>
<option value="17">17</option>
<option value="18">18</option>
<option value="19">19</option>
<option value="20">20</option>
<option value="21">21</option>
<option value="22">22</option>
<option value="23">23</option>
<option value="24">24</option>
<option value="25">25</option>
<option value="26">26</option>
<option value="27">27</option>
<option value="28">28</option>
<option value="29">29</option>
<option value="30">30</option>
<option value="31">31</option>
</select>
<select name="month">
<option value="jan">January</option>
<option value="feb">Febrary</option>
<option value="mar">March</option>
<option value="apr">April</option>
<option value="may">May</option>
<option value="jun">June</option>
<option value="jul">July</option>
<option value="aug">August</option>
<option value="sep">September</option>
<option value="oct">October</option>
<option value="nov">November</option>
<option value="dec">December</option>
</select>
<select name="year">
<option value="1">2010</option>
<option value="2">2009</option>
<option value="3">2008</option>
<option value="4">2007</option>
<option value="5">2006</option>
<option value="6">2005</option>
<option value="7">2004</option>
<option value="8">2003</option>
<option value="9">2002</option>
<option value="10">2001</option>
<option value="11">2000</option>
<option value="12">1999</option>
<option value="13">1998</option>
<option value="14">1997</option>
<option value="15">1996</option>
<option value="16">1995</option>
<option value="17">1994</option>
<option value="18">1993</option>
<option value="19">1992</option>
<option value="20">1991</option>
<option value="21">1990</option>
<option value="22">1989</option>
<option value="23">1988</option>
<option value="24">1987</option>
<option value="25">1986</option>
<option value="26">1985</option>
<option value="27">1984</option>
<option value="28">1983</option>
<option value="29">1982</option>
<option value="30">1981</option>
<option value="31">1980</option>
</select>
<input type="text" name="rollno" placeholder="University Roll no."><br>
Batch<br>
From:
<select name="from">
<option value="1">2000</option>
<option value="2">2001</option>
<option value="3">2002</option>
<option value="4">2003</option>
<option value="5">2004</option>
<option value="6">2005</option>
<option value="7">2006</option>
<option value="8">2007</option>
<option value="9">2008</option>
<option value="10">2009</option>
<option value="11">2010</option>
<option value="12">2011</option>
<option value="13">2012</option>
<option value="14">2013</option>
<option value="15">2014</option>
<option value="16">2015</option>
<option value="17">2016</option>
<option value="18">2017</option>
<option value="19">2018</option>
<option value="20">2019</option>
<option value="21">2020</option>
<option value="22">2021</option>
<option value="23">2022</option>
<option value="24">2023</option>
<option value="25">2024</option>
<option value="26">2025</option>
<option value="27">2026</option>
<option value="28">2027</option>
<option value="29">2028</option>
<option value="30">2029</option>
<option value="31">2030</option>
</select>
-
<select name="to">
<option value="1">2003</option>
<option value="2">2004</option>
<option value="3">2005</option>
<option value="4">2006</option>
<option value="5">2007</option>
<option value="6">2008</option>
<option value="7">2009</option>
<option value="8">2010</option>
<option value="9">2011</option>
<option value="10">2012</option>
<option value="11">2013</option>
<option value="12">2014</option>
<option value="13">2015</option>
<option value="14">2016</option>
<option value="15">2017</option>
<option value="16">2018</option>
<option value="17">2019</option>
<option value="18">2020</option>
<option value="19">2021</option>
<option value="20">2022</option>
<option value="21">2023</option>
<option value="22">2024</option>
<option value="23">2025</option>
<option value="24">2026</option>
<option value="25">2027</option>
<option value="26">2028</option>
<option value="27">2029</option>
<option value="28">2030</option>
<option value="29">2031</option>
<option value="30">2032</option>
<option value="31">2033</option>
</select>
<input type="number" name="phone" placeholder="Mobile no.">
<input type="text" name="place" placeholder="Currently Working">
<input type="text" name="gmail" placeholder="E-mail">
<br><br><br>
<center>
<input type="submit" name="submit" value="Sign up">
</center>
</div>
</form>
</body>
</html>