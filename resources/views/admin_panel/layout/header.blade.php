<style>
    .nav-item.mega-menu {
        position: relative;
    }
    .nav-item.mega-menu:hover .submenu {
        display: block !important;
        opacity: 1 !important;
        visibility: visible !important;
        margin-top: 0 !important;
    }
    .submenu {
        top: 100% !important;
        left: 0 !important;
        z-index: 1000 !important;
    }
    /* Bridge the gap so the menu doesn't disappear when moving the mouse */
    .submenu::before {
        content: "";
        position: absolute;
        top: -15px;
        left: 0;
        width: 100%;
        height: 15px;
        background: transparent;
    }
</style>
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
            <div class="container-fluid" style="padding: 0 1rem;">
                <ul class="nav page-navigation" style="justify-content: center; gap: 0.75rem; border: none; flex-wrap: nowrap;">
                    <li class="nav-item">
                        <a href="{{ url('/home') }}" class="nav-link" style="color: #475569; font-weight: 700; padding: 0.75rem 1.25rem; border-radius: 0.75rem; transition: all 0.2s; font-size: 1.05rem; display: flex; align-items: center; white-space: nowrap;">
                            <span>Dashboard</span>
                        </a>
                    </li>

                    @can('hr.employees.view')
                    <li class="nav-item">
                        <a href="{{ route('hr.employees.index') }}" class="nav-link" style="color: #475569; font-weight: 700; padding: 0.75rem 1.25rem; border-radius: 0.75rem; transition: all 0.2s; font-size: 1.05rem; display: flex; align-items: center; white-space: nowrap;">
                            <span>Employees</span>
                        </a>
                    </li>
                    @endcan

                    @can('hr.attendance.view')
                    <li class="nav-item">
                        <a href="{{ route('hr.attendance.index') }}" class="nav-link" style="color: #475569; font-weight: 700; padding: 0.75rem 1.25rem; border-radius: 0.75rem; transition: all 0.2s; font-size: 1.05rem; display: flex; align-items: center; white-space: nowrap;">
                            <span>Attendance</span>
                        </a>
                    </li>
                    @endcan

                    @can('hr.payroll.view')
                    <li class="nav-item">
                        <a href="{{ route('hr.payroll.index') }}" class="nav-link" style="color: #475569; font-weight: 700; padding: 0.75rem 1.25rem; border-radius: 0.75rem; transition: all 0.2s; font-size: 1.05rem; display: flex; align-items: center; white-space: nowrap;">
                            <span>Payroll</span>
                        </a>
                    </li>
                    @endcan

                    @can('hr.leaves.view')
                    <li class="nav-item">
                        <a href="{{ route('hr.leaves.index') }}" class="nav-link" style="color: #475569; font-weight: 700; padding: 0.75rem 1.25rem; border-radius: 0.75rem; transition: all 0.2s; font-size: 1.05rem; display: flex; align-items: center; white-space: nowrap;">
                            <span>Leaves</span>
                        </a>
                    </li>
                    @endcan

                    @can('hr.loans.view')
                    <li class="nav-item">
                        <a href="{{ route('hr.loans.index') }}" class="nav-link" style="color: #475569; font-weight: 700; padding: 0.75rem 1.25rem; border-radius: 0.75rem; transition: all 0.2s; font-size: 1.05rem; display: flex; align-items: center; white-space: nowrap;">
                            <span>Loans</span>
                        </a>
                    </li>
                    @endcan

                    @can('hr.salary.structure.view')
                    <li class="nav-item">
                        <a href="{{ route('hr.salary-structure.index') }}" class="nav-link" style="color: #475569; font-weight: 700; padding: 0.75rem 1.25rem; border-radius: 0.75rem; transition: all 0.2s; font-size: 1.05rem; display: flex; align-items: center; white-space: nowrap;">
                            <span>Salaries</span>
                        </a>
                    </li>
                    @endcan

                    <li class="nav-item mega-menu">
                        <a href="#" class="nav-link" style="color: #475569; font-weight: 700; padding: 0.75rem 1.25rem; border-radius: 0.75rem; transition: all 0.2s; font-size: 1.05rem; display: flex; align-items: center; white-space: nowrap;">
                            <span>Setup</span>
                            <i class="menu-arrow ml-1"></i>
                        </a>
                        <div class="submenu" style="border-radius: 1rem; border: none; box-shadow: 0 10px 15px -3px rgba(0,0,0,0.1); overflow: hidden; min-width: 200px; width: max-content;">
                            <ul class="submenu-item">
                                @can('hr.departments.view')
                                <li class="nav-item"><a class="nav-link" href="{{ route('hr.departments.index') }}" style="display: flex; align-items: center; padding: 0.75rem 1.5rem; color: #475569; white-space: nowrap;"><span style="display: inline-block; font-weight: 700; font-size: 0.95rem;">Departments</span></a></li>
                                @endcan
                                @can('hr.designations.view')
                                <li class="nav-item"><a class="nav-link" href="{{ route('hr.designations.index') }}" style="display: flex; align-items: center; padding: 0.75rem 1.5rem; color: #475569; white-space: nowrap;"><span style="display: inline-block; font-weight: 700; font-size: 0.95rem;">Designations</span></a></li>
                                @endcan
                                @can('hr.shifts.view')
                                <li class="nav-item"><a class="nav-link" href="{{ route('hr.shifts.index') }}" style="display: flex; align-items: center; padding: 0.75rem 1.5rem; color: #475569; white-space: nowrap;"><span style="display: inline-block; font-weight: 700; font-size: 0.95rem;">Shifts</span></a></li>
                                @endcan
                                @can('hr.holidays.view')
                                <li class="nav-item"><a class="nav-link" href="{{ route('hr.holidays.index') }}" style="display: flex; align-items: center; padding: 0.75rem 1.5rem; color: #475569; white-space: nowrap;"><span style="display: inline-block; font-weight: 700; font-size: 0.95rem;">Holidays</span></a></li>
                                @endcan
                                @can('hr.biometric.devices.view')
                                <li class="nav-item"><a class="nav-link" href="{{ route('hr.biometric-devices.index') }}" style="display: flex; align-items: center; padding: 0.75rem 1.5rem; color: #475569; white-space: nowrap;"><span style="display: inline-block; font-weight: 700; font-size: 0.95rem;">Biometric Devices</span></a></li>
                                @endcan
                            </ul>
                        </div>
                    </li>



                </ul>
            </div>
        </div>
    </nav>
