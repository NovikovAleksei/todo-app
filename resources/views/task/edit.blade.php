<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="mt-5">
                <form method="POST" action="{{ route('tasks.update', $task) }}">
                    @csrf
                    @method('PUT')

                    <div class="mb-3">
                        <label for="name" class="form-label">{{ __('Name') }}</label>
                        <input type="text" name="name" class="form-control" id="name" placeholder="{{ __('Name of the task') }}" value="{{ $task->name }}">
                        <x-input-error :messages="$errors->get('name')" class="mt-2 p-0" />
                    </div>

                    <div class="mb-3">
                        <label for="description" class="form-label">{{ __('Please set description') }}</label>
                        <textarea class="form-control" id="description" name="description" rows="3">{{ $task->description }}</textarea>
                        <x-input-error :messages="$errors->get('description')" class="mt-2 p-0" />
                    </div>

                    <div class="mb-3">
                        <select class="form-select" aria-label="Select status" name="status">
                            @foreach($statuses as $status)
                                <option value="{{ $status }}" {{ $status === $task->status ? 'selected' : '' }}>{{ ucfirst($status) }}</option>
                            @endforeach
                        </select>
                    </div>

                    <button type="submit" class="btn btn-primary mb-3">{{ __('Update') }}</button>
                </form>
            </div>
        </div>
    </div>
</div>
