const INIT = (state, messages) =>
  (state.messages = messages.map((message) => {
    return {
      ...message,
      isSelected: false,
    }
  }))
const TOGGLE_ALL = (state, messages) =>
  (state.messages = messages.map((message) => {
    return {
      ...message,
      isSelected: !state.messages.every(message => message.isSelected),
    }
  }))

const REMOVE_MESSAGE = (state, messageId) => {
  state.messages = state.messages.filter(message => message.id !== messageId)
}

const REMOVE_MESSAGES = (state) => {
  state.messages = []
}

export default {
  INIT,
  TOGGLE_ALL,
  REMOVE_MESSAGE,
  REMOVE_MESSAGES
};
