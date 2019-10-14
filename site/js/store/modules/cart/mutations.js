const PUSH_PRODUCT_TO_CART = (state, { id }) => {
  state.items.push({
    id,
    quantity: 1
  })
}

const INCREMENT_ITEM_QUANTITY = (state, { id }) => {
  const cartItem = state.items.find(item => item.id === id)
  cartItem.quantity++
}

const SET_CART_ITEMS = (state, { items }) => {
  state.items = items
}

const SET_CHECKOUT_STATUS = (state, status) => {
  state.checkoutStatus = status
}


export default {
  PUSH_PRODUCT_TO_CART,
  INCREMENT_ITEM_QUANTITY,
  SET_CART_ITEMS,
  SET_CHECKOUT_STATUS
};
