import { APP_CONFIG } from "@modules/base/resources/assets/js/config";

export default {
    /**
        POST /api/auth/logout
        Logout
     */
    logout: function() {
        const instance = axios.create({
            baseURL: APP_CONFIG.API_URL,
            timeout: APP_CONFIG.API_TIMEOUT,
            headers: {
                'Accept':'application/json',
                'Authorization': 'Bearer ' + window.localStorage.getItem('access_token')
            }
        });

        return instance.get('/auth/logout');
    }
}