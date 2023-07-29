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
                    <div class="MuiAvatar-root MuiAvatar-circular MuiAvatar-colorDefault w-[60px] h-[60px] text-[42px] font-bold bg-gradient-to-b from-[#FFF] to-[#D6D6D6] text-color-primary css-1ruz4ej" id="secondDigit">
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
                            tabindex="0" type="button"><img
                                src="{{ asset('/minigame/img/Square.Red.db623f6ff5c842986208.png') }}"><span
                                class="MuiTouchRipple-root css-w0pj6f"></span></button>
                </div>
                <div class="MuiGrid-root MuiGrid-item MuiGrid-grid-xs-6 relative flex justify-start px-0.5 py-[2px] css-1s50f5r">
                    <button class="MuiButtonBase-root MuiButton-root MuiButton-text MuiButton-textInherit MuiButton-sizeMedium MuiButton-textSizeMedium MuiButton-colorInherit MuiButton-disableElevation MuiButton-root MuiButton-text MuiButton-textInherit MuiButton-sizeMedium MuiButton-textSizeMedium MuiButton-colorInherit MuiButton-disableElevation left-[0px] bottom-[0px] p-0 z-10 cursor-pointer hover:brightness-110 bg-transparent css-1n02ex7"
                            tabindex="0" type="button"><img
                                src="{{ asset('/minigame/img/Square.Green.4fb895cd423137759a2d.png') }}"><span
                                class="MuiTouchRipple-root css-w0pj6f"></span></button>
                </div>
                <div class="MuiGrid-root MuiGrid-item MuiGrid-grid-xs-6 relative flex justify-end px-0.5 py-[2px] css-1s50f5r">
                    <button class="MuiButtonBase-root MuiButton-root MuiButton-text MuiButton-textInherit MuiButton-sizeMedium MuiButton-textSizeMedium MuiButton-colorInherit MuiButton-disableElevation MuiButton-root MuiButton-text MuiButton-textInherit MuiButton-sizeMedium MuiButton-textSizeMedium MuiButton-colorInherit MuiButton-disableElevation right-[0px] top-[0px] p-0 z-10 cursor-pointer hover:brightness-110 bg-transparent css-1n02ex7"
                            tabindex="0" type="button"><img
                                src="{{ asset('/minigame/img/Square.Blue.2a704b07d5d229ec430a.png') }}"><span
                                class="MuiTouchRipple-root css-w0pj6f"></span></button>
                </div>
                <div class="MuiGrid-root MuiGrid-item MuiGrid-grid-xs-6 relative flex justify-start px-0.5 py-[2px] css-1s50f5r">
                    <button class="MuiButtonBase-root MuiButton-root MuiButton-text MuiButton-textInherit MuiButton-sizeMedium MuiButton-textSizeMedium MuiButton-colorInherit MuiButton-disableElevation MuiButton-root MuiButton-text MuiButton-textInherit MuiButton-sizeMedium MuiButton-textSizeMedium MuiButton-colorInherit MuiButton-disableElevation left-[0px] top-[0px] p-0 z-10 cursor-pointer hover:brightness-110 bg-transparent css-1n02ex7"
                            tabindex="0" type="button"><img
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

            window.addEventListener('DOMContentLoaded', function () {

                const pusher = new Pusher('{{ env('PUSHER_APP_KEY') }}', {
                    cluster: '{{ env('PUSHER_APP_CLUSTER') }}',
                    encrypted: true,
                });

                // Subscribe to the channel (e.g., 'channel-name')
                const channel = pusher.subscribe('lucky_number');

                // Bind to the event name ('App\\Events\\SampleEvent') on the channel
                channel.bind('lucky_number', (data) => {
                    console.log('Received message from the server:', data.message);
                    const dataDecrypt = JSON.parse(data.message);
                    $('#timer').html(dataDecrypt.time)
                    $('#nextId').html(dataDecrypt.next)
                    const numbersArr = (dataDecrypt.number).split('-')
                    console.log(numbersArr)
                    $('#firstDigit').html(numbersArr[0])
                    $('#secondDigit').html(numbersArr[1])
                    $('#thirdDigit').html(numbersArr[2])
                    // Handle the received data from the server as needed
                });
            });


        </script>
    @endsection
</x-app-layout>