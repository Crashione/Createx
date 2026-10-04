</main>

<footer>
    <section class="footer__top">
        <div class="container">
            <div class="footer__block">
                <div class="footer__block--title">
                    A quick way to discuss details
                </div>
                <form action="" class="footer__form" method="POST">
                    <div class="">
                        <label for="user-name" class="footer__form--label">Name*</label>
                        <input type="text" 
                        id="user-name" 
                        name="user-name" 
                        class="footer__form--input" 
                        placeholder="Your name" 
                        required
                        >
                    </div>
                   

                    <div class="">
                        <label for="user-phone" class="footer__form--label">Phone*</label>
                        <input type="tel" 
                        id="user-phone" 
                        name="user-phone" 
                        class="footer__form--input" 
                        placeholder="Your phone number" 
                        required
                        >
                    </div>


                    <div class="">
                        <label for="user-email" class="footer__form--label">Email</label>
                        <input type="email" 
                        id="user-email" 
                        name="user-email" 
                        class="footer__form--input" 
                        placeholder="Your working email" 
                        >
                    </div>

                    <div class="">
                        <label for="user-message" class="footer__form--label">Message*</label>
                        <textarea 
                            id="user-message" 
                            name="user_message" 
                            class="footer__form--textarea" 
                            placeholder="Your message" 
                            rows="3" 
                            required
                        ></textarea>
                    </div>

                    <div class="df">
                        
                        <input 
                        id="checkbox"
                        type="checkbox" 
                        name="agree" 
                        class="footer__form--checkbox" 
                        required
                        >
                        <div class="footer__form--desc">
                            I agree to receive communications from Createx Construction Bureau.
                        </div>
                    </div>
                     <button id="btn-form" type="submit" class="btn__filled" id="btn-form" disabled>send request</button>
                </form>
            </div>
        </div>
    </section>
    <section class="footer__bottom">
            <div class="container">
                <div class="footer__bottom--block">
                    <div class="footer__bottom--left">
                       <div class="footer__left--row">
                            <div class="footer__bottom--logo">
                                <a href="#">
                                    <img src="img/footer/logo-white.svg" alt="">
                                </a>
                            </div>
                            <ul class="footer__bottom--socials">
                                <li class="footer__bottom--social"><a href="#"><img src="img/footer/socials/1.svg" alt=""></a></li>
                                <li class="footer__bottom--social"><a href="#"><img src="img/footer/socials/2.svg" alt=""></a></li>
                                <li class="footer__bottom--social"><a href="#"><img src="img/footer/socials/3.svg" alt=""></a></li>
                                <li class="footer__bottom--social"><a href="#"><img src="img/footer/socials/4.svg" alt=""></a></li>
                                <li class="footer__bottom--social"><a href="#"><img src="img/footer/socials/5.svg" alt=""></a></li>
                            </ul>
                       </div>
                        <div class="footer__bottom--desc">
                        Createx Construction Bureau has been 
                        successfully operating in the USA construction market 
                        since 2000. We are proud to offer you quality construction 
                        and exemplary service. Our mission is to set the highest standards 
                        for construction sphere.
                        </div> 
                    </div>
                    <div class="footer__bottom--right">
                        <div class="footer__bottom--title">
                            Let’s stay in touch
                        </div>
                        <form class="footer__bottom--form">
                            <input type="email" 
                             id="footer__bottom--input" 
                             placeholder="Your email address"
                             required
                             class="footer__bottom--input"
                             >
                            <button type="submit" class="btn__filled">subscribe</button>
                        </form>
                        <div class="footer__bottom--desc">*Subscribe to our newsletter to receive 
                            communications and early updates from Createx Construction Bureau.</div>
                    </div>
                </div>
                <ul class="footer__bottom--contacts">
                    <li class="footer__contacts">
                        <h2 class="footer__contacts--title">HEAD OFFICE</h2>
                        <ul class="footer__contacts--column">
                            <li class="footer__contacts--item"><p class="footer__item--white">Address:</p>8502 Preston Rd. Inglewood, New York</li>
                            <li class="footer__contacts--item"><p class="footer__item--white">Call:</p>(405) 555-0128</li>
                            <li class="footer__contacts--item"><p class="footer__item--white">Email:</p>hello@createx.com</li>
                        </ul>
                    </li>
                    <li class="footer__contacts">
                        <h2 class="footer__contacts--title">WHO WE ARE</h2>
                        <ul class="footer__contacts--column">
                            <li class="footer__contacts--item">About Us</li>
                            <li class="footer__contacts--item">Available Positions</li>
                            <li class="footer__contacts--item">Contacts</li>
                        </ul>
                    </li>
                    <li class="footer__contacts">
                        <h2 class="footer__contacts--title">OUR EXPERIENCE</h2>
                        <ul class="footer__contacts--column">
                            <li class="footer__contacts--item">Services</li>
                            <li class="footer__contacts--item">Work</li>
                            <li class="footer__contacts--item">News</li>
                        </ul>
                    </li>
                </ul>
                <div class="footer__bottom-copyright">
                    <div class="footer__copyright">
                        © All rights reserved. Made with <img src="img/icons/like.svg" alt=""> by Createx Studio 
                    </div>
                    <div class="footer__go-top">
                        <div class="footer__go-top--title">
                            GO TO TOP
                        </div>
                        <a class="footer__go-top--btn" href="#">
                        <img src="img/icons/go-top.svg" alt="">
                        </a>
                    </div>
                </div>
            </div>
    </section> 
</footer>
<script src="/js/news-pagination.js"></script>
<script src="./js/main.js" defer></script>
<script src="./js/project-slider.js" defer></script>
<script src="./js/slider.js" defer></script>
</body>