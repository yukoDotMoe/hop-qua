<x-guest-layout>
    <form id="login_form" accept-charset="utf8" class="p-3">
        @csrf
        <div class="flex flex-col items-center justify-center bg-white rounded-2xl py-10 px-8 gap-y-12">
            <h5 class="MuiTypography-root MuiTypography-h5 MuiTypography-alignCenter css-1n8l99l">ĐĂNG NHẬP TÀI
                KHOẢN</h5>
            <div class="flex flex-col items-stretch gap-8 relative w-full">
                <div class="MuiFormControl-root MuiFormControl-fullWidth MuiTextField-root css-feqhe6" id="phoneDiv">
                    <div class="MuiInputBase-root MuiOutlinedInput-root MuiInputBase-colorWarning MuiInputBase-fullWidth MuiInputBase-formControl MuiInputBase-adornedStart css-vjls2h">
                        <div class="MuiInputAdornment-root MuiInputAdornment-positionStart MuiInputAdornment-outlined MuiInputAdornment-sizeMedium css-1a6giau">
                            <span class="notranslate">&ZeroWidthSpace;</span>
                            +84
                        </div>
                        <input aria-invalid="false" id=":r0:" name="phone_number" placeholder="Số điện thoại của bạn.." type="text"
                               class="MuiInputBase-input MuiOutlinedInput-input MuiInputBase-inputAdornedStart css-1ixds2g"
                               value="">
                        <fieldset aria-hidden="true" class="MuiOutlinedInput-notchedOutline css-igs3ac">
                            <legend class="css-ihdtdm"><span class="notranslate">&ZeroWidthSpace;</span></legend>
                        </fieldset>
                    </div>
                </div>
                <div id="recaptcha-container" class="mx-auto"></div>
                <div class="MuiFormControl-root MuiFormControl-fullWidth MuiTextField-root css-feqhe6 d-none" id="verifyCode">
                    <div class="MuiInputBase-root MuiOutlinedInput-root MuiInputBase-colorWarning MuiInputBase-fullWidth MuiInputBase-formControl MuiInputBase-adornedStart MuiInputBase-adornedEnd css-1x41kx5">
                        <div class="MuiInputAdornment-root MuiInputAdornment-positionStart MuiInputAdornment-outlined MuiInputAdornment-sizeMedium css-1a6giau">
                            <span class="notranslate">&ZeroWidthSpace;</span>
                            <svg class="MuiSvgIcon-root MuiSvgIcon-fontSizeMedium css-vubbuv" focusable="false"
                                 aria-hidden="true" viewBox="0 0 24 24">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                      d="M17.5227 7.39601V8.92935C19.2451 9.46696 20.5 11.0261 20.5 12.8884V17.8253C20.5 20.1308 18.5886 22 16.2322 22H7.7688C5.41136 22 3.5 20.1308 3.5 17.8253V12.8884C3.5 11.0261 4.75595 9.46696 6.47729 8.92935V7.39601C6.48745 4.41479 8.95667 2 11.9848 2C15.0535 2 17.5227 4.41479 17.5227 7.39601ZM12.0051 3.73904C14.0678 3.73904 15.7445 5.37871 15.7445 7.39601V8.7137H8.25553V7.37613C8.26569 5.36878 9.94232 3.73904 12.0051 3.73904ZM12.8891 16.4549C12.8891 16.9419 12.4928 17.3294 11.9949 17.3294C11.5072 17.3294 11.1109 16.9419 11.1109 16.4549V14.2488C11.1109 13.7718 11.5072 13.3843 11.9949 13.3843C12.4928 13.3843 12.8891 13.7718 12.8891 14.2488V16.4549Z"
                                      fill="#9E9E9E"></path>
                            </svg>
                        </div>
                        <input aria-invalid="false" id=":r1:" name="verification_code" placeholder="Mã xác nhận" type="text"
                               class="MuiInputBase-input MuiOutlinedInput-input MuiInputBase-inputAdornedStart MuiInputBase-inputAdornedEnd css-1gnht4k"
                               value="">
                        <div class="MuiInputAdornment-root MuiInputAdornment-positionEnd MuiInputAdornment-outlined MuiInputAdornment-sizeMedium css-1nvf7g0">
                            <button class="MuiButtonBase-root MuiIconButton-root MuiIconButton-sizeMedium css-1yxmbwk"
                                    tabindex="0" type="button">
                                <svg class="MuiSvgIcon-root MuiSvgIcon-fontSizeMedium css-vubbuv" focusable="false"
                                     aria-hidden="true" viewBox="0 0 24 24" data-testid="VisibilityOutlinedIcon">
                                    <path d="M12 6c3.79 0 7.17 2.13 8.82 5.5C19.17 14.87 15.79 17 12 17s-7.17-2.13-8.82-5.5C4.83 8.13 8.21 6 12 6m0-2C7 4 2.73 7.11 1 11.5 2.73 15.89 7 19 12 19s9.27-3.11 11-7.5C21.27 7.11 17 4 12 4zm0 5c1.38 0 2.5 1.12 2.5 2.5S13.38 14 12 14s-2.5-1.12-2.5-2.5S10.62 9 12 9m0-2c-2.48 0-4.5 2.02-4.5 4.5S9.52 16 12 16s4.5-2.02 4.5-4.5S14.48 7 12 7z"></path>
                                </svg>
                                <span class="MuiTouchRipple-root css-w0pj6f"></span></button>
                        </div>
                        <fieldset aria-hidden="true" class="MuiOutlinedInput-notchedOutline css-igs3ac">
                            <legend class="css-ihdtdm"><span class="notranslate">&ZeroWidthSpace;</span></legend>
                        </fieldset>
                    </div>

                </div>
                <button type="submit" id="loginBtn" class="d-none MuiButtonBase-root MuiButton-root MuiLoadingButton-root MuiButton-contained MuiButton-containedPrimary MuiButton-sizeLarge MuiButton-containedSizeLarge MuiButton-root MuiLoadingButton-root MuiButton-contained MuiButton-containedPrimary MuiButton-sizeLarge MuiButton-containedSizeLarge mx-auto shadow-none rounded-full bg-[#fa6253] css-avm12u"
                        tabindex="0" type="button" id=":r2:">Xác minh<span
                            class="MuiTouchRipple-root css-w0pj6f"></span></button>
                <button type="submit" id="submitBtn" class=" MuiButtonBase-root MuiButton-root MuiLoadingButton-root MuiButton-contained MuiButton-containedPrimary MuiButton-sizeLarge MuiButton-containedSizeLarge MuiButton-root MuiLoadingButton-root MuiButton-contained MuiButton-containedPrimary MuiButton-sizeLarge MuiButton-containedSizeLarge mx-auto shadow-none rounded-full bg-[#fa6253] css-avm12u"
                        tabindex="0" type="button" id=":r2:">Gửi mã xác nhận<span
                            class="MuiTouchRipple-root css-w0pj6f"></span></button>
                </div>
            </div>
        </div>
    </form>

    @section('jsl')
        <script type="module">
            import {toast} from 'https://cdn.skypack.dev/wc-toast';
            function render() {
                window.recaptchaVerifier = new firebase.auth.RecaptchaVerifier('recaptcha-container', { size: "invisible" });
                recaptchaVerifier.render();
            }
            function isVietnamesePhoneNumber(number) {
                if (number.trim() === '') return false
                const vietnamesePhoneNumberRegex = /^[0-9]{9}$/;
                return vietnamesePhoneNumberRegex.test(number);
            }
            $(document).ready(function () {
                render();
                $('#submitBtn').click(function (e) {
                    e.preventDefault()
                    const phoneNum = $('input[name="phone_number"]').val()
                    if(!isVietnamesePhoneNumber(phoneNum)) return toast.error('Số điện thoại của bạn không hợp lệ')
                    firebase.auth().signInWithPhoneNumber(`+84${phoneNum}`, window.recaptchaVerifier).then(function(confirmationResult) {
                        window.confirmationResult = confirmationResult;
                        toast.success("Đã gửi mã xác nhận tới SDT của bạn.")
                        $('#verifyCode').removeClass('d-none')
                        $('#loginBtn').removeClass('d-none')
                        $('#phoneDiv').addClass('d-none')
                        $('#recaptcha-container').addClass('d-none')
                        $('#submitBtn').addClass('d-none')
                    }).catch(function(error) {
                        var errMsg = '';
                        switch (error.code) {
                            case 'auth/too-many-requests':
                                errMsg = 'SDT của bạn đã bị chặn.';
                                break;
                        }
                        toast.error(errMsg)
                    });
                })

                $('#loginBtn').click(function (e) {
                    e.preventDefault()
                    var _this = $('#loginBtn');
                    setTimeout(function () {
                        _this.html('<i class="fa-solid fa-circle-notch fa-spin"></i>');
                        _this.prop('disabled', false);
                    }, 300);
                    const veriCode = $('input[name="verification_code"]').val()
                    const credential = firebase.auth.PhoneAuthProvider.credential(confirmationResult.verificationId, veriCode);
                    firebase.auth().signInWithCredential(credential)
                        .then((userCredential) => {
                            const user = userCredential.user;
                            $.ajax({
                                url: "{{route('login')}}",
                                type: 'POST',
                                dataType: "json",
                                contentType: "application/json; charset=utf-8",
                                data: JSON.stringify({
                                    token: user.za
                                }),
                                headers: {
                                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                },
                                processData: false,
                                success: function (data) {
                                    if(data.code <= 200)
                                    {
                                        toast.success((data.data.is_new ? 'Đăng kí thành công' : 'Đăng nhập thành công'))
                                        setTimeout(function(){
                                            window.location.href = data.data.redirect_url;
                                        },1000);
                                    }else{
                                        toast.error(data.message)
                                        setTimeout(function () {
                                            _this.html('Xác minh');
                                            _this.prop('disabled', false);
                                        }, 300);
                                    }
                                },
                                error: function (data) {
                                    toast.error('Xác nhận thất bại. Xin vui lòng thử lại sau')
                                    setTimeout(function () {
                                        _this.html('Xác minh');
                                        _this.prop('disabled', false);
                                    }, 300);
                                }
                            });
                        })
                        .catch((error) => {
                            alert(error.message);
                            var _this = $('#loginBtn');
                            setTimeout(function () {
                                _this.html('Xác minh');
                                _this.prop('disabled', false);
                            }, 300);
                        });
                })
            })
    </script>
    @endsection
</x-guest-layout>
