@extends('layouts.index')

@section('content')
    <div class="container mx-auto px-4">
        <h2 class="text-blue-500 uppercase tracking-wide font-semibold">
            Popular Games
        </h2>

        <div class="popular-games text-sm grid grid-cols-6 gap-12 border-b border-gray-800 pb-16">
            @for ($i = 0; $i < 12; $i++)
                <div class="game mt-8">
                    <div class="relative inline-block">
                        <a href="#">
                            <img src="/images/ff7.jpg" alt="game cover" class="hover:opacity-75 transition ease-in-out duration-150">
                        </a>
                        <div class="absolute bottom-0 right-0 w-16 h-16 bg-gray-800 rounded-full" style="right: -20px; bottom: -20px">
                            <div class="font-semibold text-xs flex justify-center items-center h-full">80%</div>
                        </div>
                    </div>
                    <a href="#" class="block text-base font-semibold leading-tight hover:text-gray-400 mt-8">Final Fantasy 7 Remake</a>
                    <div class="text-gray-400 mt-1">Playstation 4</div>
                </div>
            @endfor
        </div> <!-- end popular games -->

        <div class="flex my-10">
            <div class="recently-reviewed w-3/4 mr-32">
                <h2 class="text-blue-500 uppercase tracking-wide font-semibold">Recently Reviewed</h2>
                <div class="recently-reviewed-container space-y-12 mt-8">
                    @for ($i = 0; $i < 3; $i++)
                        <div class="game bg-gray-800 rounded-lg shadow-md flex px-6 py-6">
                            <div class="relative flex-none">
                                <a href="#">
                                    <img src="/images/luigi.jpg" alt="game cover" class="w-48 hover:opacity-75 transition ease-in-out duration-150">
                                </a>
                                <div class="absolute bottom-0 right-0 w-16 h-16 bg-gray-900 rounded-full -mb-5 -mr-5">
                                {{-- <div class="absolute bottom-0 right-0 w-16 h-16 bg-gray-900 rounded-full" style="right: -20px; bottom: -20px"> --}}
                                    <div class="font-semibold text-xs flex justify-center items-center h-full">80%</div>
                                </div>
                            </div>
                            <div class="ml-12">
                                <a href="#" class="block text-lg font-semibold leading-tight hover:text-gray-400 mt-4">Luigi III Final</a>
                                <div class="text-gray-400 mt-1">Playstation 4</div>
                                <div class="mt-6 text-gray-400">
                                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Consequuntur, tenetur mollitia earum animi ipsa quas aliquam reiciendis qui suscipit repudiandae obcaecati laudantium maiores reprehenderit inventore voluptas in accusamus amet! Non, quas laudantium. Delectus animi beatae quod consequatur tempora modi architecto obcaecati incidunt saepe ducimus, tempore dolorum itaque, earum adipisci esse maiores quidem eligendi reprehenderit maxime voluptates expedita at explicabo veniam?
                                </div>
                            </div>
                        </div> <!-- end game -->
                    @endfor
                </div> <!-- end recently reviewed container -->
            </div> <!-- end recently reviewed -->

            <div class="most-anticipated w-1/4">
                <h2 class="text-blue-500 uppercase tracking wide font-semibold">Most Anticipated</h2>
                <div class="most-anticipated-container space-y-10 mt-8">
                    @for ($i = 0; $i < 4; $i++)
                        <div class="game flex">
                            <a href="#">
                                <img src="/images/cyberpunk.jpg" alt="game cover" class="w-16 hover:opacity-75 transition ease-in-out duration-150">
                            </a>
                            <div class="ml-4">
                                <a href="#" class="hover:text-gray-300">Cyberpunk 2077</a>
                                <div class="text-gray-400 text-sm mt-1">Sep 15, 2020</div>
                            </div>
                        </div>
                    @endfor
                </div> <!-- end most anticipated container -->

                <h2 class="text-blue-500 uppercase tracking wide font-semibold mt-12">Coming Soon</h2>
                <div class="coming-soon-container space-y-10 mt-8">
                    @for ($i = 0; $i < 3; $i++)
                        <div class="game flex">
                            <a href="#">
                                <img src="/images/doom.jpg" alt="game cover" class="w-16 hover:opacity-75 transition ease-in-out duration-150">
                            </a>
                            <div class="ml-4">
                                <a href="#" class="hover:text-gray-300">Doom IV</a>
                                <div class="text-gray-400 text-sm mt-1">Sep 15, 2020</div>
                            </div>
                        </div>
                    @endfor
                </div> <!-- end coming soon container -->
            </div> <!-- end most anticipated -->
        </div>
    </div>
@endsection
