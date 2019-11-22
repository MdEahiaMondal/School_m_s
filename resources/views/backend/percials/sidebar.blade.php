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



                @role('admin')
                    <li class="sub-menu">
                        <a href="javascript:;">
                            <i class="fa fa-barcode"></i>
                            <span>Administration</span>
                        </a>
                        <ul class="sub">
                            <li><a class="{{ Request::is('permission*') ? 'active' : '' }}"  href="{{ route('permission.index') }}">Manage Permission</a></li>
                            <li><a  class="{{ Request::is('role*') ? 'active' : '' }}" href="{{ route('role.index') }}">Manage Role</a></li>
                            <li><a  class="{{ Request::is('particularPermission*') ? 'active' : '' }}" href="{{ route('role.index') }}">Manage Direct Permission</a></li>
                        </ul>
                    </li>
                @endrole


                @role('admin')
                    <li class="sub-menu">
                        <a href="javascript:;">
                            <i class="fa fa-barcode"></i>
                            <span>Class Manage</span>
                        </a>
                        <ul class="sub">
                            <li class="sub-menu">
                                <a href="{{ route('class_groups.index') }}" class="{{ Request::is('class*') ? 'active' : '' }}">
                                    <i class="fa fa-shield"></i>
                                    <span>Class Group</span>
                                </a>
                            </li>

                            @if(auth()->user()->hasRole('admin') or auth()->user()->can('class create') or auth()->user()->can('class edit') or auth()->user()->can('class delete') or auth()->user()->can('class show') )
                                <li class="sub-menu">
                                    <a href="{{ route('all_classes.index') }}" class="{{ Request::is('class*') ? 'active' : '' }}">
                                        <i class="fa fa-shield"></i>
                                        <span>Class</span>
                                    </a>
                                </li>
                            @endif

                        </ul>
                    </li>
                @endrole


                @if(auth()->user()->hasRole('admin') or auth()->user()->can('teacher create') or auth()->user()->can('teacher edit') or auth()->user()->can('teacher delete') or auth()->user()->can('teacher show') )
                    <li class="sub-menu">
                        <a href="{{ route('teacher.index') }}" class="{{ Request::is('teacher*') ? 'active' : '' }}">
                            <i class="fa  fa-group"></i>
                            <span>Teachers</span>
                        </a>
                    </li>
                @endif

                @if(auth()->user()->hasRole('admin') or auth()->user()->can('parent create') or auth()->user()->can('parent edit') or auth()->user()->can('parent delete') or auth()->user()->can('parent show') )
                    <li class="sub-menu">
                        <a href="{{ route('parent.index') }}" class="{{ Request::is('parent*') ? 'active' : '' }}">
                            <i class="fa  fa-group"></i>
                            <span>Parents</span>
                        </a>
                    </li>
                @endif



                @if(auth()->user()->hasRole('admin') or auth()->user()->can('student create') or auth()->user()->can('student edit') or auth()->user()->can('student delete') or auth()->user()->can('student show') )
                <li class="sub-menu">
                    <a href="{{ route('students.index') }}" class="{{ Request::is('students*') ? 'active' : '' }}">
                        <i class="fa fa-group"></i>
                        <span>Students</span>
                    </a>
                </li>
                @endif


                    @if(auth()->user()->hasRole('admin') or auth()->user()->can('attendance create') or auth()->user()->can('attendance edit') or auth()->user()->can('attendance delete') or auth()->user()->can('attendance show') )
                        <li class="sub-menu">
                            <a href="{{ route('attendances.index') }}" class="{{ Request::is('attendances*') ? 'active' : '' }}">
                                <i class="fa  fa-credit-card"></i>
                                <span>Attandance</span>
                            </a>
                        </li>
                    @endif
            </ul>
        </div>
        <!-- sidebar menu end-->
    </div>
</aside>
