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
        
        {{-- Form --}}
        <div class="card bg-base-100 shadow mt-8">
            <div class="card-body">
                <form method="POST" action="/pawis">
                    @csrf
                    <div class="form-control w-full">
                        <textarea name="message" placeholder="What's on your mind?"
                            class="textarea textarea-bordered w-full resize-none" rows="4" maxlength="255" required></textarea>
                    </div>
        
                    <div class="mt-4 flex items-center justify-end">
                        <button type="submit" class="btn btn-primary btn-sm">
                            Post
                        </button>
                    </div>
                </form>
            </div>
        </div>

        <h1 class="text-3xl font-bold mt-8">Latest Pawis</h1>

        <div class="space-y-4 mt-8">
            @forelse ($pawis as $pawi)
                <x-pawi :pawi="$pawi" />
            @empty
                <div class="hero py-12">
                    <div class="hero-content text-center">
                        <div>
                            <svg class="mx-auto h-12 w-12 opacity-30" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z">
                                </path>
                            </svg>
                            <p class="mt-4 text-base-content/60">No Pawis yet. Be the first to share your Pawi!</p>
                        </div>
                    </div>
                </div>
            @endforelse
        </div>

    </div>
</x-layout>