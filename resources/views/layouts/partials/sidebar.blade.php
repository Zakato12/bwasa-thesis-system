<div id="sidebar">
    <div class="sidebar-header">
        <h4>BWASA</h4>
    </div>

    <div>
        <ul class="list-unstyled components">

            <li class="{{ request()->is('dashboard') ? 'active' : '' }}">
                <a href="{{ url('/dashboard') }}">Dashboard</a>
            </li>

            <li class="{{ request()->is('users*') ? 'active' : '' }}">
                <a href="{{ url('/users') }}">Users</a>
            </li>

            <li class="{{ request()->is('reports*') ? 'active' : '' }}">
                <a href="{{ url('/reports') }}">Reports</a>
            </li>

        </ul>
    </div>
</div>
