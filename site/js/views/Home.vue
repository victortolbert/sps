<template>
  <div>
    <h1>Home</h1>
    <ChatList :messages="messages" />
    <PledgeList :pledges="pledges" />
    <h1>Shopping Cart Example</h1>
    <hr>
    <h2>Products</h2>
    <ProductList />
    <hr>
    <ShoppingCart />

    <section class="todoapp">
      <!-- header -->
      <header class="header">
        <h1>todos</h1>
        <input
          class="new-todo"
          autofocus
          autocomplete="off"
          placeholder="What needs to be done?"
          @keyup.enter="addTodo"
        >
      </header>

      <!-- main section -->
      <section
        class="main"
        v-show="todos.length"
      >
        <input
          class="toggle-all"
          id="toggle-all"
          type="checkbox"
          :checked="allChecked"
          @change="toggleAll(!allChecked)"
        >
        <label for="toggle-all"></label>
        <ul class="todo-list">
          <TodoItem
            v-for="(todo, index) in filteredTodos"
            :key="index"
            :todo="todo"
          />
        </ul>
      </section>
      <!-- footer -->
      <footer
        class="footer"
        v-show="todos.length"
      >
        <span class="todo-count">
          <strong>{{ remaining }}</strong>
          {{ remaining | pluralize('item') }} left
        </span>
        <ul class="filters">
          <li v-for="(val, key) in filters">
            <a
              :href="'#/' + key"
              :class="{ selected: visibility === key }"
              @click="visibility = key"
            >{{ key | capitalize }}</a>
          </li>
        </ul>
        <button
          class="clear-completed"
          v-show="todos.length > remaining"
          @click="clearCompleted"
        >
          Clear completed
        </button>
      </footer>
    </section>
  </div>
</template>

<script>
import { mapGetters, mapActions } from 'vuex';
import ChatList from '@/components/ChatList';
import PledgeList from '@/components/PledgeList';
import ProductList from '@/components/ProductList'
import ShoppingCart from '@/components/ShoppingCart'
import TodoItem from '@/components/TodoItem'

const filters = {
  all: todos => todos,
  active: todos => todos.filter(todo => !todo.done),
  completed: todos => todos.filter(todo => todo.done)
}

export default {
  name: 'HomeView',
  components: {
    ChatList,
    PledgeList,
    ProductList,
    ShoppingCart,
    TodoItem
  },
  computed: {
    ...mapGetters({
      messages: 'chat/messages',
      pledges: 'pledges/pledges',
    }),
  },
  data() {
    return {
      visibility: 'all',
      filters: filters
    }
  },
  computed: {
    todos() {
      return this.$store.state.todos
    },
    allChecked() {
      return this.todos.every(todo => todo.done)
    },
    filteredTodos() {
      return filters[this.visibility](this.todos)
    },
    remaining() {
      return this.todos.filter(todo => !todo.done).length
    }
  },
  methods: {
    ...mapActions([
      'toggleAll',
      'clearCompleted'
    ]),
    addTodo(e) {
      const text = e.target.value
      if (text.trim()) {
        this.$store.dispatch('addTodo', text)
      }
      e.target.value = ''
    }
  },
  filters: {
    pluralize: (n, w) => n === 1 ? w : (w + 's'),
    capitalize: s => s.charAt(0).toUpperCase() + s.slice(1)
  },
  mounted() {
    this.$store.dispatch('chat/getMessages');
    this.$store.dispatch('pledges/getPledges');
  },
};
</script>
