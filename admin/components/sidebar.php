<div class="sidebar">
    <div class="sidebar-header">
        <div class="app-icon">
            <h2>Watchflix</h2>
        </div>
    </div>
    <ul class="sidebar-list">
        <li class="sidebar-list-item home-item">
            <a href="index.php">
                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="feather feather-home">
                    <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z" />
                    <polyline points="9 22 9 12 15 12 15 22" />
                </svg>
                <span>Home</span>
            </a>
        </li>
        <li class="sidebar-list-item movie-item">
            <a href="movie.php">
                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="feather feather-shopping-bag">
                    <path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z" />
                    <line x1="3" y1="6" x2="21" y2="6" />
                    <path d="M16 10a4 4 0 0 1-8 0" />
                </svg>
                <span>Movies</span>
            </a>
        </li>
        <li class="sidebar-list-item series-item">
            <a href="series.php">
                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="feather feather-pie-chart">
                    <path d="M21.21 15.89A10 10 0 1 1 8 2.83" />
                    <path d="M22 12A10 10 0 0 0 12 2v10z" />
                </svg>
                <span>Series</span>
            </a>
        </li>
        <li class="sidebar-list-item users-item">
            <a href="#">
                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="feather feather-inbox">
                    <polyline points="22 12 16 12 14 15 10 15 8 12 2 12" />
                    <path
                        d="M5.45 5.11L2 12v6a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2v-6l-3.45-6.89A2 2 0 0 0 16.76 4H7.24a2 2 0 0 0-1.79 1.11z" />
                </svg>
                <span>Users</span>
            </a>
        </li>
        <li class="sidebar-list-item notifications-item">
            <a href="#">
                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="feather feather-bell">
                    <path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9" />
                    <path d="M13.73 21a2 2 0 0 1-3.46 0" />
                </svg>
                <span>Notifications</span>
            </a>
        </li>
    </ul>
    <div class="account-info">
        <div class="account-info-picture">
            <img src="https://images.unsplash.com/photo-1527736947477-2790e28f3443?ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTE2fHx3b21hbnxlbnwwfHwwfHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=900&q=60"
                alt="Account">
        </div>
        <div class="account-info-name">Trix Visuals</div>
        <button class="account-info-more">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                class="feather feather-more-horizontal">
                <circle cx="12" cy="12" r="1" />
                <circle cx="19" cy="12" r="1" />
                <circle cx="5" cy="12" r="1" />
            </svg>
        </button>
    </div>
</div>
<script>
    const extractPath = () => {
        const parts = window.location.href.split("/watchflix-v2/admin/");
        const currentURL = parts[1];

        const homeLink = document.querySelector(".home-item");
        const movieLink = document.querySelector(".movie-item");
        const seriesLink = document.querySelector(".series-item");
        const usersLink = document.querySelector(".users-item");
        const notificationLink = document.querySelector(".notification-item");

        homeLink.classList.toggle("active", currentURL === "index.php");
        movieLink.classList.toggle("active", currentURL === "movie.php");
        seriesLink.classList.toggle("active", currentURL === "series.php");
        usersLink.classList.toggle("active", currentURL === "users.php");
        notificationLink.classList.toggle("active", currentURL === "notification.php");
    };

    extractPath();
</script>