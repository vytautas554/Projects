import axios from 'axios'

const instance = axios.create({
    baseURL: 'https://react-my-burger-93cb3-default-rtdb.firebaseio.com/'
});

export default instance;