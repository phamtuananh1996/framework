export default {
  create (state, category) {
    state.category.push(category)
  },

  fetch (state, categories) {
    state.category = categories
  },

  destroy (state, index) {
    state.category.splice(index, 1)
  },

  selectItem (state, category) {
    state.select = category
  },

  editCategory (state, category) {
    state.category.forEach(element => {
      if (element.id === category.id) {
        element.name = category.name
      }
    })
  }
}
