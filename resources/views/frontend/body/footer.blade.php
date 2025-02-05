<section class="footer-area pt-100px">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 responsive-column-half">
                <div class="footer-item">
                    <a href="index.html">
                        <img src="{{ asset('frontend/images/logo.png') }}" alt="footer logo" class="rounded-full footer__logo width-100" height="100">
                    </a>
                    <ul class="pt-4 generic-list-item">
                        <li><a href="tel:+1631237884">+163 123 7884</a></li>
                        <li><a href="mailto:support@wbsite.com">support@website.com</a></li>
                        <li>Melbourne, Australia, 105 South Park Avenue</li>
                    </ul>
                    <h3 class="pt-4 pb-2 fs-20 font-weight-semi-bold">We are on</h3>
                    <ul class="social-icons social-icons-styled">
                        <li class="mr-1"><a href="#" class="facebook-bg"><i class="la la-facebook"></i></a></li>
                        <li class="mr-1"><a href="#" class="twitter-bg"><i class="la la-twitter"></i></a></li>
                        <li class="mr-1"><a href="#" class="instagram-bg"><i class="la la-instagram"></i></a></li>
                        <li class="mr-1"><a href="#" class="linkedin-bg"><i class="la la-linkedin"></i></a></li>
                    </ul>
                </div><!-- end footer-item -->
            </div><!-- end col-lg-3 -->
            <div class="col-lg-3 responsive-column-half">
                <div class="footer-item">
                    <h3 class="fs-20 font-weight-semi-bold">Company</h3>
                    <span class="section-divider section--divider"></span>
                    <ul class="generic-list-item">
                        <li><a href="#">About us</a></li>
                        <li><a href="#">Contact us</a></li>
                        <li><a href="{{ route('become.instructor') }}">Become a Teacher</a></li>
                        <li><a href="#">Support</a></li>
                        <li><a href="#">FAQs</a></li>
                        <li><a href="#">Blog</a></li>
                    </ul>
                </div><!-- end footer-item -->
            </div><!-- end col-lg-3 -->
            <div class="col-lg-3 responsive-column-half">
                <div class="footer-item">
                    <h3 class="fs-20 font-weight-semi-bold">Courses</h3>
                    <span class="section-divider section--divider"></span>
                    <ul class="generic-list-item">
                        <li><a href="#">Web Development</a></li>
                        <li><a href="#">Hacking</a></li>
                        <li><a href="#">PHP Learning</a></li>
                        <li><a href="#">Spoken English</a></li>
                        <li><a href="#">Self-Driving Car</a></li>
                        <li><a href="#">Garbage Collectors</a></li>
                    </ul>
                </div><!-- end footer-item -->
            </div><!-- end col-lg-3 -->
            <div class="col-lg-3 responsive-column-half">
                <div class="footer-item">
                    <h3 class="fs-20 font-weight-semi-bold">Download App</h3>
                    <span class="section-divider section--divider"></span>
                    <div class="mobile-app">
                        <p class="pb-3 lh-24">Download our mobile app and learn on the go.</p>
                        <a href="#" class="mb-2 d-block hover-s"><img src="{{ asset('frontend/images/appstore.png') }}" alt="App store" class="img-fluid"></a>
                        <a href="#" class="d-block hover-s"><img src="{{ asset('frontend/images/googleplay.png') }}" alt="Google play store" class="img-fluid"></a>
                    </div>
                </div><!-- end footer-item -->
            </div><!-- end col-lg-3 -->
        </div><!-- end row -->
    </div><!-- end container -->
    <div class="section-block"></div>
    <div class="pb-4 row align-items-center dashboard-copyright-content">
        <div class="col-lg-6">
            <p class="copy-desc" > &copy; <span id="copyright-year"></span> JK online academy. All Rights Reserved.</p>
        </div><!-- end col-lg-6 -->
        <div class="col-lg-6">
            <ul class="flex-wrap generic-list-item d-flex align-items-center fs-14 justify-content-end">
                <li class="mr-3"><a href="terms-and-conditions.html">Terms & Conditions</a></li>
                <li><a href="privacy-policy.html">Privacy Policy</a></li>
            </ul>
        </div><!-- end col-lg-6 -->
    </div>
    <!-- end row -->
    <!-- end copyright-content -->
    
</section>
<script>
    // Select the element where the copyright year should be updated
    const copyrightYearElement = document.getElementById('copyright-year');

    // Get the current year
    const currentYear = new Date().getFullYear();

    // Update the content of the element
    if (copyrightYearElement) {
    copyrightYearElement.textContent = currentYear;
    }
</script>
