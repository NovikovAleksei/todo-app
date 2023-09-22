<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="mt-5">
                <form method="POST" action="{{ route('tasks.store') }}">
                    @csrf

                    <div class="mb-3">
                        <label for="name" class="form-label">{{ __('Name') }}</label>
                        <input type="text" name="name" class="form-control" id="name" placeholder="{{ __('Name of the task') }}" value="{{ old('name') }}" required>
                        <x-input-error :messages="$errors->get('name')" class="mt-2 p-0" />
                    </div>

                    <div class="mb-3">
                        <label for="description" class="form-label">{{ __('Please set description') }}</label>
                        <textarea class="form-control" id="description" name="description" rows="3" required>{{ old('description') }}</textarea>
                        <x-input-error :messages="$errors->get('description')" class="mt-2 p-0" />
                    </div>

                    <button type="submit" class="btn btn-primary mb-3">{{ __('Create') }}</button>
                </form>
            </div>
        </div>
    </div>
</div>
