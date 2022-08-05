
    <!-- Footer Starts Here -->
    <div class="footer">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="logo">
                <img src="{{asset('/')}}assets/images/header-logo.png" alt="">
              </div>
            </div>
            <div class="col-md-12">
              <div class="footer-menu">
                <ul>
                  <li><a href="#">Home</a></li>
                  <li><a href="#">Help</a></li>
                  <li><a href="#">Privacy Policy</a></li>
                  <li><a href="#">How It Works ?</a></li>
                  <li><a href="#">Contact Us</a></li>
                </ul>
              </div>
            </div>
            <div class="col-md-12">
              <div class="social-icons">
                <ul>
                  <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                  <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                  <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                  <li><a href="#"><i class="fa fa-rss"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Footer Ends Here -->
  
  
      <!-- Sub Footer Starts Here -->
      <div class="sub-footer">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="copyright-text">
                <p>Copyright &copy; 2019 Company Name 
                  
                  - Design: <a rel="nofollow" href="https://www.facebook.com/tooplate">Tooplate</a></p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Sub Footer Ends Here -->
  
  
      <!-- Bootstrap core JavaScript -->
      <script src="{{asset('/')}}vendor/jquery/jquery.min.js"></script>
      <script src="{{asset('/')}}vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  
  
      <!-- Additional Scripts -->
      <script src="{{asset('/')}}assets/js/custom.js"></script>
      <script src="{{asset('/')}}assets/js/owl.js"></script>
      <script src="{{asset('/')}}assets/js/isotope.js"></script>
      <script src="{{asset('/')}}assets/js/flex-slider.js"></script>
  
  
      <script language = "text/Javascript"> 
        cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
        function clearField(t){                   //declaring the array outside of the
        if(! cleared[t.id]){                      // function makes it static and global
            cleared[t.id] = 1;  // you could use true and false, but that's more typing
            t.value='';         // with more chance of typos
            t.style.color='#fff';
            }
        }
      </script>
  
  
    </body>
  
  </html>