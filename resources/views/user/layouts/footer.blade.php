<footer id="footer">

    <div class="footer-top">
        <div class="container">
            <div class="row">

                <div class="col-lg-3 col-md-6 footer-contact">
                    <img src="image/{{ $contacts->logo }}" alt="" class="img-thumbnail" width="175" height="175">
                </div>

                <div class="col-lg-2 col-md-6 footer-links">
                    <h4>Afiliasi Lembaga</h4>
                    <ul>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Institut Teknologi Indonesia</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Teknik Informatika ITI</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">MPM ITI</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">BEM ITI</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Permikomnas</a></li>
                    </ul>
                </div>

                <!-- <div class="col-lg-3 col-md-6 footer-links">
                    <h4>Our Services</h4>
                    <ul>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
                    </ul>
                </div> -->

                <div class="col-lg-4 col-md-6 footer-newsletter">
                    <h4>Hubungi Kami</h4>
                    <p>{{ $contacts->name }}</p>
                    <p>{{ $contacts->alamat }}</p>
                    <p>{{ $contacts->email }}</p>
                    <p>{{ $contacts->telepon }}</p>
                </div>

            </div>
        </div>
    </div>

    <div class="container d-md-flex py-4">

        <div class="me-md-auto text-center text-md-start">
            <div class="copyright text-center">
                &copy; Copyright <strong><span>HMIF ITI</span></strong>. All Rights Reserved
            </div>
        </div>
    </div>
</footer>
