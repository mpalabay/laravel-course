<x-layout>

    <x-slot name="title">Edit</x-slot>

    <div class="max-w-2xl mx-auto">

        {{-- Form --}}
        <div class="card bg-base-100 shadow mt-8">
            <div class="card-body">
                <form method="POST" action="/pawis/{{ $pawi->id }}">
                    @csrf
                    @method('PUT')

                    <div class="form-control w-full">
                        <textarea name="message" placeholder="What's on your mind?"
                            class="textarea textarea-bordered w-full resize-none" rows="4" maxlength="255"
                            required>{{ old('message', $pawi->message) }}</textarea>

                            @error('message')
                                <div class="label">
                                    <span class="label-text-alt text-error">{{ $message }}</span>
                                </div>
                            @enderror
                    </div>

                    <div class="card-actions justify-between mt-4">
                        <a href="/" class="btn btn-ghost btn-sm">
                            Cancel
                        </a>
                        <button type="submit" class="btn btn-primary btn-sm">
                            Update Chirp
                        </button>
                    </div>
                </form>
            </div>
        </div>

    </div>
</x-layout>