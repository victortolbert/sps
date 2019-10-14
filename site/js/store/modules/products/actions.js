import { getProducts } from '@/api/shop';

const getAllProducts = ({ commit }) => {
    getProducts(products => {
      commit('SET_PRODUCTS', products)
    })
  }

export default {
  getAllProducts
}
