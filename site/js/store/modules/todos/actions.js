const addTodo = ({ commit }, text) => {
  commit('ADD_TODO', {
    text,
    done: false
  })
}

const removeTodo = ({ commit }, todo) => {
  commit('REMOVE_TODO', todo)
}

const toggleTodo = ({ commit }, todo) => {
  commit('EDIT_TODO', { todo, done: !todo.done })
}

const editTodo = ({ commit }, { todo, value }) => {
  commit('EDIT_TODO', { todo, text: value })
}

const toggleAll = ({ state, commit }, done) => {
  state.todos.forEach((todo) => {
    commit('EDIT_TODO', { todo, done })
  })
}

const clearCompleted =  ({ state, commit }) => {
  state.todos.filter(todo => todo.done)
    .forEach(todo => {
      commit('REMOVE_TODO', todo)
    })
}

export default {
  addTodo,
  removeTodo,
  toggleTodo,
  editTodo,
  toggleAll,
  clearCompleted
}
