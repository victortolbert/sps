const SET_PRODUCTS = (state, products) => {
  state.all = products
}

const DECREMENT_PRODUCT_INVENTORY = (state, { id }) => {
  const product = state.all.find(product => product.id === id)
  product.inventory--
}

export default {
  SET_PRODUCTS,
  DECREMENT_PRODUCT_INVENTORY
}
