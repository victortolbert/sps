const tags = state =>
  state.messages
    .map(message => message.tags)
    .reduce((acc, val) => acc.concat(val), [])
    .reduce((obj, tag) => {
      if (!obj[tag]) {
        obj[tag] = 0
      }
      obj[tag]++
      return obj
    }, {})

const getMessagesByTag = state => (tag) => {
  return state.messages.filter(message => message.tags.includes(tag))
}

const getMessageById = state => (id) => {
  return state.messages.find(message => message.id === id)
}

const selectedMessages = (state) => {
  return state.messages.filter(message => message.isSelected)
}

const allSelected = (state) => {
    return state.messages.length && state.messages.every(message => message.isSelected)
}

export default {
  tags,
  getMessageById,
  getMessagesByTag,
  selectedMessages,
  allSelected,
};
