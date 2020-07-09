<?php
require('./controllers/header.php');
include "header-login.php";
// include "header-general.php";
?>
<link rel="stylesheet" href="./css/gopy.css">
    <section id="Contact" class="content-section">
        <div class="container py-5">
            <div class="block-heading">
                <h2>CONTACT US</h2>
                <p>Nếu bạn có bất kì thắc mắc nào, xin hãy liên hệ với chúng tôi.</p>
            </div>
            <div class="row">
                <div class="col-sm-12 col-md-6 col-lg-6">
                    <div class="contact-wrapper">
                        <div class="address-block border-bottom">
                            <h3 class="add-title">Thông tin liên hệ</h3>
                            <div class="c-detail">
                                <span class="c-icon">
                                    <i class="i fa fa-map-marker"></i>
                                </span>
                                <span class="c-info">Khu phố 6, phường Linh Trung, quận Thủ Đức, TP. HCM</span>
                            </div>
                            <div class="c-detail">
                                <span class="c-icon">
                                    <i class="i fa fa-envelope"></i>
                                </span>
                                <span class="c-info">nhom15web@gmail.com</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-6">
                    <div>
                        <form action="mailto:nhom15web@gmail.com" method="POST" enctype="text/plain">
                            <div class="floating-label">
                                <input class="form-control" type="text" placeholder="First Name" name="First Name">
                            </div>
                            <div class="floating-label">
                                <input class="form-control" type="text" placeholder="Last Name" name="Last Name">
                            </div>
                            <div class="floating-label">
                                <input class="form-control" type="email" placeholder="Email" name="Email">
                            </div>
                            <div class="floating-label">
                                <input class="form-control" type="text" placeholder="Message" name="Message">
                            </div>
                            <div class="submit-btn">
                                <button type="submit">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        
        </section>
    </div>

</body>
<script src="./js/home.js"></script>
</html>