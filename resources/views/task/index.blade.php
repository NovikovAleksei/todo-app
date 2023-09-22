<x-app-layout>
    <x-slot name="header">
        <h2>
            {{ __('Tasks') }}
        </h2>
    </x-slot>

    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="mt-4">
                    <button class="btn btn-primary m-1"
                            x-data=""
                            x-on:click.prevent="$dispatch('open-modal', 'create-task')"
                    >{{ __('Create Task') }}</button>
                    <x-modal name="create-task" focusable>
                        @include('task.create')
                    </x-modal>
                </div>
                <div class="mt-4">
                    @if($tasks->count())
                        <table class="table table-striped table-hover mt-5">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Name</th>
                                    <th>Description</th>
                                    <th>Status</th>
                                    <th>User</th>
                                    <th>Manage</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($tasks as $task)
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
                                    <td class="d-flex">
                                        <button class="btn btn-warning m-1"
                                                x-data=""
                                                x-on:click.prevent="$dispatch('open-modal', 'show-task-{{ $task->id }}')"
                                        >{{ __('Show Task') }}</button>
                                        <x-modal name="show-task-{{ $task->id }}" focusable>
                                            @include('task.show')
                                        </x-modal>

                                        <button class="btn btn-success m-1"
                                                x-data=""
                                                x-on:click.prevent="$dispatch('open-modal', 'edit-task-{{ $task->id }}')"
                                        >{{ __('Edit Task') }}</button>
                                        <x-modal name="edit-task-{{ $task->id }}" focusable>
                                            @include('task.edit', $statuses)
                                        </x-modal>

                                        <button class="btn btn-danger m-1"
                                            x-data=""
                                            x-on:click.prevent="$dispatch('open-modal', 'delete-task-{{ $task->id }}')"
                                        >{{ __('Delete Task') }}</button>
                                        <x-modal name="delete-task-{{ $task->id }}" focusable>
                                            <form method="POST" action="{{ route('tasks.destroy', $task) }}">
                                                @csrf
                                                @method('delete')
                                                <h2 class="text-lg font-medium text-gray-900">
                                                    {{ __('Are you sure you want to delete this task?') }}
                                                </h2>
                                                <button class="btn btn-danger m-1" :href="route('tasks.destroy', $task)" onclick="event.preventDefault(); this.closest('form').submit();">
                                                    {{ __('Delete task') }}
                                                </button>
                                            </form>
                                            <button class="btn btn-primary m-1" x-on:click="$dispatch('close')">
                                                {{ __('Cancel') }}
                                            </button>
                                        </x-modal>

                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    @else
                        <h2>Sorry, but nothing was found in this section</h2>
                    @endif
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
