<?php
$today = date("l");
if ($today == "Monday") {
    $yesterday = date("l", strtotime("-1 days"));
    $tomorrow = date("l", strtotime("+1 days"));
    
    echo "<div class='calendar'>
            <h2>Calendar</h2>
            <div class='days'>
                <div class='day'>
                    <h3>$yesterday</h3>
                    <div class='events'>
                        <div class='event'>
                            <h4>Event 1</h4>
                            <p>Event 1 Description</p>
                        </div>
                        <div class='event'>
                            <h4>Event 2</h4>
                            <p>Event 2 Description</p>
                        </div>
                    </div>
                </div>
                <div class='day'>
                    <h3>$today</h3>
                    <div class='events'>
                        <div class='event'>
                            <h4>Event 1</h4>
                            <p>Event 1 Description</p>
                        </div>
                        <div class='event'>
                            <h4>Event 2</h4>
                            <p>Event 2 Description</p>
                        </div>
                    </div>
                </div>
                <div class='day'>
                    <h3>$tomorrow</h3>
                    <div class='events'>
                        <div class='event'>
                            <h4>Event 1</h4>
                            <p>Event 1 Description</p>
                        </div>
                        <div class='event'>
                            <h4>Event 2</h4>
                            <p>Event 2 Description</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>";
} 
?>
<style>
    .calendar {
        width: 100%;
        height: 100%;
        background-color: #fff;
        border-radius: 10px;
        padding: 10px;
        box-sizing: border-box;
    }
    .calendar h2 {
        font-size: 1.5em;
        font-weight: 400;
        margin: 0;
        padding: 0;
    }
    .calendar .days {
        display: flex;
        flex-direction: row;
        justify-content: space-between;
        align-items: center;
        margin-top: 10px;
    }
    .calendar .day {
        width: 30%;
        height: 100%;
        background-color: #fff;
        border-radius: 10px;
        padding: 10px;
        box-sizing: border-box;
    }
    .calendar .day h3 {
        font-size: 1.2em;
        font-weight: 400;
        margin: 0;
        padding: 0;
    }
    .calendar .day .events {
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        align-items: center;
        margin-top: 10px;
    }
    .calendar .day .event {
        width: 100%;
        height: 100%;
        background-color: #fff;
        border-radius: 10px;
        padding: 10px;
        box-sizing: border-box;
    }
    .calendar .day .event h4 {
        font-size: 1em;
        font-weight: 400;
        margin: 0;
        padding: 0;
    }
    .calendar .day .event p {
        font-size: 0.8em;
        font-weight: 400;
        margin: 0;
        padding: 0;
    }
</style>