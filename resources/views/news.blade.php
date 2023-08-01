<x-news-layout>
    <div class="accordion" id="post_accor">

        @foreach(\App\Models\DanhMuc::all() as $dm)
            <div class="accordion-item border-0" >
                <button class="w-100" type="button" data-bs-toggle="collapse" data-bs-target="#{{$dm->id}}">
                    <div class="mb-3" >
                        <div class="MuiPaper-root MuiPaper-elevation MuiPaper-rounded MuiPaper-elevation1 h-[48px] rounded-none flex items-center px-3 border-l-4 border-primary-dark shadow-md sticky top-0 z-10 cursor-pointer hover:brightness-90 css-aoeo82">
                            <div class="text-lg font-bold">{{$dm->name}}</div>
                        </div>
                    </div>
                </button>
                @php($posts = \App\Http\Controllers\NewsController::findPost($dm->id)->paginate(10))
                @foreach($posts as $post)
                    <div id="{{$dm->id}}" class="accordion-collapse collapse @if($loop->parent->iteration == 1) show @endif" data-bs-parent="#post_accor">
                        <div class="MuiCollapse-root MuiCollapse-vertical MuiCollapse-entered css-c4sutr"
                             style="min-height: 0px;">

                            <div class="MuiPaper-root MuiPaper-elevation MuiPaper-rounded MuiPaper-elevation1 MuiCard-root rounded-none mb-3 relative css-s18byi">
                                <div class="slick-slider w-full flex justify-center h-[240px] slick-initialized">
                                    <div class="slick-list">
                                        <div class="slick-track"
                                             style="width: 444px; opacity: 1; transform: translate3d(0px, 0px, 0px);">
                                            <div data-index="0" class="slick-slide slick-active slick-current" tabindex="-1"
                                                 aria-hidden="false" style="outline: none; width: 444px;">
                                                <div>
                                                    <div class="MuiCardMedia-root h-[240px] flex flex-col justify-end css-pqdqbj"
                                                         role="img"
                                                         tabindex="-1"
                                                         style="background-image: url(&quot;{{ asset($post->thumbnail) }}&quot;); width: 100%; display: inline-block;">
                                                        <div class="w-full text-center px-3 pb-6">
                                                            <div class="text-lg font-bold text-white"
                                                                 style="text-shadow: rgb(0, 0, 0) 0px 0px 4px;">{{ $post->title }}</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="MuiCardContent-root p-3 space-y-2 pb-0 css-1qw96cp">
                                    <a href="{{ route('news.view', $post->post_id ) }}"><span
                                                class="font-bold hover:text-navbar">{{ number_format($post->price , 0, '.', '.') }}</span></a>
                                    <div class="flex justify-between">
                                        <div class="flex items-center gap-1">

                                            <div>{{ $post->vote }} Đánh giá</div>
                                        </div>
                                        <div class="flex items-center gap-1">
                                            <svg class="MuiSvgIcon-root MuiSvgIcon-fontSizeMedium text-[orangered] cursor-pointer css-vubbuv"
                                                 focusable="false" aria-hidden="true" viewBox="0 0 24 24"
                                                 data-testid="FavoriteBorderIcon">
                                                <path d="M16.5 3c-1.74 0-3.41.81-4.5 2.09C10.91 3.81 9.24 3 7.5 3 4.42 3 2 5.42 2 8.5c0 3.78 3.4 6.86 8.55 11.54L12 21.35l1.45-1.32C18.6 15.36 22 12.28 22 8.5 22 5.42 19.58 3 16.5 3zm-4.4 15.55-.1.1-.1-.1C7.14 14.24 4 11.39 4 8.5 4 6.5 5.5 5 7.5 5c1.54 0 3.04.99 3.57 2.36h1.87C13.46 5.99 14.96 5 16.5 5c2 0 3.5 1.5 3.5 3.5 0 2.89-3.14 5.74-7.9 10.05z"></path>
                                            </svg>
                                            <div>{{ $post->like }}</div>
                                        </div>
                                    </div>
                                    <div class="text-sm">
                                        {{ $post->small_title }}
                                    </div>
                                    <div class="flex justify-between">
                                        <div class="MuiChip-root MuiChip-filled MuiChip-sizeSmall MuiChip-colorDefault MuiChip-filledDefault bg-color-secondary text-white css-31ic4c">
                                            <span class="MuiChip-label MuiChip-labelSmall css-1pjtbja">Earn Like: 14</span>
                                        </div>
                                        <div class="MuiChip-root MuiChip-filled MuiChip-sizeSmall MuiChip-colorDefault MuiChip-filledDefault bg-color-secondary text-white css-31ic4c">
                                            <span class="MuiChip-label MuiChip-labelSmall css-1pjtbja">Earn Vote: 14</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="MuiCardActions-root MuiCardActions-spacing p-3 flex justify-between pt-2 css-3zukih">
                                    <div class="flex items-center gap-1 text-primary-light">
                                        <svg class="MuiSvgIcon-root MuiSvgIcon-fontSizeMedium text-base css-vubbuv"
                                             focusable="false"
                                             aria-hidden="true" viewBox="0 0 24 24" data-testid="AccessTimeIcon">
                                            <path d="M11.99 2C6.47 2 2 6.48 2 12s4.47 10 9.99 10C17.52 22 22 17.52 22 12S17.52 2 11.99 2zM12 20c-4.42 0-8-3.58-8-8s3.58-8 8-8 8 3.58 8 8-3.58 8-8 8z"></path>
                                            <path d="M12.5 7H11v6l5.25 3.15.75-1.23-4.5-2.67z"></path>
                                        </svg>
                                        <span class="text-sm">{{ $post->created_at->format('d/m/Y')  }}</span>
                                    </div>
                                    <a href="{{ route('news.view', $post->post_id ) }}">
                                        <div class="flex items-center gap-1 text-primary-light hover:text-primary-dark">
                                            <span class="text-sm">Xem thêm</span>
                                            <svg class="MuiSvgIcon-root MuiSvgIcon-fontSizeMedium text-base css-vubbuv"
                                                 focusable="false"
                                                 aria-hidden="true" viewBox="0 0 24 24"
                                                 data-testid="KeyboardDoubleArrowRightIcon">
                                                <path d="M6.41 6 5 7.41 9.58 12 5 16.59 6.41 18l6-6z"></path>
                                                <path d="m13 6-1.41 1.41L16.17 12l-4.58 4.59L13 18l6-6z"></path>
                                            </svg>
                                        </div>
                                    </a>
                                </div>
                            </div>

                        </div>
                    </div>
                @endforeach
                {{ $posts->links() }}
            </div>
        @endforeach

    </div>
</x-news-layout>
