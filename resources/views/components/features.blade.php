<section  id="features" class="py-20 bg-white">
    <div class="container max-w-6xl mx-auto">
        <h2 class="text-4xl font-bold tracking-tight text-center">{{__('app.features.title')}}</h2>
        <p class="mt-2 text-lg text-center text-gray-600">{{__('app.features.subtitle') }}</p>
        <div class="grid grid-cols-4 gap-8 mt-10 sm:grid-cols-8 lg:grid-cols-12 sm:px-8 xl:px-0">

            @foreach ($features as $item)
                <div class="relative flex flex-col items-center justify-between col-span-4 px-8 py-12 space-y-4 overflow-hidden bg-gray-100 sm:rounded-xl"
                    data-rounded="rounded-xl" data-rounded-max="rounded-full">
                    <div class="p-3 text-white bg-blue-500 rounded-full" data-primary="blue-500"
                        data-rounded="rounded-full">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 " viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M14 3v4a1 1 0 0 0 1 1h4" />
                            <path d="M5 8v-3a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2h-5" />
                            <circle cx="6" cy="14" r="3" />
                            <path d="M4.5 17l-1.5 5l3 -1.5l3 1.5l-1.5 -5" />
                        </svg>
                    </div>
                    <h4 class="text-xl font-medium text-gray-700">{{ $item['title'] }}</h4>
                    <p class="text-base text-center text-gray-500">{{ $item['body'] }}</p>
                </div>
            @endforeach

        </div>
    </div>
</section>
