<template>
  <div class="container pt-5">
    <div class="row justify-content-center">
      <div v-if="success" class="col-6 alert alert-success">
        Messaggio inviato correttamente.
      </div>
    </div>
    <div class="row justify-content-center">
      <div class="col-6">
        <form method="post" @submit.prevent="sendForm()">
          <div class="form-group">
            <label for="name">Name</label>
            <input
              v-model="name"
              type="text"
              class="form-control"
              name="name"
            />
          </div>
          <div class="form-group">
            <label for="email">Email address</label>
            <input
              v-model="email"
              type="email"
              class="form-control"
              name="email"
              id="exampleInputEmail1"
              aria-describedby="emailHelp"
            />
            <small id="emailHelp" class="form-text text-muted"
              >We'll never share your email with anyone else.</small
            >
          </div>
          <div class="form-group">
            <label for="content">Content</label>
            <textarea
              v-model="content"
              name="content"
              class="form-control"
              cols="30"
              rows="10"
            ></textarea>
          </div>
          <button type="submit" class="btn btn-success" :disabled="sending">
            Submit
          </button>
        </form>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "ContactsComponent",
  data() {
    return {
      name: "",
      email: "",
      content: "",
      sending: false,
      success: false,
    };
  },
  methods: {
    sendForm: function () {
      this.sending = true;
      this.success = false;
      window.axios
        .post("/api/contacts", {
          name: this.name,
          email: this.email,
          content: this.content,
        })
        .then((response) => {
          console.log(response);
          this.sending = false;
          this.success = true;
          this.content = "";
        })
        .catch((error) => {
          console.log(error);
        });
    },
  },
};
</script>

<style>
</style>