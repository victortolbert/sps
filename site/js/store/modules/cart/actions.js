import { buyProducts } from '@/api/shop';

const checkout = ({ commit, state }, products) => {
  const savedCartItems = [...state.items]
  commit('SET_CHECKOUT_STATUS', null)
  // empty cart
  commit('SET_CART_ITEMS', { items: [] })
  buyProducts(
    products,
    () => commit('SET_CHECKOUT_STATUS', 'successful'),
    () => {
      commit('SET_CHECKOUT_STATUS', 'failed')
      // rollback to the cart saved before sending the request
      commit('SET_CART_ITEMS', { items: savedCartItems })
    }
  )
}

const addProductToCart = ({ state, commit }, product) => {
  commit('SET_CHECKOUT_STATUS', null)
  if (product.inventory > 0) {
    const cartItem = state.items.find(item => item.id === product.id)
    if (!cartItem) {
      commit('PUSH_PRODUCT_TO_CART', { id: product.id })
    } else {
      commit('INCREMENT_ITEM_QUANTITY', cartItem)
    }
    // remove 1 item from stock
    commit('products/DECREMENT_PRODUCT_INVENTORY', { id: product.id }, { root: true })
  }
}

export default {
  checkout,
  addProductToCart
};
