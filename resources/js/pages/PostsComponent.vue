<template>
  <div class="container">
    <div v-if="arrayPost.length > 0">
      <PostCard :posts="arrayPost" />
      <div class="row justify-content-center">
        <button
          class="btn btn-primary"
          @click="goPreviousPage()"
          :disabled="!previousPage"
        >
          Prev
        </button>
        <span class="p-2 mx-2 text-white rounded bg-primary"
          >{{ currentPage }} - {{ lastPage }}</span
        >
        <button
          class="btn btn-primary"
          @click="goNextPage()"
          :disabled="!nextPage"
        >
          Next
        </button>
      </div>
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
      currentPage: 1,
      lastPage: 1,
      previousPage: "",
      nextPage: "",
    };
  },
  methods: {
    loadPage(url) {
      window.axios
        .get(url)
        .then((results) => {
          this.arrayPost = results.data.data;
          this.currentPage = results.data.current_page;
          this.lastPage = results.data.last_page;
          this.previousPage = results.data.prev_page_url;
          this.nextPage = results.data.next_page_url;
        })
        .catch((e) => {
          console.log(e);
        });
    },
    goPreviousPage() {
      this.loadPage(this.previousPage);
    },
    goNextPage() {
      this.loadPage(this.nextPage);
    },
  },
  mounted() {
    this.loadPage("/api/posts");
  },
};
</script>

<style>
</style>