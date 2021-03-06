@extends('layouts.app')

@section('content')
    <div class="container mx-auto px-4">
        <h2 class="text-blue-500 uppercase tracking-wide font-semibold">Popular Games</h2>
        <div
            class="popular-games text-sm grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 xl:grid-cols-6 gap-10 border-b border-gray-800 pb-16">
            <div class="game mt-8">
                <div class="relative inline-block">
                    <a href="#">
                        <img src="{{ asset('image/lords-mobile-2.jpg') }}" alt="game cover"
                            class="hover:opacity-75 ease-in-out duration-150">
                    </a>
                    <div class="absolute bottom-0 right-0 w-16 h-16 bg-gray-800 rounded-full"
                        style="right: -20px; bottom: -20px">
                        <div class="font-semibold text-xs flex justify-center items-center h-full">
                            80%
                        </div>
                    </div>
                </div>
                <a href="#" class="block text-base font-semibold leading-tight hover:text-gray-400 mt-8">Lords Mobile 2</a>
                <div class="text-gray-400 mt-1">
                    Mobile
                </div>
            </div>
            <div class="game mt-8">
                <div class="relative inline-block">
                    <a href="#">
                        <img src="{{ asset('image/lords-mobile-2.jpg') }}" alt="game cover"
                            class="hover:opacity-75 ease-in-out duration-150">
                    </a>
                    <div class="absolute bottom-0 right-0 w-16 h-16 bg-gray-800 rounded-full"
                        style="right: -20px; bottom: -20px">
                        <div class="font-semibold text-xs flex justify-center items-center h-full">
                            80%
                        </div>
                    </div>
                </div>
                <a href="#" class="block text-base font-semibold leading-tight hover:text-gray-400 mt-8">Lords Mobile 2</a>
                <div class="text-gray-400 mt-1">
                    Mobile
                </div>
            </div>
            <div class="game mt-8">
                <div class="relative inline-block">
                    <a href="#">
                        <img src="{{ asset('image/lords-mobile-2.jpg') }}" alt="game cover"
                            class="hover:opacity-75 ease-in-out duration-150">
                    </a>
                    <div class="absolute bottom-0 right-0 w-16 h-16 bg-gray-800 rounded-full"
                        style="right: -20px; bottom: -20px">
                        <div class="font-semibold text-xs flex justify-center items-center h-full">
                            80%
                        </div>
                    </div>
                </div>
                <a href="#" class="block text-base font-semibold leading-tight hover:text-gray-400 mt-8">Lords Mobile 2</a>
                <div class="text-gray-400 mt-1">
                    Mobile
                </div>
            </div>
            <div class="game mt-8">
                <div class="relative inline-block">
                    <a href="#">
                        <img src="{{ asset('image/lords-mobile-2.jpg') }}" alt="game cover"
                            class="hover:opacity-75 ease-in-out duration-150">
                    </a>
                    <div class="absolute bottom-0 right-0 w-16 h-16 bg-gray-800 rounded-full"
                        style="right: -20px; bottom: -20px">
                        <div class="font-semibold text-xs flex justify-center items-center h-full">
                            80%
                        </div>
                    </div>
                </div>
                <a href="#" class="block text-base font-semibold leading-tight hover:text-gray-400 mt-8">Lords Mobile 2</a>
                <div class="text-gray-400 mt-1">
                    Mobile
                </div>
            </div>
            <div class="game mt-8">
                <div class="relative inline-block">
                    <a href="#">
                        <img src="{{ asset('image/lords-mobile-2.jpg') }}" alt="game cover"
                            class="hover:opacity-75 ease-in-out duration-150">
                    </a>
                    <div class="absolute bottom-0 right-0 w-16 h-16 bg-gray-800 rounded-full"
                        style="right: -20px; bottom: -20px">
                        <div class="font-semibold text-xs flex justify-center items-center h-full">
                            80%
                        </div>
                    </div>
                </div>
                <a href="#" class="block text-base font-semibold leading-tight hover:text-gray-400 mt-8">Lords Mobile 2</a>
                <div class="text-gray-400 mt-1">
                    Mobile
                </div>
            </div>
            <div class="game mt-8">
                <div class="relative inline-block">
                    <a href="#">
                        <img src="{{ asset('image/lords-mobile-2.jpg') }}" alt="game cover"
                            class="hover:opacity-75 ease-in-out duration-150">
                    </a>
                    <div class="absolute bottom-0 right-0 w-16 h-16 bg-gray-800 rounded-full"
                        style="right: -20px; bottom: -20px">
                        <div class="font-semibold text-xs flex justify-center items-center h-full">
                            80%
                        </div>
                    </div>
                </div>
                <a href="#" class="block text-base font-semibold leading-tight hover:text-gray-400 mt-8">Lords Mobile 2</a>
                <div class="text-gray-400 mt-1">
                    Mobile
                </div>
            </div>
        </div>
        <div class="flex flex-col lg:flex-row my-10">
            <div class="recently-reviewed w-full mr-0 lg:w-3/4 lg:mr-32">
                <h2 class="text-blue-500 uppercase tracking-wide font-semibold">
                    Recently Reviewed
                </h2>
                <div class="recently-reviewed-container space-y-12 mt-8">
                    <div class="game bg-gray-800 rounded-lg shadow-md flex p-6">
                        <div class="relative flex-none">
                            <a href="#">
                                <img src="{{ asset('image/lords-mobile-2.jpg') }}" alt="game cover"
                                    class="w-48 hover:opacity-75 ease-in-out duration-150">
                            </a>
                            <div class="absolute bottom-0 right-0 w-16 h-16 bg-gray-900 rounded-full"
                                style="right: -20px; bottom: -20px">
                                <div class="font-semibold text-xs flex justify-center items-center h-full">
                                    80%
                                </div>
                            </div>
                        </div>
                        <div class="ml-12">
                            <a href="#" class="block text-lg font-semibold leading-tight hover:text-gray-400 mt-4">Lords
                                Mobile 2</a>
                            <div class="text-gray-400 mt-1">Mobile</div>
                            <p class="mt-6 text-gray-400 hidden lg:block">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque quaerat error asperiores
                                atque voluptas perspiciatis odio ullam delectus illo ipsum facilis sint tenetur, iure
                                aliquid expedita! Inventore ad ullam mollitia. Lorem ipsum dolor sit amet consectetur
                                adipisicing elit. Iste, odit asperiores enim aliquid at recusandae, iure rem maiores a,
                                tempore dolore minima voluptatum maxime nobis facere numquam iusto laborum cum.
                            </p>
                        </div>
                    </div>
                    <div class="game bg-gray-800 rounded-lg shadow-md flex p-6">
                        <div class="relative flex-none">
                            <a href="#">
                                <img src="{{ asset('image/lords-mobile-2.jpg') }}" alt="game cover"
                                    class="w-48 hover:opacity-75 ease-in-out duration-150">
                            </a>
                            <div class="absolute bottom-0 right-0 w-16 h-16 bg-gray-900 rounded-full"
                                style="right: -20px; bottom: -20px">
                                <div class="font-semibold text-xs flex justify-center items-center h-full">
                                    80%
                                </div>
                            </div>
                        </div>
                        <div class="ml-12">
                            <a href="#" class="block text-lg font-semibold leading-tight hover:text-gray-400 mt-4">Lords
                                Mobile 2</a>
                            <div class="text-gray-400 mt-1">Mobile</div>
                            <p class="mt-6 text-gray-400 hidden lg:block">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque quaerat error asperiores
                                atque voluptas perspiciatis odio ullam delectus illo ipsum facilis sint tenetur, iure
                                aliquid expedita! Inventore ad ullam mollitia. Lorem ipsum dolor sit amet consectetur
                                adipisicing elit. Iste, odit asperiores enim aliquid at recusandae, iure rem maiores a,
                                tempore dolore minima voluptatum maxime nobis facere numquam iusto laborum cum.
                            </p>
                        </div>
                    </div>
                    <div class="game bg-gray-800 rounded-lg shadow-md flex p-6">
                        <div class="relative flex-none">
                            <a href="#">
                                <img src="{{ asset('image/lords-mobile-2.jpg') }}" alt="game cover"
                                    class="w-48 hover:opacity-75 ease-in-out duration-150">
                            </a>
                            <div class="absolute bottom-0 right-0 w-16 h-16 bg-gray-900 rounded-full"
                                style="right: -20px; bottom: -20px">
                                <div class="font-semibold text-xs flex justify-center items-center h-full">
                                    80%
                                </div>
                            </div>
                        </div>
                        <div class="ml-12">
                            <a href="#" class="block text-lg font-semibold leading-tight hover:text-gray-400 mt-4">Lords
                                Mobile 2</a>
                            <div class="text-gray-400 mt-1">Mobile</div>
                            <p class="mt-6 text-gray-400 hidden lg:block">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque quaerat error asperiores
                                atque voluptas perspiciatis odio ullam delectus illo ipsum facilis sint tenetur, iure
                                aliquid expedita! Inventore ad ullam mollitia. Lorem ipsum dolor sit amet consectetur
                                adipisicing elit. Iste, odit asperiores enim aliquid at recusandae, iure rem maiores a,
                                tempore dolore minima voluptatum maxime nobis facere numquam iusto laborum cum.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="most-anticipated lg:w-1/4 mt-12 lg:mt-0">
                <h2 class="text-blue-500 uppercase tracking-wide font-semibold">
                    Most Anticipated
                </h2>

                <div class="most-anticipated-container space-y-10 mt-8">
                    <div class="game flex">
                        <a href="#">
                            <img src="{{ asset('image/lords-mobile-2.jpg') }}" alt="game cover"
                                class="w-16 hover:opacity-75 ease-in-out duration-150">
                        </a>
                        <div class="ml-4">
                            <a href="#" class="hover:text-gray-300">Lords Mobile 2</a>
                            <div class="text-gray-400 text-sm mt-1">Sept 16, 2020</div>
                        </div>
                    </div>
                    <div class="game flex">
                        <a href="#">
                            <img src="{{ asset('image/lords-mobile-2.jpg') }}" alt="game cover"
                                class="w-16 hover:opacity-75 ease-in-out duration-150">
                        </a>
                        <div class="ml-4">
                            <a href="#" class="hover:text-gray-300">Lords Mobile 2</a>
                            <div class="text-gray-400 text-sm mt-1">Sept 16, 2020</div>
                        </div>
                    </div>
                    <div class="game flex">
                        <a href="#">
                            <img src="{{ asset('image/lords-mobile-2.jpg') }}" alt="game cover"
                                class="w-16 hover:opacity-75 ease-in-out duration-150">
                        </a>
                        <div class="ml-4">
                            <a href="#" class="hover:text-gray-300">Lords Mobile 2</a>
                            <div class="text-gray-400 text-sm mt-1">Sept 16, 2020</div>
                        </div>
                    </div>
                </div>

                <h2 class="text-blue-500 uppercase tracking-wide font-semibold mt-8">
                    Coming Soon
                </h2>
                <div class="most-anticipated-container space-y-10 mt-8">
                    <div class="game flex">
                        <a href="#">
                            <img src="{{ asset('image/lords-mobile-2.jpg') }}" alt="game cover"
                                class="w-16 hover:opacity-75 ease-in-out duration-150">
                        </a>
                        <div class="ml-4">
                            <a href="#" class="hover:text-gray-300">Lords Mobile 2</a>
                            <div class="text-gray-400 text-sm mt-1">Sept 16, 2020</div>
                        </div>
                    </div>
                    <div class="game flex">
                        <a href="#">
                            <img src="{{ asset('image/lords-mobile-2.jpg') }}" alt="game cover"
                                class="w-16 hover:opacity-75 ease-in-out duration-150">
                        </a>
                        <div class="ml-4">
                            <a href="#" class="hover:text-gray-300">Lords Mobile 2</a>
                            <div class="text-gray-400 text-sm mt-1">Sept 16, 2020</div>
                        </div>
                    </div>
                    <div class="game flex">
                        <a href="#">
                            <img src="{{ asset('image/lords-mobile-2.jpg') }}" alt="game cover"
                                class="w-16 hover:opacity-75 ease-in-out duration-150">
                        </a>
                        <div class="ml-4">
                            <a href="#" class="hover:text-gray-300">Lords Mobile 2</a>
                            <div class="text-gray-400 text-sm mt-1">Sept 16, 2020</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
