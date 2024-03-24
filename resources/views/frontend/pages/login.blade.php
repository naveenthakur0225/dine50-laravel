<div class="login-outer">
    <div class="row">
        <div class="col-md-12">
            <div class="close-login-nav">
                <i class="fa-solid fa-xmark"></i>
            </div>
            <div>
                <p class="fs-28 fw-800 mb-0">ONE MEMBERSHIP,</p>      
                <p class="fs-28 fw-800 unlimited-benefits mb-0">UNLIMITED BENEFITS!</p>
                <p class="fs-20">20+ Subscriptions | 40+ Offerings</p>
            </div>  
            <div>
                <h2>Login</h2>
                {{-- OTP html start  --}}
                    {{-- <h2>Enter OTP</h2>
                    <div class="otp-title d-flex">
                        <div>
                            We've sent an OTP on <b> 6280020282</b>
                        </div>
                        <div class="cursor-pointer px-2 pr-2">
                            <i class="fa-solid fa-pencil"></i>
                        </div>
                    </div> --}}
                {{-- OTP html end  --}}
                <div class="half-breaker"></div>
                <div class="login-input">
                    <span>+91</span>
                    <span></span>
                    <span></span>
                    <div class="position-relative w-100">
                        <input type="<input type="tel" inputmode="numeric" pattern="[0-9]*" placeholder="Enter your mobile number" >
                    </div>
                </div>
                <a href="#" class="have-referral-code text-decoration-none">Have a referral/gift code?</a>
                <div class="gift-code d-none">
                    <input type="text"  placeholder="Referral/Gift Code">
                </div> 
                <button class="join-btn text-center w-100 text-white">JOIN NOW</button>
                <div class="privacy-policy">
                    By clicking on Login, I accept the 
                    <span>Terms &amp; Conditions &amp; Privacy Policy</span>
                </div>
                
                {{-- OTP html start  --}}
                {{-- <div id="otp" class="inputs d-flex flex-row justify-content-center "> 
                    <input class="m-2 text-center form-control rounded" type="text" id="first" maxlength="1" /> 
                    <input class="m-2 text-center form-control rounded" type="text" id="second" maxlength="1" /> 
                    <input class="m-2 text-center form-control rounded" type="text" id="third" maxlength="1" /> 
                    <input class="m-2 text-center form-control rounded" type="text" id="fourth" maxlength="1" /> 
                    <input class="m-2 text-center form-control rounded" type="text" id="fifth" maxlength="1" /> 
                    <input class="m-2 text-center form-control rounded" type="text" id="sixth" maxlength="1" /> 
                </div>
                <button class="join-btn text-center w-100 text-white">VERIFY OTP</button>
                <div class="resend-otp justify-content-center d-flex">
                    <span class="timer">Resend OTP In <span class="text-dark">00:10</span></span>
                    <span class="link text-center">Resend OTP</span>
                </div> --}}
                {{-- OTP html end  --}}
            </div>
            
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        $('.have-referral-code').on('click', function(event) {
            event.preventDefault();
            $('.have-referral-code').hide();
            $('.gift-code').removeClass('d-none');
        });
    });
</script>