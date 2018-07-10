<template>
    <div class="row border-bottom">
        <nav class="navbar navbar-static-top" role="navigation">
            <div class="navbar-header">
                <a class="navbar-minimalize minimalize-styl-2 btn btn-primary" href="#"><i class="fa fa-bars"/></a>
            </div>
            <ul class="nav navbar-top-links navbar-right">
                <li>
                    <span class="m-r-sm text-muted welcome-message">Welcome to HRMS</span>
                </li>
                <li>
                    <a href="/logout">
                        <i class="fa fa-sign-out"/> Log out
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</template>

<script>
"use strict";

export default {
    name: 'TheFooter',
}
</script>
