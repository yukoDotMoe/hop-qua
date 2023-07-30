<x-app-layout>
    <div class="m-3">
        <div class="-container flex flex-col items-center p-3">
            <div class="bg-color-primary text-white text-2xl font-bold px-6 py-2 rounded-[8px] tracking-widest z-10 mt-0">
                Đánh Giá Tổng
            </div>
            <div class="flex justify-center -m-3 mt-6">
                <div class="relative w-[100px] h-[100px] flex justify-center items-center">
                    <div class="MuiAvatar-root MuiAvatar-circular MuiAvatar-colorDefault w-[60px] h-[60px] text-[42px] font-bold bg-gradient-to-b from-[#FFF] to-[#D6D6D6] text-color-primary css-1ruz4ej"
                         aria-label="H" id="firstDigit"> -
                    </div>
                </div>
                <div class="relative w-[100px] h-[100px] flex justify-center items-center">
                    <div class="MuiAvatar-root MuiAvatar-circular MuiAvatar-colorDefault w-[60px] h-[60px] text-[42px] font-bold bg-gradient-to-b from-[#FFF] to-[#D6D6D6] text-color-primary css-1ruz4ej"
                         id="secondDigit">
                        -
                    </div>
                </div>
                <div class="relative w-[100px] h-[100px] flex justify-center items-center">
                    <div class="MuiAvatar-root MuiAvatar-circular MuiAvatar-colorDefault w-[60px] h-[60px] text-[42px] font-bold bg-gradient-to-b from-[#FFF] to-[#D6D6D6] text-color-primary css-1ruz4ej"
                         aria-label="L" id="thirdDigit"> -
                    </div>
                </div>
            </div>
        </div>

        <div>
            <div class="flex justify-between items-center pb-3">
                <div class="text-lg">Trang tiếp - <span class="font-bold" id="nextId">0</span></div>
                <div class="flex items-center space-x-1">
                    <svg class="MuiSvgIcon-root MuiSvgIcon-fontSizeMedium css-vubbuv" focusable="false"
                         aria-hidden="true"
                         style="    fill: var(--color-primary-dark) !important;"
                         viewBox="0 0 24 24" data-testid="AccessTimeOutlinedIcon">
                        <path d="M11.99 2C6.47 2 2 6.48 2 12s4.47 10 9.99 10C17.52 22 22 17.52 22 12S17.52 2 11.99 2zM12 20c-4.42 0-8-3.58-8-8s3.58-8 8-8 8 3.58 8 8-3.58 8-8 8zm.5-13H11v6l5.25 3.15.75-1.23-4.5-2.67z"></path>
                    </svg>
                    <span class="text-lg font-bold" id="timer">00:00</span></div>
            </div>
        </div>

        <div class="MuiPaper-root MuiPaper-elevation MuiPaper-rounded MuiPaper-elevation1 py-10 rounded-none relative overflow-hidden css-aoeo82">
            <div class="absolute right-3 top-2">
                <button class="MuiButtonBase-root MuiIconButton-root MuiIconButton-sizeSmall mr-[-5px] css-1j7qk7u"
                        tabindex="0" type="button" aria-label="Xem chi tiết">
                    <svg class="MuiSvgIcon-root MuiSvgIcon-fontSizeMedium text-transparent css-vubbuv" focusable="false"
                         aria-hidden="true" viewBox="0 0 24 24">
                        <path d="M11.9899 15.7961V11.3771" stroke="#1E2843" stroke-width="1.5" stroke-linecap="round"
                              stroke-linejoin="round"></path>
                        <path d="M11.9899 8.20432H11.9999" stroke="#1E2843" stroke-width="1.5" stroke-linecap="round"
                              stroke-linejoin="round"></path>
                        <path fill-rule="evenodd" clip-rule="evenodd"
                              d="M16.3346 2.75021H7.66561C4.64461 2.75021 2.75061 4.88921 2.75061 7.91621V16.0842C2.75061 19.1112 4.63561 21.2502 7.66561 21.2502H16.3336C19.3646 21.2502 21.2506 19.1112 21.2506 16.0842V7.91621C21.2506 4.88921 19.3646 2.75021 16.3346 2.75021Z"
                              stroke="#1E2843" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>
                    <span class="MuiTouchRipple-root css-w0pj6f"></span></button>
            </div>
            <div class="MuiGrid-root MuiGrid-container mt-2 px-3 css-1d3bbye">
                <div class="MuiGrid-root MuiGrid-item MuiGrid-grid-xs-6 relative flex justify-end px-0.5 py-[2px] css-1s50f5r">
                    <button class="MuiButtonBase-root MuiButton-root MuiButton-text MuiButton-textInherit MuiButton-sizeMedium MuiButton-textSizeMedium MuiButton-colorInherit MuiButton-disableElevation MuiButton-root MuiButton-text MuiButton-textInherit MuiButton-sizeMedium MuiButton-textSizeMedium MuiButton-colorInherit MuiButton-disableElevation right-[0px] bottom-[0px] p-0 z-10 cursor-pointer hover:brightness-110 bg-transparent css-1n02ex7"
                            tabindex="0" type="button" data-toggle="modal"
                            data-target="#exampleModal" data-type="like"><img
                                src="{{ asset('/minigame/img/Square.Red.db623f6ff5c842986208.png') }}"><span
                                class="MuiTouchRipple-root css-w0pj6f"></span></button>
                </div>
                <div class="MuiGrid-root MuiGrid-item MuiGrid-grid-xs-6 relative flex justify-start px-0.5 py-[2px] css-1s50f5r">
                    <button class="MuiButtonBase-root MuiButton-root MuiButton-text MuiButton-textInherit MuiButton-sizeMedium MuiButton-textSizeMedium MuiButton-colorInherit MuiButton-disableElevation MuiButton-root MuiButton-text MuiButton-textInherit MuiButton-sizeMedium MuiButton-textSizeMedium MuiButton-colorInherit MuiButton-disableElevation left-[0px] bottom-[0px] p-0 z-10 cursor-pointer hover:brightness-110 bg-transparent css-1n02ex7"
                            tabindex="0" type="button" data-toggle="modal"
                            data-target="#exampleModal" data-type="vote"><img
                                src="{{ asset('/minigame/img/Square.Green.4fb895cd423137759a2d.png') }}"><span
                                class="MuiTouchRipple-root css-w0pj6f"></span></button>
                </div>
                <div class="MuiGrid-root MuiGrid-item MuiGrid-grid-xs-6 relative flex justify-end px-0.5 py-[2px] css-1s50f5r">
                    <button class="MuiButtonBase-root MuiButton-root MuiButton-text MuiButton-textInherit MuiButton-sizeMedium MuiButton-textSizeMedium MuiButton-colorInherit MuiButton-disableElevation MuiButton-root MuiButton-text MuiButton-textInherit MuiButton-sizeMedium MuiButton-textSizeMedium MuiButton-colorInherit MuiButton-disableElevation right-[0px] top-[0px] p-0 z-10 cursor-pointer hover:brightness-110 bg-transparent css-1n02ex7"
                            tabindex="0" type="button" data-toggle="modal"
                            data-target="#exampleModal" data-type="5sao"><img
                                src="{{ asset('/minigame/img/Square.Blue.2a704b07d5d229ec430a.png') }}"><span
                                class="MuiTouchRipple-root css-w0pj6f"></span></button>
                </div>
                <div class="MuiGrid-root MuiGrid-item MuiGrid-grid-xs-6 relative flex justify-start px-0.5 py-[2px] css-1s50f5r">
                    <button class="MuiButtonBase-root MuiButton-root MuiButton-text MuiButton-textInherit MuiButton-sizeMedium MuiButton-textSizeMedium MuiButton-colorInherit MuiButton-disableElevation MuiButton-root MuiButton-text MuiButton-textInherit MuiButton-sizeMedium MuiButton-textSizeMedium MuiButton-colorInherit MuiButton-disableElevation left-[0px] top-[0px] p-0 z-10 cursor-pointer hover:brightness-110 bg-transparent css-1n02ex7"
                            tabindex="0" type="button" data-toggle="modal"
                            data-target="#exampleModal" data-type="3sao"><img
                                src="{{ asset('/minigame/img/Square.Purple.873252a3cd71c85f6584.png') }}"><span
                                class="MuiTouchRipple-root css-w0pj6f"></span></button>
                </div>
            </div>
        </div>

        <div class="mt-3">
            <div class="MuiPaper-root MuiPaper-elevation MuiPaper-rounded MuiPaper-elevation1 h-[40px] flex items-center justify-between px-3 border-l-2 border-primary-dark css-aoeo82">
                <div class="font-medium text-color-primary">Đối tác lớn
                </div>
            </div>
        </div>

        <div class="mt-3">
            <div class="MuiPaper-root MuiPaper-elevation MuiPaper-rounded MuiPaper-elevation1 mb-[-40px] bg-transparent css-aoeo82">
                <img src="{{ asset('/minigame/img/Group.Partners.B1.28fd71059bbab3a1fee3.png') }}">
            </div>
        </div>

        <div>
            <div
                    class="MuiPaper-root MuiPaper-elevation MuiPaper-rounded MuiPaper-elevation1 h-[40px] flex items-center justify-between px-3 border-l-2 border-primary-dark css-aoeo82">
                <div class="font-medium text-color-primary">Về chúng tôi</div>
            </div>
            <div class="MuiPaper-root MuiPaper-elevation MuiPaper-rounded MuiPaper-elevation1 mt-2 px-3 py-2 css-aoeo82">
                {{ \App\Http\Controllers\ApiController::getSetting('home_about') }}
            </div>
        </div>

        <div class="mt-3">
            <div class="MuiPaper-root MuiPaper-elevation MuiPaper-rounded MuiPaper-elevation1 h-[40px] flex items-center justify-between px-3 border-l-2 border-primary-dark css-aoeo82">
                <div class="font-medium text-color-primary">Trụ sở chính
                </div>
            </div>
        </div>

        <div class="mt-3">
            <div class="MuiPaper-root MuiPaper-elevation MuiPaper-rounded MuiPaper-elevation1 my-2 p-3 css-aoeo82">

                @php($addInfo = json_decode(\App\Http\Controllers\ApiController::getSetting('home_add'), true))

                @foreach($addInfo['list'] as $addr)
                    @if($loop->first)
                        <div>Người nhận: {{ $addr['receiver'] }}</div>
                        <div>{{ $addr['add'] }}</div>
                    @else
                        <div class="mt-3">Người nhận: {{ $addr['receiver'] }}</div>
                        <div>{{ $addr['add'] }}</div>
                    @endif
                @endforeach

                <div class="mt-3">Chi nhánh: {{ $addInfo['branch'] }}</div>

                <div class="flex justify-center gap-1 mt-3 -mb-1 pt-1 border-t border-black/20">
                    <button class="MuiButtonBase-root MuiIconButton-root MuiIconButton-sizeMedium css-1yxmbwk"
                            tabindex="0" type="button">
                        <svg class="MuiSvgIcon-root MuiSvgIcon-fontSizeMedium css-vubbuv" focusable="false"
                             aria-hidden="true" viewBox="0 0 24 24" data-testid="FacebookIcon">
                            <path d="M5 3h14a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2m13 2h-2.5A3.5 3.5 0 0 0 12 8.5V11h-2v3h2v7h3v-7h3v-3h-3V9a1 1 0 0 1 1-1h2V5z"></path>
                        </svg>
                        <span class="MuiTouchRipple-root css-w0pj6f"></span></button>
                    <button class="MuiButtonBase-root MuiIconButton-root MuiIconButton-sizeMedium css-1yxmbwk"
                            tabindex="0" type="button">
                        <svg class="MuiSvgIcon-root MuiSvgIcon-fontSizeMedium css-vubbuv" focusable="false"
                             aria-hidden="true" viewBox="0 0 24 24" data-testid="InstagramIcon">
                            <path d="M7.8 2h8.4C19.4 2 22 4.6 22 7.8v8.4a5.8 5.8 0 0 1-5.8 5.8H7.8C4.6 22 2 19.4 2 16.2V7.8A5.8 5.8 0 0 1 7.8 2m-.2 2A3.6 3.6 0 0 0 4 7.6v8.8C4 18.39 5.61 20 7.6 20h8.8a3.6 3.6 0 0 0 3.6-3.6V7.6C20 5.61 18.39 4 16.4 4H7.6m9.65 1.5a1.25 1.25 0 0 1 1.25 1.25A1.25 1.25 0 0 1 17.25 8 1.25 1.25 0 0 1 16 6.75a1.25 1.25 0 0 1 1.25-1.25M12 7a5 5 0 0 1 5 5 5 5 0 0 1-5 5 5 5 0 0 1-5-5 5 5 0 0 1 5-5m0 2a3 3 0 0 0-3 3 3 3 0 0 0 3 3 3 3 0 0 0 3-3 3 3 0 0 0-3-3z"></path>
                        </svg>
                        <span class="MuiTouchRipple-root css-w0pj6f"></span></button>
                    <button class="MuiButtonBase-root MuiIconButton-root MuiIconButton-sizeMedium css-1yxmbwk"
                            tabindex="0" type="button">
                        <svg class="MuiSvgIcon-root MuiSvgIcon-fontSizeMedium css-vubbuv" focusable="false"
                             aria-hidden="true" viewBox="0 0 24 24" data-testid="TelegramIcon">
                            <path d="M9.78 18.65l.28-4.23 7.68-6.92c.34-.31-.07-.46-.52-.19L7.74 13.3 3.64 12c-.88-.25-.89-.86.2-1.3l15.97-6.16c.73-.33 1.43.18 1.15 1.3l-2.72 12.81c-.19.91-.74 1.13-1.5.71L12.6 16.3l-1.99 1.93c-.23.23-.42.42-.83.42z"></path>
                        </svg>
                        <span class="MuiTouchRipple-root css-w0pj6f"></span></button>
                    <button class="MuiButtonBase-root MuiIconButton-root MuiIconButton-sizeMedium css-1yxmbwk"
                            tabindex="0" type="button">
                        <svg class="MuiSvgIcon-root MuiSvgIcon-fontSizeMedium css-vubbuv" focusable="false"
                             aria-hidden="true" viewBox="0 0 24 24" data-testid="YouTubeIcon">
                            <path d="M10 15l5.19-3L10 9v6m11.56-7.83c.13.47.22 1.1.28 1.9.07.8.1 1.49.1 2.09L22 12c0 2.19-.16 3.8-.44 4.83-.25.9-.83 1.48-1.73 1.73-.47.13-1.33.22-2.65.28-1.3.07-2.49.1-3.59.1L12 19c-4.19 0-6.8-.16-7.83-.44-.9-.25-1.48-.83-1.73-1.73-.13-.47-.22-1.1-.28-1.9-.07-.8-.1-1.49-.1-2.09L2 12c0-2.19.16-3.8.44-4.83.25-.9.83-1.48 1.73-1.73.47-.13 1.33-.22 2.65-.28 1.3-.07 2.49-.1 3.59-.1L12 5c4.19 0 6.8.16 7.83.44.9.25 1.48.83 1.73 1.73z"></path>
                        </svg>
                        <span class="MuiTouchRipple-root css-w0pj6f"></span></button>
                </div>
            </div>
        </div>
    </div>

    <div class="MuiContainer-root MuiContainer-maxWidthXs fixed inset-0 top-[unset] bottom-[68px] px-3 z-20 rounded-lg css-hltdia">
        <div class="MuiPaper-root MuiPaper-elevation MuiPaper-rounded MuiPaper-elevation1 flex items-center justify-between bg-secondary-main border text-white border-none p-2 css-aoeo82">
            <span>ID: <span class="text-lg">{{ Auth::user()->id }}</span></span>
            <div class="flex items-center"><span class="font-bold max-line-1"><span id="balanceSpan">{{ Auth::user()->balanceFormated() }}</span></span>
                <button class="MuiButtonBase-root MuiIconButton-root MuiIconButton-sizeMedium text-white css-1yxmbwk"
                        tabindex="0" type="button">
                    <svg class="MuiSvgIcon-root MuiSvgIcon-fontSizeMedium css-vubbuv" focusable="false"
                         aria-hidden="true" viewBox="0 0 24 24" data-testid="VisibilityOffOutlinedIcon">
                        <path d="M12 6c3.79 0 7.17 2.13 8.82 5.5-.59 1.22-1.42 2.27-2.41 3.12l1.41 1.41c1.39-1.23 2.49-2.77 3.18-4.53C21.27 7.11 17 4 12 4c-1.27 0-2.49.2-3.64.57l1.65 1.65C10.66 6.09 11.32 6 12 6zm-1.07 1.14L13 9.21c.57.25 1.03.71 1.28 1.28l2.07 2.07c.08-.34.14-.7.14-1.07C16.5 9.01 14.48 7 12 7c-.37 0-.72.05-1.07.14zM2.01 3.87l2.68 2.68C3.06 7.83 1.77 9.53 1 11.5 2.73 15.89 7 19 12 19c1.52 0 2.98-.29 4.32-.82l3.42 3.42 1.41-1.41L3.42 2.45 2.01 3.87zm7.5 7.5 2.61 2.61c-.04.01-.08.02-.12.02-1.38 0-2.5-1.12-2.5-2.5 0-.05.01-.08.01-.13zm-3.4-3.4 1.75 1.75c-.23.55-.36 1.15-.36 1.78 0 2.48 2.02 4.5 4.5 4.5.63 0 1.23-.13 1.77-.36l.98.98c-.88.24-1.8.38-2.75.38-3.79 0-7.17-2.13-8.82-5.5.7-1.43 1.72-2.61 2.93-3.53z"></path>
                    </svg>
                    <span class="MuiTouchRipple-root css-w0pj6f"></span></button>
            </div>
        </div>
    </div>

    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered ">
            <div class="modal-content css-mbdu2s">
                <div class="modal-body ">
                    <button data-dismiss="modal"
                            class="MuiButtonBase-root MuiIconButton-root MuiIconButton-sizeSmall css-o1bub9"
                            tabindex="0" type="button">
                        <svg class="MuiSvgIcon-root MuiSvgIcon-fontSizeMedium css-vubbuv" focusable="false"
                             style="fill: white !important;"
                             aria-hidden="true" viewBox="0 0 24 24" data-testid="CloseIcon">
                            <path d="M19 6.41 17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12z"></path>
                        </svg>
                        <span class="MuiTouchRipple-root css-w0pj6f"></span>
                    </button>
                    <h2 class="MuiTypography-root MuiTypography-h6 MuiDialogTitle-root css-3cs75a" id=":rf:">NHẬP ĐÁNH
                        GIÁ TỔNG
                    </h2>

                    <div class="MuiDialogContent-root css-1ty026z">
                        <div class="flex justify-center items-center space-x-2">
                            <button class="MuiButtonBase-root MuiButton-root MuiButton-text MuiButton-textPrimary MuiButton-sizeMedium MuiButton-textSizeMedium MuiButton-disableElevation MuiButton-root MuiButton-text MuiButton-textPrimary MuiButton-sizeMedium MuiButton-textSizeMedium MuiButton-disableElevation hover:bg-black/5 css-4lk0i2"
                                    tabindex="0" type="button" data-type="minus"><img
                                        src="{{ asset('/minigame/img/Icon.Minus.58bcf4aafc66e99fd86700eab74c4eb0.svg') }}"
                                        class="scale-125"><span class="MuiTouchRipple-root css-w0pj6f"></span></button>
                            <div class="MuiFormControl-root MuiTextField-root css-16zb4wv">
                                <div class="MuiInputBase-root MuiOutlinedInput-root MuiInputBase-colorPrimary MuiInputBase-formControl css-vb3fd7">
                                    <input aria-invalid="false" name="amount"
                                           class="MuiInputBase-input MuiOutlinedInput-input text-base py-3 css-1x5jdmq"
                                           type="text" value="100" inputmode="numeric" id="amountRate">
                                    <fieldset aria-hidden="true" class="MuiOutlinedInput-notchedOutline css-igs3ac">
                                        <legend class="css-ihdtdm"><span class="notranslate">&ZeroWidthSpace;</span>
                                        </legend>
                                    </fieldset>
                                </div>
                            </div>
                            <button class="MuiButtonBase-root MuiButton-root MuiButton-text MuiButton-textPrimary MuiButton-sizeMedium MuiButton-textSizeMedium MuiButton-disableElevation MuiButton-root MuiButton-text MuiButton-textPrimary MuiButton-sizeMedium MuiButton-textSizeMedium MuiButton-disableElevation hover:bg-black/5 css-4lk0i2"
                                    tabindex="0" type="button" data-type="plus"><img
                                        src="{{ asset('/minigame/img/Icon.Add.9549a677521310efc807ccf43e191ac2.svg') }}"
                                        class="scale-125"><span class="MuiTouchRipple-root css-w0pj6f"></span></button>
                        </div>
                        <div class="MuiGrid-root MuiGrid-container MuiGrid-spacing-xs-1.2 mt-2 css-1ohpmkg">
                            @foreach(json_decode(\App\Http\Controllers\ApiController::getSetting('bet_limit'), true) as $step)
                                <div class="MuiGrid-root MuiGrid-item MuiGrid-grid-xs-4 css-1udb513">
                                    <button class="MuiButtonBase-root MuiButton-root MuiButton-outlined MuiButton-outlinedInfo MuiButton-sizeMedium MuiButton-outlinedSizeMedium MuiButton-disableElevation MuiButton-fullWidth MuiButton-root MuiButton-outlined MuiButton-outlinedInfo MuiButton-sizeMedium MuiButton-outlinedSizeMedium MuiButton-disableElevation MuiButton-fullWidth h-[40px] rounded-[8px] text-[20px] css-bonpy3"
                                            tabindex="0" type="button" data-amount="{{ $step }}">{{ $step }}<span
                                                class="MuiTouchRipple-root css-w0pj6f"></span></button>
                                </div>
                            @endforeach

                        </div>
                    </div>
                </div>

                <div class="MuiDialogActions-root MuiDialogActions-spacing justify-center css-14b29qc ">
                    <button class="MuiButtonBase-root MuiButton-root MuiLoadingButton-root MuiButton-contained MuiButton-containedPrimary MuiButton-sizeMedium MuiButton-containedSizeMedium MuiButton-disableElevation MuiButton-root MuiLoadingButton-root MuiButton-contained MuiButton-containedPrimary MuiButton-sizeMedium MuiButton-containedSizeMedium MuiButton-disableElevation w-[80%] css-1n8uu98"
                            tabindex="0" type="button" id=":rg:">Chốt<span
                                class="MuiTouchRipple-root css-w0pj6f"></span></button>
                </div>

            </div>
        </div>
    </div>
    </div>

    <input id="side" value="" hidden>
    <input id="amount" value="" hidden>

    {{--    <div role="tooltip" id=":r4:"--}}
    {{--         class="MuiTooltip-popper MuiTooltip-popperInteractive MuiTooltip-popperArrow css-1woa8fr MuiPopper-root"--}}
    {{--         style="position: absolute; inset: auto auto 0px 0px; margin: 0px; transform: translate(396px, -591px);"--}}
    {{--         data-popper-placement="top">--}}
    {{--        <div class="MuiTooltip-tooltip MuiTooltip-tooltipArrow MuiTooltip-tooltipPlacementTop css-x8cpb2"--}}
    {{--             style="opacity: 1; transform: none; transition: opacity 200ms cubic-bezier(0.4, 0, 0.2, 1) 0ms, transform 133ms cubic-bezier(0.4, 0, 0.2, 1) 0ms;">--}}
    {{--            H<span class="MuiTooltip-arrow css-1urvb1y"--}}
    {{--                   style="position: absolute; left: 0px; transform: translate(6px, 0px);"></span></div>--}}
    {{--    </div>--}}

    {{--    <div role="tooltip" id=":r5:"--}}
    {{--         class="MuiTooltip-popper MuiTooltip-popperInteractive MuiTooltip-popperArrow css-1woa8fr MuiPopper-root"--}}
    {{--         style="position: absolute; inset: auto auto 0px 0px; margin: 0px; transform: translate(598px, -591px);"--}}
    {{--         data-popper-placement="top">--}}
    {{--        <div class="MuiTooltip-tooltip MuiTooltip-tooltipArrow MuiTooltip-tooltipPlacementTop css-x8cpb2"--}}
    {{--             style="opacity: 1; transform: none; transition: opacity 200ms cubic-bezier(0.4, 0, 0.2, 1) 0ms, transform 133ms cubic-bezier(0.4, 0, 0.2, 1) 0ms;">--}}
    {{--            L<span class="MuiTooltip-arrow css-1urvb1y"--}}
    {{--                   style="position: absolute; left: 0px; transform: translate(5px, 0px);"></span></div>--}}
    {{--    </div>--}}
    @section('js')
        <script src="https://js.pusher.com/7.0/pusher.min.js"></script>


        <script type="module">
            import {toast} from 'https://cdn.skypack.dev/wc-toast';
            let currentId;
            window.addEventListener('DOMContentLoaded', function () {
                const pusher = new Pusher('{{ env('PUSHER_APP_KEY') }}', {
                    cluster: '{{ env('PUSHER_APP_CLUSTER') }}',
                    encrypted: true,
                });
                const channel = pusher.subscribe('lucky_number');
                channel.bind('lucky_number', (data) => {
                    const dataDecrypt = JSON.parse(data.message);
                    $('#timer').html(dataDecrypt.time)
                    $('#nextId').html(dataDecrypt.next)
                    if (currentId !== null && currentId !== dataDecrypt.next) updateBalance()
                    currentId = dataDecrypt.next
                    const numbersArr = (dataDecrypt.number).split('-')
                    $('#firstDigit').html(numbersArr[0])
                    $('#secondDigit').html(numbersArr[1])
                    $('#thirdDigit').html(numbersArr[2])
                });
            });

            $('.css-1n02ex7').click(function () {
                $('#side').val($(this).attr('data-type'))
            })

            $('.css-4lk0i2').click(function () {
                var amount;
                if ($(this).attr('data-type') == 'plus') {
                    amount = parseInt($('#amountRate').val()) + 100;
                } else {
                    amount = parseInt($('#amountRate').val()) - 100;
                }
                $('#amountRate').val((amount < 0) ? 0 : amount)
            })

            $(".css-bonpy3").on("click", function () {
                $(".css-bonpy3").removeClass("selected");
                $(this).addClass("selected");
                $("#amountRate").val($(this).attr("data-amount"));
            });

            $("#exampleModal").on("hidden.bs.modal", function () {
                $("#amountRate").val(100);
                $(".css-bonpy3").removeClass("selected");
            });

            $('.css-1n8uu98').click(function () {
                const sideChoosed = $('#side').val();
                const amount = $('#amountRate').val();
                var _this = $('.submit');
                setTimeout(function () {
                    _this.html('<i class="fa-solid fa-circle-notch fa-spin"></i>');
                    _this.prop('disabled', false);
                }, 300);
                $.ajax({
                    url: "{{route('lucky.bet')}}",
                    type: 'POST',
                    dataType: "json",
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    contentType: "application/json; charset=utf-8",
                    data: JSON.stringify({
                        sideChoosed: sideChoosed,
                        amount: amount
                    }),
                    processData: false,
                    success: function (data) {
                        if (data.success) {
                            toast.success(data.message)
                            updateBalance()
                        } else {
                            toast.error(data.message)
                        }
                    },
                    error: function (data) {
                        toast.error('Đã có lỗi xảy ra trong lúc xử lí.')
                    }
                });
                $('#exampleModal').modal('toggle');
            })
        </script>
    @endsection
</x-app-layout>