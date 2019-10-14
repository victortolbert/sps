import Vue from 'vue';
import Vuex from 'vuex';
import cartModule from './modules/cart';
import chatModule from './modules/chat';
import langModule from './modules/lang';
import pledgesModule from './modules/pledges';
import productsModule from './modules/products';

Vue.use(Vuex);

export default new Vuex.Store({
  strict: process.env.NODE_ENV === 'development',
  modules: {
    cart: cartModule,
    chat: chatModule,
    lang: langModule,
    pledges: pledgesModule,
    products: productsModule,
  },
});
