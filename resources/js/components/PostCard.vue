<template>
  <div class="row justify-content-center">
    <div
      class="card m-3"
      style="width: 18rem"
      v-for="post in posts"
      :key="post.id"
    >
      <div class="wrapper_img">
        <img :src="'storage/' + post.cover" class="h-100" :alt="post.title" />
      </div>
      <div class="card-body">
        <h5 class="card-title">{{ post.title }}</h5>
        <p class="card-text">
          {{ post.content }}
        </p>
        <router-link
          :to="{ name: 'details', params: { id: post.id } }"
          class="btn btn-primary"
          >Dettaglio</router-link
        >
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "PostCard",
  props: {
    posts: Array,
  },
  mounted() {
    console.log(this.posts);
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