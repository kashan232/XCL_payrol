@extends('admin_panel.layout.app')

@section('content')
<style>
    /* Google Font - Modern & Clean */
    @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&family=Outfit:wght@500;600;700;800&display=swap');

    .dashboard-container {
        font-family: 'Inter', sans-serif;
        padding: 2rem;
        background: #f8fafc;
        min-height: 100vh;
    }

    .welcome-section {
        margin-bottom: 2.5rem;
        animation: fadeInUp 0.6s ease-out;
    }

    .welcome-text h1 {
        font-family: 'Outfit', sans-serif;
        font-size: 2.25rem;
        font-weight: 800;
        color: #0f172a;
        margin-bottom: 0.5rem;
        letter-spacing: -0.025em;
    }

    .welcome-text p {
        color: #64748b;
        font-size: 1.1rem;
    }

    /* Stats Grid */
    .stats-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
        gap: 1.5rem;
        margin-bottom: 3rem;
    }

    .stat-card {
        background: #ffffff;
        padding: 1.75rem;
        border-radius: 1.5rem;
        border: 1px solid #e2e8f0;
        box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.05), 0 2px 4px -1px rgba(0, 0, 0, 0.03);
        transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        position: relative;
        overflow: hidden;
    }

    .stat-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
        border-color: #6366f1;
    }

    .stat-card::before {
        content: '';
        position: absolute;
        top: 0;
        right: 0;
        width: 100px;
        height: 100px;
        background: linear-gradient(135deg, rgba(99, 102, 241, 0.05) 0%, transparent 100%);
        border-radius: 0 0 0 100%;
    }

    .stat-icon {
        width: 56px;
        height: 56px;
        border-radius: 1rem;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1.5rem;
        margin-bottom: 1.5rem;
        transition: transform 0.3s ease;
    }

    .stat-card:hover .stat-icon {
        transform: scale(1.1) rotate(5deg);
    }

    .stat-info h3 {
        font-size: 0.875rem;
        font-weight: 600;
        color: #64748b;
        text-transform: uppercase;
        letter-spacing: 0.05em;
        margin-bottom: 0.5rem;
    }

    .stat-value {
        font-family: 'Outfit', sans-serif;
        font-size: 1.875rem;
        font-weight: 800;
        color: #0f172a;
        display: flex;
        align-items: baseline;
        gap: 0.5rem;
    }

    .stat-change {
        font-size: 0.875rem;
        font-weight: 600;
        padding: 0.25rem 0.75rem;
        border-radius: 2rem;
    }

    .change-up { background: #dcfce7; color: #166534; }
    .change-down { background: #fee2e2; color: #991b1b; }

    /* Custom Colors for Icons */
    .icon-employees { background: #e0e7ff; color: #4338ca; }
    .icon-payroll { background: #dcfce7; color: #15803d; }
    .icon-leaves { background: #fef9c3; color: #a16207; }
    .icon-performance { background: #fae8ff; color: #a21caf; }

    @keyframes fadeInUp {
        from { opacity: 0; transform: translateY(20px); }
        to { opacity: 1; transform: translateY(0); }
    }

    /* Quick Actions */
    .quick-actions {
        background: #ffffff;
        padding: 2rem;
        border-radius: 1.5rem;
        border: 1px solid #e2e8f0;
        box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.05);
    }

    .quick-actions h2 {
        font-family: 'Outfit', sans-serif;
        font-size: 1.5rem;
        font-weight: 700;
        color: #0f172a;
        margin-bottom: 1.5rem;
    }

    .action-buttons {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
        gap: 1rem;
    }

    .btn-action {
        display: flex;
        align-items: center;
        gap: 0.75rem;
        padding: 1rem 1.5rem;
        background: #f1f5f9;
        border-radius: 1rem;
        color: #334155;
        text-decoration: none;
        font-weight: 600;
        transition: all 0.2s ease;
        border: 1px solid transparent;
    }

    .btn-action:hover {
        background: #fff;
        border-color: #6366f1;
        color: #6366f1;
        transform: translateX(5px);
    }

    .btn-action i {
        font-size: 1.25rem;
    }
</style>

<div class="dashboard-container">
    <!-- Welcome Header -->
    <div class="welcome-section">
        <div class="welcome-text">
            <h1>Welcome back, {{ Auth::user()->name }}!</h1>
            <p>Here's what's happening with XCL Technologies Payroll System today.</p>
        </div>
    </div>

    <!-- Stats Overview -->
    <div class="stats-grid">
        <div class="stat-card">
            <div class="stat-icon icon-employees">
                <i class="fas fa-users"></i>
            </div>
            <div class="stat-info">
                <h3>Total Employees</h3>
                <div class="stat-value">
                    124
                    <span class="stat-change change-up">+4.5%</span>
                </div>
            </div>
        </div>

        <div class="stat-card">
            <div class="stat-icon icon-payroll">
                <i class="fas fa-money-check-alt"></i>
            </div>
            <div class="stat-info">
                <h3>Monthly Payroll</h3>
                <div class="stat-value">
                    Rs. 2.4M
                    <span class="stat-change change-up">+2.1%</span>
                </div>
            </div>
        </div>

        <div class="stat-card">
            <div class="stat-icon icon-leaves">
                <i class="fas fa-calendar-minus"></i>
            </div>
            <div class="stat-info">
                <h3>Pending Leaves</h3>
                <div class="stat-value">
                    12
                    <span class="stat-change change-down">-15%</span>
                </div>
            </div>
        </div>

        <div class="stat-card">
            <div class="stat-icon icon-performance">
                <i class="fas fa-chart-line"></i>
            </div>
            <div class="stat-info">
                <h3>Efficiency Rate</h3>
                <div class="stat-value">
                    94%
                    <span class="stat-change change-up">+5%</span>
                </div>
            </div>
        </div>
    </div>

    <!-- Quick Actions -->
    <div class="quick-actions">
        <h2>Quick Management</h2>
        <div class="action-buttons">
            <a href="{{ route('hr.employees.index') }}" class="btn-action">
                <i class="fas fa-user-plus"></i> Manage Employees
            </a>
            <a href="{{ route('hr.payroll.index') }}" class="btn-action">
                <i class="fas fa-file-invoice-dollar"></i> Process Payroll
            </a>
            <a href="{{ route('hr.attendance.index') }}" class="btn-action">
                <i class="fas fa-clock"></i> View Attendance
            </a>
            <a href="{{ route('System.Reports') }}" class="btn-action">
                <i class="fas fa-file-alt"></i> System Reports
            </a>
        </div>
    </div>
</div>
@endsection
