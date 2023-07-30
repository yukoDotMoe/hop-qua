<x-app-layout>
    <div class="">
        <!-- START CONTENT -->
        <div class="mt-3">
            <div
                    class="MuiPaper-root MuiPaper-elevation MuiPaper-rounded MuiPaper-elevation1 h-[40px] flex items-center justify-between px-3 border-l-2 border-primary-dark css-aoeo82">
                <div class="font-medium text-color-primary">Giới thiệu</div>
                <svg class="MuiSvgIcon-root MuiSvgIcon-fontSizeMedium text-transparent css-vubbuv" focusable="false"
                     aria-hidden="true" viewBox="0 0 24 24">
                    <path d="M16 16L18 5L14 9L12 4L10 9L6 5L8 16M8 16L6.553 16.724C6.38692 16.807 6.24722 16.9346 6.14955 17.0925C6.05188 17.2504 6.0001 17.4323 6 17.618V20H18V17.618C17.9999 17.4323 17.9481 17.2504 17.8504 17.0925C17.7528 16.9346 17.6131 16.807 17.447 16.724L16 16H8Z"
                          stroke="#1E2843" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"></path>
                    <path d="M12 5C12.5523 5 13 4.55228 13 4C13 3.44772 12.5523 3 12 3C11.4477 3 11 3.44772 11 4C11 4.55228 11.4477 5 12 5Z"
                          stroke="#1E2843" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"></path>
                    <path d="M6 6C6.55228 6 7 5.55228 7 5C7 4.44772 6.55228 4 6 4C5.44772 4 5 4.44772 5 5C5 5.55228 5.44772 6 6 6Z"
                          stroke="#1E2843" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"></path>
                    <path d="M18 6C18.5523 6 19 5.55228 19 5C19 4.44772 18.5523 4 18 4C17.4477 4 17 4.44772 17 5C17 5.55228 17.4477 6 18 6Z"
                          stroke="#1E2843" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"></path>
                </svg>
            </div>
            <div class="MuiPaper-root MuiPaper-elevation MuiPaper-rounded MuiPaper-elevation1 mt-2 px-3 py-2 css-aoeo82">
                {{ \App\Http\Controllers\ApiController::getSetting('home_intro') }}
            </div>
        </div>

        <div class="mt-3">
            <div class="MuiPaper-root MuiPaper-elevation MuiPaper-rounded MuiPaper-elevation1 h-[40px] flex items-center justify-between px-3 border-l-2 border-primary-dark css-aoeo82">
                <div class="font-medium text-color-primary">Thống kê</div>
                <svg class="MuiSvgIcon-root MuiSvgIcon-fontSizeMedium text-transparent css-vubbuv" focusable="false"
                     aria-hidden="true" viewBox="0 0 24 24">
                    <path d="M7.37142 10.2017V17.0619" stroke="#1E2843" stroke-width="1.5" stroke-linecap="round"
                          stroke-linejoin="round"></path>
                    <path d="M12.0381 6.91913V17.0618" stroke="#1E2843" stroke-width="1.5" stroke-linecap="round"
                          stroke-linejoin="round"></path>
                    <path d="M16.6286 13.8268V17.0619" stroke="#1E2843" stroke-width="1.5" stroke-linecap="round"
                          stroke-linejoin="round"></path>
                    <path fill-rule="evenodd" clip-rule="evenodd"
                          d="M16.6857 2H7.31429C4.04762 2 2 4.31208 2 7.58516V16.4148C2 19.6879 4.0381 22 7.31429 22H16.6857C19.9619 22 22 19.6879 22 16.4148V7.58516C22 4.31208 19.9619 2 16.6857 2Z"
                          stroke="#1E2843" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                </svg>
            </div>
            <div class="MuiPaper-root MuiPaper-elevation MuiPaper-rounded MuiPaper-elevation1 mt-2 px-3 py-3 css-aoeo82">
                <div class="MuiGrid-root MuiGrid-container MuiGrid-spacing-xs-1.5 css-sag665">
                    <div class="MuiGrid-root MuiGrid-item MuiGrid-grid-xs-6 css-1s50f5r">
                        <div>
                            <div class="text-lg font-bold text-color-primary">80</div>
                            <div class="text-sm max-line-1">Số lượng đối tác</div>
                        </div>
                    </div>
                    <div class="MuiGrid-root MuiGrid-item MuiGrid-grid-xs-6 css-1s50f5r">
                        <div>
                            <div class="text-lg font-bold text-color-primary">{{ \App\Http\Controllers\ApiController::currentUsers() }}</div>
                            <div class="text-sm max-line-1">Thành viên</div>
                        </div>
                    </div>
                    <div class="MuiGrid-root MuiGrid-item MuiGrid-grid-xs-6 css-1s50f5r">
                        <div>
                            <div class="text-lg font-bold text-color-primary">{{ ceil(\App\Http\Controllers\ApiController::currentUsers() / 24) }}</div>
                            <div class="text-sm max-line-1">Cộng tác viên</div>
                        </div>
                    </div>
                    <div class="MuiGrid-root MuiGrid-item MuiGrid-grid-xs-6 css-1s50f5r">
                        <div>
                            <div class="text-lg font-bold text-color-primary">{{ ceil(\App\Http\Controllers\ApiController::currentUsers() / 2) }}</div>
                            <div class="text-sm max-line-1">Khách hàng tiềm năng</div>
                        </div>
                    </div>
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

        <!-- END CONTENT -->
    </div>
</x-app-layout>
