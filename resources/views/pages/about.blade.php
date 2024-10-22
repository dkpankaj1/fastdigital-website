<x-web-layout>
    <!-- Banner Area Start -->

    <div class="page__banner">
        <div class="page__banner-shape">
            <img src="{{asset('assets')}}/img/shape/page-banner-shape.png" alt="image" />
        </div>
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-xl-6 col-lg-7">
                    <div class="page__banner-content">
                        <h2>About Us</h2>
                        <span><a href="{{route('home')}}">Home</a>
                            <span>|</span>
                            About Us
                        </span>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-5">
                    <div class="page__banner-img">
                        <img src="{{asset('assets')}}/img/custom//about.png" alt="image" />
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Banner Area End -->

    <!-- About Area Start -->
    <div class="about__one section-padding">
        <div class="container">
            <div class="row align-items-center flex-wrap-reverse gy-4">
                <div class="col-xl-6 col-lg-8">
                    <div class="about__one-image">
                        <div class="experience-bar animate-y-axis-slider">
                            <i class="flaticon-consultant"></i>
                            <div class="experience-bar-right">
                                <div class="experience-bar-counter">
                                    <h4 class="counter">4</h4>
                                    <span>+</span>
                                </div>
                                <span>Years Experience</span>
                            </div>
                        </div>
                        <div class="about__four-image-wrapper">
                            <img src="{{asset('assets')}}/img/brnad.png" alt="" class="image-1" />
                            <img src="{{asset('assets')}}/img/about/about-five-2.png" alt="" class="image-2" />
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-7 col-md-9">
                    <div class="about__one-content">
                        <span class="subtitle-one">About us</span>
                        <h2>About NicePe</h2>
                        <p style="text-align: justify">
                            NicePe, managed by Rahul Enterprises and led by Rahul
                            Kumar, is your trusted partner for comprehensive web solutions.
                            We specialize in website development, hosting services, and B2B
                            solutions, all designed to empower businesses in the digital
                            realm.
                        </p>
                        <p style="text-align: justify">
                            Our team is dedicated to delivering high-quality, responsive
                            websites that enhance your brand's online presence. We offer
                            reliable hosting services to ensure your website operates
                            smoothly and efficiently. Our tailored B2B solutions streamline
                            operations and foster collaboration, helping your business grow
                            and succeed.
                        </p>
                        <p style="text-align: justify">
                            At NicePe, we pride ourselves on providing 24/7 help and
                            support for all our services. Whether you have a question, need
                            assistance, or require technical support, our dedicated team is
                            always here to help. We believe in a customer-centric approach,
                            prioritizing your needs and delivering exceptional results that
                            drive your business forward.
                        </p>
                    </div>
                </div>
            </div>
            <p class="mt-5" style="text-align: justify">
                Partner with NicePe and experience the benefits of expert
                management, innovative solutions, and unparalleled support. Our
                commitment to your success goes beyond just providing services; we
                strive to build lasting partnerships that drive growth and innovation.
                With our dedicated team by your side, you can focus on what you do
                best—running your business—while we handle your digital needs with
                professionalism and care. Together, we’ll navigate the digital
                landscape and unlock new opportunities for your business to thrive.
            </p>
        </div>
    </div>
    <!-- About Area End -->
</x-web-layout>
