<x-app-layout>
    <div class="py-4">
        <div class="text-navbar rounded-[12px] pl-10 pr-8 py-6"
             style="background: url('{{ asset('/minigame/img/Cover.Balance.c214a0c87a9c3b605282.png') }}') center center / cover no-repeat;">
            <div class="text-[#073152]">Số dư tài khoản</div>
            <div class="flex items-center relative gap-2 my-2 pr-8"><span
                        class="text-[42px] leading-[48px] font-bold max-line-1 text-[#073152]"><span>{{ Auth::user()->balanceFormated() }}</span></span>
                <button class="MuiButtonBase-root MuiIconButton-root MuiIconButton-sizeMedium absolute right-[-12px] text-white css-1yxmbwk"
                        tabindex="0" type="button">
                    <svg class="MuiSvgIcon-root MuiSvgIcon-fontSizeMedium css-vubbuv" focusable="false"
                         aria-hidden="true" viewBox="0 0 24 24" data-testid="VisibilityOffOutlinedIcon">
                        <path d="M12 6c3.79 0 7.17 2.13 8.82 5.5-.59 1.22-1.42 2.27-2.41 3.12l1.41 1.41c1.39-1.23 2.49-2.77 3.18-4.53C21.27 7.11 17 4 12 4c-1.27 0-2.49.2-3.64.57l1.65 1.65C10.66 6.09 11.32 6 12 6zm-1.07 1.14L13 9.21c.57.25 1.03.71 1.28 1.28l2.07 2.07c.08-.34.14-.7.14-1.07C16.5 9.01 14.48 7 12 7c-.37 0-.72.05-1.07.14zM2.01 3.87l2.68 2.68C3.06 7.83 1.77 9.53 1 11.5 2.73 15.89 7 19 12 19c1.52 0 2.98-.29 4.32-.82l3.42 3.42 1.41-1.41L3.42 2.45 2.01 3.87zm7.5 7.5 2.61 2.61c-.04.01-.08.02-.12.02-1.38 0-2.5-1.12-2.5-2.5 0-.05.01-.08.01-.13zm-3.4-3.4 1.75 1.75c-.23.55-.36 1.15-.36 1.78 0 2.48 2.02 4.5 4.5 4.5.63 0 1.23-.13 1.77-.36l.98.98c-.88.24-1.8.38-2.75.38-3.79 0-7.17-2.13-8.82-5.5.7-1.43 1.72-2.61 2.93-3.53z"></path>
                    </svg>
                    <span class="MuiTouchRipple-root css-w0pj6f"></span></button>
            </div>
        </div>
        <div class="flex space-x-3 g-5 py-2">
            <li class="MuiButtonBase-root MuiMenuItem-root MuiMenuItem-gutters MuiMenuItem-root MuiMenuItem-gutters w-full flex justify-center gap-2 css-17z60tr"
                tabindex="-1" role="menuitem">
                <svg class="MuiSvgIcon-root MuiSvgIcon-fontSizeMedium css-vubbuv" focusable="false" aria-hidden="true"
                     viewBox="0 0 24 24" data-testid="AddIcon">
                    <path d="M19 13h-6v6h-2v-6H5v-2h6V5h2v6h6v2z"></path>
                </svg>
                <span>Nạp điểm</span><span class="MuiTouchRipple-root css-w0pj6f"></span></li>
            <li class="MuiButtonBase-root MuiMenuItem-root MuiMenuItem-gutters MuiMenuItem-root MuiMenuItem-gutters w-full flex justify-center gap-2 css-17z60tr"
                tabindex="-1" role="menuitem">
                <svg class="MuiSvgIcon-root MuiSvgIcon-fontSizeMedium css-vubbuv" focusable="false" aria-hidden="true"
                     viewBox="0 0 24 24" data-testid="RemoveIcon">
                    <path d="M19 13H5v-2h14v2z"></path>
                </svg>
                <span>Quy đổi</span><span class="MuiTouchRipple-root css-w0pj6f"></span></li>
        </div>

        <ul class="MuiList-root MuiList-padding flex flex-col space-y-2 mb-3 css-1ontqvh" role="menu" tabindex="-1">
            <a
                    tabindex="0" href="/profile">
                <li class="MuiButtonBase-root MuiMenuItem-root MuiMenuItem-gutters MuiMenuItem-root MuiMenuItem-gutters css-17z60tr"
                    tabindex="-1" role="menuitem">
                    <svg class="MuiSvgIcon-root MuiSvgIcon-fontSizeMedium css-vubbuv" focusable="false"
                         aria-hidden="true" viewBox="0 0 24 24" data-testid="AccountCircleOutlinedIcon">
                        <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zM7.35 18.5C8.66 17.56 10.26 17 12 17s3.34.56 4.65 1.5c-1.31.94-2.91 1.5-4.65 1.5s-3.34-.56-4.65-1.5zm10.79-1.38C16.45 15.8 14.32 15 12 15s-4.45.8-6.14 2.12C4.7 15.73 4 13.95 4 12c0-4.42 3.58-8 8-8s8 3.58 8 8c0 1.95-.7 3.73-1.86 5.12z"></path>
                        <path d="M12 6c-1.93 0-3.5 1.57-3.5 3.5S10.07 13 12 13s3.5-1.57 3.5-3.5S13.93 6 12 6zm0 5c-.83 0-1.5-.67-1.5-1.5S11.17 8 12 8s1.5.67 1.5 1.5S12.83 11 12 11z"></path>
                    </svg>
                    <div class="MuiListItemText-root css-1tsvksn"><span
                                class="MuiTypography-root MuiTypography-body1 MuiListItemText-primary css-lz9xor">Thông tin cá nhân</span>
                    </div>
                    <svg class="MuiSvgIcon-root MuiSvgIcon-fontSizeMedium css-vubbuv" focusable="false"
                         aria-hidden="true" viewBox="0 0 24 24" data-testid="NavigateNextIcon">
                        <path d="M10 6 8.59 7.41 13.17 12l-4.58 4.59L10 18l6-6z"></path>
                    </svg>
                    <span class="MuiTouchRipple-root css-w0pj6f"></span></li>
            </a>
            @if(!Auth::user()->is_verify()) <a href="{{ route('account.verify') }}" > @endif
            <li class="MuiButtonBase-root MuiMenuItem-root MuiMenuItem-gutters MuiMenuItem-root MuiMenuItem-gutters relative css-17z60tr"
                tabindex="-1" role="menuitem">
                <svg class="MuiSvgIcon-root MuiSvgIcon-fontSizeMedium css-vubbuv" focusable="false" aria-hidden="true"
                     viewBox="0 0 24 24" data-testid="VerifiedOutlinedIcon">
                    <path d="M23 11.99 20.56 9.2l.34-3.69-3.61-.82L15.4 1.5 12 2.96 8.6 1.5 6.71 4.69 3.1 5.5l.34 3.7L1 11.99l2.44 2.79-.34 3.7 3.61.82 1.89 3.2 3.4-1.47 3.4 1.46 1.89-3.19 3.61-.82-.34-3.69 2.44-2.8zm-3.95 1.48-.56.65.08.85.18 1.95-1.9.43-.84.19-.44.74-.99 1.68-1.78-.77-.8-.34-.79.34-1.78.77-.99-1.67-.44-.74-.84-.19-1.9-.43.18-1.96.08-.85-.56-.65L3.67 12l1.29-1.48.56-.65-.09-.86-.18-1.94 1.9-.43.84-.19.44-.74.99-1.68 1.78.77.8.34.79-.34 1.78-.77.99 1.68.44.74.84.19 1.9.43-.18 1.95-.08.85.56.65 1.29 1.47-1.28 1.48z"></path>
                    <path d="m10.09 13.75-2.32-2.33-1.48 1.49 3.8 3.81 7.34-7.36-1.48-1.49z"></path>
                </svg>
                <div class="MuiListItemText-root css-1tsvksn"><span
                            class="MuiTypography-root MuiTypography-body1 MuiListItemText-primary css-lz9xor">Trạng thái</span>
                </div>
                <svg class="MuiSvgIcon-root MuiSvgIcon-fontSizeMedium css-vubbuv" focusable="false" aria-hidden="true"
                     viewBox="0 0 24 24" data-testid="NavigateNextIcon">
                    <path d="M10 6 8.59 7.41 13.17 12l-4.58 4.59L10 18l6-6z"></path>
                </svg>
                <div class="absolute right-[40px]" style="bottom: 50%; transform: translateY(50%);">
                    <div class="MuiChip-root MuiChip-filled MuiChip-sizeMedium MuiChip-colorDefault MuiChip-filledDefault @if(Auth::user()->is_verify()) css-m6xmer @else css-1l3bzoq @endif">
                        <span class="MuiChip-label MuiChip-labelMedium css-9iedg7">@if(Auth::user()->is_verify()) ĐÃ XÁC THỰC @else CHƯA XÁC THỰC @endif</span></div>
                </div>
                <span class="MuiTouchRipple-root css-w0pj6f"></span></li>
            @if(!Auth::user()->is_verify()) </a> @endif
            <a href="/banking">
                <li class="MuiButtonBase-root MuiMenuItem-root MuiMenuItem-gutters MuiMenuItem-root MuiMenuItem-gutters css-17z60tr"
                    tabindex="-1" role="menuitem">
                    <svg class="MuiSvgIcon-root MuiSvgIcon-fontSizeMedium css-vubbuv" focusable="false"
                         aria-hidden="true" viewBox="0 0 24 24" data-testid="AccountBalanceOutlinedIcon">
                        <path d="M6.5 10h-2v7h2v-7zm6 0h-2v7h2v-7zm8.5 9H2v2h19v-2zm-2.5-9h-2v7h2v-7zm-7-6.74L16.71 6H6.29l5.21-2.74m0-2.26L2 6v2h19V6l-9.5-5z"></path>
                    </svg>
                    <div class="MuiListItemText-root css-1tsvksn"><span
                                class="MuiTypography-root MuiTypography-body1 MuiListItemText-primary css-lz9xor">Quản lý thẻ ngân hàng</span>
                    </div>
                    <svg class="MuiSvgIcon-root MuiSvgIcon-fontSizeMedium css-vubbuv" focusable="false"
                         aria-hidden="true" viewBox="0 0 24 24" data-testid="NavigateNextIcon">
                        <path d="M10 6 8.59 7.41 13.17 12l-4.58 4.59L10 18l6-6z"></path>
                    </svg>
                    <span class="MuiTouchRipple-root css-w0pj6f"></span></li>
            </a><a href="/history-play">
                <li class="MuiButtonBase-root MuiMenuItem-root MuiMenuItem-gutters MuiMenuItem-root MuiMenuItem-gutters css-17z60tr"
                    tabindex="-1" role="menuitem">
                    <svg class="MuiSvgIcon-root MuiSvgIcon-fontSizeMedium css-vubbuv" focusable="false"
                         aria-hidden="true" viewBox="0 0 24 24" data-testid="GamesOutlinedIcon">
                        <path d="M13 4v2.67l-1 1-1-1V4h2m7 7v2h-2.67l-1-1 1-1H20M6.67 11l1 1-1 1H4v-2h2.67M12 16.33l1 1V20h-2v-2.67l1-1M15 2H9v5.5l3 3 3-3V2zm7 7h-5.5l-3 3 3 3H22V9zM7.5 9H2v6h5.5l3-3-3-3zm4.5 4.5-3 3V22h6v-5.5l-3-3z"></path>
                    </svg>
                    <div class="MuiListItemText-root css-1tsvksn"><span
                                class="MuiTypography-root MuiTypography-body1 MuiListItemText-primary css-lz9xor">Lịch sử đánh giá</span>
                    </div>
                    <svg class="MuiSvgIcon-root MuiSvgIcon-fontSizeMedium css-vubbuv" focusable="false"
                         aria-hidden="true" viewBox="0 0 24 24" data-testid="NavigateNextIcon">
                        <path d="M10 6 8.59 7.41 13.17 12l-4.58 4.59L10 18l6-6z"></path>
                    </svg>
                    <span class="MuiTouchRipple-root css-w0pj6f"></span></li>
            </a><a href="/history-gift">
                <li class="MuiButtonBase-root MuiMenuItem-root MuiMenuItem-gutters MuiMenuItem-root MuiMenuItem-gutters css-17z60tr"
                    tabindex="-1" role="menuitem">
                    <svg class="MuiSvgIcon-root MuiSvgIcon-fontSizeMedium css-vubbuv" focusable="false"
                         aria-hidden="true" viewBox="0 0 24 24" data-testid="BeachAccessOutlinedIcon">
                        <path d="m21 19.57-1.427 1.428-6.442-6.442 1.43-1.428zM13.12 3c-2.58 0-5.16.98-7.14 2.95l-.01.01c-3.95 3.95-3.95 10.36 0 14.31l14.3-14.31C18.3 3.99 15.71 3 13.12 3zM6.14 17.27C5.4 16.03 5 14.61 5 13.12c0-.93.16-1.82.46-2.67.19 1.91.89 3.79 2.07 5.44l-1.39 1.38zm2.84-2.84C7.63 12.38 7.12 9.93 7.6 7.6c.58-.12 1.16-.18 1.75-.18 1.8 0 3.55.55 5.08 1.56l-5.45 5.45zm1.47-8.97c.85-.3 1.74-.46 2.67-.46 1.49 0 2.91.4 4.15 1.14l-1.39 1.39c-1.65-1.18-3.52-1.88-5.43-2.07z"></path>
                    </svg>
                    <div class="MuiListItemText-root css-1tsvksn"><span
                                class="MuiTypography-root MuiTypography-body1 MuiListItemText-primary css-lz9xor">Lịch sử nhận thưởng</span>
                    </div>
                    <svg class="MuiSvgIcon-root MuiSvgIcon-fontSizeMedium css-vubbuv" focusable="false"
                         aria-hidden="true" viewBox="0 0 24 24" data-testid="NavigateNextIcon">
                        <path d="M10 6 8.59 7.41 13.17 12l-4.58 4.59L10 18l6-6z"></path>
                    </svg>
                    <span class="MuiTouchRipple-root css-w0pj6f"></span></li>
            </a><a href="/reference">
                <li class="MuiButtonBase-root MuiMenuItem-root MuiMenuItem-gutters MuiMenuItem-root MuiMenuItem-gutters css-17z60tr"
                    tabindex="-1" role="menuitem">
                    <svg class="MuiSvgIcon-root MuiSvgIcon-fontSizeMedium css-vubbuv" focusable="false"
                         aria-hidden="true" viewBox="0 0 24 24" data-testid="WebhookOutlinedIcon">
                        <path d="M10 15h5.88c.27-.31.67-.5 1.12-.5.83 0 1.5.67 1.5 1.5s-.67 1.5-1.5 1.5c-.44 0-.84-.19-1.12-.5H11.9c-.46 2.28-2.48 4-4.9 4-2.76 0-5-2.24-5-5 0-2.42 1.72-4.44 4-4.9v2.07c-1.16.41-2 1.53-2 2.83 0 1.65 1.35 3 3 3s3-1.35 3-3v-1zm2.5-11c1.65 0 3 1.35 3 3h2c0-2.76-2.24-5-5-5s-5 2.24-5 5c0 1.43.6 2.71 1.55 3.62l-2.35 3.9c-.68.14-1.2.75-1.2 1.48 0 .83.67 1.5 1.5 1.5s1.5-.67 1.5-1.5c0-.16-.02-.31-.07-.45l3.38-5.63C10.49 9.61 9.5 8.42 9.5 7c0-1.65 1.35-3 3-3zm4.5 9c-.64 0-1.23.2-1.72.54l-3.05-5.07C11.53 8.35 11 7.74 11 7c0-.83.67-1.5 1.5-1.5S14 6.17 14 7c0 .15-.02.29-.06.43l2.19 3.65c.28-.05.57-.08.87-.08 2.76 0 5 2.24 5 5s-2.24 5-5 5c-1.85 0-3.47-1.01-4.33-2.5h2.67c.48.32 1.05.5 1.66.5 1.65 0 3-1.35 3-3s-1.35-3-3-3z"></path>
                    </svg>
                    <div class="MuiListItemText-root css-1tsvksn"><span
                                class="MuiTypography-root MuiTypography-body1 MuiListItemText-primary css-lz9xor">Giới thiệu thành viên</span>
                    </div>
                    <svg class="MuiSvgIcon-root MuiSvgIcon-fontSizeMedium css-vubbuv" focusable="false"
                         aria-hidden="true" viewBox="0 0 24 24" data-testid="NavigateNextIcon">
                        <path d="M10 6 8.59 7.41 13.17 12l-4.58 4.59L10 18l6-6z"></path>
                    </svg>
                    <span class="MuiTouchRipple-root css-w0pj6f"></span></li>
            </a>
            <a
                    tabindex="0" href="">
                <li class="MuiButtonBase-root MuiMenuItem-root MuiMenuItem-gutters MuiMenuItem-root MuiMenuItem-gutters css-17z60tr"
                    tabindex="-1" role="menuitem">

                    <svg class="MuiSvgIcon-root MuiSvgIcon-fontSizeMedium css-vubbuv" focusable="false"
                         aria-hidden="true"
                         viewBox="0 0 24 24" data-testid="LockResetOutlinedIcon">
                        <path d="M13 3c-4.97 0-9 4.03-9 9 0 .06.01.12.01.19l-1.84-1.84-1.41 1.41L5 16l4.24-4.24-1.41-1.41-1.82 1.82c0-.06-.01-.11-.01-.17 0-3.86 3.14-7 7-7s7 3.14 7 7-3.14 7-7 7c-1.9 0-3.62-.76-4.88-1.99L6.7 18.42C8.32 20.01 10.55 21 13 21c4.97 0 9-4.03 9-9s-4.03-9-9-9zm2 8v-1c0-1.1-.9-2-2-2s-2 .9-2 2v1c-.55 0-1 .45-1 1v3c0 .55.45 1 1 1h4c.55 0 1-.45 1-1v-3c0-.55-.45-1-1-1zm-1 0h-2v-1c0-.55.45-1 1-1s1 .45 1 1v1z"></path>
                    </svg>
                    <div class="MuiListItemText-root css-1tsvksn"><span
                                class="MuiTypography-root MuiTypography-body1 MuiListItemText-primary css-lz9xor">Đổi mật khẩu</span>
                    </div>
                    <svg class="MuiSvgIcon-root MuiSvgIcon-fontSizeMedium css-vubbuv" focusable="false"
                         aria-hidden="true"
                         viewBox="0 0 24 24" data-testid="NavigateNextIcon">
                        <path d="M10 6 8.59 7.41 13.17 12l-4.58 4.59L10 18l6-6z"></path>
                    </svg>
                    <span class="MuiTouchRipple-root css-w0pj6f"></span>
                </li>
            </a>

        </ul>

        <div class="flex justify-center">


            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button class="MuiButtonBase-root MuiButton-root MuiButton-text MuiButton-textInherit MuiButton-sizeMedium MuiButton-textSizeMedium MuiButton-colorInherit MuiButton-disableElevation MuiButton-root MuiButton-text MuiButton-textInherit MuiButton-sizeMedium MuiButton-textSizeMedium MuiButton-colorInherit MuiButton-disableElevation px-10 mx-auto css-1n02ex7"
                        tabindex="0" type="button"
                        :href="route('logout')"
                        onclick="event.preventDefault();
                                                this.closest('form').submit();">
                <span class="MuiButton-startIcon MuiButton-iconSizeMedium css-1l6c7y9">
                    <svg style="    fill: var(--color-primary-dark) !important;"
                         class="MuiSvgIcon-root MuiSvgIcon-fontSizeMedium css-vubbuv" focusable="false"
                         aria-hidden="true" viewBox="0 0 24 24" data-testid="LogoutOutlinedIcon"><path
                                d="m17 8-1.41 1.41L17.17 11H9v2h8.17l-1.58 1.58L17 16l4-4-4-4zM5 5h7V3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h7v-2H5V5z"></path></svg></span>Đăng
                    xuất<span class="MuiTouchRipple-root css-w0pj6f"></span>
                </button>
            </form>
        </div>
    </div>
</x-app-layout>
