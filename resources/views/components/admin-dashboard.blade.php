<!-- resources/views/components/admin-dashboard.blade.php -->
<!-- Admin-specific content goes here -->
<div>
    <h1>Welcome to the Admin Dashboard!</h1>

    <h3>All Users</h3>
    <br>
    <ul>
        @foreach ($users as $user)
            <li>- {{ $user->name }} {{ $user->is_admin }}</li>
        @endforeach
    </ul>
</div>
