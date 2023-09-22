<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="mt-4">
                <a href="{{ route('tasks.index') }}" class="btn btn-primary">{{ __('Go Back') }}</a>
            </div>
            <div class="mt-4">
                <table class="table table-striped table-hover mt-5">
                    <thead>
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Status</th>
                        <th>User</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>{{ $task->id }}</td>
                        <td>{{ $task->name }}</td>
                        <td>{{ $task->description }}</td>
                        <td>
                            <div class="badge {{ $task->status === 'draft' ? 'text-bg-secondary' : 'text-bg-success' }}">
                                {{ $task->status }}
                            </div>
                        </td>
                        <td>{{ $task->user->name }}</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
