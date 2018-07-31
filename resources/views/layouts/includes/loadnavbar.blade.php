<?php
/**
 * Created by PhpStorm.
 * User: vkalappagari
 * Date: 4/1/2018
 * Time: 4:59 PM
 */
?>
<div class="ui fixed top  menu no-border no-radius borderless navmenu">
    <a class="item active no-padding logo" style="width:250px;" href="dashboard.html">

        <img class="ui image logoImg" src="img/logo.png" />
    </a>
    <a class="item hamburger" data-name="show">
        <i class="align justify icon"></i>
    </a>
    <div class="right menu">
        <div class="ui right aligned category search item">
            <div class="ui transparent  icon input">
                <input class="prompt" type="text" placeholder="Search Courses...">
                <i class="search link icon"></i>
            </div>
            <div class="results"></div>
        </div>
        <div class="ui dropdown item labeled icon">
            <i class="bell icon"></i>
            <div class="ui red mini label circular">22</div>
            <div class="menu">
                <div class="header">
New Courses
</div>
                <div class="item">
                    <img class="ui avatar image" src="../img/avatar/people/Enid.png">
    Algorithms
</div>
                <div class="item">
                    <img class="ui avatar image" src="../img/avatar/people/Lorie.png">
    Teleconfernce
</div>
                <div class="item">
                    <img class="ui avatar image" src="../img/avatar/people/Rick.png">
    Army
</div>
                <div class="header">
Recent Achievements
                </div>
                <div class="item">
                    <img class="ui avatar image" src="../img/avatar/people/Meggie.png">
                    Pauline	Cain
                </div>
                <div class="item">
                    <img class="ui avatar image" src="../img/avatar/people/Glenn.png">
                    Marco Beck
                </div>
                <div class="item">
                    <img class="ui avatar image" src="../img/avatar/people/Daryl.png">
                    Sue Quinn
                </div>
            </div>
        </div>
        <div class="ui dropdown item">
            Language <i class="dropdown icon"></i>
            <div class="menu">
                <a class="item"><i class="united kingdom flag"></i>English</a>
                <a class="item"><i class="turkey flag"></i>Turkish</a>
                <a class="item"><i class="spain flag"></i>Spanish</a>
            </div>
        </div>
        <div class="ui dropdown item">
            <img class="ui mini circular image" src="img/avatar/people/Enid.png">
            <div class="menu">
                <a class="item" href="mail.html">Inbox</a>
                <a class="item" href="profile.html">Profile</a>
                <a class="item" href="settings">Settings</a>
                <div class="ui divider"></div>
                <a class="item">Need Help?</a>
                <a class="item" href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </div>
        </div>
    </div>
</div>