import axios from 'axios';

const instance = axios.create({
    baseURL: 'https://react-mano-burgeris.firebaseio.com/'
});

export default instance;