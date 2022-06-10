<template>
  <div class="container">
    <div v-if="arrayPost.length > 0">
      <PostCard :posts="arrayPost" />
    </div>
    <div v-else>Caricamento in corso</div>
  </div>
</template>

<script>
import PostCard from "../components/PostCard.vue";
export default {
  name: "PostsComponent",
  components: {
    PostCard,
  },
  data() {
    return {
      arrayPost: [],
    };
  },
  mounted() {
    window.axios
      .get("/api/posts")
      .then((results) => {
        this.arrayPost = results.data;
      })
      .catch((e) => {
        console.log(e);
      });
  },
};
</script>

<style>
</style>