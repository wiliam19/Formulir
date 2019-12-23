<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>register</title>
<link href="style.css" rel="stylesheet" type="text/css">
</head>

<body>
 <header>
<nav class="menu"> <ul> <li> <a href="home.php"> home </a> </li> <li> <a href="register.php"> register</a> </li> <li> <a href="login.php"> login </a> </li> </ul> </nav> </header>
<p>
    <form action="prosesregister.php" method="post">
<table width="96%" height="332" border="1" >
<tr>
 <td width="23%" height="121">&nbsp;</td> 
 <td width="49%"> 
<p>
<h2>FORM PENDAFTAR: </h2></p>
<table >
 <tr>
  <td> NAMA  </td> 
  <td> <input type="text" class="txtktk" name="nama"> </td>
  </tr>
  
<tr>
 <td> PASSWORD  </td> <td><input type="password" class="txtktk" name="pass"> </td>
 </tr>  <td> EMAIL  </td>
  <td> <input type="text" class="txtktk" name="email"></td>
  </tr>
  
<tr>
 <td> jenis kelamin  </td> 
 <td> <input type="radio" value="laki-laki" name="jk">
  laki laki
  <input type="radio" value="perempuan" name="jk">
  perempuan</td>
  </tr>
    
    <tr>
    <td>ttl</td>
    <td><select name="tanggal"> <option>1</option><option>2</option><option>3</option><option>4</option><option>5</option><option>6</option><option>7</option><option>8</option><option>9</option><option>10</option><option>11</option><option>12</option><option>13</option><option>14</option><option>15</option><option>16</option><option>17</option><option>18</option><option>19</option><option>20</option><option>21</option><option>22</option><option>23</option><option>24</option><option>25</option><option>26</option><option>27</option><option>28</option><option>29</option><option>30</option><option>31</option> </select> 
        <select name="bulan"> <option>januari</option><option>februari</option><option>maret</option><option>april</option><option>mei</option><option>juni</option><option>juli</option><option>agustus</option><option>september</option><option>oktober</option><option>november</option><option>desember</option> </select>
         <select name="tahun"> <option>1991</option><option>1992</option><option>1993</option><option>1994</option><option>1995</option><option>1996</option><option>1997</option><option>1998</option><option>1999</option><option>2000</option><option>2001</option><option>2002</option><option>2003</option> </select>
        
        </td>
        </tr>
    
    
</table> 
      <P> <input type="submit" id="submit" name="submit" value="daftar" class="btn" >  </P> </form>
</td> 
  <td width="28%">&nbsp;</td> </tr> 
    </table> 

<footer> copyright <a href="ruangtek.blogspot.com">ruangtek</a> 2018</footer> 

</body>
</html>