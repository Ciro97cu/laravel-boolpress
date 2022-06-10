<template>
  <div class="container py-4">
    <div class="row">
      <div v-if="detail" class="col-12">
        <h1>Visualizzazione post {{ detail.id }}</h1>
        <h3>Immagine</h3>
        <div class="wrapper_img">
          <img
            class="w-100"
            :src="'/storage/' + detail.cover"
            :alt="detail.title"
          />
        </div>
        <h3>Titolo</h3>
        <p>{{ detail.title }}</p>
        <h3>Slug</h3>
        <p>{{ detail.slug }}</p>
        <h3>Contenuto</h3>
        <p>{{ detail.content }}</p>
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
    const id = this.$route.params.id;
    window.axios
      .get("/api/posts/" + id)
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