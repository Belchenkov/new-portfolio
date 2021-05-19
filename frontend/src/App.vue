<template>
  <div>
    <Menu />
    <Header />
    <main>
      <Banner />
    </main>
  </div>
</template>

<script>
import Header from './views/Header.vue';
import Banner from './views/Banner.vue';
import Menu from './components/Menu.vue';

export default {
  name: 'App',
  components: {
    Header,
    Menu,
    Banner,
  },
};
</script>

<style lang="scss">
@import "~font-awesome/css/font-awesome.min.css";
@import "~bootstrap/dist/css/bootstrap.min.css";

@import "scss/main";
@import "scss/sections/header";
@import "scss/sections/banner";

</style>
