<template>
  <div class="container py-4">
    <div class="row justify-content-center">
      <div v-if="detail" class="col-6">
        <h1 class="text-center pb-3">Visualizzazione post {{ detail.id }}</h1>
        <h1 class="text-center">{{ detail.title }}</h1>
        <div class="wrapper_img">
          <img
            class="w-100"
            :src="'/storage/' + detail.cover"
            :alt="detail.title"
          />
        </div>
        <h3>Contenuto</h3>
        <p>{{ detail.content }}</p>
        <h3>Categorie</h3>
        <p>{{ detail.category.name }}</p>
        <h3>Tags</h3>
        <span class="mr-2" v-for="tag in detail.tag" :key="tag.id">{{
          tag.name
        }}</span>
      </div>
      <div v-else>Caricamento in corso</div>
    </div>
  </div>
</template>

<script>
export default {
  name: "DetailsPost",
  data() {
    return {
      detail: undefined,
    };
  },
  mounted() {
    const slug = this.$route.params.slug;
    window.axios
      .get("/api/posts/" + slug)
      .then((results) => {
        this.detail = results.data;
      })
      .catch((e) => {
        console.log(e);
      });
  },
};
</script>

<style lang="scss" scoped>
.wrapper_img {
  width: 500px;
}
</style>