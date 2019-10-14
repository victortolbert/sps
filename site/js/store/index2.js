const store = new Vuex.Store({
  state: {
    user: {
      id: 1,
      name: null
    },
    users: []
  },
  getters: {
    item(state) {
      return id => state.list.find(el => el.id === id);
    },
    name(state, getters) {
      return id => getters.item(id).name;
    },
    hitsTotal: (state) => (key) => {
      if (state.organizationData[key]) {
        return state.organizationData[key].hits.total;
      } else {
        return 0;
      }
    },
    hitsMonthly: (state) => (organizationName) => {
      if (state.organizationData[organizationName]) {
        return state.organizationData[organizationName].hits.monthly;
      } else {
        return [];
      }
    },
    getUserId: state => state.user.id,
    getUserName: state => state.user.name,
    getUsersNames: state => {
      return state.users.map(user => user.name)
    },
    getColorAs: state => (format) => {
      switch(format) {
        case 'rgb': {
          return `rgb(${state.color.value.clamped})`;
        }
        case 'rgb_array': {
          return state.color.value.clamped;
        }
        case 'xyz': {
          return color.RGBtoXYZ(state.color.value.original);
        }
        case 'hsl': {
          return color.RGBtoHSL(state.color.value.clamped);
        }
        case 'hex': {
          return color.RGBtoHEX(state.color.value.clamped);
        }
        case 'alpha': {
          return `rgba(${state.color.value.clamped}, ${state.color.value.alpha})`
        }
      }
    },
  },
  mutations: {
    setUserName (state, name) {
      // 1st solution:
      // it won't trigger getters at all, more details:
      // https://vuejs.org/v2/guide/reactivity.html#Change-Detection-Caveats
      state.user.name = name

      // 2nd solution:
      // same as "state.user = Object.assign({}, state.user, { name })"
      // it will trigger both getters every time when you call this mutation
      state.user = { ...state.user, name }

      // 3rd solution:
      // it will trigger both getters when you call this mutation for the first time,
      // but if you call it the next time only getUserName() will be triggered
      // Vue.set() will check if property already exists before re-assigning the entire object
      Vue.set(state.user, 'name', name)
    },
    updateUserAvatar (state, index, avatar) {
      // 1st solution:
      // it will properly update an array item, but also it will trigger getUsersNames()
      Vue.set(state.users[index], 'avatar', avatar)

      // 2nd solution:
      // it's going to work only if we modify addUser() function and include avatar property there:
      // "state.users.push({name, avatar: null})"
      // the benefit of this approach is that getUsersNames() won't be triggered
      state.users[index].avatar = avatar
    }
  }
})
