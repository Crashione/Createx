</main>

<footer>
    <div class="footer__top">
        <div class="container">
            <div class="footer__block">
                <div class="footer__block--title">
                    A quick way to discuss details
                </div>
                <form action="" class="footer__form" method="POST">
                    <div class="df">
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

                    <div class="df">
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
                        <label class="footer__form--checkbox-label">
                        <input 
                        type="checkbox" 
                        name="agree" 
                        class="footer__form--checkbox" 
                        required
                        >
                        <div class="footer__form--desc">
                            I agree to receive communications from Createx Construction Bureau.
                        </div>
                        </label>
                    </div>
                </form>
            </div>
        </div>
    </div>
</footer>
<script src="./js/main.js" defer></script>
<script src="./js/slider.js" defer></script>
</body>