<!-- Sidebar Menu -->
<nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="{{ route('User.index') }}" class="nav-link">
              <i class="fas fa-user"></i>
              <p>
                Users
              </p>
            </a>

            <a href="assistance" class="nav-link">
                <i class="fas fa-clipboard-list"></i>
                <p>
                    Assistance
                </p>
            </a>
            
            <a href="{{ route('cycle.index') }}" class="nav-link">
            <i class="fas fa-chalkboard"></i>
              <p>
                Cycles
              </p>
            </a>
            <!-- Futuro boton a las vistas de tracing -->
            <!-- <a href="{{ route('tracing.index') }}" class="nav-link">
              <i class="fas fa-user"></i>
              <p>
                Tracing
              </p>
            </a> -->
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="fas fa-book"></i>
              <p>
                Modules
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('module.index') }}" class="nav-link active">
                <i class="far fa-eye"></i>
                  <p>
                  Show
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('task.index') }}" class="nav-link active">
                <i class="fas fa-clipboard-list"></i>
                  <p>
                    Task
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('ce.index') }}" class="nav-link active">
                <i class="fas fa-clipboard-check"></i>
                  <p>
                    CE
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('ra.index') }}" class="nav-link active">
                <i class="fas fa-chalkboard"></i>
                  <p>
                    Ra
                  </p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="fas fa-city"></i>
              <p>
                Enterprises
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('enterprise.index') }}" class="nav-link active">
                <i class="far fa-eye"></i>
                  <p>
                  Show
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('belong.index') }}" class="nav-link active">
                <i class="fas fa-user-graduate"></i>
                  <p>
                    Belongs
                  </p>
                </a>
              </li>
            </ul>
          </li>
        </ul>
      </nav>