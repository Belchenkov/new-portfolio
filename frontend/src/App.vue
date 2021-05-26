<template>
  <div>
    <Menu />
    <Header />
    <main>
      <Banner />
      <Works />
      <Contacts />
    </main>
  </div>
</template>

<script>
import Header from './views/Header.vue';
import Banner from './views/Banner.vue';
import Works from './views/Works.vue';
import Contacts from './views/Contacts.vue';
import Menu from './components/Menu.vue';

export default {
  name: 'App',
  components: {
    Contacts,
    Header,
    Menu,
    Banner,
    Works,
  },
};
</script>

<style lang="scss">
@import "~font-awesome/css/font-awesome.min.css";
@import "~bootstrap/dist/css/bootstrap.min.css";

@import "scss/main";
@import "scss/sections/header";
@import "scss/sections/banner";
@import "scss/sections/works";
@import "scss/sections/contacts";

</style>
