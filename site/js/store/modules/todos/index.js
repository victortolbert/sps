import { mutations, STORAGE_KEY } from './mutations'
import actions from './actions'
import plugins from './plugins'

const state = {
  todos: JSON.parse(window.localStorage.getItem(STORAGE_KEY) || '[]')
}

export default {
  namespaced: true,
  state,
  actions,
  mutations,
  plugins
}
