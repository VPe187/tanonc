
<footer class="footer py-3 bg-dark text-light fixed-relative text-center">
    <div class="row">
        <div class="col-sm-4">
            <h4 class = "mb-3">Elérhetőségek</h4>
			<p><i class = "fa fa-btn fa-phone"></i>06-10/123-123</p>
			<p><i class = "fa fa-btn fa-at"></i> business@probamail.com</p>
		    <p><i class = "fa fa-btn fa-envelope"></i> Szed Elek utca, 34.</p>
        </div>
        <div class="col-sm-4">
            <h4 class = "mb-3">Készítők</h4>
			<p>Nyíregyházi Egyetem</p>
			<p>Programtervező informatikus (fejlesztő) FOSZK 2021 -2023</p>
			   <a href = "https://www.instagram.com/" style = "color:white; text-decoration:none;">
					<i class="fab fa-instagram fa-2x px-1" style = "font-size:30px;"></a></i>
			
				<a href = "https://www.facebook.com/" style = "color:white; text-decoration:none;">
					<i class="fab fa-facebook-square fa-2x px-1" style = "font-size:30px;"></a></i>
			</p>
        </div>
		<div class="col-sm-4">
            <h4 class = "mb-3">Információk</h4>
			<p><a class = "btn text-light p-0" href = "{{ url('/privacy') }}" >Adatvédelmi nyilatkozat</a></p>
			<p><a class = "btn text-light p-0" href = "{{ url('/aboutus') }}">Készítők</a></p>
			<p><a class = "btn text-light p-0" href = "https://laravel.com" target = "blank">Partnerek</a></p>
			<p><a class = "btn text-light p-0" href = "#">Impresszum</a></p>
			<p></p>
        </div>
    </div>
</footer>