<div class="container-scroller">

    <nav class="rt_nav_header horizontal-layout col-lg-12 col-12 p-0" style="background: #0f172a; border-bottom: 1px solid rgba(255,255,255,0.1);">
        <div class="top_nav flex-grow-1" style="background: #0f172a; height: 70px;">
            <div class="container d-flex flex-row h-100 align-items-center">
                <div class="text-center rt_nav_wrapper d-flex align-items-center">
                    <a class="nav_logo rt_logo" href="{{ url('/home') }}" style="text-decoration: none;">
                        <h2 style="color: #fff; margin: 0; font-weight: 900; letter-spacing: 1px; font-family: 'Outfit', sans-serif; background: linear-gradient(135deg, #fff 0%, #94a3b8 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">XCL Technologies</h2>
                    </a>
                </div>
                <div class="nav_wrapper_main d-flex align-items-center justify-content-between flex-grow-1">
                    <ul class="navbar-nav navbar-nav-right mr-0 ml-auto">
                        <li class="nav-item nav-profile dropdown">
                            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown" style="color: #fff; font-weight: 600; font-family: 'Inter', sans-serif;">
                                <span class="profile_name">{{ Auth::user()->name }} <i class="feather ft-chevron-down ml-1" style="font-size: 0.8rem;"></i></span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right navbar-dropdown pt-2" aria-labelledby="profileDropdown" style="border-radius: 1rem; border: none; box-shadow: 0 10px 15px -3px rgba(0,0,0,0.1); margin-top: 10px;">
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <button type="submit" class="dropdown-item" style="padding: 0.75rem 1.5rem; font-weight: 600; color: #ef4444;">
                                        <i class="fas fa-power-off mr-3"></i> Logout
                                    </button>
                                </form>
                            </div>
                        </li>
                    </ul>

                    <button class="navbar-toggler align-self-center" type="button" data-toggle="minimize" style="color: #fff;">
                        <span class="feather ft-menu"></span>
                    </button>

                </div>
            </div>
        </div>
        <div class="nav-bottom" style="background: #ffffff; border-bottom: 1px solid #e2e8f0; padding: 0.5rem 0;">
            <div class="container" style="max-width: 1200px;">
                <ul class="nav page-navigation" style="justify-content: center; gap: 1.5rem; border: none;">
                    <li class="nav-item">
                        <a href="{{ url('/home') }}" class="nav-link" style="color: #475569; font-weight: 600; padding: 0.75rem 1rem; border-radius: 0.75rem; transition: all 0.2s; font-size: 0.95rem; display: flex; align-items: center;">
                            <i class="menu_icon fas fa-th-large mr-2" style="font-size: 0.9rem; color: #6366f1;"></i><span class="menu-title">Dashboard</span>
                        </a>
                    </li>

                    @can('hr.employees.view')
                    <li class="nav-item">
                        <a href="{{ route('hr.employees.index') }}" class="nav-link" style="color: #475569; font-weight: 600; padding: 0.75rem 1rem; border-radius: 0.75rem; transition: all 0.2s; font-size: 0.95rem; display: flex; align-items: center;">
                            <i class="fas fa-user-friends mr-2" style="font-size: 0.9rem; color: #6366f1;"></i><span class="menu-title">Employees</span>
                        </a>
                    </li>
                    @endcan

                    @can('hr.attendance.view')
                    <li class="nav-item">
                        <a href="{{ route('hr.attendance.index') }}" class="nav-link" style="color: #475569; font-weight: 600; padding: 0.75rem 1rem; border-radius: 0.75rem; transition: all 0.2s; font-size: 0.95rem; display: flex; align-items: center;">
                            <i class="fas fa-calendar-check mr-2" style="font-size: 0.9rem; color: #6366f1;"></i><span class="menu-title">Attendance</span>
                        </a>
                    </li>
                    @endcan

                    @can('hr.payroll.view')
                    <li class="nav-item">
                        <a href="{{ route('hr.payroll.index') }}" class="nav-link" style="color: #475569; font-weight: 600; padding: 0.75rem 1rem; border-radius: 0.75rem; transition: all 0.2s; font-size: 0.95rem; display: flex; align-items: center;">
                            <i class="fas fa-money-check-alt mr-2" style="font-size: 0.9rem; color: #6366f1;"></i><span class="menu-title">Payroll</span>
                        </a>
                    </li>
                    @endcan

                    @can('hr.leaves.view')
                    <li class="nav-item">
                        <a href="{{ route('hr.leaves.index') }}" class="nav-link" style="color: #475569; font-weight: 600; padding: 0.75rem 1rem; border-radius: 0.75rem; transition: all 0.2s; font-size: 0.95rem; display: flex; align-items: center;">
                            <i class="fas fa-calendar-minus mr-2" style="font-size: 0.9rem; color: #6366f1;"></i><span class="menu-title">Leaves</span>
                        </a>
                    </li>
                    @endcan

                    @can('hr.loans.view')
                    <li class="nav-item">
                        <a href="{{ route('hr.loans.index') }}" class="nav-link" style="color: #475569; font-weight: 600; padding: 0.75rem 1rem; border-radius: 0.75rem; transition: all 0.2s; font-size: 0.95rem; display: flex; align-items: center;">
                            <i class="fas fa-hand-holding-usd mr-2" style="font-size: 0.9rem; color: #6366f1;"></i><span class="menu-title">Loans</span>
                        </a>
                    </li>
                    @endcan

                    @can('hr.salary.structure.view')
                    <li class="nav-item">
                        <a href="{{ route('hr.salary-structure.index') }}" class="nav-link" style="color: #475569; font-weight: 600; padding: 0.75rem 1rem; border-radius: 0.75rem; transition: all 0.2s; font-size: 0.95rem; display: flex; align-items: center;">
                            <i class="fas fa-file-invoice-dollar mr-2" style="font-size: 0.9rem; color: #6366f1;"></i><span class="menu-title">Salaries</span>
                        </a>
                    </li>
                    @endcan

                    <li class="nav-item mega-menu">
                        <a href="#" class="nav-link" style="color: #475569; font-weight: 600; padding: 0.75rem 1rem; border-radius: 0.75rem; transition: all 0.2s; font-size: 0.95rem; display: flex; align-items: center;">
                            <i class="fas fa-cog mr-2" style="font-size: 0.9rem; color: #6366f1;"></i>
                            <span class="menu-title">Setup</span>
                            <i class="menu-arrow ml-1"></i>
                        </a>
                        <div class="submenu" style="border-radius: 1rem; border: none; box-shadow: 0 10px 15px -3px rgba(0,0,0,0.1); overflow: hidden;">
                            <ul class="submenu-item">
                                @can('hr.departments.view')
                                <li class="nav-item"><a class="nav-link" href="{{ route('hr.departments.index') }}"><i class="fas fa-sitemap mr-2"></i> <span class="menu-title">Departments</span></a></li>
                                @endcan
                                @can('hr.designations.view')
                                <li class="nav-item"><a class="nav-link" href="{{ route('hr.designations.index') }}"><i class="fas fa-user-tag mr-2"></i> <span class="menu-title">Designations</span></a></li>
                                @endcan
                                @can('hr.shifts.view')
                                <li class="nav-item"><a class="nav-link" href="{{ route('hr.shifts.index') }}"><i class="fas fa-clock mr-2"></i> <span class="menu-title">Shifts</span></a></li>
                                @endcan
                                @can('hr.holidays.view')
                                <li class="nav-item"><a class="nav-link" href="{{ route('hr.holidays.index') }}"><i class="fas fa-umbrella-beach mr-2"></i> <span class="menu-title">Holidays</span></a></li>
                                @endcan
                                @can('hr.biometric.devices.view')
                                <li class="nav-item"><a class="nav-link" href="{{ route('hr.biometric-devices.index') }}"><i class="fas fa-fingerprint mr-2"></i> <span class="menu-title">Biometric</span></a></li>
                                @endcan
                            </ul>
                        </div>
                    </li>



                </ul>
            </div>
        </div>
    </nav>
