<template>
    <div>
        <h3 class="text-center">All rooms</h3><br/>

        <table class="table table-bordered">
            <thead>
            <tr>
                
                <th>Name</th>
                <th>Booking Date</th>
                <th>CheckOut Date</th>
                <th>NID</th>
                <th>Mobile</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            <tr v-for="room in rooms" :key="room.id">                
                <td>{{ room.name }}</td>
                <td>{{ room.booking_date }}</td>
                <td>{{ room.checkout_date }}</td>
                <td>{{ room.nid }}</td>
                <td>{{ room.mobile }}</td>
                <td>
                    <div class="btn-group" role="group">
                        <router-link :to="{params: { id: room.id },name: 'edit'}" class="btn btn-primary">Edit
                        </router-link>
                        <button class="btn btn-danger" @click="deleteroom(room.id)">Delete</button>
                    </div>
                </td>
            </tr>
            </tbody>
        </table>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                rooms: []
            }
        },
        created() {
            this.axios
                .get('http://localhost:8000/api/rooms')
                .then(response => {
                    this.rooms = response.data;
                });
        },
        methods: {
            deleteroom(id) {
                this.axios
                    .delete(`http://localhost/api/rooms/${id}`)
                    .then(response => {
                        let i = this.rooms.map(item => item.id).indexOf(id); // find index of your object
                        this.rooms.splice(i, 1)
                    });
            }
        }
    }
</script>