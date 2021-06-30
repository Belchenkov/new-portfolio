<template>
  <div>
      <loading
        v-model:active="isLoading"
       :is-full-page="fullPage"
        color="#34a"
        background-color="#1A2026"
        opacity="0.7"
        blur="8px"
        width="120"
        height="120"
      />
    <Menu />
    <Header />
    <main>
      <Banner />
      <Works />
      <Contacts />
      <Footer />
    </main>
  </div>
</template>

<script>
import Loading from 'vue-loading-overlay';
import 'vue-loading-overlay/dist/vue-loading.css';

import Header from './views/Header.vue';
import Banner from './views/Banner.vue';
import Works from './views/Works.vue';
import Contacts from './views/Contacts.vue';
import Footer from './views/Footer.vue';
import Menu from './components/Menu.vue';

export default {
  name: 'App',
  components: {
    Contacts,
    Header,
    Menu,
    Banner,
    Works,
    Footer,
    Loading,
  },
  data() {
    return {
      isLoading: false,
      fullPage: true,
    };
  },
  created() {
    this.loaderActivate();
  },
  methods: {
    loaderActivate() {
      this.isLoading = true;

      setTimeout(() => {
        this.isLoading = false;
      }, 4000);
    },
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
@import "scss/sections/footer";

</style>
