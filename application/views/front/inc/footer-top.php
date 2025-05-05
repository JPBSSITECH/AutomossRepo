<div class="container">
            <div class="newsletter__area d-none">
                <div class="newsletter__inner d-flex justify-content-between align-items-center">
                    <div class="newsletter__content">
                        <h2 class="newsletter__title">Subscribe <span class="text__secondary">Newsletter</span></h2>
                        <p class="newsletter__desc">Get updates of latest offers and deals.</p>
                    </div>
                    <div class="newsletter__subscribe">
                        <form class="newsletter__subscribe--form" action="#">
                            <label>
                                <input class="newsletter__subscribe--input" placeholder=" Enter Your Email" type="text">
                            </label>
                            <button class="newsletter__subscribe--button" type="submit">Subscribe Now</button>
                        </form>   
                    </div> 
                </div>
            </div>
            <div class="main__footer">
                <div class="row ">
                    <div class="col-lg-4 col-md-10">
                        <div class="footer__widget">
                            <h2 class="footer__widget--title"><?php Bitebox(1911,$pg_bites);?>  <button class="footer__widget--button" aria-label="footer widget button"></button>
                                <svg class="footer__widget--title__arrowdown--icon" xmlns="http://www.w3.org/2000/svg" width="12.355" height="8.394" viewbox="0 0 10.355 6.394">
                                    <path d="M15.138,8.59l-3.961,3.952L7.217,8.59,6,9.807l5.178,5.178,5.178-5.178Z" transform="translate(-6 -8.59)" fill="currentColor"></path>
                                </svg>
                            </h2>
                            <div class="footer__widget--inner">
                                <p class="footer__widget--desc"><?php Bitebox(1912,$pg_bites);?></p>
                                <ul class="social__share footer__social d-flex">
                                    <li class="social__share--list">
                                        <a class="social__share--icon__style2" target="_blank" href="<?= $common->facebook ?>">
                                            <i class="bi bi-facebook" aria-hidden="true"></i>
                                            <span class="visually-hidden">Facebook</span>
                                        </a>
    

                                    </li>
                                    <li class="social__share--list">
                                        <a class="social__share--icon__style2" target="_blank" href="<?= $common->twitter ?>">
                                            <i class="fab fa-twitter" aria-hidden="true"></i>
                                            <span class="visually-hidden">Twitter</span>
                                        </a>

                                    </li>
                                    <li class="social__share--list">
                                        <a class="social__share--icon__style2" target="_blank" href="<?= $common->instagram ?>">
                                            <i class="fab fa-instagram" aria-hidden="true"></i>
                                            <span class="visually-hidden">Instagram</span>
                                        </a>

                                    </li>
                                    <li class="social__share--list">
                                     <a class="social__share--icon__style2" target="_blank" href="https://www.pinterest.com">
                                        <i class="fab fa-pinterest" aria-hidden="true"></i>
                                        <span class="visually-hidden">Pinterest</span>
                                    </a>

                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4">
                        <div class="footer__widget">
                            <h2 class="footer__widget--title ">Useful Links <button class="footer__widget--button" aria-label="footer widget button"></button>
                                <svg class="footer__widget--title__arrowdown--icon" xmlns="http://www.w3.org/2000/svg" width="12.355" height="8.394" viewbox="0 0 10.355 6.394">
                                    <path d="M15.138,8.59l-3.961,3.952L7.217,8.59,6,9.807l5.178,5.178,5.178-5.178Z" transform="translate(-6 -8.59)" fill="currentColor"></path>
                                </svg>
                            </h2>
                            <ul class="footer__widget--menu footer__widget--inner">
                                
                                <li class="footer__widget--menu__list"><a class="footer__widget--menu__text" href="<?= base_url() ?>customer">My Account</a></li>
                                 
                                <li class="footer__widget--menu__list"><a class="footer__widget--menu__text" href="<?= base_url() ?>login">Customer Login</a></li>
                                <li class="footer__widget--menu__list"><a class="footer__widget--menu__text" href="<?= base_url() ?>mechlogin">Mechanic Login</a></li>
                                <li class="footer__widget--menu__list"><a class="footer__widget--menu__text" href="<?= base_url() ?>backend">Admin Panel</a></li>
                                <!-- <li class="footer__widget--menu__list"><a class="footer__widget--menu__text" href="">Checkout</a></li> -->
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4">
                        <div class="footer__widget">
                            <h2 class="footer__widget--title ">Quick Links <button class="footer__widget--button" aria-label="footer widget button"></button>
                                <svg class="footer__widget--title__arrowdown--icon" xmlns="http://www.w3.org/2000/svg" width="12.355" height="8.394" viewbox="0 0 10.355 6.394">
                                    <path d="M15.138,8.59l-3.961,3.952L7.217,8.59,6,9.807l5.178,5.178,5.178-5.178Z" transform="translate(-6 -8.59)" fill="currentColor"></path>
                                </svg>
                            </h2>
                            <ul class="footer__widget--menu footer__widget--inner">
                                <li class="footer__widget--menu__list"><a class="footer__widget--menu__text" href="<?= base_url() ?>contact">Contact Us</a></li>
                                <li class="footer__widget--menu__list"><a class="footer__widget--menu__text" href="<?= base_url() ?>about">About Us</a></li>
                                <li class="footer__widget--menu__list"><a class="footer__widget--menu__text" href="<?= base_url() ?>cancellation">Cancellation</a></li>
                                <li class="footer__widget--menu__list"><a class="footer__widget--menu__text" href="<?= base_url() ?>privacypolicy">Privacy Policy</a></li>
                                <li class="footer__widget--menu__list"><a class="footer__widget--menu__text" href="<?= base_url() ?>terms">Terms</a></li>
                           
                                <li class="footer__widget--menu__list"><a class="footer__widget--menu__text" href="<?= base_url() ?>returnpolicy">Refund & Return Policy</a></li>
                                <li class="footer__widget--menu__list"><a class="footer__widget--menu__text" href="<?= base_url() ?>shippingpolicy">Shipping Policy</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4">
                        <div class="footer__widget">
                            <h2 class="footer__widget--title ">FIND IT FAST <button class="footer__widget--button" aria-label="footer widget button"></button>
                                <svg class="footer__widget--title__arrowdown--icon" xmlns="http://www.w3.org/2000/svg" width="12.355" height="8.394" viewbox="0 0 10.355 6.394">
                                    <path d="M15.138,8.59l-3.961,3.952L7.217,8.59,6,9.807l5.178,5.178,5.178-5.178Z" transform="translate(-6 -8.59)" fill="currentColor"></path>
                                </svg>
                            </h2>
                            <ul class="footer__widget--menu footer__widget--inner">
                                 
                                <li class="footer__widget--menu__list"><a class="footer__widget--menu__text" href="<?= base_url() ?>spareparts">Car Accessories</a></li>
                                
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
