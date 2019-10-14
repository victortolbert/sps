let app_locale = document.head.querySelector('meta[name="app_locale"]').content
if (!app_locale) app_locale = 'en'

import actions from './actions';
import getters from './getters';
import mutations from './mutations';

const state = {
  lang: app_locale,
};

export default {
  namespaced: true,
  state,
  actions,
  getters,
  mutations,
};
