<?php
/**
 * Created by PhpStorm.
 * User: Rob
 * Date: 12/27/2014
 * Time: 4:45 PM
 * Desc: Site Navigation
 */
?>

<!-- Navigation -->
<nav class="navbar navbar-default" role="navigation">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <!-- navbar-brand is hidden on larger screens, but visible when the menu is collapsed -->
            <a class="navbar-brand" href="?p=home">Alabama Section</a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li>
                    <a href="?p=home">Home</a>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">About<b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li class="dropdown-header">About Us</li>
                        <li><a href="?p=about">Committee Information</a></li>
                        <li class="dropdown-header">Calendar | Meeting Minutes</li>
                        <li><a href="?p=calendar">Calendar</a></li>
                        <li><a href="?p=meetingMinutes">Meeting Minutes</a></li>
                        <li class="dropdown-header">Other</li>
                        <li><a href="?p=sponsorship">Sponsors</a></li>
                        <li><a href="?p=links">Links</a></li>
                    </ul>
                </li>
                <li>
                    <a href="?p=membership">Membership</a>
                </li>
                <li>
                    <a href="?p=sponsorship">Sponsorship</a>
                </li>
                <li>
                    <a href="?p=contact">Contact</a>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>