<!doctype html>
<html>
<head>
	<meta charsrt="utf-8">
	<title>Input</title>
	<link rel="stylesheet" href="{{asset('/button')}}/styley.css">
</head>
<body>
	<div class="box">
		<h2>Contact Us</h2>
		<form>
			<div>
				<input type="text" name="namalengkap" required>
				<label>Nama lengkap</label>
            </div>
            <div>
                <input type="text" name="notelp" required>
                <label>No telp</label>
            </div>
             <div>
                <input type="text" name="asalsekolah" required>
                <label>Asal sekolah</label>
            </div>
            <div>
                <input type="email" name="email" required>
                <label>Email</label>
            </div>
            <div>

                                       <label>Bukti pembayaran</label>
									   <br>
									   <br>
                                       <input type="file" name="file" id="file" 
                                        required>
            </div>
           
             </form>
	</div>
</body>
</html>