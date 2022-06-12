<template>
  <div class="container py-4">
    <div class="row justify-content-center" v-if="arrayPostCategory.length > 0">
      <div
        class="card m-3"
        style="width: 18rem"
        v-for="post in arrayPostCategory"
        :key="post.id"
      >
        <div class="wrapper_img">
          <img
            :src="'/storage/' + post.cover"
            class="h-100"
            :alt="post.title"
          />
        </div>
        <div class="card-body">
          <h5 class="card-title">{{ post.title }}</h5>
          <p class="card-text">
            {{ post.content }}
          </p>
          <router-link
            :to="{ name: 'details', params: { slug: post.slug } }"
            class="btn btn-primary"
            >Dettaglio</router-link
          >
        </div>
      </div>
    </div>
    <div v-else>Caricamento in corso</div>
  </div>
</template>

<script>
export default {
  name: "PostCategory",
  data() {
    return {
      arrayPostCategory: [],
    };
  },
  methods: {
    loadPage(url) {
      window.axios
        .get(url)
        .then((results) => {
          this.arrayPostCategory = results.data.post;
          console.log(this.arrayPostCategory);
        })
        .catch((e) => {
          console.log(e);
        });
    },
  },
  mounted() {
    const id = this.$route.params.id;
    this.loadPage("/api/categories/" + id);
  },
};
</script>

<style lang="scss" scoped>
.wrapper_img {
  max-height: 160px;

  img {
    object-fit: cover;
    object-position: top;
    width: 100%;
  }
}
</style>