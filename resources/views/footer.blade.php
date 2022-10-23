<footer class="footer mt-auto py-3 p-4 bg-dark text-white text-center">
    <div class="row">
        <div class="col-sm-4">
            <h4>Elérhetőségek</h4>
			<p style="font-size:30;" colspan = "7"><i class = "fa fa-phone"> 06-10/123-123</i></p>
			<p style="font-size:30;" colspan = "7"><i class = "fa fa-at"> business@probamail.com</i></p>
		    <p style="font-size:30;" colspan = "7"><i class = "fa fa-envelope"> Szed Elek utca, 34.</i></p>
        </div>
        <div class="col-sm-4">
            <h4>Hírlevél</h4>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
			   Pellentesque vitae lacus neque. 
			   Nullam pretium mollis lectus, vel dictum ante congue in. 
			   In at elementum ex
			   <form action="" method = "POST">
        
				<input type="text" id="name" name="name" placeholder="Keresztnév" 
					   style = "width:200px;opacity:0.5;border:solid black 1px;font-style:italic">
		
				<input type="text" id="email" name="email" placeholder="E-mail cím" 
					   style = "width:200px;opacity:0.5;border:solid black 1px;font-style:italic">
				</form>
			<br/>
			<button style = "padding:10px">Feliratkozom</button>
			</p>
        </div>
		<div class="col-sm-4">
            <h4>Információk</h4>
			<p><a href = "{{ url('/privacy') }}" style = "color:white; text-decoration:none;">Adatvédelmi nyilatkozat</a></p>
			<p><a href = "{{ url('/aboutus') }}" style = "color:white; text-decoration:none;">Partnerek</a></p>
			<p><a href = "https://kiszervezettmarketing.hu/weboldal-keszites/impresszum-weboldal/" style = "color:white; text-decoration:none;">Impresszum</a></p>
			<p></p>
        </div>
    </div>
	
	<a href = "https://www.instagram.com/" style = "color:white; text-decoration:none;">
	<i class="fab fa-instagram" style = "font-size:30px;"></a></i>
			
	<a href = "https://www.facebook.com/" style = "color:white; text-decoration:none;">
	<i class="fab fa-facebook-square" style = "font-size:30px;"></a></i>
	
</footer>