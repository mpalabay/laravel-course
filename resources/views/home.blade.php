<x-layout>
    
    <x-slot name="title">Home</x-slot>

    <div class="max-w-2xl mx-auto">

        <div class="card bg-base-100 shadow mt-8">
            <div class="card-body">
                <div>
                    <h1 class="text-3xl font-bold">Welcome to Pawi!</h1>
                    <p class="mt-4 text-base-content/60">Pawi — A place to express your thoughts, share your stories,
                        and let go of what weighs on your mind. Inspired by the
                        Filipino word "pawi," meaning to ease, dispel, or release.</p>
                </div>
            </div>
        </div>

        @foreach ($pawis as $pawi)
        <div class="card bg-base-100 shadow mt-8">
            <div class="card-body">
                <div>
                    <div class="font-semibold">{{ $pawi['author'] }}</div>
                    <div class="mt-2">{{ $pawi['message'] }}</div>
                    <div class="text-sm text-base-content/60 mt-4">{{ $pawi['time'] }}</div>
                </div>
            </div>
        </div>
        @endforeach

    </div>
</x-layout>