<template>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">Navbar</a>
    <button
      class="navbar-toggler"
      type="button"
      data-toggle="collapse"
      data-target="#navbarNavAltMarkup"
      aria-controls="navbarNavAltMarkup"
      aria-expanded="false"
      aria-label="Toggle navigation"
    >
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <router-link class="nav-link" :to="{ name: 'home' }">Home</router-link>
        <router-link class="nav-link" :to="{ name: 'posts' }"
          >Posts</router-link
        >
        <router-link class="nav-link" :to="{ name: 'categories' }"
          >Categories</router-link
        >

        <a class="nav-link disabled">Pricing</a>
      </div>
    </div>
  </nav>
</template>

<script>
export default {
  name: "HeaderComponent",
};
</script>

<style>
</style>