<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    <link href="../CSS/Homepage.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
</head>
<body>
    <aside>
        <img src="../Images/Logo.jpg" alt="Logo">
        <ul>
            <li>Main Menu</li>
            <li class="active-page"><span class="material-symbols-outlined">dashboard</span><a href="#"><b>Dashboard</b></a></li>
            <li><span class="material-symbols-outlined">group</span><a href="#">Hub</a></li>
            <li><span class="material-symbols-outlined">meeting_room</span><a href="#">Department</a></li>
            <li><span class="material-symbols-outlined">library_books</span><a href="#">Training and Learning</a></li>
            <li><span class="material-symbols-outlined">event</span><a href="#">Calendar and Planning</a></li>
        </ul>
        <ul>
            <li>Other</li>
            <li><span class="material-symbols-outlined">settings</span><a href="#">Settings</a></li>
            <li><span class="material-symbols-outlined">support_agent</span><a href="#">Support</a></li>
        </ul>
    </aside>
    <section id="header">
        <div class="search">
            <input type="text" placeholder="Search">
        </div>
        <div class="user">
            <span class="material-symbols-outlined" id="notifications">notifications</span>
            <img src="../Images/" alt="profile">
            <h1>Username<span class="material-symbols-outlined">expand_more</span></h1>
        </div>
    </section>
    <section id="main">
        <div class="left">
            <h1>Good Morning, Username</h1>
            <div class="goal-tracker">
                <h2>Goal Tracker</h2>
                <div class="goals">

                </div>
                <button>Full Report</button>
            </div>
            <div class="announcements">
                <h2>Announcements</h2>
                <div class="news">
                    
                </div>
                <button>See All Announcements</button>
            </div>
        </div>
        <div class="right">
            <div class="container">
                <div class="card1"></div>
                <div class="card2"></div>
            </div>
            <div class="calendar">
                <h2>Calendar</h2>
        </div>
    </section>
    <section id="footer"></section>
</body>
</html>