<template>
    <div class="container">
        <div class="text-center" style="margin: 20px 0px 20px 0px; text-shadow: 1px 2px 4px black">
            <h1 class="text-secondary"> Room Booking API </h1>
        </div>

        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="collapse navbar-collapse">
                <div class="navbar-nav">                    
                    <router-link to="/booking" class="nav-item nav-link">Book Room</router-link>
                </div>
            </div>
        </nav>
        <br/>
        <router-view></router-view>
    </div>
</template>

<script>
    export default {}
</script>