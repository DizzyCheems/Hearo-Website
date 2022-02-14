<html>

<head>
<meta content="" name="description">
<meta content="" name="keywords">

<!-- Favicons -->
<link href="/images/Hearo.png" rel="icon">
<link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
</head>

@section('site_policy')
<body>
  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center"  style="background-image:url('/images/WallpaperDog-10881763.jpg');">
    <div class="container d-flex align-items-center justify-content-between">

      <div class="logo">
       <h1><a href="{{route('homepage')}}">
       </a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>
      <img class="logo-prop" src="/images/Hearo.png"  > 
        <nav id="navbar" class="navbar" >
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">About</a></li>
          <li><a class="nav-link scrollto" href="#services">Services</a></li>
          <li><a class="nav-link scrollto " href="#store">Store</a></li>
          <li><a class="nav-link scrollto" href="{{route('artists')}}">Artists</a></li>
          <li><a class="nav-link scrollto" href="#events">Events</a></li>
          <li><a class="modal-button" type="button"  data-target="play-song" 
                                  href="#contact" type="button">Contact</a></li>
          <li><a class="getstarted scrollto" href="#contact">Join</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  
  <!-- ======= Hero Section ======= -->
  <section id="home" style="height:30px;" class="d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 pt-5 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
          <h1 data-aos="fade-up"><!--Blanck --></h1>
          <h2 data-aos="fade-up" data-aos-delay="400"><!--Blacnk--></h2>
          <div data-aos="fade-up" data-aos-delay="800">
        
          </div>
        </div>
        <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="fade-left" data-aos-delay="200">
       <!--   <img src="assets/img/hero-img.png" class="img-fluid animated" alt=""> -->
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

    <!-- ======= Contact Section ======= -->
    <div class="contact-cover">
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
        <h2 style="font-size: 14px; color:aliceblue;">Guidelines and Usage Policy</h2>
                                <p style="font-size: 14p; color:aliceblue;">
                                Hearo Records established these guidelines so that creators outside of Hearo Records can be guided on how to share or
    create their derivative works. There is no need to contact us for permission if the derivative works and creations 
    comply with these guidelines but you are free to contact us anytime for more information.

    
What is considered "Derivative Works"?
	We consider a work to be derivative work if the work in question is inspired or uses parts of its content based on
    releases published by Hearo Records. We do not consider a work derivative if the work it is based from is unmodified or lacks
    sufficient creativity. Such works that is not classified as derivative work may still be shared if the work it is based from 
    uses the Creative Commons License.

So can I share creations that is considered derivative works?
	Of course, be our guest.

Can I monetize my work if it is considered derivative work?
	Depends, if the work it is based on has a NonCommercial Creative Commons License then you are not allowed to monetize your work without explicit permission.
    If the work does not have a NonCommercial Creative Commons License then you may contact us <a href="{{route('homepage')}}">here </a>

How do I know if the track uses the Creative Commons License?
	Check our webpage, each track should have a description page linked. The description will tell you if the track uses the license.
    You can browse tracks published by Hearo Records <a href="{{route('musics')}}">here</a>
            
    


</p>
    
      </div>
    </section><!-- End Contact Section -->
    </div>
  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <div class="row d-flex align-items-center">
        <div class="col-lg-6 text-lg-left text-center">
          <div class="copyright">
            &copy; Copyright <strong>Hearo Records</strong>. All Rights Reserved
          </div>
          <div class="credits">
            <!-- All the links in the footer should remain intact. -->
            <!-- You can delete the links only if you purchased the pro version. -->
            <!-- Licensing information: https://bootstrapmade.com/license/ -->
            <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/vesperr-free-bootstrap-template/ -->
            Designed by <a href="https://bootstrapmade.com/"> Rouser (Former Tentacit) Media</a>
          </div>
        </div>
        <div class="col-lg-6">
          <nav class="footer-links text-lg-right text-center pt-2 pt-lg-0">
            <a href="#intro" class="scrollto">Home</a>
            <a href="#about" class="scrollto">About</a>
            <a href="#">Privacy Policy</a>
            <a href="#">Terms of Use</a>
          </nav>
        </div>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>




  
  <script>  // Get the button that opens the modal
var btn = document.querySelectorAll(".modal-button");

// All page modals
var modals = document.querySelectorAll('.modal');

// Get the <span> element that closes the modal
var spans = document.getElementsByClassName("close");

// When the user clicks the button, open the modal
for (var i = 0; i < btn.length; i++) {
 btn[i].onclick = function(e) {
    e.preventDefault();
    modal = document.querySelector(e.target.getAttribute("href"));
    modal.style.display = "block";
 }
}

// When the user clicks on <span> (x), close the modal
for (var i = 0; i < spans.length; i++) {
 spans[i].onclick = function() {
    for (var index in modals) {
      if (typeof modals[index].style !== 'undefined') modals[index].style.display = "none";    
    }
 }
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target.classList.contains('modal')) {
     for (var index in modals) {
      if (typeof modals[index].style !== 'undefined') modals[index].style.display = "none";    
     }
    }
}</script>

<script type="text/javascript">
 var urlmenu = document.getElementById( 'genres' );
 urlmenu.onchange = function() {  
      window.open( this.options[ this.selectedIndex ].value );
 };
</script>
  
</body>
@endsection
</html>

<!---CONTACT FORM MODAL!--->
<!--MODAL!-->
<div id="contact" class="modal">
  <!-- Modal content -->
  <div class="modal-content">
    <div class="modal-header" style="background-image: url('/succesor/ios13DarkPreview-768x432.png');
    background-repeat:no-repeat;   background-size: cover;"> 
      <span class="close">&times;</span>
     
    </div>
    <section class="ftco-section img bg-hero" style="background-image: url(/images/wp6854481-neon-minimalist-hd-wallpapers.png);">      
    <div class="modal-body" style="background-image: url('#');
    background-repeat:no-repeat;   background-size: cover;" >
  
<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">Submit Your Queries Here</h2>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-lg-11">
					<div class="wrapper">
						<div class="row no-gutters justify-content-between">
							<div class="col-lg-6 d-flex align-items-stretch">
								<div class="info-wrap w-100 p-5">
									<h3 class="mb-4">Contact us</h3>
				        	<div class="dbox w-100 d-flex align-items-start">
				        		<div class="icon d-flex align-items-center justify-content-center">
				        			<span class="fa fa-map-marker"></span>
				        		</div>
				        		<div class="text pl-4">
					            <p class="common-p"><span  style="color:white;">Email:</span> Hearo@Mussio.com</p>
					          </div>
				          </div>
				        	<div class="dbox w-100 d-flex align-items-start">
				        		<div class="icon d-flex align-items-center justify-content-center">
				        			<span class="fa fa-globe"></span>
				        		</div>
				        		<div class="text pl-4">
					            <p class="common-p"><span  style="color:white;">Website</span> Hearo.com</p>
					          </div>
				          </div>
			          </div>
							</div>
							<div class="col-lg-5">
								<div class="contact-wrap w-100 p-md-5 p-4">
									<h3 class="mb-4">Get in touch</h3>
									<div id="form-message-warning" class="mb-4"></div> 
				      		<div id="form-message-success" class="mb-4">
				            Your message was sent, thank you!
				      		</div>
									<form method="POST" id="contactForm" action="{{route('concern')}}" name="contactForm">
                    @csrf
										<div class="row">
											<div class="col-md-12">
												<div class="form-group">
													<input type="text" class="form-control" name="name" id="name" placeholder="Name">
												</div>
											</div>
											<div class="col-md-12"> 
												<div class="form-group">
													<input type="email" class="form-control" name="mail" id="mail" placeholder="Email">
												</div>
											</div>
											<div class="col-md-12">
												<div class="form-group">
													<input type="text" class="form-control" name="subject" id="subject" placeholder="Subject">
												</div>
											</div>
											<div class="col-md-12">
												<div class="form-group">
													<textarea name="message" class="form-control" id="message" cols="30" rows="5" placeholder="Message"></textarea>
												</div>
											</div>
											<div class="col-md-12">
												<div class="form-group">
													<input type="submit" value="Send Message" class="btn btn-primary">
													<div class="submitting"></div>
												</div>
											</div>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>



<!-- partial -->
        
  <script  src="js/player.js"></script>
           
    		</div>
		
<!-- Analytics -->
<!-- End of Audio Control Parameter -->
    <div class="modal-footer" style="background-image: url('/succesor/ios13DarkPreview-768x432.png');
    background-repeat:no-repeat;   background-size: cover;"> 
    </div>
  </div>

</div>



<!--END of Paramenter!-->
