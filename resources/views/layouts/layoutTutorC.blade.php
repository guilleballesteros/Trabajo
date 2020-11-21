
    <!-- Sidebar Menu -->
<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
      <!-- Add icons to the links using the .nav-icon class
        with font-awesome or any other icon font library -->
        <li class="nav-item">
            <a href="{{ route('module.index') }}" class="nav-link">
            <i class="fas fa-book"></i>
                <p>
                    Modules
                </p>
            </a>
        </li>
        <li class="nav-item">
            
            <a href="{{ route('ra.index') }}" class="nav-link">
                <i class="fas fa-chalkboard"></i>
                <p>
                    RAs
                </p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('ce.index') }}" class="nav-link">
                <i class="fas fa-clipboard-check"></i>
                <p>
                    CEs
                </p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('task.index') }}" class="nav-link">
            <i class="fas fa-clipboard-list"></i>
                <p>
                    Tasks
                </p>
            </a>
        </li>
    </ul>
</nav>