<?php require 'doctype.php'; ?>

<section class="section service page-hero">
    <div class="container">
        <div class="page-hero__content">
            <div class="page-hero__path">Homepage / Contacts</div>
            <h1 class="page-hero__title">CONTACTS</h1>
            <div class="page-hero__desc">
                Contact us for all your construction needs. We always welcome
                any questions and comments.
            </div>
        </div>
    </div>
    <div class="page-hero__media">
        <img src="./img/contacts/hero.jpg"
             alt="Createx Construction Bureau contact page"
             class="page-hero__img"
             fetchpriority="high" decoding="async">
    </div>
</section>

<section class="contact-us">
    <div class="container">
        <h2 class="section-title">Contact us</h2>
        <p class="section-subtitle">
            Please complete the form. Detailed information will help us to make a tuned offer.
        </p>

        <div class="contact-us__inner">
            <div class="contact-us__media">
                <img src="./img/contacts/contact-form.jpg"
                     alt="Createx manager ready to help"
                     loading="lazy" decoding="async"
                     width="495" height="586">
            </div>

            <form class="contact-us__form" action="#" method="POST">
                <div class="contact-us__grid">

                    <div class="form-field">
                        <label for="contact-name" class="form-field__label">Name*</label>
                        <input id="contact-name" name="name" type="text"
                               placeholder="Your name" required
                               class="form-field__input">
                    </div>

                    <div class="form-field">
                        <label for="contact-interest" class="form-field__label">I am interested in</label>
                        <select id="contact-interest" name="interest"
                                class="form-field__input form-field__select">
                            <option value="interior-design" selected>Interior Design</option>
                            <option value="construction">Construction</option>
                            <option value="project-development">Project Development</option>
                            <option value="repairs">Repairs</option>
                        </select>
                    </div>

                    <div class="form-field">
                        <label for="contact-phone" class="form-field__label">Phone*</label>
                        <input id="contact-phone" name="phone" type="tel"
                               placeholder="Your phone number" required
                               class="form-field__input">
                    </div>

                    <div class="form-field">
                        <label for="contact-location" class="form-field__label">Location*</label>
                        <select id="contact-location" name="location" required
                                class="form-field__input form-field__select">
                            <option value="" disabled>Choose your location</option>
                            <option value="new-york" selected>New York</option>
                            <option value="new-jersey">New Jersey</option>
                            <option value="san-francisco">San Francisco</option>
                        </select>
                    </div>

                    <div class="form-field">
                        <label for="contact-email" class="form-field__label">Email</label>
                        <input id="contact-email" name="email" type="email"
                               placeholder="Your working email"
                               class="form-field__input">
                    </div>

                    <div class="form-field form-field--radios">
                        <span class="form-field__label">Preferred contact method</span>
                        <div class="contact-radios">
                            <label class="contact-radio">
                                <input type="radio" name="contact-method" value="phone" checked>
                                <span class="contact-radio__mark" aria-hidden="true"></span>
                                <span class="contact-radio__text">Phone</span>
                            </label>
                            <label class="contact-radio">
                                <input type="radio" name="contact-method" value="email">
                                <span class="contact-radio__mark" aria-hidden="true"></span>
                                <span class="contact-radio__text">Email</span>
                            </label>
                            <label class="contact-radio">
                                <input type="radio" name="contact-method" value="viber">
                                <span class="contact-radio__mark" aria-hidden="true"></span>
                                <span class="contact-radio__text">Viber</span>
                            </label>
                        </div>
                    </div>

                    <div class="form-field form-field--full">
                        <label for="contact-message" class="form-field__label">Message*</label>
                        <textarea id="contact-message" name="message" rows="5"
                                  placeholder="Your message" required
                                  class="form-field__textarea"></textarea>
                    </div>

                </div>

                <div class="contact-us__bottom">
                    <label class="contact-us__agree">
                        <input type="checkbox"
                               name="agree"
                               id="contact-agree"
                               data-agree-toggle="contact-submit"
                               required>
                        <span class="contact-us__agree-mark" aria-hidden="true"></span>
                        <span class="contact-us__agree-text">
                            I agree to receive communications from Createx Construction Bureau.
                        </span>
                    </label>

                    <button type="submit"
                            class="btn__filled btn__lg"
                            id="contact-submit"
                            disabled>
                        Send request
                    </button>
                </div>
            </form>
        </div>
    </div>
</section>

<section class="offices">
    <div class="container">
        <h2 class="section-title">Our offices</h2>
        <p class="section-subtitle">
            Give us a call, send us a note or visit our office. We can't wait to hear from you!
        </p>

        <div class="offices__grid">

            <div class="office">
                <h3 class="office__city">New York, USA</h3>
                <div class="office__address">
                    8502 Preston Rd. Inglewood, New York 98380
                    <a href="https://yandex.ru/maps/?ll=-74.0060%2C40.7128&z=12&pt=-74.0060,40.7128,pm2rdm"
                       class="office__map-link"
                       target="_blank"
                       rel="noopener noreferrer">See on the map</a>
                </div>
                <ul class="office__contacts">
                    <li class="office__contact">
                        <span class="office__label">Call:</span>
                        <a href="tel:+14055550128">(405) 555-0128</a>
                    </li>
                    <li class="office__contact">
                        <span class="office__label">Email:</span>
                        <a href="mailto:hello@createx.com">hello@createx.com</a>
                    </li>
                    <li class="office__contact">
                        <span class="office__label">Schedule:</span> Mon - Fri 9:00 - 18:00
                    </li>
                </ul>
            </div>

            <div class="office">
                <h3 class="office__city">New Jersey, USA</h3>
                    <div class="office__address">
                        2464 Royal Ln. Mesa, New Jersey 45463
                        <a href="https://yandex.ru/maps/?ll=-74.4057%2C40.0583&z=12&pt=-74.4057,40.0583,pm2rdm"
                           class="office__map-link"
                           target="_blank"
                           rel="noopener noreferrer">See on the map</a>
                    </div>
                <ul class="office__contacts">
                    <li class="office__contact">
                        <span class="office__label">Call:</span>
                        <a href="tel:+18085550111">(808) 555-0111</a>
                    </li>
                    <li class="office__contact">
                        <span class="office__label">Email:</span>
                        <a href="mailto:hello@createx.com">hello@createx.com</a>
                    </li>
                    <li class="office__contact">
                        <span class="office__label">Schedule:</span> Mon - Fri 9:00 - 18:00
                    </li>
                </ul>
            </div>

            <div class="office">
                <h3 class="office__city">San Francisco, USA</h3>
                <div class="office__address">
                    8502 Preston Rd. Inglewood, San Francisco 98380
                    <a href="https://yandex.ru/maps/?ll=-122.4194%2C37.7749&z=12&pt=-122.4194,37.7749,pm2rdm"
                       class="office__map-link"
                       target="_blank"
                       rel="noopener noreferrer">See on the map</a>
                </div>
                <ul class="office__contacts">
                    <li class="office__contact">
                        <span class="office__label">Call:</span>
                        <a href="tel:+15055550125">(505) 555-0125</a>
                    </li>
                    <li class="office__contact">
                        <span class="office__label">Email:</span>
                        <a href="mailto:hello@createx.com">hello@createx.com</a>
                    </li>
                    <li class="office__contact">
                        <span class="office__label">Schedule:</span> Mon - Fri 10:00 - 19:00
                    </li>
                </ul>
            </div>

        </div>
    </div>
</section>

<section class="find-us">
    <div class="container">
        <h2 class="find-us__title">Find us at</h2>
        <ul class="find-us__socials">
            <li><a href="#" aria-label="WhatsApp">
                <img src="./img/contacts/socials/whatsapp.svg" alt=""
                     loading="lazy" decoding="async" width="32" height="32">
            </a></li>
            <li><a href="#" aria-label="Messenger">
                <img src="./img/contacts/socials/messenger.svg" alt=""
                     loading="lazy" decoding="async" width="32" height="32">
            </a></li>
            <li><a href="#" aria-label="Facebook">
                <img src="./img/contacts/socials/facebook.svg" alt=""
                     loading="lazy" decoding="async" width="32" height="32">
            </a></li>
            <li><a href="#" aria-label="Twitter">
                <img src="./img/contacts/socials/twitter.svg" alt=""
                     loading="lazy" decoding="async" width="32" height="32">
            </a></li>
            <li><a href="#" aria-label="YouTube">
                <img src="./img/contacts/socials/youtube.svg" alt=""
                     loading="lazy" decoding="async" width="32" height="32">
            </a></li>
        </ul>
    </div>
</section>

<?php require 'footer.php'; ?>