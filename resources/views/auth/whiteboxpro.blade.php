<div id="lightbox" class="lightbox clearfix">
    <div id="overlay" class="overlay"></div>
    <div class="white_content">
        <a href="javascript:;" class="textright close-btn" id="close">
            <i class="fa-regular fa-circle-xmark"></i>
        </a>

        @if(Auth::check())
            <div class="profile-container">
                <!-- Profile Header -->
                <div class="profile-header">
                    <div class="profile-avatar">
                        <img src="{{ asset('img/profile.png') }}" alt="Profile" class="avatar-image">
                        <h3>{{ Auth::user()->name }}</h3>
                        <span class="role-badge">{{ Auth::user()->role }}</span>
                    </div>
                </div>

                <!-- Profile Info -->
                <div class="profile-info">
                    <h4>Personal Information</h4>
                    <div class="info-list">
                        <div class="info-row">
                            <span class="info-label">Full Name</span>
                            <div class="info-value">{{ Auth::user()->name }}</div>
                        </div>
                        <div class="info-row">
                            <span class="info-label">Email</span>
                            <div class="info-value">{{ Auth::user()->email }}</div>
                        </div>
                        <div class="info-row">
                            <span class="info-label">Phone</span>
                            <div class="info-value">{{ Auth::user()->phone ?: '------' }}</div>
                        </div>
                        <div class="info-row">
                            <span class="info-label">Address</span>
                            <div class="info-value">{{ Auth::user()->location ?: '------' }}</div>
                        </div>
                    </div>
                </div>

                <!-- Quick Actions -->
                <div class="quick-actions">
                    <h4>Quick Actions</h4>
                    <div class="action-buttons">
                        <a href="/booked-list" class="btn btn-light">Booked List</a>
                        @if(Auth::user()->role === 'admin')
                            <a href="{{ route('admin.accounts.index') }}" class="btn btn-primary">Admin Panel</a>
                        @endif
                        <a href="{{ route('profile.edit') }}" class="btn btn-secondary">Edit Profile</a>
                        <form action="{{ route('logout') }}" method="POST">
                            @csrf
                            <button type="submit" class="btn btn-danger">Logout</button>
                        </form>
                    </div>
                </div>
            </div>
        @else
            <div class="login-prompt">
                <img src="{{ asset('img/loggedin.png') }}" alt="Not Logged In">
                <h3>Welcome!</h3>
                <p>Please login to access your profile</p>
                <a href="{{ route('login') }}" class="btn btn-primary">Login</a>
            </div>
        @endif
    </div>
</div>

<style>
    /* Login Prompt Styling */
.login-prompt {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    padding: 20px;
    background-color: #ffffff; /* Darker background */
    color: #ffffff;
    border-radius: 10px;
    text-align: center;
    max-width: 400px;
    margin: auto;
}

.login-prompt h3 {
    font-size: 24px;
    margin-bottom: 10px;
}

.login-prompt p {
    font-size: 16px;
    margin-bottom: 20px;
    color: #bbb; /* Slightly lighter text color */
}

.login-prompt .btn-primary {
    background-color: #007bff;
    color: white;
    padding: 10px 20px;
    border-radius: 5px;
    font-weight: bold;
    text-decoration: none;
}

.login-prompt .btn-primary:hover {
    background-color: #0056b3; /* Darker on hover */
    transition: 0.3s;
}

.overlay {
    background-color: rgba(255, 255, 255, 0.8); /* Darker overlay */
}

</style>