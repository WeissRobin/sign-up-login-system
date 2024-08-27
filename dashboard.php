<?php
    require_once './includes/config.session.inc.php';
    require_once './views/dashboard_view.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/dashboard.css">
    <script src="https://kit.fontawesome.com/7290e96d25.js" crossorigin="anonymous"></script>
    <script src="./node_modules/chart.js/dist/chart.umd.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels@2"></script>
    <title>Admin Dashboard</title>
</head>
<body>
    <main class='content'>
    <div class='navigation-wrapper'>
        <nav class='navigation'>
            <h2>He.</h2>
            <ul class='navigation__list'>
                <li class='navigation__icon'><i class="fa-solid fa-house"></i></li>
                <li class='navigation__icon'><i class="fa-solid fa-user"></i></li>
                <li class='navigation__icon'><i class="fa-solid fa-gear"></i></li>
                <li class='navigation__icon'><i class="fa-solid fa-envelope"></i></li>
                <li class='navigation__icon'><i class="fa-solid fa-chart-simple"></i></li>
                <li class='navigation__icon'></li><a class='navigation__icon' href="./includes/logout.inc.php"><i class="fa-solid fa-right-from-bracket"></i></a>
            </ul>
        </nav>
    </div>
    <div class='dashboard-wrapper'> 
        <div class='user-menu'>
            <div class='user-menu__item'>
                <div class='user-menu__search'>
                    <i class="fa-solid fa-magnifying-glass"></i>
                    <input type="text">
                </div>
                <div class='user-menu__notification'>
                    <i class="fa-regular fa-bell"></i>
                </div>
                <div class='user-menu__profile'>
                    <img src="./assets/avatar.webp" alt="Avatar">
                    <i class="fa-solid fa-chevron-down"></i>
                </div>
            </div>
            <div class='user-menu__item'>
                <div class='clients-stats'>
                    <div class='stats'>
                        <p class='number'>25</p>
                        <p class='client-text'>Clients Completed</p>
                    </div>
                    <div class='stats'>
                        <p class='number'>6</p>
                        <p class='client-text'>Clients <br>Waiting</p>
                    </div>
                </div>
            </div>
        </div>
        <div class='welcome-banner'>
            <div class='welcome-banner__text'>
                <p class='name'><?php is_user_logged(); ?></p>
                <p class='welcome-message'>Nice to see you again!</p>
            </div>
            <div class='welcome-banner__imgWrapper'>
                <img src="./assets/welcome-avatar.webp" alt="welcome-avatar">
            </div>
        </div>
        <div class='chart-wrapper'>
            <div class='chart-stats'>
                <h2 class='section-heading'>Products sold</h2>
                <div class='filter'>
                    <span>Months</span>
                    <i class="fa-solid fa-chevron-down"></i>
                </div>
            </div>
            <div class='chart'>
                <canvas id='sell-chart'></canvas>
            </div>
        </div>
        <div class="clients">
            <h2 class="section-heading">Clients</h2>
            <div class="clients-table">
                <table class='clients__list'>
                    <tr class='clients-heading'>
                        <th></th>
                        <th>Name</th>
                        <th>Company</th>
                        <th>Status</th>
                        <th>Next meeting</th>
                        <th>Payment Due Date</th>
                        <th></th>
                    </tr>
                    <tr class='client-item'>
                        <td><img class="client-item__image" src="./assets/avatar-1.jpg" alt=""></td>
                        <td class='client-item__name'>Adam Smith</td>
                        <td class='client-item__company'>Crown & Crest Technologies</td>
                        <td class='client-item__contract'>Contract</td>
                        <td class='client-item__meeting'>15/3/2024</td>
                        <td class='client-item__payment'>25/3/2024</td>
                        <td class='client-item__email'><button>E-mail</button></td>
                    </tr>
                    <tr class='client-item'>
                        <td><img class="client-item__image" src="./assets/avatar-2.jpg" alt=""></td>
                        <td class='client-item__name'>Daniel Brown</td>
                        <td class='client-item__company'>Sovereign Solutions Ltd.</td>
                        <td class='client-item__contract'>In discussion</td>
                        <td class='client-item__meeting'>12/6/2024</td>
                        <td class='client-item__payment'>13/6/2024</td>
                        <td class='client-item__email'><button>E-mail</button></td>
                    </tr>
                    <tr class='client-item'>
                        <td><img class="client-item__image" src="./assets/avatar-3.jpg" alt=""></td>
                        <td class='client-item__name'>Thomas Miller</td>
                        <td class='client-item__company'>Eaglewood Enterprises</td>
                        <td class='client-item__contract'>Contract</td>
                        <td class='client-item__meeting'>4/1/2025</td>
                        <td class='client-item__payment'>10/1/2025</td>
                        <td class='client-item__email'><button>E-mail</button></td>
                    </tr>
                    <tr class='client-item'>
                        <td><img class="client-item__image" src="./assets/avatar-4.jpg" alt=""></td>
                        <td class='client-item__name'>Emma Johnson</td>
                        <td class='client-item__company'>Harbourstone Innovations</td>
                        <td class='client-item__contract'>Ended</td>
                        <td class='client-item__meeting'>None</td>
                        <td class='client-item__payment'>None</td>
                        <td class='client-item__email'><button>E-mail</button></td>
                    </tr>
                    <tr class='client-item'>
                        <td><img class="client-item__image" src="./assets/avatar-5.jpg" alt=""></td>
                        <td class='client-item__name'>Sarah Williams</td>
                        <td class='client-item__company'>Windsor & Blake Industries</td>
                        <td class='client-item__contract'>Contract</td>
                        <td class='client-item__meeting'>7/10/2025</td>
                        <td class='client-item__payment'>7/9/2025</td>
                        <td class='client-item__email'><button>E-mail</button></td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
    </main>
</body>
<script src="./js/dashboard.js"></script>
</html>