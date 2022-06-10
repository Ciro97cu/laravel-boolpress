<template>
  <div class="row justify-content-center">
    <!-- <div class="col-4 bg-success" v-for="post in posts" :key="post.id">
      {{ post.title }}
    </div> -->
    <div
      class="card m-3"
      style="width: 18rem"
      v-for="post in posts"
      :key="post.id"
    >
      <img
        :src="'storage/' + post.cover"
        class="card-img-top"
        :alt="post.title"
      />
      <div class="card-body">
        <h5 class="card-title">{{ post.title }}</h5>
        <p class="card-text">
          {{ post.content }}
        </p>
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

<style>
</style>