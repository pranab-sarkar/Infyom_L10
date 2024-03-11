<!-- need to remove -->
<li class="nav-item">
    <a href="{{ route('home') }}" class="nav-link {{ Request::is('home') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Home</p>
    </a>
</li>







<li class="nav-item">
    <a href="{{ route('students.index') }}" class="nav-link {{ Request::is('students*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Students</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('teachers.index') }}" class="nav-link {{ Request::is('teachers*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Teachers</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('roksanaApus.index') }}" class="nav-link {{ Request::is('roksanaApus*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Roksana  Apus</p>
    </a>
</li>
