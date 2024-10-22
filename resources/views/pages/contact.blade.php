<x-web-layout>

    <!-- Banner Area Start -->

    <div class="page__banner">
        <div class="page__banner-shape">
            <img src="assets/img/shape/page-banner-shape.png" alt="image" />
        </div>
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-xl-6 col-lg-7">
                    <div class="page__banner-content">
                        <h2>Contact Us</h2>
                        <span><a href="{{ route('home') }}">Home</a>
                            <span>|</span>
                            Contact Us
                        </span>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-5">
                    <div class="page__banner-img">
                        <img src="assets/img/custom/contact.png" alt="image" />
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Banner Area End -->

    <!-- Contact Two Start -->

    <div class="contact__two section-padding">
        <div class="container">
            <div class="row gy-4 align-items-center">
                <div class="col-xl-6">
                    <div class="contact__two-content">
                        <div class="contact__two-title">
                            <span class="subtitle-one">Contact us</span>
                            <h2>Get in Touch with Us!</h2>
                            <p>
                                We’d love to hear from you! Whether you have questions about
                                our services, need assistance, or want to discuss your
                                project, our team is here to help. At NicePe, we believe
                                that every conversation is an opportunity to build
                                relationships and provide value.
                            </p>
                        </div>
                        <div class="contact__two-form">
                            @if (Session::has('successMsg'))
                                <div class="alert alert-success">{{Session::get('successMsg')}}</div>
                            @endif
                            <form action="{{ route('contact.store') }}" method="POST">
                                @csrf
                                <div class="row gy-4 mb-4">
                                    <div class="col-xl-6">
                                        <input type="text" placeholder="Your Name" name="name" />
                                        @error('name')
                                            <div class="invalid-feedback d-block mt-1">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="col-xl-6">
                                        <input type="email" placeholder="Your E-mail" name="email" />
                                        @error('email')
                                            <div class="invalid-feedback d-block mt-1">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="col-xl-6">
                                        <input type="tel" placeholder="Phone Number" name="phone" />
                                        @error('phone')
                                            <div class="invalid-feedback d-block mt-1">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="col-xl-6">
                                        <input type="text" placeholder="Subject" name="subject" />
                                        @error('subject')
                                            <div class="invalid-feedback d-block mt-1">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <textarea placeholder="Your Message" name="msg"></textarea>
                                @error('msg')
                                    <div class="invalid-feedback d-block mt-1">{{ $message }}</div>
                                @enderror
                                <button type="submit" class="btn-two">
                                    Submit Now
                                    <i class="fas fa-chevron-right"></i>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="contact__two-contact-info">
                        <div class="contact__two-single-info">
                            <div class="contact__two-single-info-icon">
                                <img src="assets/img/icon//service-1.png" alt="image" />
                            </div>
                            <div class="contact__two-single-info-content">
                                <h4>Email</h4>
                                <span>support@allnice.in</span>
                            </div>
                        </div>
                        <div class="contact__two-single-info">
                            <div class="contact__two-single-info-icon">
                                <img src="assets/img/icon//service-2.png" alt="image" />
                            </div>
                            <div class="contact__two-single-info-content">
                                <h4>Contacts</h4>
                                <span>+91 8083776655</span>
                            </div>
                        </div>
                        <div class="contact__two-single-info">
                            <div class="contact__two-single-info-icon">
                                <img src="assets/img/icon//service-3.png" alt="image" />
                            </div>
                            <div class="contact__two-single-info-content">
                                <h4>Date</h4>
                                <span>{{ now() }}</span>
                            </div>
                        </div>
                        <div class="contact__two-single-info">
                            <div class="contact__two-single-info-icon">
                                <img src="assets/img/icon/service-4.png" alt="image" />
                            </div>
                            <div class="contact__two-single-info-content">
                                <h4>Location</h4>
                                <span>Bahabalpur,Paraiya Road,Guraru, Gaya, Bihar,824118</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Contact Two End -->

    <!-- Contact Location Start -->

    <div class="location-map">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d4465.712816514935!2d84.7896601!3d24.8087044!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x398cd70063b82911%3A0x62a2a21edaa5b448!2sBAHAWALPUR%20%2C%20PARAIYA%20ROAD%2C%20GURARU%20GAYA!5e1!3m2!1sen!2sin!4v1729575472267!5m2!1sen!2sin"
            loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>

    <!-- Contact Location Start -->

</x-web-layout>
