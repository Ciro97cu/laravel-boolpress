<template>
  <div class="container">
    <div class="row mt-5">
      <div class="col-12 text-center">
        <h1>404 - NOT FOUND</h1>
      </div>
      <div class="col-12 text-center">
        <router-link :to="{ name: 'home' }">Ritorna alla Home</router-link>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "NotFound",
};
</script>

<style>
</style>