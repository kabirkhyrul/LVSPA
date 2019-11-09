<template>
    <div>
        <h3 class="text-center">Book room</h3>
        <div class="row">
            <div class="col-md-6">
                <form @submit.prevent="bookroom">
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" class="form-control" v-model="room.name">
                    </div>
                    <div class="form-group">
                        <label>Booking Date</label>
                        <input type="date" class="form-control" v-model="room.booking_date">
                    </div>
                    <div class="form-group">
                        <label>CheckOut Date</label>
                        <input type="date" class="form-control" v-model="room.checkout_date">
                    </div>
                    <div class="form-group">
                        <label>National ID Number</label>
                        <input type="integer" class="form-control" v-model="room.nid">
                    </div>
                    <div class="form-group">
                        <label>Mobile</label>
                        <input type="integer" class="form-control" v-model="room.mobile">
                    </div>
                    <button type="submit" class="btn btn-primary">book room</button>
                </form>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                room: {}
            }
        },
        methods: {
            bookroom() {

                this.axios
                    .post('http://localhost/api/rooms', this.room)
                    .then(response => (
                        this.$router.push({name: 'home'})
                        // console.log(response.data)
                    ))
                    .catch(error => console.log(error))
                    .finally(() => this.loading = false)
            }
        }
    }
</script>