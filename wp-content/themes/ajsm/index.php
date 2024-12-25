<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <?php get_header(); ?>

    <main>
        <div class="container">

            <section id="hero" class="hero-section">
                <div class="hero-container"> 
                    <div class='left'>
                        <div class="hero-content">
                            <h1>Serving Homes Across New Jersey</h1>
                            <p>Transform your home or business with a fresh coat of paint. Let’s bring your vision to life—starting with a free estimate!</p>
                            <a href="#free-estimate" class="cta-button">Get a Free Estimate</a>
                        </div>
                        <div class="share-section">
                            <div class="social-icons">
                                <a href="https://www.facebook.com/profile.php?id=61564643498140" target="_blank" class="social-icon">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/fb-logo.png" alt="Facebook">
                                </a>
                                <a href="https://www.instagram.com/ajsmpaint/" target="_blank" class="social-icon">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/ig-logo.png" alt="Instagram">
                                </a>
                                <a href="mailto:ajsmpaint@gmail.com" class="social-icon">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/email-logo.png" alt="Email">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="right">
                        <div class="hero-image">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/painter.png" alt="Image of painter on a ladder">
                        </div>
                    </div>
                </div>
            </section>

            <section id="services" class="services-section">
                <div class="services-container">
                    <h2>Our Services</h2>
                    <p class="section-description">We specialize in transforming spaces with quality interior painting, wall repairs, and more. Let us help you create the perfect environment for your home or business.</p>
                    <div class="services-grid">
                        <div class="service-item">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/roller.png" alt="Interior Painting">
                            <h3>Interior Painting</h3>
                            <p>Refresh your walls with our professional interior painting services, tailored to match your style and preferences.</p>
                        </div>
                        <div class="service-item">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/spackle.png" alt="Wall Repairs">
                            <h3>Wall Repairs</h3>
                            <p>From minor cracks to larger damage, we repair walls seamlessly, preparing them for a flawless finish.</p>
                        </div>
                        <div class="service-item">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/clean.png" alt="Wall Cleanings">
                            <h3>Wall Cleanings</h3>
                            <p>Keep your walls spotless and fresh with our deep wall cleaning services, ideal for restoring cleanliness.</p>
                        </div>
                        <div class="service-item">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/moving.png" alt="Furniture Moving">
                            <h3>Furniture Moving</h3>
                            <p>Need help preparing for your painting project? We carefully move furniture to ensure a smooth process.</p>
                        </div>
                        <div class="service-item">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/can.png" alt="Trim & Baseboard Painting">
                            <h3>Trim & Baseboard Painting</h3>
                            <p>Add the perfect finishing touch to your space with our precise trim and baseboard painting services.</p>
                        </div>
                        <div class="service-item">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/colors.png" alt="Color Consultation">
                            <h3>Color Consultation</h3>
                            <p>Not sure which colors to choose? Our experts will help you find the perfect palette for your space.</p>
                        </div>
                    </div>
                </div>
            </section>

            <section id="about">
                <h2>About Us</h2>
                <p>We’re a local team based in Carteret, NJ, providing quality interior painting with a personal touch.</p>
                <div class="about-grid">
                    <!-- AJ's Profile -->
                    <div class="about-item">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/aj.jpeg" alt="AJ Marchitelli">
                        <h3>AJ Marchitelli</h3>
                        <p>A software developer who focuses on precision and detail, ensuring every project is flawless.</p>
                    </div>
                    <!-- Anthony's Profile -->
                    <div class="about-item">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/spins.png" alt="Anthony Spinelli">
                        <h3>Anthony Spinelli</h3>
                        <p>A school teacher and head coach of JV basketball at Carteret, known for efficient work and a positive energy.</p>
                    </div>
                </div>
            </section>




            <section id="free-estimate" class="free-estimate-form">
                <h2>Request Your Free Estimate</h2>
                <form action="" method="post">
                    <label for="name">Full Name <span class="required">*</span></label>
                    <input type="text" id="name" name="name" required>

                    <label for="email">Email Address <span class="required">*</span></label>
                    <input type="email" id="email" name="email" required>

                    <label for="phone">Phone Number <span class="required">*</span></label>
                    <input type="tel" id="phone" name="phone" required>

                    <label for="service">Type of Service (e.g., Interior Painting)</label>
                    <input type="text" id="service" name="service" placeholder="e.g., Interior Painting">

                    <label for="details">Additional Details</label>
                    <textarea id="details" name="details"></textarea>

                    <button type="submit" name="submit_form">Submit</button>
                </form>
            </section>




        </div>
    </main>

    <?php get_footer(); ?>
</body>
</html>
