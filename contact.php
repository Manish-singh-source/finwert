<?php require __DIR__ . '/includes/header.php'; ?>

<main>
    <section class="breadcrumb-wrapper fix">
        <div class="container">
            <div class="row contact-info-row">
                <div class="col-xl-8 mx-auto text-center">
                    <div class="breadcrumb-text">
                        <h2 class="title">Contact Us</h2>
                        <ul>
                            <li><a href="index.php">Home</a></li>
                            <li><span aria-hidden="true">&rarr;</span></li>
                            <li><a class="active" href="contact.php">Contact Us</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="vkl-gray-white-bg fix pt-100 pb-70">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 mb-30">
                    <div class="contactform__wpar-5 contactform__wpar-5-inner">
                        <h4 class="title">Contact Us</h4>
                        <p class="para">Empowering Business &amp; Finance</p>
                        <div class="form-area-5 form-area-5-inner">
                            <form action="contact.php" method="post">
                                <div class="row">
                                    <div class="col-xl-6 mb-18"><input type="text" name="name" placeholder="Enter Your Name" required></div>
                                    <div class="col-xl-6 mb-18"><input type="email" name="email" placeholder="Enter Your Email Id" required></div>
                                    <div class="col-xl-12 mb-18"><input type="tel" name="phone" placeholder="Enter Phone Number"></div>
                                    <div class="col-xl-12 mb-25"><textarea name="message" id="message" placeholder="Message" required></textarea></div>
                                    <div class="col-xl-12"><button type="submit" class="vl-primary-btn">Submit <span>&rarr;</span></button></div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 mb-30">
                    <div class="contact__maps2">
                        <iframe title="Finwert Mumbai office map" src="https://www.google.com/maps?q=501%2C%20Antariksh%20Thakur%20House%2C%20Makwana%20Lane%2C%20Marol%2C%20Andheri%20East%2C%20Mumbai%20400059&output=embed" loading="lazy" allowfullscreen></iframe>
                    </div>
                </div>
            </div>

            <div class="row contact-cards-row">
                <div class="col-xl-4 col-md-6 mb-30">
                    <div class="contact__iconbox-inner">
                        <div class="contact__iconbox-inner-icon"><span><i class="fa-solid fa-users"></i></span></div>
                        <div class="contact__iconbox-inner-content">
                            <h3 class="title">HR Related Queries</h3>
                            <a href="tel:+919892015797" class="info-desc">+91 98920 15797</a>
                            <a href="mailto:hr@finwert.com" class="info-desc">hr@finwert.com</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 mb-30">
                    <div class="contact__iconbox-inner">
                        <div class="contact__iconbox-inner-icon"><span><i class="fa-solid fa-phone"></i></span></div>
                        <div class="contact__iconbox-inner-content">
                            <h3 class="title">Other Queries</h3>
                            <a href="tel:+919773149764" class="info-desc">+91 977 314 9764</a>
                            <a href="tel:+919987249694" class="info-desc">+91 998 724 9694</a>
                            <a href="mailto:info@finwert.com" class="info-desc">info@finwert.com</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 mb-30">
                    <div class="contact__iconbox-inner">
                        <div class="contact__iconbox-inner-icon"><span><i class="fa-solid fa-location-dot"></i></span></div>
                        <div class="contact__iconbox-inner-content">
                            <h3 class="title">Our Office</h3>
                            <a href="https://www.google.com/maps/embed/v1/place?q=Antariksh+Thakur+House+104,+Antariksh,+Marol+Naka,+Taluka,+Makwana+Road,+Sir+Mathuradas+Vasanji+Rd,+Marol,+Andheri+East,+Mumbai,+Maharashtra+400059&key=AIzaSyBFw0Qbyq9zTFTd-tUY6dZWTgaQzuU17R8" target="_blank" rel="noopener" class="info-desc">501, Antariksh Thakur House, Makwana Lane, Off Andheri Kurla Road, Marol, Andheri East, Mumbai - 400059</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="paginacontainer">
        <div class="progress-wrap">
            <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102"><path d="M50,1 a49,49 0,1,0 0,98 a49,49 0,1,0 0,-98"></path></svg>
        </div>
    </div>
</main>

<?php require __DIR__ . '/includes/footer.php'; ?>
