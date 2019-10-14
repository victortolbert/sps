import actions from './actions';
import getters from './getters';
import mutations from './mutations';

// initial state
// shape: [{ id, quantity }]
const state = {
  items: [],
  checkoutStatus: null
};

export default {
  namespaced: true,
  state,
  getters,
  actions,
  mutations
}
