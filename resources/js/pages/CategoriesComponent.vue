<template>
  <div class="container py-4">
    <div
      class="d-flex flex-column align-items-center"
      v-if="arrayCategories.length > 0"
    >
      <router-link
        class="btn btn-primary my-2"
        v-for="category in arrayCategories"
        :key="category.id"
        :to="{ name: 'postCategory', params: { id: category.id } }"
      >
        {{ category.name }}
      </router-link>
    </div>
    <div v-else>Caricamento in corso</div>
  </div>
</template>

<script>
export default {
  name: "CategoriesComponent",
  data() {
    return {
      arrayCategories: [],
    };
  },
  methods: {
    loadPage(url) {
      window.axios
        .get(url)
        .then((results) => {
          this.arrayCategories = results.data;
          console.log(this.arrayCategories);
        })
        .catch((e) => {
          console.log(e);
        });
    },
  },
  mounted() {
    this.loadPage("/api/categories");
  },
};
</script>

<style>
</style>