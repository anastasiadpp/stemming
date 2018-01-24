<html>
<head><title>STEMMING</title>

<script>
	no = 1;
	function tambah(){
		urut=no+1;
		document.getElementById(urut).innerHTML="<p>("+urut+") Input Kata : <input type='text' name='kata[]'></p></div><div id='"+(urut+1)+"'>";	
		no++;
	}
	
	function hapus(){
	  if(no!=1){
		document.getElementById(no).innerHTML="";
		no--;
	  }
	}
	
</script>
</head>
<body>
</br></br></br></br></br>
<h1 align='center'>STEMMING BAHASA INDONESIA</h1>
<div></div>
<h2 align='center'>Teknik Informatika</h2>
<h2 align='center'>Politeknik Elektronika Negeri Surabaya</h2>
</br>
<form action="proses.php" method="POST">
<fieldset style="width:30%;margin:auto">
<legend>Masukkan Kata dalam Bahasa Indonesia</legend>
<center>
     <div id="1">
		<p>Kata : <input type="text" name="kata[]"></p>
     </div>
     
     <div id="2"></div>
     
	<!--<p>
    	<a href="javascript:tambah()">Tambah</a>
    	<a href="javascript:hapus()">Hapus</a>
    </p>-->
    
<input type="submit" value="STEMMING" /><input type="reset" value="RESET" />
</center>
 </fieldset>
</form>
	
</body>
</html>