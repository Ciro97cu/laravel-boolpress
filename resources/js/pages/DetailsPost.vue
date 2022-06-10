<template>
  <div class="row justify-content-center">
    <div v-if="detail">
      {{ detail.title }}
    </div>
    <div v-else>Caricamento in corso</div>
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

<style>
</style>