<template>
    <nav class="navbar-default navbar-static-side" role="navigation">
        <div class="sidebar-collapse">
            <ul class="nav metismenu" id="side-menu">
                <li class="nav-header">
                    <div class="dropdown profile-element">
                        <span><img alt="image" class="img-circle" src="img/profile_small.jpg"></span>
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="clear">
                                <span class="block m-t-xs">
                                    <strong class="font-bold">David Williams</strong>
                                </span>
                                <span class="text-muted text-xs block">
                                    Art Director
                                    <b class="caret"/>
                                </span>
                            </span>
                        </a>
                        <ul class="dropdown-menu animated fadeInRight m-t-xs">
                            <li><a href="#"><i class="fa fa-user"/> Profile</a></li>
                            <li class="divider"></li>
                            <li>
                                <a href="/logout">
                                    <i class="fa fa-sign-out"/> Log out
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="active">
                    <a href="#"><i class="fa fa-dashboard"/><span class="nav-label">Dashboards</span></a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-gears"/><span class="nav-label">Settings</span></a>
                </li>
            </ul>
        </div>
    </nav>
</template>

<script>
"use strict";

export default {
    name: 'TheMenu',
}
</script>
