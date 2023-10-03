<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin | Movies</title>
    <link rel="stylesheet" href="./assets/css/global.css">
    <link rel="stylesheet" href="./assets/css/style.css">
    <script src="./assets/js/script.js" defer></script>
    <?php
    include '../includes/js-libraries.php';
    ?>
</head>

<body>
    <div class="app-container">
        <?php
        include './components/sidebar.php'
            ?>
        <div class="app-content">
            <div class="app-content-header">
                <h1 class="app-content-headerText">Movies</h1>
                <button class="app-content-headerButton">Add Movie</button>
            </div>
            <div class="app-content-actions">
                <input class="search-bar" placeholder="Search..." type="text">
                <div class="app-content-actions-wrapper">
                    <button class="action-button list active" title="List View">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="feather feather-list">
                            <line x1="8" y1="6" x2="21" y2="6" />
                            <line x1="8" y1="12" x2="21" y2="12" />
                            <line x1="8" y1="18" x2="21" y2="18" />
                            <line x1="3" y1="6" x2="3.01" y2="6" />
                            <line x1="3" y1="12" x2="3.01" y2="12" />
                            <line x1="3" y1="18" x2="3.01" y2="18" />
                        </svg>
                    </button>
                    <button class="action-button grid" title="Grid View">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="feather feather-grid">
                            <rect x="3" y="3" width="7" height="7" />
                            <rect x="14" y="3" width="7" height="7" />
                            <rect x="14" y="14" width="7" height="7" />
                            <rect x="3" y="14" width="7" height="7" />
                        </svg>
                    </button>
                </div>
            </div>
            <div class="products-area-wrapper tableView">
                <div class="products-header">
                    <div class="product-cell">ID</div>
                    <div class="product-cell">Video ID</div>
                    <div class="product-cell">Video Poster</div>
                    <div class="product-cell ">Status</div>
                    <div class="product-cell ">Operation</div>

                </div>
                <div class="products-row">
                    <div class="product-cell">
                        <span>1</span>
                    </div>
                    <div class="product-cell">602249</div>
                    <div class="product-cell">
                        <span class="product-cell"> <img
                                src="https://images.unsplash.com/photo-1555041469-a586c61ea9bc?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1950&q=80"
                                alt="product"></span>
                    </div>
                    <div class="product-cell sales"><span class="status active">Sales:</span></div>
                    <div class="product-cell stock">36</div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>