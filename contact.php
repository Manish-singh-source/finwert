<?php
require __DIR__ . '/config.php';
require __DIR__ . '/vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$flash = ['type' => '', 'message' => ''];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = trim($_POST['name'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $phone = trim($_POST['phone'] ?? '');
    $message = trim($_POST['message'] ?? '');

    if ($name === '' || $email === '' || !filter_var($email, FILTER_VALIDATE_EMAIL) || $message === '') {
        $flash = [
            'type' => 'danger',
            'message' => 'Please enter your name, a valid email address, and a message before submitting.'
        ];
    } else {
        $mailer = new PHPMailer(true);

        try {
            $mailer->isSMTP();
            $mailer->Host = SMTP_HOST;
            $mailer->SMTPAuth = true;
            $mailer->Username = SMTP_USERNAME;
            $mailer->Password = SMTP_PASSWORD;
            $mailer->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mailer->Port = SMTP_PORT;
            $mailer->CharSet = 'UTF-8';
            $mailer->setFrom(SMTP_FROM_EMAIL, SMTP_FROM_NAME);
            $mailer->addAddress(ADMIN_EMAIL, 'Finwert Admin');
            $mailer->addReplyTo($email, $name);

            $mailer->isHTML(true);
            $mailer->Subject = 'New Contact Enquiry from ' . $name;

            $safeName = htmlspecialchars($name, ENT_QUOTES, 'UTF-8');
            $safeEmail = htmlspecialchars($email, ENT_QUOTES, 'UTF-8');
            $safePhone = htmlspecialchars($phone ?: 'Not provided', ENT_QUOTES, 'UTF-8');
            $safeMessage = nl2br(htmlspecialchars($message, ENT_QUOTES, 'UTF-8'));

            $mailer->Body = '
                <html>
                <body style="margin:0;padding:0;background:#f3f4f6;font-family:Arial,Helvetica,sans-serif;color:#1f2937;">
                    <div style="max-width:760px;margin:32px auto;background:#ffffff;border:1px solid #e5e7eb;border-radius:12px;overflow:hidden;box-shadow:0 8px 28px rgba(15,23,42,0.06);">
                        <div style="padding:18px 24px;border-bottom:1px solid #e5e7eb;background:#f8fafc;">
                            <table role="presentation" width="100%" cellpadding="0" cellspacing="0" border="0" style="border-collapse:collapse;">
                                <tr>
                                    <td style="width:44px;vertical-align:middle;">
                                        <div style="width:36px;height:36px;border-radius:50%;background:linear-gradient(135deg,#0f172a,#2563eb);color:#ffffff;font-weight:700;font-size:14px;line-height:36px;text-align:center;">FI</div>
                                    </td>
                                    <td style="padding-left:12px;vertical-align:middle;font-size:24px;font-weight:700;color:#111827;">Finwert</td>
                                    <td align="right" style="vertical-align:middle;font-size:12px;color:#6b7280;">to me</td>
                                </tr>
                            </table>
                        </div>
                        <div style="padding:28px 24px 22px;">
                            <div style="font-size:13px;color:#6b7280;margin-bottom:10px;letter-spacing:0.04em;text-transform:uppercase;">New enquiry</div>
                            <div style="font-size:18px;font-weight:700;color:#111827;margin-bottom:18px;">New Contact Enquiry from ' . $safeName . '</div>
                            <div style="background:#f9fafb;border:1px solid #e5e7eb;border-radius:10px;padding:18px 18px 12px;">
                                <table role="presentation" width="100%" cellpadding="0" cellspacing="0" border="0" style="border-collapse:collapse;font-size:15px;line-height:1.8;color:#1f2937;">
                                    <tr>
                                        <td style="padding:4px 0;width:100px;font-weight:700;color:#111827;">Name:</td>
                                        <td style="padding:4px 0;">' . $safeName . '</td>
                                    </tr>
                                    <tr>
                                        <td style="padding:4px 0;width:100px;font-weight:700;color:#111827;">Email:</td>
                                        <td style="padding:4px 0;"><a href="mailto:' . $safeEmail . '" style="color:#2563eb;text-decoration:none;">' . $safeEmail . '</a></td>
                                    </tr>
                                    <tr>
                                        <td style="padding:4px 0;width:100px;font-weight:700;color:#111827;">Phone:</td>
                                        <td style="padding:4px 0;">' . $safePhone . '</td>
                                    </tr>
                                    <tr>
                                        <td style="padding:10px 0 4px;width:100px;font-weight:700;color:#111827;vertical-align:top;">Message:</td>
                                        <td style="padding:10px 0 4px;">' . $safeMessage . '</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </body>
                </html>
            ';

            $mailer->AltBody = "Name: {$name}\nEmail: {$email}\nPhone: {$phone}\n\nMessage:\n{$message}";

            $mailer->send();

            $flash = [
                'type' => 'success',
                'message' => 'Thank you! Your message has been sent successfully to the admin email.'
            ];
        } catch (Exception $exception) {
            $flash = [
                'type' => 'danger',
                'message' => 'Your message could not be sent right now. Please check your Gmail SMTP settings.'
            ];
        }
    }
}

require __DIR__ . '/includes/header.php';
?>

<main>
    <section class="finwert-page-hero contact-page-hero">
        <div class="container finwert-page-hero-layout">
            <div class="finwert-page-hero-copy">
                <h1>Contact Us</h1>
                <nav class="finwert-page-breadcrumb" aria-label="Breadcrumb">
                    <a href="index.php">Home</a><span aria-hidden="true">/</span><span aria-current="page">Contact Us</span>
                </nav>
            </div>
            <?php include __DIR__ . '/includes/page-hero-slogan.php'; ?>
        </div>
    </section>

    <section class="vkl-gray-white-bg fix pt-100 pb-70 contact-details-section">
        <div class="container">
            <?php if (!empty($flash['message'])): ?>
                <div class="alert alert-<?php echo htmlspecialchars($flash['type'], ENT_QUOTES, 'UTF-8'); ?> mb-30">
                    <?php echo htmlspecialchars($flash['message'], ENT_QUOTES, 'UTF-8'); ?>
                </div>
            <?php endif; ?>

            <div class="row">
                <div class="col-xl-6 mb-30">
                    <div class="contactform__wpar-5 contactform__wpar-5-inner">
                        <h4 class="title">Contact Us</h4>
                        <p class="para">Empowering Business &amp; Finance</p>
                        <div class="form-area-5 form-area-5-inner">
                            <form action="contact.php" method="post" novalidate>
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
                            <a class="info-desc">501, Antariksh Thakur House, Makwana Lane, Off Andheri Kurla Road, Marol, Andheri East, Mumbai - 400059</a>
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
