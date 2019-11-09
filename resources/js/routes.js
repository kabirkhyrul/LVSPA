import AllBooks from './components/AllRooms.vue';
import AddBook from './components/BookRoom.vue';
import EditBook from './components/EditBooking.vue';

export const routes = [
    {
        name: 'home',
        path: 'http://localhost/LVSPA/',
        component: AllBooks,
        children: [{
        name: 'add',
        path: '/add',
        component: AddBook
    },
    {
        name: 'edit',
        path: '/:id/edit',
        component: EditBook
    }]
    }
    
];