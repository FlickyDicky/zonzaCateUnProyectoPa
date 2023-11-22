<!-- resources/views/components/admin-dashboard.blade.php -->
<!-- Admin-specific content goes here -->
<div>
    <h1>Welcome to the Admin Dashboard!</h1>
    <h3>All Users</h3>
    <br>
    <ul>
        @foreach ($users as $user)
            <li class="flex items-center justify-between p-2 border border-gray-300 mb-2 rounded-md">
                <div>
                    <b>Name: </b>{{ $user->name }}<br><b>Email: </b>{{ $user->email }}
                </div>
                <form method="POST" action="{{ route('dashboard.delete', ['user' => $user->id]) }}">
                    @csrf
                    @method('DELETE')
                    <x-delete-button>Delete</x-delete-button>
                </form>
            </li>
            <br>
        @endforeach
    </ul>
</div>
