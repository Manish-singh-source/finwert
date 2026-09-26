<?php
$pageTitle = 'Consult Now | Finwert';
require __DIR__ . '/includes/header.php';
?>

<main class="finwert-consult-page">
    <section class="breadcrumb-wrapper fix">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 mx-auto text-center">
                    <div class="breadcrumb-text">
                        <h2 class="title">Consult Now</h2>
                        <ul>
                            <li><a href="index.php">Home</a></li>
                            <li><span aria-hidden="true">&rarr;</span></li>
                            <li><a class="active" href="consult.php">Consult Now</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="vkl-gray-white-bg fix pt-100 pb-70">
        <div class="container">
            <div class="row align-items-stretch">
                <div class="col-xl-7 mb-30">
                    <div class="finwert-consult-form-card">
                        <p class="finwert-consult-kicker">Let's work together</p>
                        <h1>Tell us how we can help your business.</h1>
                        <p class="finwert-consult-intro">Share a few details and our team will get back to you to understand your goals and recommend the right finance solution.</p>

                        <form action="#" method="post" onsubmit="return false;">
                            <div class="row">
                                <div class="col-md-6 mb-18">
                                    <label for="consult-name">Your Name</label>
                                    <input id="consult-name" type="text" name="name" placeholder="Enter your name" required>
                                </div>
                                <div class="col-md-6 mb-18">
                                    <label for="consult-email">Email Address</label>
                                    <input id="consult-email" type="email" name="email" placeholder="Enter your email" required>
                                </div>
                                <div class="col-md-6 mb-18">
                                    <label for="consult-phone">Phone Number</label>
                                    <input id="consult-phone" type="tel" name="phone" placeholder="Enter your phone number">
                                </div>
                                <div class="col-md-6 mb-18">
                                    <label for="consult-service">Service Required</label>
                                    <select id="consult-service" name="service">
                                        <option value="">Select a service</option>
                                        <option>Virtual CFO Services</option>
                                        <option>Startup Solutions</option>
                                        <option>Accounting &amp; Compliance</option>
                                        <option>Fundraising &amp; Growth Capital</option>
                                        <option>Tax &amp; Advisory</option>
                                    </select>
                                </div>
                                <div class="col-12 mb-25">
                                    <label for="consult-message">Tell us about your requirement</label>
                                    <textarea id="consult-message" name="message" placeholder="Write your message" required></textarea>
                                </div>
                                <div class="col-12">
                                    <button type="submit" class="vl-primary-btn">Submit Enquiry <span>&rarr;</span></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="col-xl-5 mb-30">
                    <div class="finwert-consult-info-card">
                        <p class="finwert-consult-kicker">Why Finwert</p>
                        <h2>Clear advice for confident decisions.</h2>
                        <p>From day-to-day accounting to fundraising and virtual CFO support, we help businesses build strong financial foundations and grow with clarity.</p>
                        <div class="finwert-consult-info-list">
                            <a href="tel:+919773149764"><i class="fa-solid fa-phone"></i><span>+91 97731 49764</span></a>
                            <a href="mailto:info@finwert.com"><i class="fa-solid fa-envelope"></i><span>info@finwert.com</span></a>
                            <a href="contact.php"><i class="fa-solid fa-location-dot"></i><span>Mumbai &amp; Bangalore, India</span></a>
                        </div>
                        <div class="finwert-consult-note">Our team will review your enquiry and connect with you shortly.</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php require __DIR__ . '/includes/footer.php'; ?>
