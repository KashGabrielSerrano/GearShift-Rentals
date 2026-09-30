<section id="contact" class="section-padding">
    <div class="container">
        <div class="row gy-5">
            <div class="col-lg-5">
                <span class="section-tag">Get In Touch</span>
                <h2 class="fw-bold fs-1 mb-3">Reserve Your Vehicle</h2>
                <p class="text-readable mb-4">
                    Submit your rental inquiry below. All information submitted through this form connects directly to our database to record your reservation.
                </p>

                <div class="d-flex flex-column gap-3 mb-4">
                    <div class="d-flex align-items-center gap-3 custom-card p-3">
                        <div class="bg-accent bg-opacity-15 text-accent rounded-circle p-3 d-flex align-items-center justify-content-center" style="width: 50px; height: 50px;">
                            <i class="bi bi-headset fs-4"></i>
                        </div>
                        <div>
                            <h6 class="mb-0">24/7 VIP Hotline</h6>
                            <span class="text-readable small">+1 (800) 555-GEAR</span>
                        </div>
                    </div>

                    <div class="d-flex align-items-center gap-3 custom-card p-3">
                        <div class="bg-cyan bg-opacity-15 text-cyan rounded-circle p-3 d-flex align-items-center justify-content-center" style="width: 50px; height: 50px;">
                            <i class="bi bi-geo-alt-fill fs-4"></i>
                        </div>
                        <div>
                            <h6 class="mb-0">Flagship Showroom</h6>
                            <span class="text-readable small">8800 Wilshire Blvd, Beverly Hills, CA 90211</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-7">
                <div class="custom-card p-4 p-md-5">
                    <div class="d-flex justify-content-between align-items-center mb-4">
                        <h3 class="font-heading mb-0"><i class="bi bi-send-fill text-accent me-2"></i>Contact & Inquiry Form</h3>
                    </div>

                    <?php if (isset($_GET['status']) && $_GET['status'] === 'success'): ?>
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <i class="bi bi-check-circle-fill me-2"></i>
                            <strong>Success!</strong> Your reservation inquiry has been stored in the database.
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    <?php endif; ?>

                    <form action="contact-process.php" method="POST">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label class="form-label">Full Name *</label>
                                <input type="text" name="full_name" id="fullName" class="form-control" placeholder="John Doe" required>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Email Address *</label>
                                <input type="email" name="email" id="email" class="form-control" placeholder="john@example.com" required>
                            </div>

                            <div class="col-md-6">
                                <label class="form-label">Phone Number *</label>
                                <input type="tel" name="phone" id="phone" class="form-control" placeholder="+1 (555) 000-0000" required>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Vehicle Choice *</label>
                                <select name="vehicle_interest" id="vehicleChoice" class="form-select" required>
                                    <option value="General Inquiry">General Inquiry / Undecided</option>
                                    <option value="Porsche 911 GT3">Porsche 911 GT3 ($850/day)</option>
                                    <option value="Mercedes AMG G63">Mercedes AMG G63 ($750/day)</option>
                                    <option value="Tesla Model S Plaid">Tesla Model S Plaid ($550/day)</option>
                                    <option value="Ford Mustang Shelby GT500">Ford Mustang Shelby GT500 ($480/day)</option>
                                    <option value="BMW M5 Competition">BMW M5 Competition ($620/day)</option>
                                    <option value="Range Rover Autobiography">Range Rover Autobiography ($700/day)</option>
                                </select>
                            </div>

                            <div class="col-md-6">
                                <label class="form-label">Rental Pickup Date *</label>
                                <input type="date" name="pickup_date" id="pickupDate" class="form-control" required>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Rental Return Date *</label>
                                <input type="date" name="dropoff_date" id="returnDate" class="form-control" required>
                            </div>

                            <div class="col-12">
                                <label class="form-label">Additional Message / Flight Info</label>
                                <textarea name="message" id="message" class="form-control" rows="4" placeholder="Let us know your flight arrival number, special delivery location, or questions..."></textarea>
                            </div>

                            <div class="col-12 mt-4">
                                <button type="submit" name="submit_inquiry" class="btn btn-accent w-100 py-3 rounded-3 fs-6">
                                    <i class="bi bi-database-add me-2"></i>Submit Booking
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>