<template>
  <header class="header-left" id="navbar-collapse-toggle">
    <div class="top">
      <a href="/">AB</a>
    </div>
    <ul class="nav nav-menu">
      <li>
        <a href="#home" class="nav-link active" data-toggle="tooltip" title="HOME">
          <i class="fa fa-user-o"></i>
        </a>
      </li>
      <li>
        <a href="#works" class="nav-link" data-toggle="tooltip" title="WORKS">
          <i class="fa fa-wpexplorer"></i>
        </a>
      </li>
      <li>
        <a href="#contacts" class="nav-link" data-toggle="tooltip" title="CONTACT">
          <i class="fa fa-volume-control-phone"></i>
        </a>
      </li>
    </ul>
  </header>
</template>

<script>
export default {
  name: 'Header',
  data() {
    return {
    };
  },
};
</script>

<style lang="scss">

</style>
