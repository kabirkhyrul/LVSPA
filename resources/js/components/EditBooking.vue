<template>
    <div>
        <h3 class="text-center">Edit Booking</h3>
        <div class="row">
            <div class="col-md-6">
                <form @submit.prevent="updateBooking">
                              
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
                    <button type="submit" class="btn btn-primary">Update Booking</button>
                </form>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                book: {}
            }
        },
        created() {
            this.axios
                .get(`http://localhost/LVSPA/api/books/${this.$route.params.id}/edit`)
                .then((response) => {
                    this.book = response.data;
                    // console.log(response.data);
                });
        },
        methods: {
            updateBooking() {
                this.axios
                    .post(`http://localhost/LVSPA/api/books/${this.$route.params.id}`, this.book)
                    .then((response) => {
                        this.$router.push({name: 'home'});
                    });
            }
        }
    }
</script>