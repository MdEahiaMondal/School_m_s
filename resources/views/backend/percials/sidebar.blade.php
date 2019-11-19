<aside>
    <div id="sidebar" class="nav-collapse">
        <!-- sidebar menu start-->
        <div class="leftside-navigation">
            <ul class="sidebar-menu" id="nav-accordion">

                <li>
                    <a class="{{ Request::is('admin') ? 'active' : '' }}" href="{{ route('admin.index') }}">
                        <i class="fa fa-dashboard"></i>
                        <span>Dashboard</span>
                    </a>
                </li>

                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-laptop"></i>
                        <span>Administration</span>
                    </a>
                    <ul class="sub">
                        <li class="{{ Request::is('permission*') ? 'active' : '' }}"><a  href="{{ route('permission.index') }}">Manage Permission</a></li>
                        <li><a href="{{ route('role.index') }}">Manage Role</a></li>
                    </ul>
                </li>

                <li class="sub-menu">
                    <a href="{{ route('teacher.index') }}" class="{{ Request::is('teacher*') ? 'active' : '' }}">
                        <i class="fa  fa-group"></i>
                        <span>Teachers</span>
                    </a>
                </li>

                <li class="sub-menu">
                    <a href="{{ route('parent.index') }}" class="{{ Request::is('parent*') ? 'active' : '' }}">
                        <i class="fa  fa-group"></i>
                        <span>Parents</span>
                    </a>
                </li>

                <li class="sub-menu">
                    <a href="{{ route('parent.index') }}" class="{{ Request::is('parent*') ? 'active' : '' }}">
                        <i class="fa fa-group"></i>
                        <span>Students</span>
                    </a>
                </li>

                <li class="sub-menu">
                    <a href="{{ route('all_classes.index') }}" class="{{ Request::is('class*') ? 'active' : '' }}">
                        <i class="fa fa-class"></i>
                        <span>Class</span>
                    </a>
                </li>

            </ul>
        </div>
        <!-- sidebar menu end-->
    </div>
</aside>
