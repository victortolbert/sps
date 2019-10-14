const STORAGE_KEY = 'todos-vuejs'

// for testing
if (navigator.userAgent.indexOf('PhantomJS') > -1) {
  window.localStorage.clear()
}

export const mutations = {
  ADD_TODO (state, todo) {
    state.todos.push(todo)
  },

  REMOVE_TODO (state, todo) {
    state.todos.splice(state.todos.indexOf(todo), 1)
  },

  EDIT_TODO (state, { todo, text = todo.text, done = todo.done }) {
    todo.text = text
    todo.done = done
  }
}

export { mutations, STORAGE_KEY }
