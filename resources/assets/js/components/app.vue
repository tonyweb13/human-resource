<template>
    <div id="wrapper">
        <the-menu/>
        <div id="page-wrapper" class="gray-bg" >
            <the-header/>
            <div class="row wrapper border-bottom white-bg page-heading p-m">
                <the-breadcrumb/>
            </div>
            <div class="wrapper wrapper-content animated fadeIn">
                <the-body/>
                <!-- <router-view/> -->
            </div>
            <the-footer/>
        </div>
    </div>
</template>

<script>
"use strict";

import TheHeader from '@/layout/TheHeader'
import TheBreadcrumb from '@/layout/TheBreadcrumb'
import TheMenu from '@/layout/TheMenu'
import TheBody from '@/layout/TheBody'
import TheFooter from '@/layout/TheFooter'

export default {
    name: 'app',
    components: { TheHeader, TheBreadcrumb, TheMenu, TheBody, TheFooter },
}
</script>
