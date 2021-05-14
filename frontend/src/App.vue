<template>
  <div>
    <Header />
  </div>
</template>

<script>
import Header from './views/Header.vue';

export default {
  name: 'App',
  components: {
    Header,
  },
};
</script>

<style lang="scss">
@import "~font-awesome/css/font-awesome.min.css";
@import "~bootstrap/dist/css/bootstrap.min.css";

@import "scss/main";
@import "scss/sections/header";

</style>
