/*
  Vue
*/

import {createApp} from 'vue';

import Tab from './vue/components/Tab.vue'

let app = createApp({
  data() {
    return {
      cardOne: "start",
      count:0
    };
   },
});
app.component('Tab',Tab)

app.mount('#vue-app')

/*
    React
*/
// import { createRoot } from 'react-dom/client'

// import App from './react/components/App'

// try {
//     createRoot(document.getElementById('app')).render(<App/>)
// } catch (error) {
    
// }



