const toggleAll = ({ commit }, payload) => {
  commit('TOGGLE_ALL', payload)
}

const removeMessage = ({ commit, state }, message) => {
  commit('REMOVE_MESSAGE', message.id)
}

const removeMessages = ({ commit }) => {
  commit('REMOVE_MESSAGES')
}

export default {
  toggleAll,
  removeMessage,
  removeMessages
};
