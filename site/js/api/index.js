const fetchMessages = new Promise((resolve) => {
  setTimeout(() => {
    resolve([
      {
        id: 'message-a7fe282a-bcb3-47a6-b746-e5f41fc2ea66',
        author: 'Robert',
        content: 'This is an awesome architecture',
        time: '2017-10-21T09:46:19+00:00',
        points: 5,
        reactions: [],
      },
      {
        id: 'message-192a2e4d-1203-49b9-bd39-09710e6075e5',
        author: 'Anna',
        content: 'Yeah i agree',
        time: '2017-10-21T09:46:25+00:00',
        points: 0,
        reactions: [],
      },
    ]);
  }, 500);
});

const fetchPledges = new Promise((resolve) => {
  setTimeout(() => {
    resolve([
      {
        id: 'product-18b9a98e-812d-4627-95e0-994245a137ee',
        type: 'shoe',
        brand: 'adidas Originals',
        model: 'PW TENNIS HU - Sneaker low',
      },
      {
        id: 'product-4eaf41ba-0632-4d51-9a11-7921ea819e0f',
        type: 'shoe',
        brand: 'Vans',
        model: 'OLD SKOOL - skate shoe',
      },
      {
        id: 'product-cc2bfba2-207e-49ba-b942-3c79c24d6665',
        type: 'shoe',
        brand: 'adidas Originals',
        model: 'TUBULAR SHADOW - Sneaker low',
      },
      {
        id: 'product-5ccca7c3-2bef-4c9e-bb4a-cffc2534b217',
        type: 'shoe',
        brand: 'Nike SB',
        model: 'STEFAN JANOSKI MAX - Sneaker low',
      },
    ]);
  }, 750);
});

const wordpressService = {
  cacheRequest (path, cacheTime) {
    return new Promise((resolve, reject) => {
      appCache.get(path, cacheTime)
        .then(response => { resolve(response) })
        .catch(err => { reject(err) })
    })
  },
  getMenuByName (menuName) {
    let self = this
    return new Promise((resolve, reject) => {
      this.cacheRequest(Config.wpDomain + `wp-json/wp-api-menus/v2/menus/?name=${menuName}`, 0)
        .then(response => { resolve(self.getMenu(response.data[0].term_id)) })
        .catch(error => { reject(error) })
    })
  },
  getMenu (id) {
    return new Promise((resolve, reject) => {
      this.cacheRequest(Config.wpDomain + `wp-json/wp-api-menus/v2/menus/${id}`, 0)
        .then(response => { resolve(response.data) })
        .catch(error => reject(error))
    })
  },
  getCategory (id, slug, parentId) {
    return new Promise((resolve, reject) => {
      let path = Config.wpDomain + `wp-json/wp/v2/categories/${id}`
      if (!id && slug) {
        path = Config.wpDomain + `wp-json/wp/v2/categories/?slug=${slug}&fields=id,name,slug,parent,link`
      } else if (!id && !slug && parentId) {
        path = Config.wpDomain + `wp-json/wp/v2/categories/?parent=${parentId}&fields=id,name,slug,parent,link`
      }
      this.cacheRequest(path, 0)
        .then(response => resolve(response.data))
        .catch(error => reject(error))
    })
  },
  getPosts (categoryId, page, perPage, order = 'desc') {
    return new Promise((resolve, reject) => {
      let path = Config.wpDomain + `wp-json/wp/v2/posts?categories=${categoryId}&page=${page}&order=${order}&per_page=${perPage}&fields=id,title,slug,date,better_featured_image,excerpt`
      this.cacheRequest(path, 0)
        .then(response => {
          var totalPages = (response.headers.hasOwnProperty('X-WP-TotalPages')) ? response.headers['X-WP-TotalPages'][0] : 0
          if (totalPages === 0) {
            totalPages = (response.headers.hasOwnProperty('x-wp-totalpages')) ? response.headers['x-wp-totalpages'][0] : 0
          }
          var responseData = {posts: response.data, totalPages: totalPages}
          resolve(responseData)
        })
        .catch(error => reject(error))
    })
  },
  getPost (postId, postSlug) {
    return new Promise((resolve, reject) => {
      let path = Config.wpDomain + `wp-json/wp/v2/posts/${postId}?fields=id,title,slug,tags,date,better_featured_image,content,rest_api_enabler,pure_taxonomies`
      if (!postId && postSlug) {
        path = Config.wpDomain + `wp-json/wp/v2/posts/?slug=${postSlug}&fields=id,title,slug,tags,date,better_featured_image,content,rest_api_enabler,pure_taxonomies`
      }
      this.cacheRequest(path, 0)
        .then(response => resolve(response.data))
        .catch(error => reject(error))
    })
  },
  getPage (pageId, pageSlug) {
    return new Promise((resolve, reject) => {
      let path = Config.wpDomain + `wp-json/wp/v2/pages/${pageId}`
      if (!pageId && pageSlug) {
        path = Config.wpDomain + `wp-json/wp/v2/pages/?slug=${pageSlug}`
      }
      this.cacheRequest(path, 0)
        .then(response => resolve(response.data[0]))
        .catch(error => reject(error))
    })
  },
  getCategoryChildren (id) {
    return new Promise((resolve, reject) => {
      this.cacheRequest(Config.wpDomain + `wp-json/wp/v2/categories?parent=${id}`, 0)
        .then(response => resolve(response.data))
        .catch(error => reject(error))
    })
  }
}
export { fetchMessages, fetchPledges, wordpressService };
