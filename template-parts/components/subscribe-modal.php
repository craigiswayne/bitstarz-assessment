<div id="subscribe-modal" class="modal">
    <div class="overlay"></div>
    <div class="content row animate fade-in-from-bottom position-relative">
        <div class="left">
            <h5 class="color-text-dark">Buy a subscription</h5>
            <form class="color-text-dark">
                <div class="field position-relative" id="field-card-number">
                    <input name="cardNumber" required minlength="10" />
                    <label for="cardNumber">Card Number</label>
                    <?php partial('components/error-icon'); ?>
                    <div class="card-icon">
                        <div class="mastercard"
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="16" cy="12" r="8" fill="#FF9A03"/>
                                <circle cx="8" cy="12" r="8" fill="#DA1A1A"/>
                            </svg>
                        </div>
                        <div class="visa">
                            <svg width="42" height="24" viewBox="0 0 42 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M20.9314 5.23222L18.2418 17.8029H14.9887L17.6793 5.23222H20.9314ZM34.6136 13.3474L36.3269 8.62877L37.3104 13.3474H34.6136ZM38.2434 17.8029H41.2498L38.6273 5.23222H35.849C35.2256 5.23222 34.6982 5.59551 34.465 6.15386L29.5864 17.8029H32.9984L33.6786 15.9255H37.8512L38.2434 17.8029ZM29.7536 13.7004C29.7691 10.3781 25.166 10.1975 25.198 8.71753C25.2083 8.26445 25.6377 7.78454 26.5769 7.66172C27.0433 7.60083 28.3262 7.55438 29.7835 8.22317L30.3542 5.55629C29.574 5.27453 28.5646 5 27.3127 5C24.0988 5 21.8355 6.71015 21.8169 9.15926C21.7973 10.9675 23.4321 11.9768 24.6655 12.5795C25.9318 13.1947 26.356 13.5899 26.3529 14.1431C26.3426 14.9843 25.3394 15.3579 24.4054 15.3692C22.7706 15.3981 21.82 14.9296 21.0656 14.5797L20.4752 17.3333C21.2348 17.6821 22.6364 17.9825 24.0927 18C27.5078 18 29.7433 16.3105 29.7536 13.7004ZM16.284 5.23222L11.0152 17.8029H7.57637L4.9838 7.77009C4.82487 7.15084 4.6876 6.92791 4.20975 6.66577C3.4295 6.24055 2.13838 5.8432 1 5.59551L1.07947 5.23222H6.61242C7.31836 5.23222 7.95205 5.69975 8.11202 6.51405L9.48158 13.7891L12.8658 5.23222H16.284Z" fill="#4061B7"/>
                                <path d="M6.80231 5.21695H1.05876L1 5.58507C5.48033 6.74262 8.12256 9.77136 9.34167 13.1251L8.41809 6.38949C8.21253 5.4986 7.58082 5.24634 6.80231 5.21695Z" fill="#DD6B02"/>
                            </svg>
                        </div>
                        <div class="unknown">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M0.585786 4.58579C0 5.17157 0 6.11438 0 8H24C24 6.11438 24 5.17157 23.4142 4.58579C22.8284 4 21.8856 4 20 4H4C2.11438 4 1.17157 4 0.585786 4.58579ZM24 10H0V16C0 17.8856 0 18.8284 0.585786 19.4142C1.17157 20 2.11438 20 4 20H20C21.8856 20 22.8284 20 23.4142 19.4142C24 18.8284 24 17.8856 24 16V10Z" fill="#D5DEE7"/>
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="field-group row">
                    <div class="field position-relative">
                        <input name="expiry" required />
                        <label for="expiry">Expiry Date</label>
                    </div>
                    <div class="field position-relative">
                        <input name="cvv" type="text" required minlength="3" />
                        <label for="cvv">CVV</label>
                    </div>
                </div>
                <div class="field position-relative">
                    <input name="name" required minlength="2" type="text" />
                    <label for="name">Full Name</label>
                </div>
            </form>
            <?php partial('components/button', ['color' => 'primary', 'text' => 'Pay Now', 'cssClasses' => 'animate']) ?>
        </div>
        <div class="right"></div>
        <div class="icon close cta">
            <svg width="15" height="14" viewBox="0 0 15 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g clip-path="url(#clip0_4490_257)">
                    <path d="M9.38282 7.42C9.10285 7.14 9.10285 6.72 9.38282 6.44L14.1423 1.68C14.5622 1.26 14.5622 0.559997 14.1423 0.139997C13.7223 -0.280003 13.1624 -0.280003 12.7424 0.139997L7.98298 5.04C7.70301 5.32 7.28306 5.32 7.00309 5.04L2.24363 0.279997C1.82368 -0.140003 1.12376 -0.140003 0.703804 0.279997C0.423836 0.699997 0.423836 1.4 0.703804 1.82L5.46326 6.58C5.74323 6.86 5.74323 7.28 5.46326 7.56L0.703804 12.18C0.283852 12.6 0.283852 13.3 0.703804 13.72C1.12376 14.14 1.82368 14.14 2.24363 13.72L7.00309 8.96C7.28306 8.68 7.70301 8.68 7.98298 8.96L12.7424 13.72C13.0224 14 13.7223 14 14.1423 13.58C14.5622 13.16 14.5622 12.6 14.1423 12.18L9.38282 7.42Z" fill="#3E4145"/>
                </g>
                <defs>
                    <clipPath id="clip0_4490_257">
                        <rect width="13.9984" height="14" fill="white" transform="translate(0.423828)"/>
                    </clipPath>
                </defs>
            </svg>
        </div>
    </div>
</div>
